---
title: Using LocalStorage to build simple persistent apps in Javascript
date: '2012-07-16 19:02:44'
tags:
- js
category: js
link: http://www.paulzaich.com/2012/07/16/blog/js/using-localstorage-build-simple-persistent-apps-javascript/
---

Storing data for use later in the browser has always required the creation of a backend, server-side side database (with the exception of cookies).  No more. With the advent of HTML5 and client-side storage in modern browsers, it is now possible to save everything locally to your user’s browser for quick-loading, light-weight applications. I recently built a
[small sample todo application](https://github.com/pzaich/floo-todo) that uses localStorage and will walk through the steps I took to save and retrieve data.


![](/images/blog/2012-07-16-floo-todo.png)

##$.totalStorage
I am using the jQuery library and was quickly able to find the
[$.totalStorage plugin](http://upstatement.com/blog/2012/01/jquery-local-storage-done-right-and-easy/) generously created by Upstatement.  It abstracts the entire storage process out to a single function that can take multiple arguments. It also can provide functionality for browsers that do not support localStorage (IE7 and below I believe) when used with the
[jQuery cookie plugin](https://github.com/carhartl/jquery-cookie/). I haven’t had a chance to check out how well this functionality works.

##Everything is a key, value pair
It turns out the localStorage stores everything to the client in an object hash. Like any object in Javascript, this means that you can assign values like strings or integers to these keys but you can also assign objects as well.

<script src="https://gist.github.com/3126507"></script>

In my case this was exactly what I needed. I  was working with a List item constructor and a Task item constructor. If I could simply save the List object to local storage and retrieve its tasks each time the page was refreshed, I would have a persistent todo list.

##Save your objects
To actually save your objects, you will need to use the localStorage.setItem function in localStorage. With the  $.totalStorage plugin, simply call the function $.totalStorage with a specified key and value pair.

<script src="https://gist.github.com/3126360.js"> </script>

This became a save function that I could call whenever an action was performed on my list.


##Retrieve your objects from localStorage**
Retrieving your objects from the browser’s database turns out to be just as easy with  the $.totalStorage plugin. Simply call the same function, this time with only the key to return the value referenced by that key.

<script src="https://gist.github.com/3126451.js"> </script>

##Recreate the objects in memory
Retrieving the objects is only part of the story, however. While the objects are accessible, the list object and the contained task objects will no longer be associated with their constructor functions and only contain the instance variables associated with these objects (none of the functions now exist as part of the object). We can fix this by looping through the object returned at “savedList” and recreating each task object.

First a recreate the List object:

<script src="https://gist.github.com/3126463.js"> </script>


Then I check the “savedList” key to see if an object exists:
<script src="https://gist.github.com/3126470.js"> </script>


If it does, listSaver.retrieve is called and a new tasks are created using the data stored in the “savedList” object:

<script src="https://gist.github.com/3126480.js"> </script>


##Uses
So where should you use localStorage? I think it’s mostly useful for situations where you want to reduce bandwidth as much as possible and where saving user data is nice but not essential. Since the db is dependent on the uri being accessed, you will need to be using urls that are static for your specific user (if logins are required). All storage keys are only accessible on that specific URI. It would be a great way to remember  user form details on a partially completed form or for settings that do not require sign-in as well.
