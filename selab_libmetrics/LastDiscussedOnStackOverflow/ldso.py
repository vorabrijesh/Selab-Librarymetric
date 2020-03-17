#Description: 
# - Extracts the date of the last question posted on Stack Overflow with the given tag of a library.
#Requirements: 
# - You will need to change the value of user_api_key to your Stack Exchange API token
# - You will need to install PyStackExchange.
#Input:
# File librarytags.txt with the Stackoverflow tags of the libraries.
#Output:
# The following line will be printed to stdout for each of the libraries in librarytags.txt:
#[library] - Last Discussed On Stack Overflow: [date]
#OR if no questions were found for a library, the following line will be printed
#[library] - No questions found for this tag
#How to run: 
# - Just run the script.

user_api_key = "pB6CKydaZJ9*6WyiiFjPHg(("

import stackexchange
so = stackexchange.Site(stackexchange.StackOverflow, app_key=user_api_key, impose_throttling=True)
so.be_inclusive()

import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="1234",
  database="selab"
)

mycursor = mydb.cursor()
sql = "INSERT INTO ldso (repo, creation_date) VALUES (%s, %s)"
val =[]

def main():
  with open("../CountStars/javascripts.txt") as f:
    tags = f.readlines()
  tags = [x.strip() for x in tags]

  for tag in tags:
    tag1 = tag.split("/")
    tag1= tag1[1]
    questions = so.questions(sort='creation', order='DESC', tagged=[tag1,'javascript'])

    if len(questions) > 0:
        q = questions[0]
        val.append((tag,q.creation_date))
        print("%s - Last Discussed On Stack Overflow: %s" % (tag, q.creation_date))
    else:
        val.append((tag,None))
        print('%s - No questions found for this tag' % tag)

  mycursor.executemany(sql, val)
  mydb.commit()
  print(mycursor.rowcount, "was inserted.")
if __name__ == "__main__":
  main()
