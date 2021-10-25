<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Cocur\Slugify\Slugify;

$from = $argv[1] ?? null;
$to = $argv[2] ?? 'slug';

if (is_null($from)) {
    print('Missing name of the key of the property from which you would like to create the slug');
    exit;
}

$input = require_once __DIR__ . '/input.php';

if (!is_array($input)) {
    print('Array input not found. Please add proper PHP array format to input.php');
    exit;
}

$slugify = new Slugify();
print("[\r\n");
foreach ($input as $key => $row) {
    $row[$to] = $slugify->slugify($row[$from]);;

    print("[");
    $r = [];
    foreach ($row as $k => $v) {
        $v = is_numeric($v) ? $v : "'" . $v . "'";
        $r[] = sprintf("'%s' => %s", $k, $v);
    }
    print(implode(",", $r));
    print("],\r\n");

}
print("]\r\n");
