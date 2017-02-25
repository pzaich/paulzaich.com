---
title: 'DocRipper 0.0.7 Release: .sketch files are now tap'
date: '2016-07-14 12:34:03'
tags:
- blog
- rspec
- ruby
- ruby-rails
- sketch
category: ruby-rails
legacy_slug: docripper-0-0-7-release-sketch-files-are-now-tap
link: http://www.paulzaich.com/2016/07/14/blog/ruby-rails/docripper-0-0-7-release-sketch-files-are-now-tap/
---

###Release Notes:


A brand-new version of
[DocRipper](https://github.com/pzaich/doc_ripper) has been released to the wild. This will be the first release of several upcoming releases that will bring support for new file formats in DocRipper. The goal is to maintain a limited set of dependencies and where necessary only add dependencies that provide a high level of performance.


###Notes


1. ***.sketch**
 files are now supported! All text content (text labels, artboard labels and layer labels) are returned as a concatenated string. I've kept the parsing simple to avoid breaking changes and conform to the spirit of DocRipper's mission to simply grab text from files.


2. *Cleans up module namespacing internally


###Parsing Sketch Files


Extracting text from .sketch files proved to be an interesting excercise and required a couple of levels of digging into this proprietary format:


***Sketch files are sqlite3 databases**
 Thanks to this
[SO question](http://stackoverflow.com/questions/32413486/how-to-parse-sketch-files-in-python), I was able to read .sketch files using Ruby's
[sqlite3 adapter](https://github.com/sparklemotion/sqlite3-ruby). Sketch files contain a single payload "blob" which requires additional parsing.


***Binary Plist**
 The payload blob turns out to be binary plist which I was able to parse using
[CFPropertyList](https://github.com/ckruse/CFPropertyList). The plist contains an array of objects that are parsed to build the sketch file. The array appears to contain flattened references with several objects (string, uuid, dictionary) sometimes describing a single "sketch" object. Finding text references was a matter of identifying the text objects in this array. I ultimately found that using a black list to remove non-text objects was the practical solution in this case. I could not identify a consistent "rule" or class identification for text labels in this object list. I hope to re-examine this approach in the future.
