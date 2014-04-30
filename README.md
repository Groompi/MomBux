MomBux
======

This website is mainly designed as a test for now, it's purpose is to store points and have a user spend the points on "chores". within the admin panel you can make point codes for the user to redeem. The site is not skinned, only some pages use bootstrap. 

Instructions:

1. On your webhost create a db
2. open handler.php in your favorite text editor
3. change the connection info, host="host address" dbname="whatever you named the db", replace root with the user, replace pw with your password.
4. upload to your webserver and go to http:://www.website.com/install/ (navigate to install directory) if you are greeted with comments saying that they have succesfully created tables then you may go straight into your index (wwww.website.com). DO NOT FORGET TO REMOVE THE INSTALL DIRECTORY AFTER YOU HAVE INSTALLED.
5. if you get an error connection make sure that all the information is correct in the handler.php file.
6. admin panel (creating active codes for points) go to www.website.come/admin/
7. the redeem page is being worked on but you can access it at www.website.com/redeemf.php

To customize your own items, go into the index.php and replace the list with items you want. 

When customizing your own items, make sure to change the href link to best suited 

get variables: 
pd = price 
sid = service id

Example:
href="confirm.php?pd=5&sid=Put+Away+Dishes" class="list-group-item"
			  	
			    Put Away Dishes
			  
to

"href="confirm.php?pd=5&sid=Eat+Dinner" class="list-group-item"
			  	
			    Eat Dinner
			  


To set it so that you get the email when the person selects to points go to email.php and open with text editor and insert your own email.

Don't forget to send me some feedback if you use it! more updates to come!

Version Log
0.5
point system, redeem, create code section, install section, admin section, email section.
