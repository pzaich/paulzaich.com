---
title: Defining a Constructor in Javascript
date: '2012-06-27 21:59:05'
tags:
- classes
- constructor
- javascript
- js
- object-oriented
- oop
category: ruby-rails
link: http://www.paulzaich.com/2012/06/27/blog/js/defining-constructor-javascript/
---

Coming from the world of classes in Ruby, the lack of them in Javascript came as a bit of a surprise and takes some adjustment. Javascript is much more stripped down but has powerfully flexible object constructs that make "classes" easy to create. By class, I mean an function that can have new object method run on it and can generate a new instance of the Javascript object. These functions are fittingly called Constructors. I was struggling with the assembly of these functions when I found
[this response](http://stackoverflow.com/questions/1114024/constructors-in-javascript-objects) on StackOverflow. Here's a very simple Die constructor that demonstrates the Constructor.


    var Die = function(sides) {
      sides = sides;
      this.getSides = function () {
        return this.sides;
      }
      this.roll = function () {
        return Math.floor((Math.random()*this.sides)+1)
      }
    }


[Phil](http://philaquilina.tumblr.com/) shared another way to make the same simple constructor. I'm still trying to determine the cleaner way to implement these types of Constructors.


    var Die = function(sides) {
      return {
        getSides: function() {
          return sides;
        },
        roll: function() {
          return Math.floor((Math.random()*this.sides)+1);
        }
      }
    }
