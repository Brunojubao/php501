<?php

require_once 'controllers/landing.php';
require_once 'models/landing.php';

use controllers\landing as ControllersLanding;
use models\landing as ModelsLanding;
use models\Data;

$landing = new ControllersLanding;
$landing->get_lading;

$landing = new ModelsLanding;
$landing->get_lading;

$data = new Data;
$data->get_data();