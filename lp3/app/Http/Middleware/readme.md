创建中间件：
    1）在app/Http/Middleware目录下新建一个类，并实现handle方法，如：lp3/app/Http/Middleware/CheckAge.php
    2）注册中间件，即将中间件类列入lp3/app/Http/Kernel.php类的$middleware属性（该属性为注册全局中间件）
    3）为路由指定中间件，如：lp3/routes/web.php文件

    参考：http://d.laravel-china.org/docs/5.4/middleware

