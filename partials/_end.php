<?php
$site->addJavascript(BASE_URL.LIBRARY_DIR.'js/jquery/jquery.js');
$site->addJavascript(BASE_URL.LIBRARY_DIR.'js/colorbox/jquery.colorbox.js');
$site->addJavascript(BASE_URL.THEME_DIR.THEME.'/js/site.js');
echo $site->generateJavascript(); 
?>
</body></html>