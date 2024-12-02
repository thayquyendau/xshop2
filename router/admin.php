<?php 
    autoLoad('./src/controllers/admin/');
    autoLoad('./src/models/');
    use router\router;
    require_once './router/index.php';
    

    //thanh menu admin
    $router->add("GET", "admin", "/admin", "AdminController@admin");
    $router->add("GET", "admin", "/admin/", "AdminController@admin");
    $router->add("GET", "admin", "/adminHandle", "AdminController@adminHandle");
    $router->add("POST", "admin", "/adminHandle", "AdminController@updateMK");    
    //khóa học
    $router->add("GET", "admin", "/admin/Khoahoc", "KhoahocController@index");
    $router->add("POST", "admin", "/admin/Khoahoc", "KhoahocController@updateCTKH");
    $router->add("GET", "admin", "/admin/khoahoc/create", "KhoahocController@create");
    $router->add("POST", "admin", "/admin/khoahoc/create", "KhoahocController@create");
    $router->add("GET", "admin", "/admin/Khoahoc/update", "KhoahocController@update");
    $router->add("POST", "admin", "/admin/Khoahoc/update", "KhoahocController@update");
    $router->add("GET", "admin", "/admin/Khoahoc/delete", "KhoahocController@delete");

    //Danhmuc
    $router->add("GET", "admin", "/admin/category", "CategoryController@index");
    $router->add("GET", "admin", "/admin/danhmuc/create", "CategoryController@create");
    $router->add("POST", "admin", "/admin/danhmuc/create", "CategoryController@create");
    $router->add("GET", "admin", "/admin/danhmuc/update", "CategoryController@update");
    $router->add("POST", "admin", "/admin/danhmuc/update", "CategoryController@update");
    $router->add("GET", "admin", "/admin/danhmuc/delete", "CategoryController@delete");

    //Khach hang
    $router->add("GET", "admin", "/admin/user", "UserController@index");
    $router->add("POST", "admin", "/admin/user", "UserController@index");
    $router->add("POST", "admin", "/admin/user/search", "UserController@search");
    $router->add("GET", "admin", "/admin/user/role", "UserController@indexRole");
    $router->add("GET", "admin", "/admin/user/create", "UserController@create");
    $router->add("POST", "admin", "/admin/user/create", "UserController@create");
    $router->add("GET", "admin", "/admin/user/update", "UserController@update");
    $router->add("POST", "admin", "/admin/user/update", "UserController@update");
    $router->add("GET", "admin", "/admin/user/delete", "UserController@delete");

    //Oder
    $router->add("GET", "admin", "/admin/Oder", "OderController@index");
    $router->add("POST", "admin", "/admin/Oder", "OderController@index");
    $router->add("GET", "admin", "/admin/Oder/create", "OderController@create");
    $router->add("POST", "admin", "/admin/Oder/create", "OderController@create");
    $router->add("GET", "admin", "/admin/Oder/update", "OderController@update");
    $router->add("POST", "admin", "/admin/Oder/update", "OderController@update");
    $router->add("GET", "admin", "/admin/Oder/delete", "OderController@delete");


    $router->solve("admin");
?>