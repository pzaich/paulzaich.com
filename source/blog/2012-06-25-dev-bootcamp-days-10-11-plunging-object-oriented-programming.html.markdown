---
title: 'Dev Bootcamp Day(s) 10 & 11: Plunging into Object Oriented Programming'
date: '2012-06-25 22:02:41'
tags:
- dev-bootcamp
- object-oriented
- ruby
- ruby-rails
- sudoku
category: ruby-rails
link: http://www.paulzaich.com/2012/06/25/blog/ruby-rails/dev-bootcamp-days-10-11-plunging-object-oriented-programming/
---

The last few days of camp have been some of the toughest yet, but have really helped me to start putting some pieces into place. On Thursday last week, I sat down to work with Phil on a simple To Do app and found myself struggling to understand how our To Do List class interacted with the Task Item class which defined each item in the To Do List. I didn't feel like I was able to contribute much that afternoon as we tried to work through the problem. On top of that, the To Do app was our first big foray into Object Oriented programming and I think we both were struggling to fully embrace this type of design. We must have changed our direction 3 times before really achieving we wanted to implement. I finally felt like OO design began to "click" Thursday night while I tried to refactor our existing code to make it more OO and ended up pretty much starting over from scratch.

The number one rule for me has been to think about the 
**scope**
 of each object and which object should know what piece of information. Breaking the different methods operating on each object has really started to feel more comfortable and much less convoluted then functional style programming. It provides a good framework for piecing your methods into short, concise methods that act on the class.

![](https://c1.staticflickr.com/5/4055/4504469260_43ea697e9d_b.jpg)

http://www.flickr.com/photos/the-consortium/4504469260/

Today was our biggest challenge yet: Create a Sudoku Puzzle solver. To be honest, I was a little intimidated when were were assigned this problem. The puzzle was clearly going to require the most advanced algorithm work yet and would also test my understanding of Object Oriented design.
[Brett](http://brettcamarda.com/) and I teamed up and did a thorough job of trying to has through all the steps required to solve the puzzle and where each of these methods should exist. The toughest piece turned out to be figuring out how to parse the number sets in the grid into different arrays for the columns, rows and 9-number sub-grids. We were able to use 3 classes, a GameBoard class, a Container class (for the cols, rows and sub-grids) and a Cell class to define the dynamics of the game board. We checked each cell for the overlapping values in it's row, column and sub-grid and subtracted this combined array from the possible values [1..9]. Turns out that this will work for phase 1 of the project and will only solve simple Sudoku!

On to phase 2 tomorrow where we will need to develop a recursive method with branching that allows the algorithm to guess the value of the cell when more than one possible value still exists.
