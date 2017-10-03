<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

echo"<br><br><br>";
$date = str_replace("-", "/", $date);
print_r($date);
echo"<br><br>";

if ($date > $tar){
	echo "the future";
}
elseif ($date < $tar) {
	echo "the past";
}
else
	echo "Oops";
echo "<br><br>";

$lastPos = 0;
$positions = array();

while (($lastPos = strpos($date, "/" , $lastPos))!== false) {
    $positions[] = $lastPos;
	$lastPos = $lastPos + strlen("/");
}


foreach ($positions as $value) {
    echo $value."<br>";
}
echo "<br><br>";

echo str_word_count($date);
echo "<br><br>";

echo strlen($date);
echo "<br><br>";

echo ord($date);
echo "<br><br>";

echo substr($date,-2);
echo "<br><br>";

print_r (explode("/",$date,3));
echo "<br><br>";


foreach ($year as $value) {
        switch ($value%4) {
          case 0;
	     if (($value%100) != 0 || ($value%400) == 0) {
	      echo 'true ' ;
	    } else {
	      echo 'false ' ;
	    }
	      break;
	      default;
	      echo 'false ' ;
        }
}
echo "<br><br>";



?>