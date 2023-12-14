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
> For more details click [here](https://developer.twitter.com/).

go to your browser and type http://127.0.0.1:8000/ and signup, click on the link



## For the route use the bearer token you obtain from twitter portal.
http://127.0.0.1:8000/channel-subscription
```
Authorization: Bearer <accessToken>
```


## CHALLENGIES
Most of the routes for twitter api doesnt work on a free tier
the routes available for free tier is
'tweets',
'tweets/id',
'users/me'.
That is more reason i used socialite to get user credentials.

For more info click [here](https://www.withblaze.app/blog/understanding-the-recent-changes-to-twitter-api-a-complete-guide).

And also click [here](https://developer.twitter.com/en/portal/products).

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

## Developer
| Key                         | Value                                               | 
|---------------------------- |-----------------------------------------------------|
| TWITTER_CONSUMER_KEY        | 4izqekew2WZtRmWX0jaLGJW1Y                           |
| TWITTER_CONSUMER_SECRET     | 5N4ffz6OTm5dTvcBwf53x5x7yuciO3o3cIaAyQxwiBEweUh6iA  |
| TWITTER_ACCESS_TOKEN        | 1111350886729699328-NscnBlhoNgfBwJKEh4E5xJaEZxBK0Y  |
| TWITTER_ACCESS_TOKEN_SECRET | GOZ7qml0PvHTflUal225byLieqrA83qlGOnOQDVJUmyD0       |
| TWITTER_API_VERSION         | 2                                                   |
| TWITTER_REDIRECT_URI        | http://127.0.0.1:8000/profile                       |
| TWITTER_CLIENT_ID           | MHpGelJrV3VYVWplN0llWVZQWTA6MTpjaQ                  |
| TWITTER_CLIENT_SECRET       |ifXZs0ItK7n6N5c9cKoZANJyW4FIemw6PxxYkSZ-U6ldPPLtD2   |

TWITTER_BEARER_TOKEN  :AAAAAAAAAAAAAAAAAAAAAFvJrQEAAAAAgyIKpLvGMwx4i%2Femf3c%2BUHh6kNA%3DvnVhE9DzcxXZ042vSo3WPb4vdetEgK2gcOzMXmvGaMatWp3hAM