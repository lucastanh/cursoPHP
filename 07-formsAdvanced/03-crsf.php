<?php 

// cross-site request forgery

$csrf_token = $_SESSION['csrf_token'] ?? false;

if(!$csrf_token || $_SESSION['csrf_token'] !== filter_input(INPUT_POST, '_csrf_token')) {
    die('CSRF validation fail');
}
