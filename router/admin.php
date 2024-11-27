<?php 
    autoLoad('./src/controllers/admin/');
    autoLoad('./src/models/');
    use router\router;
    require_once './router/index.php';
    

    //thanh menu admin
    $router->add("GET", "admin", "/admin", "AdminController@admin");
    $router->add("GET", "admin", "/admin/", "AdminController@admin");
    $router->add("GET", "admin", "/adminHandle", "AdminController@adminHandle");
    
    //khóa học
    $router->add("GET", "admin", "/admin/Khoahoc", "KhoahocController@index");
    $router->add("GET", "admin", "/admin/Khoahoc/create", "KhoahocController@create");
    $router->add("POST", "admin", "/admin/Khoahoc/create", "KhoahocController@create");
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

    //Binh luan
    $router->add("GET", "admin", "/admin/comment", "CommentController@index");
    $router->add("GET", "admin", "/admin/comment/create", "CommentController@create");
    $router->add("POST", "admin", "/admin/comment/create", "CommentController@create");
    $router->add("GET", "admin", "/admin/comment/update", "CommentController@update");
    $router->add("POST", "admin", "/admin/comment/update", "CommentController@update");
    $router->add("GET", "admin", "/admin/comment/delete", "CommentController@delete");



    $router->solve("admin");
?>