<?php
$config = require __DIR__ . '/../config/config.php';
require __DIR__ . '/../core/authenticity.php';
$authenticity = new Authenticity();
require __DIR__ . '/../view/view.php';