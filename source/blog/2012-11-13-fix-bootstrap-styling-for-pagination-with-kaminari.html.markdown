---
title: Fix Bootstrap Styling for Pagination with Kaminari
date: '2012-11-13 02:50:33'
tags:
- boostrap
- css
- kaminari
- ruby-rails
- ruby-on-rails
category: ruby-rails
link: http://www.paulzaich.com/2012/11/13/blog/ruby-rails/fix-bootstrap-styling-for-pagination-with-kaminari/
---

I'm using the convenient
[Kaminari](https://github.com/amatsuda/kaminari) pagination gem for search results on a current project. The project is primarily focused on function over form and I'm using the
[Bootstrap](http://twitter.github.com/bootstrap/) defaults for most of the design. Bootstrap usually works really well with Rails, but in the case of pagination, the stylings are a little off by default. You can quickly getting them back up-to-snuff with something like this.
<script src="https://gist.github.com/4044308.js"> </script>
