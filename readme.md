#quoteDB

>"Make your own Bible. Select and collect all the words and sentences that in all your readings have been to you like the blast of a trumpet."

-Ralph Waldo Emerson

##Project Summary

quoteDB is a web-based project used to organize and quickly query large amounts of quotes from various sources. quoteDB enables users to create personas and then add quotes with sources to the persona. 


##Problem

Mobile devices do not have a "ctrl-f" option and other web-based quote databases like wikiquote do not allow for querying of the entire quote database. Collecting quotes and other bits of information from the web in text files quickly becomes cluttered and difficult to navigate and query. With quoteDB all that is needed is to remember 1 or 2 words to recall your desired quote and the source at the speed of light.

##Wikiquote Scraper

When it comes to retrieving and storing large amounts of quotes, copying and pasting the quotes into the create quote form one at a time can be time consuming. To solve this problem, quoteDB allows users to scrape the quotes from a given wikiquote url and import them to your database in bulk.

##Tech

* PHP 5.4
* Laravel 4.2
* [Datatables jQuery plugin](https://www.datatables.net/)
* Vagrantfile configured for Ubuntu 14.04 VM
* Bootswatch [Readble](https://bootswatch.com/readable/) theme during the daytime and [Darkly](https://bootswatch.com/darkly/) theme during the night
* [Goutte PHP Web Scraper](https://github.com/FriendsOfPHP/Goutte)



*note that when cloning this repo, you will need to create your own database.php file in app/config. 