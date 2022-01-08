import requests
from bs4 import BeautifulSoup

url = "https://github.com/meetDeveloper/freeDictionaryAPI"
r = requests.get(url)
htmlContent = r.content
# print(htmlContent)

# parse the html
soup = BeautifulSoup(htmlContent, 'html.parser')
# # print (soup.prettify)
title = soup.title
# print(title)

#get paragraph
paras = soup.find_all('p')
# print(paras)

#get anchors
anchors = soup.find_all('a')
# print(anchors)

# print(soup.find('p')['id'])

print(soup.find('p').get_text())
print(soup.get_text())

anchors = soup.find_all('a')
all_links = set()

for link in anchors:
    if(link.get('href')!='#'):
        linkText = "https://github.com/meetDeveloper/freeDictionaryAPI" + link.get('href')
        all_links.add(link)
        print(linkText)

navbarSupportContent = soup.find(id = 'responsive-meta-container')
print(navbarSupportContent.children)   

# elem = soup.select('#loginModel')
# print(elem)
