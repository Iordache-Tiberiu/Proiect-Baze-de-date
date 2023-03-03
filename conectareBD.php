<?php

$conectare = mysqli_connect('localhost', 'root', '', 'evidentapopulatiei_ditl');

if(!$conectare){
    die(mysqli_connect_error());
}