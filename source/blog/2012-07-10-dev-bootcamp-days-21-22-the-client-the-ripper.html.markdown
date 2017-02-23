---
title: 'Dev Bootcamp Days 21 & 22: The Client & The Ripper'
date: '2012-07-10 21:51:34'
tags:
- ruby-rails
link: http://www.paulzaich.com/2012/07/10/blog/ruby-rails/dev-bootcamp-days-21-22-the-client/
---

This week is dedicated to working on a larger scale project with an imaginary client (played by one of the instructors). After being split at random into teams, Patrick, Tom, John and I were able to peruse the various project options with each client and settled on a project called "Ruby Reflector". Basically we need to be able to parse through an entire Github-based Ruby project and determine how many times each method has been called. The core competency will require that the Ruby Standard Library can be calculated. A more ambitious goal will be to see if we can retrieve statistics for all methods called, including custom methods.

[caption id="attachment_540" align="aligncenter" width="560"]
![](http://www.paulzaich.com/wp-content/uploads/2012/07/photo-7-560x418.jpg) Our design board with the application flow defined[/caption]

We spent much of the first morning and early afternoon planning the project and doing initial research to see how much we could use existing gems and API's. Tom and I took on the task of Parsing through the actual code and it has been a winding road so far. We initially used some regular expressions along with .split to split each line of code into text which we could then compare against a library of methods in the Standard library (scraped using Nokogiri) from 
[Ruby-docs.org](http://ruby-doc.org/core-1.9.3/).

We then were introduced to the 
[Ripper](http://www.ruby-doc.org/stdlib-1.9.3/libdoc/ripper/rdoc/Ripper.html) object in the Ruby Standard Library. The Ripper basically allows us to call a method called tokenize that allowed us to chunk all the code into the various method objects. I'm not sure what tokenize is intended for, but this allowed us to easily identify interpolation (#{}) and comments (
#some comment). Again we could compare against our library parsed from Ruby-docs.org.

At the end of the day, we were running into a few cases where #tokenize doesn't work quite the way we were hoping. Jesse started playing around with Ripper.sexp which basically lists all the calls that are made for each bit of code recognized by the Ruby parser. This method will identify the class and the method that has just been called! We discovered that you might be able to write a method for Ripper that counts each time the method is called. This would be 
really cool because we could easily count custom methods as well and all of this could be done without a reference library!

It took us nearly two days, but we finally seem to be close to at least knowing what the best tool to solve our problem might be. That often is the hardest part, as I continue to discover. It's implementation time!
