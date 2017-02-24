---
title: Always test your app in IE8
date: '2013-02-21 01:12:04'
tags:
- https-cross-browser
- ruby-rails
category: ruby-rails
link: http://www.paulzaich.com/2013/02/21/blog/ruby-rails/https-gotcha-in-ie8/
---

I had a particularly stark reminder today of why it is still important to do cross-browser testing. While IE8 has now
[fallen below 25%](http://thenextweb.com/apps/2012/10/01/internet-explorer-8-falls-25-market-share-firefox-15-passes-10-mark-chrome-loses-users/) market share, it still makes up a significant chunk of the traffic that hits our app each day. One simple bug in our code has made using the app in IE8 virtually impossible.

What was that? We were loading a default html5 shim in http instead of https.

`
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
<![endif]-->
`

Every time you loaded our site over SSL you would get this
[security warning](http://blog.httpwatch.com/2009/04/23/fixing-the-ie-8-warning-do-you-want-to-view-only-the-webpage-content-that-was-delivered-securely/). Every. Single. Time.

![](/images/blog/2013-02-21-always-test-your-app-in-i8.png)

A simple 1 character change from 'http' to 'https' on the shim was all that was needed to fix the problem, but it had been lurking there for several weeks unseen because we only were testing on "modern browsers".
