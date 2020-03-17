#Description: obtains the Last Modification Date (last commit) of a library based on its Github repository.
#
#Requirements: 
# - You will need to install PyGithub
# - You will need to input your Github credentials to make use of the Github API
#Input:
# - A file with the library repository names (repositories.txt)
#Output:
# - A line will be printed to stdout for each of the libraries in repositories.txt with the following format:
#[library] - Last Modification Date: [date]
#How to run: 
# - Just run the script with repositories.txt in the same directory.

from github import Github, Repository, Commit
import getpass
import mysql.connector


mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="1234",
  database="selab"
)

mycursor = mydb.cursor()

sql = "INSERT INTO lmd (repo, mod_date) VALUES (%s, %s)"
val =[]

def getLastCommitDate(repository_name, github_object):
    r = github_object.get_repo(repository_name)
    #The first element will contain the last commit
    c = r.get_commits()[0]
    return c.commit.author.date

def main():
    with open("javascripts.txt") as f:
        repositories = f.readlines()
        repositories = [x.strip() for x in repositories]

    username = "vorabrijesh"
    password = "selab@2020"
    g = Github(username, password)

    for repo in repositories:
        date = getLastCommitDate(repo, g)
        repo1 = g.get_repo(repo)
        #print(repo.stargazers_count)
        val.append((repo,date))
        print("%s - Last Modification Date: %s" % (repo, date))
    
    mycursor.executemany(sql, val)
    mydb.commit()
    print(mycursor.rowcount, "was inserted.")


if __name__ == "__main__":
  main()
