---
title: 'ENV vars: A better way to pass arguments to rake tasks in Rails'
date: '2013-06-10 20:12:25'
tags:
- rails
- rake
- ruby
- ruby-rails
link: http://www.paulzaich.com/2013/06/10/blog/ruby-rails/env-vars-a-better-way-to-pass-arguments-to-rake-tasks-in-rails/
---

Today, I happened upon a situation where I needed to pass an argument into my rake task. In the past I've passed an argument using an array-like syntax like like
[this post](http://davidlesches.com/blog/passing-arguments-to-a-rails-rake-task) describes. While this works, I didn't really like the syntax and it didn't seem very natural in the command-line.

Calling a task like this doesn't seem as readable as it could be.
`rake seeder:seed[100,someString]`

I've found a solution that I like better that utilizes a method from
[Thoughtbot](https://twitter.com/thoughtbot) in their
[Paperclip gem](https://github.com/thoughtbot/paperclip/blob/master/lib/tasks/paperclip.rake).

Set an environment variable as part of your rake task command, then look for that ENV var during the task.
<script src="https://gist.github.com/pzaich/5754246.js"></script>

Then look for the env var in the task itself.
<script src="https://gist.github.com/pzaich/5754252.js"></script>

It's simple and a lot more readable than passing in an array of arguments.
