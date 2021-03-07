<?php

error_reporting(0);
if (!session_id()) session_start();
require_once '../app/autoload.php';

$app = new App();
