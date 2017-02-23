---
title: 'Dev Bootcamp Day 7: Tell, Don''t Ask'
date: '2012-06-20 06:01:55'
tags:
- classes
- csv
- methods
- ruby
- ruby-rails
category: ruby-rails
link: http://www.paulzaich.com/2012/06/20/blog/ruby-rails/dev-bootcamp-day-7-tell-dont-ask/
---

Another busy and productive day at Bootcamp. I'm going to keep it short and try to get some sleep after a late night on Monday. The day began with a lecture on Class construction by Shereef.>When you are giving birth to a method, ask yourself, what am I going to name my child.

[caption id="attachment_427" align="aligncenter" width="560"]
[![](http://www.paulzaich.com/wp-content/uploads/2012/06/126070445_82ca5f6f4c_z-560x420.jpeg)](http://www.paulzaich.com/2012/06/20/ruby-rails/dev-bootcamp-day-7-tell-dont-ask/attachment/126070445_82ca5f6f4c_z/) Courtesy of http://www.flickr.com/photos/71217725@N00/126070445/[/caption]

His point being that naming and thoughtfulness in the design of your methods surrounding a Class is very important in object-oriented programming. Shereef made two hypothetical classes CookieJar and Cookie and showed us that if you want to control the number of chocolate chips in the cookies, you should be checking for this in the Cookie class, not the Cookie Jar.

Tell, Don't Ask

The take away for me was that you need to think carefully about which object you are truly acting on when constructing a method and then define it in that class if possible. Tell a class instance what it should be so that other classes can reference that method to check, don't have the other classes ask to check a specific attribute of that class instance.  I'm sure there are grey areas here where judgement needed and this is where the truly skilled and thoughtful developer will find an elegant solution.

The rest of the day consisted of running through a short, hour-long, series of activities based around the command line and working through a project/tutorial that scraped data from a csv and interfaced with an API to retrieve data. None of the Command line tutorial was especially difficult, but it was good to learn a few new commands that I hadn't previously seen used. Most notably the FIND command and use of TAB to autocomplete filenames (why didn't I know this before?!). The .csv scraper was fairly straight forward and I was surprised how much it walked us through the process of creating the various methods after some of the later exercises last week. It's amazing to see how a little bit of code can easily fix most data entry errors in a huge dataset and act on the data in interesting ways. It makes me think about Roy Bahat's talk about how everyone should be able to code at least to some degree. The CSV was fairly easy stuff for a beginner and very useful for data processing. I'm eager to try to build something with a little less direction that is applicable to real world problems in the coming days.
