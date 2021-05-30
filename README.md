SULEYMAN DEMIREL UNIVERSITY
ENGINEERING FACULTY





INF 305 - Database Management Systems 2
Project documentation
   





Checked by: Assem Talasbek
Made by: Oralbek Sapar
	       	Azamat Malikov
	       Zhussupali Salamat








Kaskelen, 2021



Structure:

Abstract
Introduction
Aim and objectives of research
Background Review 
Methods and Materials
Data and Results
Discussion
Conclusion
References			

































Abstract

	Every year in the city there are more and more houses in very different price categories, depending on the location, year of construction, quality, room count and many other factors. More and more people want to buy a house or apartment in the city. Accordingly, the prices of houses are rising and it is becoming more difficult to find a house in good condition and at a reasonable price. Therefore, we wanted to do a job in which we will try to compare the districts of Almaty, indicate a more suitable price for buying houses and provide some data about them.

Introduction

To begin with, we considered it reasonable to start small, since we could meet a lot of unexpected nuances and issues. So, the very first city to where we want to help is Almaty. In the project, we decided to compare houses, their prices by regions and describe them as good as we can.


Figure 1. Home Page.


Aim and objectives of research

Aim:  To develop a system that can help customers to choose the most suitable option for them and their family’s future house.

Objectives: 
Collect data of Almaty city’s houses and districts.
Fill datasets.
		Filter out unnecessary content from the dataset.
		Make some statistics from tables we got.
		Provide all accurate, reliable and REAL information to our users.

Background Review 

	We were thinking about how we can help people of Kazakhstan by working together, this is the great chance to do our best. In recent days, we began to notice more and more the problem of choosing a home for our relatives and friends, and so, we decided to present our real estate agency “Next Steps” which will help everyone to make their next steps to a new life in a new home!

Methods and Materials

	As we mentioned above, we divided our project into several small steps, to have a clear vision of how it should be done. 


First step. Scraping of information.
	With the help of programming, we can extract and process data found on the Internet for our purposes — this is called Web scraping. Web scraping allows us to extract data from websites and do whatever we want with it.
Sequence of actions
Get the URL of the page from which we want to extract data.
Copy or load the HTML content of the page.
Parse the HTML content and get the necessary data.

	We used Beautiful Soup to extract data from web pages. A normal HTTP request is sent to the server, which returns an HTML page as a response. The response is then analyzed in the BeautifulSoup format so that we can use BeautifulSoup to work on it.
	
Beautiful Soup is a Python library for extracting data from HTML and XML files. It works with your favorite parser to give you natural ways to navigate, search, and modify the parse tree. It usually saves programmers hours and days of work.
	At the end, we save all the received data to our csv file and then we can import it into our database.


Figures 2,3.
Second step. Organization of future datasets and further plans.

	In this stage, we were discussing how to get done with the project. Making drafts, planning how it will work and look like. The first sketches of the project and ER-diagrams for datasets were made. Also, uses of pl/sql procedures, cursors, triggers and other functionalities were planned. 


Figure 4. ER-diagram.


Third step. Filling datasets with proper information. (Filtering data)

	The main problem in this step was to fill with some default image the posts, where there's no picture, and to remove extra content from data we scrapped like it's shown in Figure 5. 

3.1. Replacing null images with default image.

	Here, from the figures 5 and 6 you can see that in 5 we had a post with no	images from krisha.kz, in order to make it user friendly, we decided to add some default images of our company like it's shown in figure 6.

Figures 5, 6.


3.2. Removing unwanted information from fields.

	Also, in our datasets, there were unwanted pieces of information that will cause nonsense to users in our frontend. In figure 5 you can clearly see that there are some words like “этажВсе заметкиУдалить” that were filtered like its shown in figure 7.


Figure 7.


Data and Results
As a result, we got 1100+ records of real data from the  “krisha.kz”.


Fourth step. Calculations of statistics.

	By using pl/sql we were able to make some statistics, so that our clients understand which districts are more expensive or cheaper.We achieved this result by calculating the average prices for each district. Also our team provided some information about every separate district. This gives a good view on how it feels to live there. The results of calculations are provided below.


Figures 8, 9. Results.

Figure 10. Posts data.

Fifth step. Show all the real data we have in a beautifully organized frontend.

	The GUI was developed by using php’s laravel framework. Our decision to use laravel fell on it due to the fact that we had too short time to start studying other technologies, since at the time when we started writing the project we had already spent a lot of time connecting laravel with oracle pl/sql

Discussion

	As we mentioned earlier, our agency’s mission is to help to find a cozy home for every family. However, our business is profitable for every side, our customers (sellers) will be able to sell as fast as possible, while users of our site (buyers) can easily find a lot of options of quality houses. It’s so easy to be our customer, people only need to leave the application of their house, with its information on the “apply” page. Even easier to be a buyer, they need to just visit our site and choose.
	

Conclusion

	To sum up, we would like to say that choosing a future home especially from Almaty is quite a hard job due to the high prices of them. The prices of homes are not satisfiable with the salaries of normal kazakh people. That’s the problem of RK. By further developing our project I hope it's possible to find the solution to this situation. The project could have a lot of users choosing us, so we will be able to influence such a trend of high prices and redirect it in a good direction. 



References			

https://krisha.kz/prodazha/kvartiry/almaty/

https://laravel.com/docs/8.x

https://www.php.net/manual/ru/index.php

https://oracleplsql.ru/contents-oracle-plsql.html

https://www.instagram.com/almadom_estate/

https://developers.google.com/chart/interactive/docs/gallery

https://app.diagrams.net

https://pythonru.com/biblioteki/parsing-na-python-s-beautiful-soup

