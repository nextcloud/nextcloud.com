for file in *.gif; do
	filename=$(basename "$file")
	extension="${filename##*.}"
	filename="${filename%.*}"
	echo ".flag-$filename {" 
	echo "    background-image: url('../img/flags/$file');"
	echo "}"
done