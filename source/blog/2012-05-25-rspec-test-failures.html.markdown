---
title: Rspec Test Failures
date: '2012-05-25 19:06:31'
tags:
- capybara
- rails
- rspec
- ruby
- ruby-rails
category: ruby-rails
link: http://www.paulzaich.com/2012/05/25/blog/ruby-rails/rspec-test-failures/
---

Today, I went to start Ch. 9 of the Ruby of Rails tutorial, created a branch and added the first few new tests to user_pages_specs.rb. Out of habit, I decided to run

`
bundle exec rspec spec/
`

just to confirm that these new tests were failing. To my horror, I got the following result:


[![](/images/blog/2012-05-25-rspec-test-failures.png)](http://www.paulzaich.com/2012/05/25/ruby-rails/rspec-test-failures/attachment/screen-shot-2012-05-24-at-4-43-01-pm/)

`
FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF
`

Everything was failing! I double check my local environment and everything seemed to be working fine. Something was wrong with the test environment. I've never seen this one before. In my panic, my first response was to reset back to my earlier commit. Unfortunately, I had the same result:

`
FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF
`

The last thing I had committed to the repository was the addition of the Rails Cucumber gem. I had just removed this gem from my gemFile because I personally prefer using Capybara with rSpec. I decided that perhaps the gemset was affected by my addition of this gem and deleted the gemset so that I could run a bundle install on a fresh gemset. I'm using RVM (Ruby Version Manager, so it looked like this

`
rvm gemset delete railstutorial2nded
`

I then setup the gemset again

`
rvm gemset create railstutorial2nded
`

and ran
bundle install on the app.

`
FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF
`

No luck. I was still getting the failures. Now that I had a fresh gemset, I decided that the least I could do was to run a reset on the test environment; maybe the database had been affected by the cucumber gem? I ran

`
rake db:test:prepare
`

Success!

`
bundle exec rspec spec/
`

`
......................................................
`

You never like to sit down to put in some time learning more about application development to instead spend 20 minutes debugging a problem on your local environment, but what I'm quickly learning is that figuring out little issues like this is just part of the game and to be expected. I'll count this as a lesson learned that I can hopefully keep in my backpocket for the next time I see something like this.
