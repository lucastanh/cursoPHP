<?php 

function render($template, $content, array $data = []) {
    $content = __DIR__.'/../templates/' . $content . '.tpl.php';
    return include __DIR__.'/../templates/' . $template . '.tpl.php';
}
