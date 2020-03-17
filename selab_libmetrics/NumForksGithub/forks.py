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

sql = "INSERT INTO forks (repo, num_forks) VALUES (%s, %s)"
val =[]


with open("javascripts.txt") as f:
    repositories = f.readlines()
    repositories = [x.strip() for x in repositories]


for line in repositories:
	url = "https://api.github.com/repos/"+line
	req = requests.get(url)
	req1 = json.loads(req.text)
	val.append((line,req1['forks']))
	print(line+ "   Number of forks: "+ str(req1['forks']))

mycursor.executemany(sql, val)
mydb.commit()
print(mycursor.rowcount, "was inserted.")

