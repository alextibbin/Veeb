<?php
require_once '../app/bootstrap.php';

$init = new Core();

$db = new Database();
//$sql = 'INSERT INTO users SET'.
//      'name=:name,'.
//        'email=:email,'.
//       'pass=:pass,'.

//$db->query($sql);
//$db->bind(':name', 'Alex Egert Tibbin');
//$db->bind(':email', 'alex-egert.tibbin@khk.ee');
//$db->bind(':pass', 'qwerty');
//$db->execute();
echo '<pre>';
print_r($db);
echo '</pre>';
