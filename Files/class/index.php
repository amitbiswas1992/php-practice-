<?php

require 'bird.php';
require 'pickock.php';

$pickock = new Bird(true,2);
if ($pickock->canFly())
{

  echo 'Can fly Peckok';
}
