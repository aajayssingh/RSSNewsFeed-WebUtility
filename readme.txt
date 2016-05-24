Problem Statement
 Create a trending news website and host it on local web server.

1 configuring local server :

I used PHP- MySql for building news feed website , which is inbuilt in Wamp - windows apache
MySQL PHP server on localhost.[?]
I built Database named dbnewsfeed using SQLBuddy with three table to store news feeds
fetched from external rss feeds. Following is the SCHEMA :
1. tblcricket (link, description, pubdate, title, priority, index)
2. tblentertainment (link, description, pubdate, title, priority, index)
3. tblhealth (link, description, pubdate, title, priority, index)

2 News feed web app development :

The View is developed in HTML and PHP , webpage shows three category of news - cricket
, entertainment and health. I have used RSS parser magpie , which provides library to fetch
and parse the RSS feeds, the news feeds fetched from XML is stored locally on the database
explained above. The updation of newsfeeds in database is done periodically by dbtrial.php
script which runs periodically with help of a batch script and updates latest news feeds in
DB. magpie simple.php is used to display the news feeds by fetching the news feeds from the
database of localhost. I used CSS to design the webpage. to store and retrieve the multimedia
format data to and from DB i used encoding and decoding function base64 decode() in PHP.
to fetch health news following channels are used :
”http : //www.ibnlive.com/rss/lif estyle.xml”, ”http : //www.thehindu.com/sci−tech/health/?service =
rss”, ”http : //rss.medicalnewstoday.com/alcohol − addiction − illegal d rugs.xml”, ”http :
//www.medicinenet.com/rss/general/mental h ealth.xml”, ”http : //www.medpagetoday.com/rss/Headlines
To fetch cricket news :
http : //www.ibnlive.com/rss/sports.xml”, ”http : //f eeds.f eedburner.com/N DT V −Cricket”, ”http :
//www.redif f.com/rss/cricketrss.xml”, ”http : //www.thehindu.com/sport/cricket/?service =
rss”, ”http : //www.ecb.co.uk/live − scores.xml
To fetch entertainment news: http : //www.f irstshowing.net/f eed/”, ”http : //www.thehindu.com/entert
rss”, ”http : //www.nowrunning.com/cgi−bin/rss/showtimes.xml”, ”http : //www.nowrunning.com/cgi−
bin/rss/showtimes.xml”, ”http : //www.nowrunning.com/cgi − bin/rss/news h indi.xml


3. monitoring popular news

User is given a like button beside each news along with the read more link, the like button
runs a script to record the popularity of the news in terms of a attribute of the tables , each
time a user likes a news item , corresponding entry is set high in DB, so that when the page is
refreshed the most popular is displayed first.

4 Google chrome extension for the App
I made the google chrome extension of this newsfeed web app and have locally installed on my
web browser, which works correctly, I made a manifest.jason file which is meta description file
for the chrome extension, popup.html contains the UI for the extension and logic is written
in popup.js file, which simply fetches the local host URL of the web app developed above to
display within browser as a extension.

References: 
[1] http://magpierss.sourceforge.net/.
[2] http://www.w3schools.com/
