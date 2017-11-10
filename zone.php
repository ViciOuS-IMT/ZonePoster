<?php
system("clear");
/*
Zone-h mass poster
coded by MrSqar H@cker
team : ITG3eks 
contact : fb.com/MrSqar
or
fb.com/MrSqarYe
email : mrsqar@gmail.com
*/
$white = "\e[97m";
$black = "\e[30m\e[1m";
$yellow = "\e[93m";
$orange = "\e[38;5;208m";
$blue   = "\e[34m";
$lblue  = "\e[36m";
$cln    = "\e[0;94m";
$green  = "\e[92m";
$fgreen = "\e[32m";
$red    = "\e[91m";
$magenta = "\e[35m";
$bluebg = "\e[44m";
$lbluebg = "\e[106m";
$greenbg = "\e[42m";
$lgreenbg = "\e[102m";
$yellowbg = "\e[43m";
$lyellowbg = "\e[103m";
$redbg = "\e[101m";
$grey = "\e[37m";
$cyan = "\e[36m";
$bold   = "\e[1m";
$nbold = "\e[1;97m";
echo $bold;
echo   $green.   "       ______                       _____          _            "."\n";
echo             "      |___  /                      |  __ \        | |           "."\n";
echo   $yellow.  "         / / ___  _ __   ___ ______| |__) |__  ___| |_ ___ _ __ "."\n";
echo             "        / / / _ \| '_ \ / _ \______|  ___/ _ \/ __| __/ _ \ '__|"."\n";
echo    $blue.   "       / /_| (_) | | | |  __/      | |  | (_) \__ \ ||  __/ |   "."\n";
echo             "      /_____\___/|_| |_|\___|      |_|   \___/|___/\__\___|_|   "."\n";
echo             "                                                                "."\n";          
echo ""."\n"; 
echo $green;
echo "        -==================================================-"."\n";
echo "         |    Coder : MrSqar                              | "."\n";
echo "         |    Team  : ITG3eks                             | "."\n";
echo "         |    From  : Yemen                               | "."\n";
echo "    -===========================================================-"."\n";echo $green."\n";
start : echo "          index name [ Enter(none) ] : ";
$index = fgets(STDIN,1024);
$index = trim($index);
function GeeksPoster($url, $hacker, $hackmode,$reson, $sites ){
$k = curl_init();
curl_setopt($k, CURLOPT_URL, $url);
curl_setopt($k,CURLOPT_POST,true);
curl_setopt($k, CURLOPT_POSTFIELDS,"defacer=".$hacker."&domain1=". $sites."&hackmode=".$hackmode."&reason=".$reson);
curl_setopt($k,CURLOPT_FOLLOWLOCATION, true);
curl_setopt($k, CURLOPT_RETURNTRANSFER, true);
$kubra = curl_exec($k);
curl_close($k);
return $kubra;
	}
echo "\n";
echo "          Type your name : ";
$hacker = fgets(STDIN,1024);
$hackmode = 15;
$reson = 1;
echo "\n";
echo "          goto sites.txt and past all sites links then press enter ";
fgets(STDIN,1024);
echo "\n";
$sites = file_get_contents("sites.txt")."/".$index;
if (empty($sites)){
	echo "        Sites.txt is empty !! "."\n";
	
	}
$sites = explode("\n",$sites);
$counter = count($sites);
for($i=0; $i<$counter; $i++){
if (!preg_match("/http/",$sites[$i])){
	$sites[$i] = "http://".$sites[$i]."/".$index;
	}
GeeksPoster("http://zone-h.org/notify/single",$hacker, $hackmode,$reson, $sites[$i]);
echo $yellow."          Done =>".$green."[ ".$sites[$i]." ]"."\n";     
	}




?>
