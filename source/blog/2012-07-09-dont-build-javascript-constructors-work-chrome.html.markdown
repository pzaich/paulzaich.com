---
title: Don't build Javascript constructors that only work in Chrome
date: '2012-07-09 22:33:01'
tags:
- constructors
- dev-bootcamp
- javascript
- js
- object-oriented
- objects
category: js
link: http://www.paulzaich.com/2012/07/09/blog/js/dont-build-javascript-constructors-work-chrome/
---

I learned a valuable lesson (and reminder) this weekend while I was finishing up my javascript todo app. Everything was progressing along smoothly and I was feeling quite proud of myself when I was able to use the jQuery plugin
[TotalStorage](http://upstatement.com/blog/2012/01/jquery-local-storage-done-right-and-easy/) to start saving the List and task objects directly to the browser in a client-side database. Everything worked awesome ... in Chrome. I went into Firefox to check on a few things and had a rude awakening. None of my constructors were working!
**I was painfully reminded that you must make sure you check for cross-browser compatibility early and often.**


I receiving the following error:


![](/images/blog/2012-07-09-dont-build-javascript-constructors.png)

It turns on that my constructor functions which allow me to create new Task and List objects were using syntax that was not permissible in Firefox. My code below consisted of some object variables along with a number of object specific functions. I found this syntax to be fairly similar to Ruby classes which is why I adopted it last week.  It seems that browsers other than Chrome do not recognize these functions as belonging to the object. I'm not sure why and I hope to post more on this soon.


    var Task = function(description, date, id){
      this.task_description = description;
      this.date = new Date(date);
      this.completion = false;
      this.task_id = id;

      this.createListItem = function () {
        var date_str = this.getDate();
        var listItem = '
    *' + description + ' ' + '
    ' + date_str + '' + '
    ';
        $('.incomplete-list').append(listItem).children(':last').hide().fadeIn(2000);
      }

      this.getDescription = function () {
        return this.task_description;
      }


I've spent this evening revamping the constructors using a style more similar to the way that
[Marcus Phillips](https://twitter.com/mracus) has built Javascript objects in class. This way seems to be working cross-browser though I have had to work out some kinks in my objects to get everything working.***I can't call a function directly in my constructor function right after it is defined.**
I was previously calling a function to generate the HTML for the list item right after the function was defined. Basically trying to replicate an initialization like Ruby. I can't do this with the new constructor style. Instead I had to call the method through my List object on the task.


***I can't directly access instance variables without defining a function to return the variable**
. This was nice with the other style (though probably not ideal for security purposes) because I could play around pretty easily with the objects and see all of their values in the console. I think it felt more Ruby-like which appealed to me.

`
this.myentries = [];
this.return_entries = function () {
    return this.entries;
  }
`

    //NEW CODE
    var entries = [];
    return{
        myentries: function () {
          return entries;
        }
    }
    At the end of the day, the new constructor syntax is working great and will only take some slight adjustments to get used to it, AND is will work cross-browser.

    New Task Object Constructor Syntax:


    var Task = function (description, date, id) {
      var completion = false;
      var date = new Date(date);
      return {
        description: function () {
          return description
        },
        dateStr: function () {
          var currDate = date.getDate();
          var currMonth = date.getMonth() + 1; //Months are zero based
          var currYear = date.getFullYear();
          return currMonth + "/" + currDate + "/" + currYear;
        },
        changeDate: function (new_date){
          return date = Date.parse(new_date);
        },
        isComplete: function () {
          return completion;
        },
        setIncomplete: function () {
          completion = false;
        },
        setComplete: function () {
          var element_id = '#' + id;
          completion = true
        },
        createListItem:  function () {
          var date_str = this.dateStr();
          var listItem = '
    *' + description + ' ' + '
    ' + date_str + '' + '
    ';
          $('.incomplete-list').append(listItem).children(':last').hide().fadeIn(2000);
        }
      }
    }
