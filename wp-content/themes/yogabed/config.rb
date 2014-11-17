css_dir = "css"
sass_dir = "sass"

output_style = (environment == :production) ? :compressed : :expanded
line_comments = (environment == :production) ? :false : :true

require 'fileutils'
on_stylesheet_saved do |file|
  if File.exists?(file) && File.basename(file) == "style.css"
    puts "Moving: #{file}"
    FileUtils.mv(file, File.dirname(file) + "/../" + File.basename(file))
  end
end