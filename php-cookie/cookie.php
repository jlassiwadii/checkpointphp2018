


<?php

//pendant une année:setcookie("cookie2","november",time()+60*60*24*365);
setcookie("cookiess","november",time()+5);

echo "<HTML>
   <HEAD>
      <TITLE>Cookie HTML Example</TITLE>";
if (!isset($_COOKIE['cookiess']))
{ echo "<link rel = 'stylesheet' type = 'text/css' href = 'default.css' >" ;}

else
{ echo "<link rel = 'stylesheet' type = 'text/css' href = 'special.css' > ";}
echo "  </HEAD>
   <BODY>Gomy Code session 2 ********************2018.
   </BODY>
</HTML>";