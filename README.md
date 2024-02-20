## Installation

run "composer install"
<br>configure database
<br>run "php artisan migrate"
<br>configure queue and broadcasting drivers
<br>configure scheduler according to server infrastructure

## Getting Started

For login use /api/login url with post method and these params:
<br>email
<br>password
<br>device_name(any string)
<br>then use returned string as bearer token for rest of endpoints

by running migrations a test user will be added
<br>email:"admin@admin.com"
<br>password:"123@abc"

broadcasting added for tasks status change, and could be utilized by configuring any broadcast driver (pusher is tested and included in app)

every day there is a schedule that checks 2 days and older tasks and sets their status to "completed". this could also be done manualy by running "php artisan app:complete-old-tasks" command

a postman collection file added to project root directory that shows how endpoints work
