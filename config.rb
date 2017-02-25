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
  # category should include /
  blog.permalink = "{year}/{month}/{day}/blog/{category}/{title}.html"
  blog.sources = '/blog/{year}-{month}-{day}-{title}.html'
  blog.paginate = true
  blog.per_page = 5
end
activate :directory_indexes

proxy '/blog.html', 'index.html'


# With alternative layout
# page "/path/to/file.html", layout: :otherlayout

# Proxy pages (http://middlemanapp.com/basics/dynamic-pages/)
# proxy "/this-page-has-no-template.html", "/template-file.html", locals: {
#  which_fake_page: "Rendering a fake page with a local variable" }

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
  activate :minify_css

  # Minify Javascript on build
  activate :minify_javascript
end

activate :deploy do |deploy|
  deploy.deploy_method = :git
  deploy.remote = 'git@github.com:pzaich/pzaich.github.io.git'
  deploy.branch = 'master'
end
