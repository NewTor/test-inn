<?php
$config = require __DIR__ . '/../config/config.php';
require __DIR__ . '/../core/authenticity.php';
$authenticity = new Authenticity($config);
if (isset($_POST['inn'])) {
    $result = $authenticity->get();
} else {
    $result = false;
}
require __DIR__ . '/../view/view.php';