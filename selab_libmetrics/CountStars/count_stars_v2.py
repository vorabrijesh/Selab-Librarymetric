import requests
import json
import mysql.connector


mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="1234",
  database="selab"
)

mycursor = mydb.cursor()

sql = "INSERT INTO countstars (repo, creation_date) VALUES (%s, %s)"
val =[]

with open("javascripts.txt") as f:
    repositories = f.readlines()
    repositories = [x.strip() for x in repositories]

for line in repositories:
    
    #print(repositories)
    url = "https://api.github.com/repos/"+line
    req = requests.get(url)
    val.append((line,str(req1['stargazers_count'])))
    req1 = json.loads(req.text)
    print(line+ "   Number of stars: "+ str(req1['stargazers_count']))

mycursor.executemany(sql, val)
mydb.commit()
print(mycursor.rowcount, "was inserted.")
