---
title: 'Dev Bootcamp Day 8: Keep Grinding on the Basics'
date: '2012-06-21 07:25:40'
tags:
- ajax
- dev-bootcamp
- javascript
- js
- ruby-rails
category: ruby-rails
link: http://www.paulzaich.com/2012/06/21/blog/ruby-rails/dev-bootcamp-day-8-keep-grinding-basics/
---

Today was a day full of finishing up outstanding projects and trying to review core Ruby concepts before jumping forward again into another larger Ruby project. We didn't really get into coding until after lunch.
[David](http://realdlee.com/) and I finished up our merchantjs app which parsed through CSV data and ran through a few of the remaining student compiled exercises on Socrates. We spent about 45 minutes looking into a side project that involves authenticating a user on popular social media applications like Twitter, Tumblr and LinkedIn via their API's. We didn't make a whole lot of progress other than identifying which gems might be useful for the project. I'm hoping to return to this later so I can start to understand authentication more fully.

After class, a bunch of folks stuck around to work on Javascript and we ended up working on the Week 5 assignment which was to make a simple chat client interface by using a couple of different function calls that were provided to us. It should look like
[this](http://codeclasschat.herokuapp.com/).


helpers.fetchNewMessages(callback)


helpers.renderMessage(messageText)


helpers.sendMessage(messageText)

We needed to call helpers.fetchNewmessages (which returns an array of outstanding messages) every two seconds and parse these out into individual strings that would be added to the page by the helpers.renderMessage function. Then we needed to add some scripts to take the text added to the textarea input and send it as the argument in helpers.sendMessage. This was relatively simple as we were using jQuery to find the value and send the callback to the server. It was a fun little exercise.

Code below. You can copy and paste this into a black text file ending with the .html postfix to see what the client looks like on your own computer.

 

 

 
