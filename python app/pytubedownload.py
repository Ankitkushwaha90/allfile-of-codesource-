# #import requests
# import urllib.request
# from bs4 import BeautifulSoup
# #from urllib import urlopen
# import re

# webpage = urllib.request.urlopen('http://www.cmegroup.com/trading/products/#sortField=oi&sortAsc=false&venues=3&page=1&cleared=1&group=1').read
# findrows = re.compile('<tr class="- banding(?:On|Off)>(.*?)</tr>')
# findlink = re.compile('<a href =">(.*)</a>')

# row_array = re.findall(findrows, webpage)
# links = re.finall(findlink, )

# print(len(row_array))

# iterator = []


















from pytube import YouTube

myVideo = YouTube("https://www.youtube.com/watch?v=PyTjWK9qGSg")

print("\n")
print("********************************title ***************")

#get video title
print("Video Title:"+myVideo.title)


# print("\n")
# print("********************************Thumbnail ***************")

# #get video thunnail
# print("Video Title:"+myVideo.thumbnail_url)


# print("\n")
# print("********************************stream ***************")

# #get video stream
# print("Video Title:"+myVideo.streams.all)


# print("\n")
# print("***********************Download video ***************")
# print("********************Wait Unit download is finished ***************")

# #download video
# myVideo.streams.first().download()

# print("video downloaded.. for that!!!!!!!!!!!!!!!!!!")
