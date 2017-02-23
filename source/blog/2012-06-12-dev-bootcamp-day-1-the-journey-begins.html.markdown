---
title: Dev Bootcamp Day 1, the journey begins
date: '2012-06-12 04:26:26'
tags:
- dev-bootcamp
- incrementer
- ruby
- ruby-rails
category: ruby-rails
link: http://www.paulzaich.com/2012/06/12/blog/ruby-rails/dev-bootcamp-day-1-the-journey-begins/
---

Day 1 is coming to a close here at
[Dev Bootcamp](http://devbootcamp.com/) and the program has already succeeded in surpassing my expectations. The amount of energy and positivity in the room is invigorating. Many of the students quit their current successful careers to "start over" and their passion shows. Shereef and the rest of the team brought an incredible amount of energy and attention to detail to the first 3 hours of the course as they got the 40 students introduced to each and acquainted us all with the ground rules of our journey over the next 10 weeks. Within just a few hours I already felt like I knew most of the class and we dove straight into some coding in the afternoon.

![](http://www.paulzaich.com/wp-content/uploads/2012/06/photo-4-560x418.jpg)](http://www.paulzaich.com/2012/06/12/ruby-rails/dev-bootcamp-day-1-the-journey-begins/attachment/photo-4/)
Shereef inspiring the troops[/caption

Shereef gave several inspiring but brief talks about the goals of Dev Bootcamp and what were should be trying to achieve over the next ten weeks:*Don't become a code monkey. Strive to become a true architect. Someone that can craft a truly inspired design and implement it.


*The effectiveness of the  learning environment is truly contingent on the support structure around you.


*You need to be as close to being overwhelmed with new learning that will push you without hitting the panic point


*Your classmates and teachers are the critical support that will help you stay in this optimal place of learning.
Shereef sent us straight into the thick of it in the afternoon with a review of Ruby core concepts. I was paired with Ivan and we got started on the material. I have to admit that I was apprehensive about Pair programming, but I came away with a very positive experience. Ivan and I were able to correct each others errors much more quickly than if we had been working separately and I appreciated seeing his coding style and his though process.

Although neither of us have used Ruby much up to this point, we were both familiar with most of the core concepts we first covered like strings, integers, floats, methods from other programming language experience.

We ran into a little more trouble when we  hit exercise require us to create logic to translate a word into its Pig Latin equivalent.  The challenges test our code using Rspec which has the added advantage of getting us familiar with Test Driven Development well before we are using it in the Rails environment.

Here were the specs that we were building against:


describe "Pig Latin translator" do
it "translates a simple word" do
s = translate("nix")
s.should == "ixnay"
end

it "translates a word beginning with a vowel" do
s = translate("apple")
s.should == "appleay"
end

it "translates a word with two consonants" do
s = translate("stupid")
s.should == "upidstay"
end

it "gloms several consonants in a row" do
translate("three").should == "eethray"
end

it "counts 'qu' as a single phoneme" do
s = translate("quiet")
s.should == "ietquay"
end

it "counts 'sch' as a single phoneme" do
s = translate("school")
s.should == "oolschay"
end

end

Everything was progressing along until we hit the use case where

 


it "gloms several consonants in a row" do
translate("three").should == "eethray"
end

 

We realized to truly handle any number of consonants at the beginning of the word that we would need
to test for the first case of a vowel. This seemed pretty straight forward but we kept hitting Ruby errors
when we tried to run the script. After spending about an hour trying to solve the problem with a while, do..while, and for loop we weren't any closer to debugging the issue. We brought it to Tony, one of the instructors, to see if saw anything awry. I asked Tony about our style of incrementing the counter out of curiosity. We were using the PHP incrementer counter++. Tony thought this was acceptable if not recommended.We kept it for now.

Tony walked us through the entire implementation in IRB. Eventually, after working through our entire script, we realized that we were incrementing incorrectly. It turns out that counter++ is NOT acceptable in Ruby and that counter += 1 in the only shorthand way to increment.

def pig_latin_translator(word)
vowels = ["a","e","i","o","u"]
if !vowels.include?(word[0])
if word[0..1] == "qu"
puts word[2..word.length]+"quay"
else
counter = 0
while !vowels.include?(word[counter])
counter += 1
end
puts word[counter..word.length] + word[0..(counter-1)] +"ay"
end
else
puts word+"ay"
end
end
pig_latin_translator("schmuck")
