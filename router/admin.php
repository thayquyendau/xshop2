<?php 
    autoLoad('./src/controllers/admin/');
    autoLoad('./src/models/');

    $router->add("GET", "admin", "/admin", "AdminController@dashboard");
    $router->add("GET", "admin", "/admin-handle", "AdminController@adminHandle");
    $router->add("GET", "admin", "/admin/category", "CategoryController@index");
    $router->add("GET", "admin", "/admin/category/create", "CategoryController@create");
    $router->add("POST", "admin", "/admin/category/create", "CategoryController@create");
    $router->add("GET", "admin", "/admin/category/update", "CategoryController@update");
    $router->add("POST", "admin", "/admin/category/update", "CategoryController@update");
    $router->add("GET", "admin", "/admin/category/delete", "CategoryController@delete");

    $router->add("GET", "admin", "/admin/product", "ProductController@index");
    $router->add("GET", "admin", "/admin/product/create", "ProductController@create");
    $router->add("POST", "admin", "/admin/product/create", "ProductController@create");
    $router->add("GET", "admin", "/admin/product/update", "ProductController@update");
    $router->add("POST", "admin", "/admin/product/update", "ProductController@update");
    $router->add("GET", "admin", "/admin/product/delete", "ProductController@delete");

    $router->add("GET", "admin", "/admin/users", "UserController@index");

    $router->add("GET", "admin", "/admin/comment", "CommentController@index");
    $router->add("GET", "admin", "/admin/comment/delete", "CommentController@delete");

    $router->add("GET", "admin", "/admin/thongke", "ThongkeController@index");
    
    
    $router->solve("admin");
?>