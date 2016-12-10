<?php
    $template = file_get_contents("templates/template.tpl");
    if(isset($_GET["about"])) $page = file_get_contents("templates/about.tpl");      
    if(isset($_GET["car1"])) $page = file_get_contents("templates/car1.tpl");      
    if(isset($_GET["cars"])) $page = file_get_contents("templates/cars.tpl");      
    if(isset($_GET["delivery"])) $page = file_get_contents("templates/delivery.tpl");      
    if(isset($_GET["faq"])) $page = file_get_contents("templates/faq.tpl");      
    if(isset($_GET["contact"])) $page = file_get_contents("templates/contact.tpl");      
    if(!isset($page)) $page = file_get_contents("templates/main.tpl");
    // $template = str_replace("%%content%%", $page, $template);
    echo $template;
?>