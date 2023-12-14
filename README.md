# TEST


# Technologies used
-   Laravel
-   Socialite
-   Abraham-twitteroauth
-   Mysql


# How to use

## 2. Connecting to Database

### DATABASE:

Please make sure mySQL Server software is installed.
start your mysql server

> For more details about Mysql, click [here](https://mysql.com).




### install all packages
```
composer install
```

## 3. Start project
```
php artisan serve
```
## go to twitter portal and get your keys.
> For more details about Mysql, click [here](https://developer.twitter.com/).

go to your browser and type http://127.0.0.1:8000/ and signup, click on the link



## For the route use the bearer token you obtain from twitter portal.
http://127.0.0.1:8000/channel-subscription
```
Authorization: Bearer <accessToken>
```
   

# Models
## User model
| Field              | Type   | 
|-----------------   |--------|
| id                 | int    |
| name               | string |
| email              | string |
| email_verified_at  | string |
| twitter_id         | string |
| access_token       | string |
| access_token_secret| string |
| remember_token     | string |
| password           | string | 



## Developer
| Name            | Email                    | 
|-----------------|--------------------------|
| Nelson Iseru    | nelsoniseru08@gmail.com  |
| Phone Number    | +2349026915561           |
| Position        | Backend developer        |



