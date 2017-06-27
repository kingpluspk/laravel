<?php
/**
 * 涉及的知识点:
 * 服务容器/服务器提供者/契约/依赖自动注入
 * 参考:
 * http://laravelacademy.org/post/796.html
 */


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use App\Contracts\TestContract;


class TestController extends Controller
{

    public $test = null;

    // 依赖自动注入
    public function __construct(TestContract $test)
    {
        $this->test = $test;
    }

    /**
     * 测试依赖自动注入
     */
    public function testAuto()
    {
         $this->test->callMe('testAuto TestController');
    }

    /**
     * 测试绑定
     */
    public function testBind()
    {
        $test = App::make('testSg');
        $test->callMe('testBind TestController');
    }
}
