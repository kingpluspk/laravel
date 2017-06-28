创建自己的Facade：
    1）定义一个服务，实现具体服务内容，如：lp2/app/Services/TestService.php
    2）定义一个服务提供者，将上述服务注册到服务容器，这里采用的是普通绑定，绑定闭包函数，如：lp2/app/Providers/TestServiceProvider.php
    3）定义一个继承Facade的类，返回服务提供者绑定的名字，实现“静态调用”，如：lp2/app/Facades/Test.php
    4）将服务提供者注册到框架，即将服务提供者配置到数组providers；同时，也将第3步继承Facade的类添加到别名数组aliases数组，见配置文件：lp2/config/app.php
    5）实现一个控制器，如：lp2/app/Http/Controllers/HelloWorldController.php 
    6）配置路由，见配置文件：lp2/routes/web.php
    
    主要涉及的知识点：
        服务容器/服务器提供者/Facade
