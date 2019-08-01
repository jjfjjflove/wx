<?php
namespace app\index\controller;

class PublicIndex extends Controller
{
    public function index()
    {
        return "hello pulbicIndex";
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    public function newxx()
    {
     return "this is new test!!";
    }

    public function change()
    {
        $x=10;
        if($x>0)
        {
            $this->success('这是成功的！！','PublicIndex/newxx');
        }else{
            return "xx";
        }

    }
}
