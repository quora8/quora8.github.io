#!/bin/sh
# Settings to use with Platypus:
#   App Name: EidoGo
#   Is Droppable, add type sgf
#   Icon: icon.png
#   Items: urlencode.sh, curl
sgf=`$1/Contents/Resources/urlencode.sh -l $2`
size=`du -sk $2 | cut -f1`
if [ $size -gt 15 ]; then
    gameid=`curl -d type=paste -d sgf=$sgf http://eidogo.com/backend/upload.php`
    url="http://eidogo.com/#$gameid"
    open $url
else
    url="http://eidogo.com/#raw:$sgf"
    open $url
fi
