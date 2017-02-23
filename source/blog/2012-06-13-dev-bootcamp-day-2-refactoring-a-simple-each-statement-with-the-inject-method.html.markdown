---
title: 'Dev Bootcamp Day 2: Refactoring a simple Each statement with the Inject Method'
date: '2012-06-13 19:38:14'
tags:
- each-method
- inject-method
- learntocode
- loops
- ruby
- ruby-rails
link: http://www.paulzaich.com/2012/06/13/blog/ruby-rails/boot-camp-day-2-refactoring-a-simple-each-statement-with-the-inject-method/
---

Yesterday I paired up with 
[Brick](http://bootify.tumblr.com) (who is also our Yoga instructor!)  to finish up Arrays in the Ruby Intro module in Socrates. The last exercise had us working on a simple factorial method in which a positive integer  could be passed in and the factorial would be returned.

We used a simple each statement initially to solve the problem, setting up a range to list all the numbers between 1 and the number that had been passed in.


def factorial(number)
product = 1
if number != 0
(1..number).each do |n|
product *= n
end
end
product
end

We came to the realization while doing this exercise that the .each method does not return the product variable automatically. We asked 
[Robert](http://knowledgepile.net/), one of the Ruby masters teaching us here, about this and he told us to check out  the .inject method because it will automatically return the result. It turns out .inject can also allow you to create an amazingly concise version of the code above. Brick and I spent the next 45 minutes diving in and here were the refactored version of the code above that we were able to come up with.

It turns out that we can completely eliminate the need for the product variable with inject because the result is already assumed and passed an initial value (1 in this case).


def factorial(number)
(1..number).inject(1) { |product, n| product * n}
end

Each time that the loop is run, this initial value (and eventual result returned) is passed back into the function to be operated against n.

Already a lot simpler right?

How about this?


def factorial(number)
(1..number).inject(1, :*)
end

Inject can also receive a special syntax which expects the initial result and the operator that the range of numbers should be executed against the initial result.

It's amazing to see how much concision can be brought to such a simple piece of code through a bit of refactoring.
