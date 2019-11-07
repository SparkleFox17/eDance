<?php
$string = file_get_contents("./inc/item-schema.json");
if ($string === false) {
    // deal with error...
}

$json_a = json_decode($string, true);
if ($json_a === null) {
    // deal with error...
}

$items = array();
foreach ($json_a as $k => $v) {
    if($v['active'] === 1) {
        /*echo $k, ' : ', $v;
        echo '<br>';
        echo '<pre>';
        var_dump ($v);
        echo '</pre>';*/

        array_push($items, $v);
    }
 }
?>