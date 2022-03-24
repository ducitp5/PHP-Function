
<?php
// set the default timezone to use.
// date_default_timezone_set('UTC');


// // Prints something like: Monday
// //  echo date("l") , "\n";

// // Prints something like: Monday 8th of August 2005 03:12:46 PM
// echo date('l jS \of F Y h:i:s A') , "\n";

// // Prints: July 1, 2000 is on a Saturday
// echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000)) , "\n";

// /* use the constants in the format parameter */
// // prints something like: Wed, 25 Sep 2013 15:28:57 -0700
// echo date(DATE_RFC2822) , "\n";

// // prints something like: 2000-07-01T00:00:00+00:00
// echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000)) , "\n";

// //  echo mktime(1, 1, 2, 1, 1, 1970);



// Assuming today is March 10th, 2001, 5:16:18 pm, and that we are in the
// Mountain Standard Time (MST) Time Zone

$today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
echo $today . "\n";
$today = date("m.d.y");                         // 03.10.01
echo $today . "\n";
$today = date("j, n, Y");                       // 10, 3, 2001
echo $today . "\n";
$today = date("Ymd");                           // 20010310
echo $today . "\n";
$today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
echo $today . "\n";
$today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
echo $today . "\n";
$today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
echo $today . "\n";
$today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
echo $today . "\n";
$today = date("H:i:s");                         // 17:16:18
echo $today . "\n";
$today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)
echo $today . "\n";

?>
