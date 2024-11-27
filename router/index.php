<?php 
    require_once 'router.php';
    use router\router;
    $router = new router();
    require_once __DIR__.'/client.php';
    require_once __DIR__.'/admin.php';
?>