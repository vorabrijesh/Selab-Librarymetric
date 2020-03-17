import requests
from bs4 import BeautifulSoup
import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="1234",
  database="selab"
)

mycursor = mydb.cursor()

sql = "INSERT INTO soques (repo, num_ques) VALUES (%s, %s)"
val =[]


with open("javascripts.txt") as f:
    repositories = f.readlines()
    repositories = [x.strip() for x in repositories]


for line in repositories:
	l = line.split("/")
	res = requests.get("https://stackoverflow.com/questions/tagged/" + l[1])
	soup = BeautifulSoup(res.text, 'html.parser')
	tag =soup.find("div", {"class": "fs-body3 grid--cell fl1 mr12 sm:mr0 sm:mb12"})
	tag= str(tag)
	tag = tag.replace('<div class="fs-body3 grid--cell fl1 mr12 sm:mr0 sm:mb12">','')
	tag=tag.replace('</div>','')
	tag = tag.strip()
	tag=tag.split('\n')
	val.append((line,str(tag[0])))
	print(line+ "   Number of questions on stack overflow: "+ str(tag[0]))
	
mycursor.executemany(sql, val)
mydb.commit()
print(mycursor.rowcount, "was inserted.")

