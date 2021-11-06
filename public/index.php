<?php

namespace Humberto;

require '../vendor/autoload.php';

use Humberto\Multiple;

echo "<pre>";
$Multiple = new Multiple();
print_r($Multiple->get(100));
echo "</pre>";
