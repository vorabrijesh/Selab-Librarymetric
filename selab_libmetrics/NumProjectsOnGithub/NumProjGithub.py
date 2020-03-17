import requests
from bs4 import BeautifulSoup
import mysql.connector
import time,re, sys 
  
mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="1234",
  database="selab"
)

mycursor = mydb.cursor()

sql = "INSERT INTO projGithub (repo, num_proj) VALUES (%s, %s)"
val =[]

repositories = sys.argv
repositories = repositories[1]
#with open("javascripts2.txt") as f:
#    repositories = f.readlines()
#    repositories = [x.strip() for x in repositories]

line = repositories
l = line.split("/")
print(l)
res = requests.get("https://github.com/search?q=" + l[1])
soup = BeautifulSoup(res.text, 'html.parser')
# tag =soup.find("div", {"class": "col-12 col-md-9 float-left px-2 pt-3 pt-md-0 codesearch-results"})
tag =soup.findAll(re.compile('^h3'))  # finds all h3 tags.
tag = str(tag)
print(tag)
tag = tag.split(" ")
# print(tag)
l=""
for s in tag:
	s = s.replace(',', '')
	if(s.isnumeric()):
		l=s	
val.append((line,l))
print(line+ "   Number of projects on Github: "+ str(l))

#mycursor.executemany(sql, val)
#mydb.commit()
print(mycursor.rowcount, "was inserted.")

