---
title: 'Dev Bootcamp 24: To Drive or not to Drive? '
date: '2012-07-12 21:48:42'
tags:
- bartordrive
- dev-bootcamp
- ruby
- ruby-rails
- sinatra
link: http://www.paulzaich.com/2012/07/12/blog/ruby-rails/dev-bootcamp-24/
---

Guess what? My team just published our first app today, all by ourselves! We were sick of dealing with command line UI's and the nastiness that they produce and opted to try to learn Sinatra over the past day. What was the goal? Produce an app that can tell you whether you should use Public Transportation or Drive your car. We call it 
[Bart or Drive](http://todriveornottodrive.herokuapp.com/). I had a bit of a weird role here because I joined the team so late. I ended up working primarily on the UI layer of the project and helped a bit with the layer that controlled the logic towards the end.


[![](http://www.paulzaich.com/wp-content/uploads/2012/07/Screen-Shot-2012-07-12-at-9.28.56-PM-560x497.png)](http://todriveornottodrive.herokuapp.com/)

We took a couple of factors into account using the Google API to help us return the answer. First we ask you to put in your destination and origin points for your trip. Then we ask optionally for the price of parking near your location.

At this point we parse through the directions returned by the Google Maps API and determine the total travel time and calculate the travel costs on public transport like BART and SF MUNI.
