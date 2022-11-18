# Student ID Card generator

![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white) &nbsp;
![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white) &nbsp;
![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E) &nbsp; 
![Bootstrap](https://img.shields.io/badge/bootstrap-%23563D7C.svg?style=for-the-badge&logo=bootstrap&logoColor=white) &nbsp;
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white) &nbsp;
![MySQL](https://img.shields.io/badge/mysql-grey.svg?style=for-the-badge&logo=mysql&logoColor=white) &nbsp;


A php crud application to generate student ID card. The application is integerated with mysql for database functionality.

Live link: <a href="https://student-id-generator.epizy.com/" target="_blank"> Student ID card Generator </a>  (best viewed on desktop broswer)



### Setup and config info

- You need to have XAMPP installed on your system with apache server and mysql running.

- Place the project inside the "XAMPP > htdocs" folder.

- Create a database (In my case it's name is ca3) and config the database by importing the "databaseConfig.sql" file using the import option in the top menu bar. It will create base schema for the project.

- Setup database connection by providing right credentials(server name, username, password, databasename) in the "database/connection.php" file.

- Database schema <br>
    ca3 (database) <br> 
    |----- userTable: 4 column (id,username,password,created) <br>
    |----- studentsDetails: 11 column (id,firstName, $lastName, regNo, email, mobile, dob, courseStart, courseEnd, image, address)

### Project functionality

- Log in and Log out functionality
- Add, edit, select, remove and download students details

#### Screen Shots

#### Login
![App Screenshot](images/screenshots/login.png)

#### Dashboard
![App Screenshot](images/screenshots/dashboard.png)

#### Add Student Details
![App Screenshot](images/screenshots/addStudent.png)

#### Edit Student Details
![App Screenshot](images/screenshots/editStudent.png)

#### Download Student ID Card
![App Screenshot](images/screenshots/downloadCard.png)








