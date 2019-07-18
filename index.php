<?php

use Adapter\{WorkingSender, OldNotWorkingSender, Adapter};

require_once 'vendor/autoload.php';

$sender1 = new WorkingSender();
$sender1->showData();

echo '</br></br>';

$sender2 = new Adapter(new OldNotWorkingSender());
$sender2->showData();

