---
title: Application Performance Optimization from Steve Huffman, Reddit co-founder
date: '2012-07-25 22:05:10'
tags:
- activerecord
- hacker-news
- rails
- recursion
- ruby
- ruby-rails
- steve-huffman
category: ruby-rails
link: http://www.paulzaich.com/2012/07/25/blog/ruby-rails/application-optimization-from-steve-huffman-reddit-co-founder/
---

It's been a crazy busy week! On top on a monstrous pile of curriculum on Rails basics, the task for the week is to build a virtual clone of
[Hacker News](http://news.ycombinator.com/). With two days of previous Rails experience, Brett and I dove in with exuberance and so far so good! Rails and it's ways of handling form parameters, ActiveRecord calls, and routing are starting to make sense and behave the way that you expect when you test them in Rails console. One thing that has quickly come up though is the design of database and its effect on application performance.

Tonight I had the privilege to sit down with Steve Huffman, co-founder of Reddit, and we ended up talking about database calls for about 20 minutes after reviewing a piece of my code. In order to be able to route to the correct article after a comment in which the comments are nested, we had to setup a recursive method that runs a database call each time it cannot find the parent Article ID. It turns out that this is 
**very bad**
 for performance. You should never have to make more than one call to the database ideally per page load (though at our stage it's ok if we have 1-2 more), but you never want to be making multiple calls like we currently are with this method.


def find_parent_link
    if self.commentable_type == "Comment"
      Comment.find(commentable_id).find_parent_link
    else
      @link_id_num = commentable_id
    end
  end


Instead, the easier and more straightforward way to deal with this kind of association would be to setup a has_many relationship between Articles and comments. All comments would therefore have an associated article_id which would make it easy to route back to the parent id after creating a comment with the parent link. We can easily route to comment.article in this case, instead of having to query every time.

My conversation with Steve poured some light into the challenges that face a web applications as they experience user growth. In some ways, handling high volumes seems to present a much greater technical challenge than simply building an app. That's why it is so important to minimize the footprint the first time around if possible.
