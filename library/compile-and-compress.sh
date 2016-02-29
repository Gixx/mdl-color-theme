#!/bin/sh
# change directory to root and compile SCSS files
cd "$(dirname "$0")"/..
sass --update src/themes:package
# change directory to package and compress the CSS files
cd "$(dirname "$0")"/../package
for file in `find . -name "*.css"`
do
    filename=$(basename "$file")
    extension="${filename##*.}"
    filename="${filename%.*}"

    echo "Compressing $file > " $filename.min.css
    java -jar ../library/yuicompressor.jar $file -o minified/$filename.min.css
done

