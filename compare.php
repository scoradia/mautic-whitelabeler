<?php
// Compare a new release of Mautic to see if the files whitelabeling
// affects have been modified.

require_once('whitelabeler.php');
$whitelabeler = new Whitelabeler;

$v1_path = '/home/vagrant/desktop/2.9.2';
$v2_path = '/home/vagrant/desktop/2.10.0';

$compare = $whitelabeler->compareMauticVersions($v1_path, $v2_path);

echo '<pre>';
print_r($compare);
echo '</pre>';
