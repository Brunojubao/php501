<?php

require_once "booststrap.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::CreateHelperSet($entityManager);