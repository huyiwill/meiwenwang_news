<?php 
$Shortcut = "[InternetShortcut] 
URL=http://demo.52jscn.com/?zm
IDList=
IconFile=http://demo.52jscn.com/favicon.ico
IconIndex=1
[{000214A0-0000-0000-C000-000000000046}] 
Prop3=19,2 
"; 
Header("Content-type: application/octet-stream"); 
header("Content-Disposition: attachment; filename=.url;"); 
echo $Shortcut; 
?> 

