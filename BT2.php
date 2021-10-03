
   
<?php
         $url = 'https://github.com/PhamDat0705/BTL-PHP';  
		 $url=parse_url($url);  
		 echo 'Scheme : '.$url['scheme']."<br>";  
		 echo 'Host : '.$url['host']."<br>";  
		 echo 'Path : '.$url['path']."<br>";
?>