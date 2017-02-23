---
title: 'Dev Bootcamp Day 4: Refactoring & Outputting a number''s name up to 1,000,000,000,000,000,000,000,000,000'
date: '2012-06-15 07:27:25'
tags:
- in_words
- recursion
- ruby
- ruby-rails
link: http://www.paulzaich.com/2012/06/15/blog/ruby-rails/dev-bootcamp-day-4-refactoring-outputting-numbers-name/
---

Today provided to hold some of the biggest challenges yet and yielded some of the most satisfying moments yet for me during Dev Bootcamp.

My favorite quote of the day came from 
[Robert](http://knowledgepile.net/), who did a code review for the class on Ivan's and my method for the
[Pig Latin!](http://www.paulzaich.com/2012/06/12/ruby-rails/dev-bootcamp-day-1-the-journey-begins/) exercise:>RegEx (Regular Expresssions) is like CTRL + F (Find) on crack.

I spent the majority of the afternoon pairing with Noah who just finished up his first year of college. The first "ahah" moment happened when Noah and I were working through the In Words exercise in Socrates (change any integer from 1-999 into it's written equivalent e.g. "nine hundred ninety nine"). I had happened to have refactored it about 3 times previously, but Noah was just finishing up so we decided to start from the beginning and see how concise we could make the code. We were able to cut down the code by 10 lines out of 40.

The second "aha" moment came for both of us as we reviewed recursion to write factorial and fibonacci sequence methods. Basically recursion means that you call the function within the function, and it finally made sense as we discussed what was happening on a step-by-step basis. I am glad to finally understand how recursion can be used programmatically.

[caption id="attachment_403" align="aligncenter" width="560"]
[![](http://www.paulzaich.com/wp-content/uploads/2012/06/photo-51-560x418.jpg)](http://www.paulzaich.com/2012/06/15/uncategorized/dev-bootcamp-day-4-refactoring-outputting-numbers-name/attachment/photo-5-2/) Factorial steps using recursion. The methods runs until it hits 1 and then returns up through the top.[/caption]

Finally, Noah and I jumped into using recursion to solve the exercise In Words for numbers up to 1 billion. This required us to break each set of digits into chunks and cycle through and add on the correct number label. It took us about 4 hours of coding, but we now have a working set of methods. We used an array to add the correct number labels (e.g. "billion") which can be loaded up to Centillion (10 ^ 303) if we so choose.

 


module InWords
def in_words(*word_generated)
num_array = self.to_s.split("")
num_array.collect! { |x| x.to_i }
hundreds_place = ""

number_block = num_array.pop(num_array.length > 3 ? 3 : num_array.length)
word_generated << word_generator(number_block, hundreds_place)
#recursive call on in_words
if num_array.empty?
digit_label_splicer(word_generated.flatten).reverse.join.rstrip.lstrip

else
num_array.join.to_i.in_words(word_generated)
end
end

def tens(digit)
numbers_hash[digit]
end

def numbers_hash
{ 0 => "", 1 => "one", 2 => "two", 3 => "three", 4 => "four", 5 => "five", 6 => "six", 7 => "seven", 8 => "eight", 9 => "nine",
10 => "ten", 11 => "eleven", 12 => "twelve", 13 => "thirteen", 14 => "fourteen", 15 => "fifteen", 16 => "sixteen", 17 => "seventeen",
18 => "eighteen", 19 => "nineteen", 20 => "twenty", 30 => "thirty", 40 => "forty", 50 => "fifty", 60 => "sixty", 70 => "seventy",
80 => "eighty", 90 =>"ninety"}
end

def label_array
["", "thousand", "million", "billion", "trillion", "quadrillion", "quintillion", "sextillion", "septillion", "octillion" ]
end

def digit_label_splicer( array )
i = 0
array.collect! do |digit_segment|
unless digit_segment == ""
flag= digit_segment.rstrip.lstrip + " #{label_array[i]} "
end
i += 1
flag
end
end

def word_generator(number_array, hundreds_place)
if number_array.length == 3 && number_array[0] != 0
hundreds_place = "#{numbers_hash[number_array.first]} hundred "
end

if number_array.join.to_i != 0
remainder = number_array.join('').to_i % 100
remainder < 20 ? "#{hundreds_place}#{numbers_hash[remainder]}" : "#{hundreds_place}" + "#{numbers_hash[number_array[-2] * 10]} #{numbers_hash[number_array[-1]]}"
else
""
end
end

end

class Numeric
include InWords
end
