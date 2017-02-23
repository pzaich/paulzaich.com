---
title: Object Literals, Maker Functions and Constructors in Javascript
date: '2012-07-17 14:00:13'
tags:
- constructors
- dev-bootcamp
- javascript
- js
- maker-functions
- object-literals
- object-oriented
- objects
category: js
link: http://www.paulzaich.com/2012/07/17/blog/js/object-literals-maker-functions-constructors-javascript/
---

I had the priveledge of receiving a code review from
[Marcus Phillips](https://twitter.com/mracus) yesterday and wanted to share some take-aways from the evening. Marcus' generosity with his time (he spent almost 2 hours talking to me) still blows me away, and I hope I can reciprocate my own time to fellow developers in the future when I have knowledge to offer.Creating Different Types of Object Construction in Javascript
I want to cover 3 different types of  object construction in Javascript:
**Object literals**
,
**Maker Functions**
, and
**Constructor Functions**
. I've had a lot of confusion about this subject over the past couple of weeks and want to clarify these construction definitions. Each has a specific design pattern to follow when being built.


###Object Literals
Object Literal use is the simplest form of object construction which is the direct definition of an object linked to the namespace of an existing object or the global namespace. When an object literal is defined, a single object is being created. Object literals are naturally best for cases where only one object with these attributes will ever need to be instantiated.

Define a new object using the standard Javascript
**{}**
 curly braces. Using key value pair (like a standard hash), define any static values along with any functions that can be referenced through the object.

Each method and value can be referenced using calls like so:

`objectName.keyName`

So for the example below, for task_counter, you would call
**taskList.task_counter**
. Similarly, for the function addTask, you would call
**taskList.addTask(description, date)**

<script src="https://gist.github.com/3131926.js"> </script>

###Maker Functions
Maker functions essentially create object literals that can be referenced using the variable they were set to each time they are called. Makers were popularized by Douglas Crockford who is a proponent of using
[Prototypal inheritance](http://javascript.crockford.com/prototypal.html) instead of Classical inheritance in Javascript. An object (referred to as
**instance**
 in the example below) is created at the start of the function, then the function defines functions and vars that will be defined to that object.

A new object would be created using a call like so:

<script src="https://gist.github.com/3132059.js"> </script>

A Maker function for this call looks something like this:

<script src="https://gist.github.com/3132072.js"> </script>

###Constructors
Constructor functions are specialized functions that return a new object
by default when
**new constructorName**
 is called. An explicit
**return**
 statement is not required like it is in the Maker function above. The keyword "this" then comes in and refers to the object being defined and created in this circumstance. At this point the new object and it's associated values and functions can be referenced in the same way that you would reference an object created by a maker function.

<script src="https://gist.github.com/3132201.js"> </script>

So what's the difference between a Maker function and a Constructor (function)? In many ways they are essentially the same, and I honestly do not know the subtleties right now. I have a feeling it has something to do with way that object inheritance works in the two types of object creation. I hope to delve into this more deeply in the coming week or two.
