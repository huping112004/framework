<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/2/3
 * Time: 12:51
 */
echo preg_replace_callback('~-([a-z])~', function ($match) {
    return strtoupper($match[1]);
}, 'hello-world').PHP_EOL;
// 输出 helloWorld



header("Content-Type:text/html;charset=utf-8");
class Di{
    private $_factory;
    public function set($id,$value){
        $this->_factory[$id] = $value;
    }

    public function get($id){
        $value = $this->_factory[$id];
        return $value();
    }
}

class User{
    private $_username;
    function __construct($username="") {
        $this->_username = $username;
    }
    function getUserName(){
        return $this->_username;
    }
}

//从这里开始看
$di = new Di();
$di->set("zhangsan",function(){
    return new User('张三');
});
$di->set("lisi",function(){
    return new User("李四");
});

echo $di->get("zhangsan")->getUserName();
echo $di->get("lisi")->getUserName();