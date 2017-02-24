---
title: 'Dev Bootcamp Day 14: Wading into the Deep Waters of TDD'
date: '2012-06-28 22:00:01'
tags:
- dev-bootcamp
- rspec
- ruby
- ruby-rails
- tdd
category: ruby-rails
link: http://www.paulzaich.com/2012/06/28/blog/ruby-rails/dev-bootcamp-day-14-wading-waters-tdd/
---

The deep, shark-infested waters of RSpec, tests and TDD are finally upon us. As I mentioned
[yesterday](http://www.paulzaich.com/2012/06/27/ruby-rails/dev-bootcamp-day-13-red-green-refactor/), I was still grappling with the how to think in a TDD mindset and see how this would yield productive code. I think today's coding sessions were helpful in beginning to understand how TDD and RSpec testing can be useful in becoming a more disciplined and productive coder.

TDD is all about writing as little code to get the test spec to pass. One thing I didn't really 
get until today after Shereef had beaten it in to my head several times, is that it turns out that you should reallly try to write code that breaks the tests by writing a minimal amount of code. If you can get a test to pass without actually writing want to you want your app to do, your tests are not specific enough and probably are testing the right things.

![](https://c2.staticflickr.com/6/5294/5446692740_c4d23dd3e9_b.jpg)

Photo Credit:
http://www.flickr.com/photos/magnusbrath/5446692740/

The morning consisted of trying to rebuild the now infamous Todo app, this time focusing purely on making each test pass. I found it very frustrating and not very helpful, though it definitely helped improve my syntax and experience with writing RSpec. More than anything, I think the exercise proved to me that YOU DO NOT WRITE YOUR TESTS AFTER WRITING YOUR CODE. The RSPEC tests that we were working off of yesterday were full of holes that would not have been there if it had been coded sequentially using a TDD approach. Filling in the gaps afterwords is just too hard.


[Michael](http://perspectivezoom.tumblr.com/) and I started on a Flashcard App after lunch using a TDD approach and I couldn't have had a better first time experience, especially after how frustrated I found the morning to be. I found myself thinking about each step that needed to be implemented more thoroughly (because I had to write tests for it) instead of just jumping into the code and testing it later in IRB to see if it was working. I also found the workflow to be better for pairing because Michael and I were able to jump back and forth at lead, taking turns writing tests or coding them to completion. Overall, it was an encouraging experience, especially after the morning and we came away with a lot cleaner code than I think we would have had without engaging in the TDD process.


[Flash Card App here.](https://github.com/pzaich/flashcard_app)

 
