---
title: 'Dev Bootcamp Day 18: My Personal SQL Cheat Sheet'
date: '2012-07-04 17:41:04'
tags:
- ruby-rails
link: http://www.paulzaich.com/2012/07/04/blog/ruby-rails/dev-bootcamp-day-18-my-personal-sql-cheat-sheet/
---

No Ruby today. No break for the Independence Day holiday (in case you were wondering). Hopefully we'll catch the fireworks later tonight. Instead we were focused on learning the basics of SQL. The basic commands used to traverse and return data with SQL was quite clean and straightforward and within 2 hours of progressing through 50 odd problems, I was able to join and parse through tables with linked foreign keys. I now see the relationship that good Relational database structure can play in well-designed Object Oriented applications. Thinking about the table structures will likely help inform me about the way that different class objects should be represented. 

Here were some of the SQL commands we learned today.


**A simple way to select all rows and columns in a Table:**



SELECT*FROM table_name



**Select a specific column from a table:**


You have a table Artists with columns Name an ID.


SELECT name FROM artists



**Return data from a table and return the data ordered by a specific column**

For table employees and column hire_date.


SELECT * FROM employees ORDER BY hire_date DESC



**WHERE Statement**



SELECT first_name, last_name FROM employees WHERE hire_date < '2011-02-15'



**LIKE Statement**



SELECT name FROM artists WHERE name LIKE '%smith%'



**Check for a number range and a varChar value at the same time:**



SELECT * FROM invoices WHERE total > 5 AND billing_state = 'NV' AND billing_city = 'Reno'



**Check to see if a cell has it's value set to NULL in a row:**



SELECT * FROM tracks WHERE composer IS NULL



**Using an OR statement for multiple selection conditions:**



SELECT * FROM invoices WHERE billing_city = 'Cupertino' or billing_city = 'Mountain View'



**Give a count of values in a Column**



SELECT unit_price, count(unit_price) FROM tracks GROUP BY unit_price



**Reference two different tables values using table id's.**



SELECT artists.name, albums.title FROM artists
JOIN albums
ON artists.id = artist_idORDER BY name



**Combing multiple tables using their respective keys:**



SELECT * FROM artists
JOIN albums
ON artists.id = albums.artist_id
JOIN tracks
ON tracks.album_id = albums.id
WHERE tracks.name = 'Midnight'
