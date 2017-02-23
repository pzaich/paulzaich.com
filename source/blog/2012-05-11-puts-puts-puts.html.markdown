---
title: Puts, Puts, Puts
date: '2012-05-11 21:17:00'
tags:
- euler
- ruby
- ruby-rails
link: http://www.paulzaich.com/2012/05/11/blog/ruby-rails/puts-puts-puts/
---

This past week has been my first true foray into the world of Ruby. While I've worked a bit in C++ and php in the past, I decided to start with the basics: I've been progressing through the computational problems at the 
[Eulerproject](http://eulerproject.net).

While I did a quick intro to Ruby via the Michael Hartl 
[tutorial chapter.](http://ruby.railstutorial.org/chapters/rails-flavored-ruby#top) I quickly realized that much of the specific syntax that he demonstrated in this chapter went in one ear and out the other. The 
[Ruby method core reference](http://ruby-doc.org/core-1.9.3/) quickly became my reference of choice as I would think to myself, "I wonder if I Ruby has a method that does _____ ?"

Syntax aside, I'm finding that I need to work on flow control. That's were my title "Puts, Puts, Puts" comes in.  What is "puts" you ask? "Puts" is very similar to the print function available in most languages and simply outputs  the object that it references back to the command line.

I couldn't figure out for the life of me why an array loaded with [3,5] was only processing the results for the 3. I kept on guessing at the problem, deleting  code and replacing to confirm that my assumptions were correct. Finally, I gave up and posted my question to StackOverflow and my facebook. Amazingly a friend and a poster on StackOverflow gave me nearly the same response and advice (thank you!).

Here was my initial code:


#euler problem 1
numbers = [3,5]
sum = 0
i=1
total=0

numbers.each do |number|
while i * number < 10
adder = i * number
total += adder
i += 1
puts total
end
end

puts total

It turns out that I wasn't resetting i in the loop which means that 5 was skipped. That's where puts comes in. Instead of looking mainly at the end result, I should have been looking at the result at EACH step when I wasn't receiving the desired result. Lesson learned!

I eventually ended up using the modulus operator 
**%**
 to refine my solution for the problem. Here's what I ended up with:


sum = 0
i= 0
while i < 1000 do
if i % 3 == 0 or i % 5
sum += i
end
end
puts sum
