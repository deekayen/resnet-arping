<?php

$filecontents = file('dhcpd.leases');

$matches = array();
// lines 0-2 won't have lease info
for ($i=3, $max = sizeof($filecontents); $i < $max; $i++) {
    if(strstr($filecontents[$i], $_SERVER["REMOTE_ADDR"]))
        $matches[] = $i;
}

for($i=0, $max = sizeof($matches); $i < $max; $i++) {
    if(preg_match("/starts \d+ ([\d]{4}\/[\d]{2}\/[\d]{2} [\d]{2}:[\d]{2}:[\d]{2})/", $filecontents[$matches[$i]+1], $start))
        unset($start[0]);

// the following if's are inefficient and should be cleaned up later
        $found = strtotime($start[1]);

        if(!isset($biggest_time))
            $biggest_time = $found;
        else
            $biggest_time = ($found > $biggest_time) ? $found : $biggest_time;

        if($found == $biggest_time)
            $to_grab = $matches[$i]+2;
}

if(isset($to_grab)) {
    preg_match("/hardware ethernet ([\S]{2}:[\S]{2}:[\S]{2}:[\S]{2}:[\S]{2}:[\S]{2})/", $filecontents[$to_grab+1], $mac);
    unset($mac[0], $filecontents);
    echo $mac[1];
} else
    echo 'Please restart your computer and try again.';

?>