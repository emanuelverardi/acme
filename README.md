# acme
ACME limited

## What is Working
```
- User Authentication with Roles for admin and user.
- New User Registration
- Admin login
- User login
- Dashboard Counters in admin area
- Resful API 
- Admin Question Crud
- Form Validation
- Bootstrap 4
- Creation / Update of Answer Type Metadata
- Dont Allow edition and deletion of questions with answers
- Seeders and Migrations (populating all tables)
- Search feature for Questions
- Pagination of questions
- User Response Area Form ( Not Saving ) Just LAyout and Validations
- BrowserSync
- Service and Repository Design Patterns

```

## Working Version

[http://34.242.18.20/](http://34.242.18.20/)


## User Credentials
```
Two users where created  (admin and user)
Admin credentials:
-------------------------------
username: admin@admin
password: admin
------------------------------
username: user@user
password: user
-------------------------------
```

## Requirements
```
php 7.1 or greater
mysql 5.6 or greater
npm 3.5.2 or greater
composer
```

## Instalation
```
git clone git@github.com:emanuelverardi/acme.git
cd acme
cp .env.example .env
fill the .env file with your mysql credentials
composer install
php artisan key:generate
npm install
mysql -uyouruser -pyourpassword
create database acme;

php artisan migrate
php artisan db:seed
npm run dev
php artisan serve
```

## Views Structure
```
- app
-- views
--- auth
------- login.blade.php
------- register.blade.php
--- controlpanel
------- index.blade.php
------- empty.blade.php
------- list.blade.php
------- includes
----------- create-question-modal.blade.php
----------- delete-question-modal.blade.php
----------- footer.blade.php
----------- footer-scripts.blade.php
----------- head.blade.php
----------- header.blade.php
----------- innernav.blade.php
--- user-response
------- index.blade.php
------- includes
----------- footer.blade.php
----------- footer-scripts.blade.php
----------- head.blade.php
----------- header.blade.php
--- layouts
------- app.blade.php
------- controlpanel.blade.php
--- index.php (Landing Page)
```

## System Service Structure
![Alt text](resources/assets/images/service-architecture.png?raw=true "Database Structure")

## Database Structure
![Alt text](resources/assets/images/database.png?raw=true "Database Structure")

```
select * from questions a join survey_question b on a.id=b.question_id and b.survey_id=1;
```
