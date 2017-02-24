---
title: 'Dev Bootcamp Day 12: Javascript Basics'
date: '2012-06-26 22:34:53'
tags:
- classes
- dev-bootcamp
- javascript
- objects
- prototype
- rspec
- ruby
- ruby-rails
category: ruby-rails
link: http://www.paulzaich.com/2012/06/26/blog/ruby-rails/dev-bootcamp-day-12-javascript-basics/
---

I'm writing now in the hope that I can close out a relatively early night. That last few days have been busy and I have a feeling my dependence on caffeine will become unsustainable if I try to do it over the next seven weeks!

Today was a bit more of a mashup and we tackled a number of different subjects. It started out with a test/assessment designed by the staff that was taken on an individual basis by each of the students. Overall, it tested most of the basic Ruby concepts and I was happy to find that the concepts had generally stuck and everything felt pretty straightforward (after working through these concepts week 1, it was nice to feel comfortable).

I did make some nice discoveries about the finer points of using the #select method on an array and learned that regular expressions could be used to parse through an array to retrieve an array of results. This is a nice method to know about and stick in the back of my mind.

I also discovered that you can use #collect_with_index much like you would use #each_with_index on an array. This made parsing through each element way quicker and cleaner than having to set a local variable.


    class String
      def fun_string!
        new_string = self.split('').collect.with_index do |letter, i|
          if i.even? && i != 0
    letter.upcase
          else
    letter
          end
        end
        new_string.reverse.join('')
      end
    end

I spent a little time reading through two docs on Rspec, TDD and BDD development before lunch in preparation for more on this tomorrow. The rest of the day was focused on Javascript and running through the basic exercises we did previously in Ruby. Everything was fairly straightforward until we hit defining Classes in Javascript.

![](/images/blog/2012-06-26-dev-bootcamp-day-12.jpg)
Working on JS on a beautiful day with Coit Tower out the window.

It turns out that Javascript doesn't define classes like Ruby. Javascript is leaves it up to you to create classes if you so choose by using Objects that reference different functions inside that object. It actually makes Javascript more flexible in some regards (Javascript fanboys please stand up). I'm still understanding the finer points here.

Javascript is definitely leaner in its library of default methods and Brick and I spent time in the afternoon struggling making a new each method in Javascript. We were really close but kept getting the syntax wrong. It sort of felt like trying to write without knowing the words. It definitely does not help that there are so many wrong answers when you search for Javascript related answers on Google.


[Marcus Phillips](http://marcusphillips.com/) was able to quickly refactor and correct our errors for the entire group at the end of our Javascript night and I left tonight feeling a lot closer to understanding how to solve these basic concepts like Objects and passing function blocks. Time to get some sleep (and dream of code!).

Here's the custom each method in Javascript:


    Array.prototype.new_each = function(callback){
      for (var i = 0; i < this.length; i++){
        var element = this[i];
        callback(element);
      }
      return this;
    }
