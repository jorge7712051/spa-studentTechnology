<?php
session_start();
require_once dirname(__FILE__, 3) . '/config/config.php';

session_destroy();
echo ROOTPAGE;        

