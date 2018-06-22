for file in *.svg; do
	filename=$(basename "$file")
	extension="${filename##*.}"
	filename="${filename%.*}"
	echo ".app-$filename {" 
	echo "    background-image: url('../img/apps/$file');"
	echo "}"
done