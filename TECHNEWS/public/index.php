<?php

#Chargement du bootstrap.php
require_once 'bootstrap.php';

#chargement du header
include_once PATH_HEADER;

require_once PATH_ROOT . '/Core/Core.php';
$core = new Core($_GET);

#Chargmeent du footer
include_once PATH_FOOTER;
