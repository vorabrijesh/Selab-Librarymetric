# Description:
# - Obtains the Release Frequency (in days) of a library based on its Github repository.
#
#Requirements: 
# - You will need to install PyGithub
# - You will need to input your Github credentials to make use of the Github API
#Input:
# - A file with the library repository names (repositories.txt)
#Output:
# - A line will be printed to stdout for each of the libraries in repositories.txt with the following format:
#[library] - Release Frequency: [release frequency in average number of days]
#How to run: 
# - Just run the script with repositories.txt in the same directory.

from github import Github, Repository, GitTag
import getpass
import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="1234",
  database="selab"
)

mycursor = mydb.cursor()

sql = "INSERT INTO relfreq (repo, releasefreq) VALUES (%s, %s)"
val =[]

def getReleaseFrequency(repository_name, github_object):
  r = github_object.get_repo(repository_name)
  dates = []

  #Obtain the date of the git tag
  for tag in r.get_tags():
    dates.append(tag.commit.commit.author.date)
  
  dates.sort()
  number_of_differences = len(dates)-1
  total_seconds = 0
  for i in range(1, len(dates)):
    total_seconds += int((dates[i] - dates[i-1]).total_seconds())

  #divide the average by the number of seconds per day
  return float(total_seconds/number_of_differences/86400)

def main():
  
  with open("javascripts.txt") as f:
    repositories = f.readlines()
  repositories = [x.strip() for x in repositories]
#  with open("result.txt") as f:
#    repositories = f.readlines()
#  repositories = [x.strip() for x in repositories]
  username = input("Enter Github username: ")
  password = getpass.getpass("Enter your password: ")
  g = Github(username, password)

  for repo in repositories:
    rel_freq = getReleaseFrequency(repo, g)
    print("%s - Release Frequency: %.2f" % (repo, rel_freq))   
    val.append((repo,rel_freq))
  mycursor.executemany(sql, val)
  mydb.commit()
  print(mycursor.rowcount, "was inserted.")
if __name__ == "__main__":
  main()
