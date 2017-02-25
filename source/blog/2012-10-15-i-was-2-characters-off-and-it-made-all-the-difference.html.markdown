---
title: I was 2 characters off and it made all the difference.
date: '2012-10-15 19:57:23'
tags:
- blog
- ruby-rails
category: ruby-rails
link: http://www.paulzaich.com/2012/10/15/blog/ruby-rails/i-was-2-characters-off-and-it-made-all-the-difference/
---

If something is acting fishy, you are probably using it incorrectly.
I just managed to stump myself for several hours over the most novice of errors.. failing to read Ruby documentation closely when a method was not performing for me as expected. I worked on it for several hours last night and it frustrated the heck out of me! Well it turns out that a simple careful reading of Ruby
[String#slice](http://www.ruby-doc.org/core-1.9.3/String.html#method-i-slice) examples would have probably resolved my confusion in about 5 minutes.

So what happened? I am parsing through a raw string taken from a text file using Regex to find locations where different sections start and end. Pretty straightforward really. I want to snip out that piece and save it to the database. Specifically I want to snip between to location points in the string.

<script src="https://gist.github.com/3896976.js"> </script>

For some reason my output was not even close to my expected output in my test. It was way longer! But the locations were coming through just fine which I confirmed with some simple manual testing in IRB. I sensed that I had hit a rut and decided to sleep on it.

Finally, in the morning, after some scattered searching, I made my way back to RubyDocs and took a closer look at #slice. I quickly discovered that the syntax,
**slice( x , y )**
, that I had been using all night long to define the start-point and end-point was an incorrect usage for my purposes. I should have been using
**slice(x..y)**
. Two characters. A world of difference. Nothing was wrong with the code, but my usage was completely wrong in this case.

If something is acting fishy, you are probably using it incorrectly. Check your documentation!

Incorrect Usage:

<script src="https://gist.github.com/3896985.js"> </script>

Correct Usage:

<script src="https://gist.github.com/3897009.js"> </script>
