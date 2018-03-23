<?php
require '../CONFIG/config.php';
require '../autoload.php';

use Lib\FrontController\FrontController;

(new FrontController())->run();

