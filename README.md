# EduPlatformPHP
Creating a PHP & SQL Email Platform

TO Do - Create the Database (db.php)
      - Create Register, Login & Logout
      - Create the Dashboard
      - Create Check Email and Reset Password (as an option)

Database - Created the database (db.php) and made sure to include server name, username, password and database name. Made sure to include a piece of code to make sure that the system works

Register - Created the code where a person can register for the email platform, but I also included that if an email already exists in the system the code can detect it by searching the database on MySQL and inform the user that email already exists

Login - Created the code that if a user already has or just created an account it will inform the user that if their password is eith correct or incorrect, if it the user inputted their password correctly then they will be transfered to the dashboard page that will be explained later

Logout - Created a code for when the user wants to logout, if the user wants to logout then they have to click on logout button in the dashboard page, then automatically the users session is destroyed and then they are redirected to the login page

Dashboard - Created the dashboard so that once the user has successfuly went through the Login they can land on the dashboard, if they are not sucecssful then an Error message will come up to inform the user that either their email, password or both were incorrect 

Check Email - I created this so that if an email is entered in the login page the database can check if the email exists or if it does not exist yet in the database

Reset Password - Created this code that if the user clicks on the "forgot my password" button in the login page then they are redirected to a forgot password page which then they have to enetr their email information, after the system checks if the email exists through the check email function and if it exists a green colour will come on the screen but if it doesn not then a red colour will come up. 
