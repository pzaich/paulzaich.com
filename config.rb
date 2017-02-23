###
# Page options, layouts, aliases and proxies
###

# Per-page layout changes:
#
# With no layout
page '/*.xml', layout: false
page '/*.json', layout: false
page '/*.txt', layout: true

activate :blog do |blog|
  blog.permalink = "blog/{year}/{category}/{title}.html"
  blog.sources = '/blog/{year}-{month}-{day}-{title}.html'
end
activate :directory_indexes

proxy '/blog.html', 'index.html'


# With alternative layout
# page "/path/to/file.html", layout: :otherlayout

# Proxy pages (http://middlemanapp.com/basics/dynamic-pages/)
# proxy "/this-page-has-no-template.html", "/template-file.html", locals: {
#  which_fake_page: "Rendering a fake page with a local variable" }


# Dir.entries('source/legacy_b  log').each do |entry|
#   # puts entry
#   if File.file?("source/legacy_blog/#{entry}")
#     puts ' ----------'
#     file = File.read("source/legacy_blog/#{entry}")
#     canonical_url = file.match(/(http:\/\/www.paulzaich.com.*\/)/).captures.first
#     canonical_url = canonical_url.gsub('http://www.paulzaich.com/', '')
#     proxy "/#{canonical_url[0..-2]}", "legacy_blog/#{entry.gsub('.markdown','')}"
#     # proxy '/blog/'
#   end
# end



# General configuration

# Reload the browser automatically whenever files change
configure :development do
  activate :livereload
end

###
# Helpers
###

# Methods defined in the helpers block are available in templates
# helpers do
#   def some_helper
#     "Helping"
#   end
# end

# Build-specific configuration
configure :build do
  # Minify CSS on build
  # activate :minify_css

  # Minify Javascript on build
  # activate :minify_javascript

  activate :directory_indexes
end
