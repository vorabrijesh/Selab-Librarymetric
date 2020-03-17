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

sql = "INSERT INTO javascriptgit (repo, description, stars, watch,issues,licence) VALUES (%s, %s, %s, %s, %s,%s)"
val =[]

with open("javascripts.txt") as f:
    repositories = f.readlines()
    repositories = [x.strip() for x in repositories]

for line in repositories:
    
    #print(repositories)
    url = "https://api.github.com/repos/"+line
    req = requests.get(url)
    
    req1 = json.loads(req.text)
    desc = req1['description'].encode('unicode-escape')
    val.append((line, desc , str(req1['stargazers_count']), str(req1['watchers_count']), str(req1['open_issues']), str(req1['license']['name']) ))
    print(line+ "   Number of stars: "+ str(req1['license']['name']))
    #print(val)
mycursor.executemany(sql, val)
mydb.commit()
print(mycursor.rowcount, "was inserted.")
