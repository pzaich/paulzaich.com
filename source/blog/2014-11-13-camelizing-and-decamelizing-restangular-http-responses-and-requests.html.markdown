---
title: 'Making peace between server and client: Camelizing and de_camelizing Restangular
  data'
date: '2014-11-13 10:25:46'
tags:
- angularjs
- angularjs-2
- blog
- javascript
- js
- json
- restangular
category: js
link: http://www.paulzaich.com/2014/11/13/blog/js/camelizing-and-decamelizing-restangular-http-responses-and-requests/
---

Sometimes you find that the API that you're interacting with via Angular $http requests uses the underscore convention rather than Javascript's camelCase convention. In this case, our Ruby on Rails app spits out blobs like the second example and we ultimately want it re-serialized like the first example. It's easy to create a confusing quagmire of under_score and camelCase functions and keys all over your project if you don't implement a way to translate object keys.

<script src="https://gist.github.com/pzaich/6439b691498ed15a638c.js"></script>

We need some way to re-serialize this object's keys to camelCase after a response is received. Similarly, requests made to the server should be translated to under_score like the server is expecting. Fortunately the
[Restangular](https://github.com/mgonto/restangular) library makes this quite easy to accomplish.

<script src="https://gist.github.com/pzaich/dfd8dd0596deaf3ec029.js"></script>

Restangular allows you to add response and/or request interceptors which allow you to modify your data before and after a $http request. Using the
[Humps](https://github.com/domchristie/humps) library to camelize and deCamelize, it was simple to modify the requests and responses handled by Restangular. Simply add a config block and use the provided RestangularProvider to add a responseInterceptor and a requestInterceptor:
