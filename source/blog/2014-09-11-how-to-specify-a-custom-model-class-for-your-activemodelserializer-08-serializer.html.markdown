---
title: How to specify a custom model class for your ActiveModel::Serializer 0.8 Serializer
date: '2014-09-11 11:21:58'
tags:
- activerecord
- api
- json
- ruby-rails
link: http://www.paulzaich.com/2014/09/11/blog/ruby-rails/how-to-manually-specify-your-serialized-model-in-activemodelserializers/
---

ActiveModel::Serializers gives you a lot of flexibility and modularity when it come to generating JSON for your Rails api. Serializer just work when the serializer is named after the model it references ( 
MyModelNameSerializer). You also knew you could easily extend a base ActiveModelSerializer using class inheritance MyExtendedSerializer < MyModelSerializer. Recently, however, I found myself building a serializer that couldn't be named by ActiveModel::Serializer convention and couldn't inherit from the base serializer for that class. 

So where does this gem find it's dependent class?

It turns out that the method 
[Serializer#model_class](https://github.com/rails-api/active_model_serializers/blob/0-8-stable/lib/active_model/serializer.rb#L235), defined on Serializer defines this behavior. 

It was relatively simple to override this behavior: Just override this method in your serializer so that the class method model_class refers to the parent class.
