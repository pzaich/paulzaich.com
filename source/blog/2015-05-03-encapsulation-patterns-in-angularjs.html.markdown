---
title: Encapsulation patterns in AngularJS
date: '2015-05-03 09:27:53'
tags:
- angularjs
- angularjs-2
- blog
- javascript
- js
link: http://www.paulzaich.com/2015/05/03/blog/js/encapsulation-patterns-in-angularjs/
---

Providing public and private design patterns in Angular.js

The concept of Encapsulation is an important design pattern in most object-oriented programming designs. Determining which properties and methods should be accessible is a nice forcing function because it forces the programmer to think about how his or her could will be consumed.



If you’ve spent any time in the world of Javascript, you probably know that Javascript does not provide native support for defining public or private interfaces.



If you haven’t explored Javascript encapsulation in the past, encapsulation is most often used in Javascript 
[Constructor functions](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Working_with_Objects) which operate a bit like class definitions in Classical inheritance using the new Object() constructor pattern.



Encapsulation is typically achieved by defining local variables within the function object. These locals can only be referenced by other functions defined on the function object.






You can find a more detailed expos
é of encapsulation in javascript 
[here](http://www.intertech.com/Blog/encapsulation-in-javascript/).


###What about AngularJS?


Angular provides a number of ways to create javascript singleton objects that are available via dependency injection. Depending on who you talk to, 
[it’s a bit of a mess](http://codeofrob.com/entries/you-have-ruined-javascript.html). At the end of the day though, AngularJS is just javascript and we can build encapsulation into our Angular factories and services using the same types of patterns.


###Factories






###Services






###Controllers




I find myself thinking a lot about what should be exposed publicly in my view controllers. As a beginner, it’s easy to just attach your functions and variables to $scope (or this if using `controller as` syntax) and call it a day. But do you really need your view to have access to all of those functions? In most cases you don’t. Instead, assign these private functions or values to a local variable within your controller function.



I often define a function that initializes the default values within the controller.
