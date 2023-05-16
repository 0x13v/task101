<h1 align=center> Task (1) </h1>

<h3 align=center>installation </h3>


1)  run  Laravel Auto install Script.
```bash
bash Laravel_Auto_install_Script.sh
```


2) start dev server:
```bash
php artisan serve
```

> Received Date : 11/5/2023
> Deadline Date : 16/5/2023

#### Tasks information
- [ ] Twitter Task
- [ ] FrontEnd Task
- [x] Hierarchical Task
- [X] Queries Task

----------

<h1 align=center> Tasks information </h1>

----------

<h3 align=center> Twitter Task </h3>


A script to be called standalone to deliver the following:
- 1. Get the top 10000 results of search from twitter provided by search word
- 2. Get the recent 10000 results of search from twitter provided by search word

#### Note
- Store (tweet – useruid – datetime) data in mongo DB
- Store each tweet user information "mongo Database"
- Store the top 20 users in site any website like Firebase (users who has the highest followers) in
Tweet and return data by firebase in list screen
- Display Report (20 tweet only with highest retweet from mongo but to top 20 users) 


<h3 align=center> FrontEnd Task</h3>

- *** login by mobile number with verification by firebase sdk ***
- upload images by javascript and display with ajax action approve or reject in db

--------------
#### tables

#### tweets_search
|id|tweet|useruid|retweets|tweet_like|user_followers|datetime|
|-|-|-|-|-|-|-|
|-|-|-|-|-|-|-|

#### uploads_files
|id|filename|useruid|path|download_count|
|-|-|-|-|-|
|-|-|-|-|-|

----------


<h3 align=center> Hierarchical Task</h3>


- Create hierarchical database table "just one table" that contains " Categories " and "Sub Categories" with unlimited tree levels,
- then write a query to select these Categories with all sub levels.


#### Categories
|id|name|parent_id|
|-|-|-|-|-|
|-|-|-|-|-|

----------

<h3 align=center> Queries Task</h3>

- [X] Done
- Create database
- Create table " accounts " (id – name).
	- " accounts " has many " projects " (id – name – price-account_id) "
	- " projects " has many "jobs" (id – name – amount – project_id). 
	- "jobs" has many "tasks" (id-name-project_id).
- Create models in Laravel for all tables
- Using Laravel query. Insert records in all tables
- Using Laravel query, select records from all tables
- Using Laravel query, select tasks that belongs to project with price < 100.

---------------
#### tables: 

#### accounts
|id|name|
|-|-|
|-|-|

#### projects
|id|name|price|account_id|
|-|-|-|-|
|-|-|-|-|

#### jobs
|id|name|amount|project_id|
|-|-|-|-|
|-|-|-|-|

#### tasks
|id|name|project_id|
|-|-|-|
|-|-|-|

-------------

# Metrics will be:
- Code quality: Documentation (php doc), Naming Variables/Functions/Class ..
- Percentage of the finished work

# Laravel Framework:
We care for the functionality but we care more for the code
