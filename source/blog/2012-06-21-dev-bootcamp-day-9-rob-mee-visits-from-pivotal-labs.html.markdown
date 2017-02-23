---
title: 'Dev Bootcamp Day 9: Rob Mee visits from Pivotal Labs'
date: '2012-06-21 09:00:12'
tags:
- dev-bootcamp
- pivotal
- rob-mee
- ruby-rails
link: http://www.paulzaich.com/2012/06/21/blog/ruby-rails/dev-bootcamp-day-9-wax-on-wax-off/
---

Tonight we were privileged to hear from the founder of Pivotal Labs, which among other things is known for its dedication to Pair Programming. Rob Mee's summed up his talk by emphasizing that over the next ten weeks, we should get really good at the 
basics. Become a "world-class beginner". Rob used the analogy of the Karate Kid "wax on, wax off" to illustrate his view of how programming skill must be developed. If you understand the fundamentals of programming really well, you will be able to learn effectively as you go.

[caption id="attachment_446" align="aligncenter" width="560"]
![](http://www.paulzaich.com/wp-content/uploads/2012/06/photo2-560x418.jpg) Rob Mee Talks about Programming[/caption]

Rob talked about his own journey from Majoring in Japanese at Cal (Trying not to hold it against him!), to discovering programming and his breakthrough moment, to his own hiring practices and what he thinks makes a good programmer. What kept coming back to me is that in addition to having good fundamental technical skills, the most important skills a developer can benefit from are empathy and the ability to work closely with other teammates. This clearly goes against the stereotype, yet I keep hearing it from all directions over the past two weeks of Bootcamp.

On the side, I finished up in the morning a custom Inject method to work on understanding blocks. The hardest part was getting the initial value that can be passed in to work properly. The key was to set the value equal to either the optional argument OR set it equal to the first element of the array that was passed in (and then drop this element from the array).


module Enumerable
  def new_inject(*initial_value)
    loaded_array = []
    
    #change to Ranges to Array
    if self.class == Range
      loaded_array = self.to_a
    else
      loaded_array = self
    end
    
    #Load an initial value passed in into the array
    if initial_value != [] 
      initial_value = initial_value.first
    else
      initial_value = loaded_array.first
      loaded_array = loaded_array[1..loaded_array.length-1] 
    end
    
    #increment initial_value
    loaded_array.each_with_index do |value, index|
      initial_value = yield(initial_value, value)
    end
    initial_value
  end
end
