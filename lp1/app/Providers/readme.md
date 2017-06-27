服务的开发流程：
    1）定义一个契约接口，规范接口，同时约束依赖注入的类型提示，以便实现依赖自动注入，如：lp1/app/Contracts/TestContract.php
    2）定义一个服务，实现上述接口，如：lp1/app/Services/TestService.php
    3）定义一个服务提供者，将上述服务注册到服务容器，这里实现两个绑定，一个是单例绑定回调函数，一个是接口绑定回调函数，如：lp1/app/Providers/TestServiceProvider.php
    4）将服务提供者注册到框架，即将服务提供者配置到数组providers，见配置文件：lp1/config/app.php
    5）实现一个控制器，如：lp1/app/Http/Controllers/TestController.php
    6）配置路由，见配置文件：lp1/routes/web.php

    主要涉及的知识点：
        服务容器/服务器提供者/契约/依赖自动注入
    参考：
        http://laravelacademy.org/post/796.html
