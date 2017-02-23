---
title: Respect REST
date: '2012-07-24 10:38:52'
tags:
- ruby-rails
published: false
link: http://www.paulzaich.com/?p=608
---

match ":/short" => "urls#redirect"
match ":/short" => "urls#show"

Not a proper use of #show, not restful to create an unconventional API method path like redirect.

Should instead use a  separate redirect object

 

match '/:short" => "redirect#create"

def create

@url. Url.find_by_short(params[:short])

@redirect = Redirect.new(:url_id => @url.id)

if @redirect.save
redirect.save
redirect_to @url.original

 
