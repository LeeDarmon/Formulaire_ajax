<?php
require('controllers/controllerV3_POST.php');
require('controllers/controller_validate.php');

if ($validate_form == true) {
    include('validate.php');
} else {
    include('form.php');
}
