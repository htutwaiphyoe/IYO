# Final Project : IYO

### What is IYO ?

**The Inspiration Youth Organization - IYO** is a united association of active Youths in **Mandalay Technological University (MTU-COE)**.
Starting in 2018 as a university club, IYO was created to bring much needed youth development resources empowering young people to overcome personal,
educational and professional development challenges. In that time IYO has developed into a significant community of users who we like to call IYOers!
The vision and aim of IYO is to activate students soft skills by going on an experience with events.
Events provide students with the opportunities to live a shared responsibility for the world and equip them
with the tools to shape it for a better future.IYO also lead to hold English Language contests to improve English skills intended to provide better
international communication of youths in our university.

### Why did I choose it ?

As I've been one of the students in MTU, I had a desire to develop websites for my university clubs. Then I took a look our university clubs and I found IYO was the most active club and so I chose it.

### What is Project Structue ?

My project is a landing page like a University Website. It includes Home, Authentication, Events, Members & Teams and Admin Panel pages.

##### HOME PAGE

- index.html for website
- the overall about of IYO

##### AUTHENTICATION PAGES

- sign up page for new users
- login page for registered users
- forgot password page for updating password

##### EVENTS PAGE

- the details of all events that are organized by IYO

##### MEMBERS & TEAMS PAGE

- the status of all members and teams in IYO

The authorization of website is divided into two roles: Admin & User

##### ADMIN

- access to create events
- access to edit events
- access to delete events
- access to event notifications

##### USER

- access to get events notification

### What is Project Work Flow ?

First of all, both admin and users need to authenticate to see the events that are held by IYO. Only users can create new account and update their passwords if they forget.
In sign up, users need to fill name, email, password and confirm password. If all inputs are valid then the user get the confirmation email to get comfirmation code.
If users get code, they need to fill that code in confimation page. Users cannot access to events until they success confirmation stage. After success of confirmation page,
the website redirects to **EVENTS** page. Users can look the details of events and get notification if they are intereseted in. They can see the members and teams of IYO.
The website already has accounts for admins. After admins have logged in, they can create the events, see the details of events and update if something in event posts is wrong.
They can also delete events if it is not necessary.

### Tools for IYO Project

##### Front-End

- HTML
- CSS
- SASS
- Javascript
- JQuery
- Ajax
- other libraries

##### Back-End

- PHP
- MVC Architecture
- PHP Mailer for email sending
- MySQL (PHPMyAdmin)
- other libraires

### Database

##### Tables

- USERS
- EVENTS
- ADMINS
- NOTIFICATION

##### Relations

- ONE-TO-MANY relationship between USERS and NOTIFICATIONS
- ONE-TO-MANY relationship between ADMINS and EVENTS
- ONE-TO-MANY relationship between EVENTS and NOTIFICATIONS

### Features

- Dark-Mode
- Infinite Scrolling
- Responsive (MOBILE FIRST)
- Real World Email Sending
