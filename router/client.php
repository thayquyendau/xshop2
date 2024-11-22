<?php 
    autoLoad('./src/controllers/client/');
    autoLoad('./src/models/');

    $router->add("GET", "client", "/", "HomeController@index");
    $router->add("GET", "client", "/index.php", "HomeController@index");
    // $router->add("GET", "client", "/", "CategoryController@index");
    $router->add("GET", "client", "/login", "LoginController@login");
    $router->add("POST", "client", "/login", "LoginController@login");
    $router->add("GET", "client", "/logout", "LoginController@logout");
    $router->add("GET", "client", "/changeLogin", "LoginController@changeLogin");
    $router->add("POST", "client", "/changeLogin", "LoginController@changeLogin");
    $router->add("GET", "client", "/updateAccount", "LoginController@updateAccount");
    $router->add("POST", "client", "/updateAccount", "LoginController@updateAccount");
    
  

    $router->add("GET", "client", "/danhmuc", "CategoryController@index");
    $router->add("GET", "client", "/detailCourse", "ProductController@detail");
    $router->add("POST", "client", "/productDetail", "ProductController@productDetail");
    $router->add("GET", "client", "/createComment", "ProductController@createComment");
    $router->add("POST", "client", "/createComment", "ProductController@createComment");

    
    $router->add("GET", "client", "/lienhe", "LienheController@index");
    $router->add("GET", "client", "/tintuc", "TintucController@index");
    $router->add("GET", "client", "/gioithieu", "GioithieuController@index");
    $router->add("GET", "client", "/giohang", "GiohangController@index");
    $router->add("GET", "client", "/thanhtoan", "ThanhtoanController@index");
    $router->add("GET", "client", "/danhmuc", "DanhmucController@index");
    $router->add("GET", "client", "/detail", "DanhmucController@detail");
    

    //Danh muc
    // $router->add("GET", "client", "/danhmuc", "ThanhtoanController@index");

    $router->solve("client");
?>