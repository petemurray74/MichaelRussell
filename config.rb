# Compass is a great cross-platform tool for compiling SASS. 
# This compass config file will allow you to 
# quickly dive right in.
# For more info about compass + SASS: http://net.tutsplus.com/tutorials/html-css-techniques/using-compass-and-sass-for-css-in-your-next-project/

#########
# 1. Set this to the root of your project when deployed:
http_path = "/"

# 2. probably don't need to touch these
css_dir = "library/css"
sass_dir = "sass"
images_dir = "../images"
javascripts_dir = "../js"
environment = :development
relative_assets = true

# 3. You can select your preferred output style here (can be overridden via the command line):
output_style = :expanded

# 4. When you are ready to launch your WP theme comment out (3) and uncomment the line below
#output_style = :compressed

# To disable debugging comments that display the original location of your selectors. Uncomment:
#line_comments = false

# don't touch this
preferred_syntax = :scss

#add_import_path "../../bower_components/foundation/scss"

# trying to get normalize in
# add_import_path "../../bower_components/foundation"

css_dir = "library/css" # by Compass.app 
sass_dir = "sass" # by Compass.app 
images_dir = "../images" # by Compass.app 
output_style = :compressed # by Compass.app 
relative_assets = true # by Compass.app 
line_comments = false # by Compass.app 
sass_options = {:debug_info=>false} # by Compass.app 
sourcemap = false # by Compass.app 