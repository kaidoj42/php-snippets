<?php
$file = __DIR__ . '/data.html';
if (!file_exists($file)) {
    throw new Exception(sprintf('%s file does not exist', $file));
}

$doc = new DOMDocument();
$doc->loadHTML(file_get_contents($file));
$xpath = new DOMXPath($doc);
$rows = $xpath->query('.//tbody/tr');
foreach ($rows as $row) {
    $tds = $xpath->query('td', $row);
    $name = trim($tds[0]->textContent);
    $code = trim($tds[1]->textContent);
    echo "[
        'code' => '{$code}',
        'name' => '{$name}'       
    ],\r\n";
}