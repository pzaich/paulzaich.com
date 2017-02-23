---
title: Really Rails? Why are ActiveRecord has_one methods defined differently than
  has_many?
date: '2012-08-08 00:24:16'
tags:
- activerecord
- has_many
- has_one
- one_to_one
- rails
- ruby-rails
category: ruby-rails
link: http://www.paulzaich.com/2012/08/08/blog/ruby-rails/really-rails-why-are-activerecord-has_one-methods-defined-differently-than-has_many/
---

**Disclaimer:**
This is my personal gripe about the way a minor little feature of ActiveRecord. I like Rails and ActiveRecord, really I do.

First, of all, I'm not a Rails expert by any means. In fact, I've only been using Rails for about three weeks and ActiveRecord for about four. I've only been truly using databases for about five weeks now. This could be purely a novice's mistake,
**BUT..**


I discovered today, quite painfully, over the course of an hour that ActiveRecord has a very different convention for one_to_one relationships (the has_one relationship in
[Active Record](http://guides.rubyonrails.org/association_basics.html#the-has_one-association)) than it does for has_many or one_to_many relationships. I'll get to that in a minute.

First, here is table schema:

<script src="https://gist.github.com/3292888.js"> </script>

As you can see, I've setup a dependent table that includes a column for the main_table_id. Then I included at the model level, main_table
**has_one :dependent_table**
 and dependent_table
**belongs_to**
 :main_table. Simple right? Well it is, until, the convention that you have used countless times before to traverse between tables, no longer works.

You might expect something like this to work, when creating a new dependent object off of the main object.

<script src="https://gist.github.com/3293023.js"> </script>

Instead, you would get an error like this: NameError: uninitialized constant Main.

I could make dependent objects but I couldn't use the Main object to automatically attach the id using ActiveRecord. Even more confusing, Main.last.location responded properly to the association. The association was there, but something wasn't working.

After an hour of double-checking my relationships, studying the
[Rails documentation](http://guides.rubyonrails.org/association_basics.html#the-has_one-association). I still wasn't any closer to solving the problem. Back to the Google.


[This](http://stackoverflow.com/questions/4505181/rails-3-cant-create-relationship-has-one) StackOverflow post finally cleared up the problem.

It turns out that ActiveRecord has a unique way of creating object associations that are held in a one-to-one relationship.

<script src="https://gist.github.com/3293095.js"> </script>

This convention reads nicely, but it doesn't follow the more common has_many relationship pattern. Why can't these relationship types follow pattern, even if just for consistency sake? Rails is all about convention, and this seems to break patterns followed elsewhere in ActiveRecord.
