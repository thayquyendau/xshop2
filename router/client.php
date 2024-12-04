<?php 
    autoLoad('./src/controllers/client/');
    autoLoad('./src/models/');

    $router->add("GET", "client", "/", "HomeController@indexHandle");
    $router->add("GET", "client", "/indexHandle", "HomeController@index");
    $router->add("GET", "client", "/login", "LoginController@login");
    $router->add("POST", "client", "/login", "LoginController@login");
    $router->add("GET", "client", "/register", "LoginController@register");
    $router->add("POST", "client", "/register", "LoginController@register");
    $router->add("GET", "client", "/logout", "LoginController@logout");
    $router->add("GET", "client", "/resetpassLogin", "LoginController@resetpassLogin");
    $router->add("POST", "client", "/resetpassLogin", "LoginController@resetpassLogin");
    $router->add("GET", "client", "/updateAccount", "LoginController@updateAccount");
    $router->add("POST", "client", "/updateAccount", "LoginController@updateAccount");
    
  
    //Dieu huong danh muc khoa hoc
    $router->add("GET", "client", "/danhmuc", "CategoryController@getCategory");
    $router->add("GET", "client", "/danhmuc", "CategoryController@index");
    $router->add("GET", "client", "/home", "CategoryController@index");

    //Chi tiet khoa hoc
    $router->add("GET", "client", "/detailCourse", "CourseController@detail");
    $router->add("POST", "client", "/thanhtoanSuccess", "CourseController@addOrder");

    //Giỏ hàng
    $router->add("GET", "client", "/giohang", "CartController@index");//Thêm vào giỏ hàng
    $router->add("POST", "client", "/giohang", "CartController@index");
    $router->add("GET", "client", "/deleteCart", "CartController@delete");
    $router->add("GET", "client", "/deleteAllCart", "CartController@deleteAll");

    // Cac trang con
    $router->add("GET", "client", "/lienhe", "LienheController@index");
    $router->add("GET", "client", "/tintuc", "TintucController@index");
    $router->add("GET", "client", "/gioithieu", "GioithieuController@index");
    
    //Thêm khóa học từ detail hoặc từ giỏ hàng sang thanh toán
    $router->add("GET", "client", "/thanhtoan", "ThanhtoanController@index");
    $router->add("POST", "client", "/thanhtoan", "ThanhtoanController@index");
   
    //Them đơn hàng
    $router->add("POST", "client", "/thanhtoanSuccess", "orderController@index");

    $router->solve("client");
?>