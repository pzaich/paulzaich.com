---
title: Find your PostgreSQL database Datestyle
date: '2016-06-20 14:46:02'
tags:
- blog
link: http://www.paulzaich.com/2016/06/20/blog/find-your-postgresql-database-datestyle/
---

Sometimes you need to find the expected format of dates in your PostgreSQL database. You can find the database's default style using your psql console:

###Log into the postgresql console
`psql`

###connect to your database
`\connect your_database_name`

###interact with your database
`show datestyle;`
