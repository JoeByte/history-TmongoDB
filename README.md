Introduction
------------
TmongoDB is a class user for mongodb operation which write with PHP, It is fast and easy to use.

TmongoDB 是一个用PHP开发的快速易于使用的 mongodb操作类


Features
--------
* TmongoDB is small and fast.
* TmongoDB is easy to use, No matter how stupid you are.
* No matter static method or dynamic method, if you want to.
* It will be support the master and slave.

* TmongoDB快速轻量级.
* TmongoDB易于使用,不管你多笨.
* 支持静态方法和动态方法调用,mongodb操作随心所欲.
* 后续还将支持主从操作.



Installation
------------
TmongoDB can be downloaded at http://project.uacool.com
You can also checkout the latest source code from GitHub at https://github.com/thendfeel/TmongoDB

 'Yaf Framework' 
* There is two methods to use TmongoDB in Yaf, put TmongoDB into the public libaray or the local library(./application/library/)
* The example is put the TmongoDB into the public library /Uacool/TmongoDB.php and change the class name to Uacool_TmongoDB
* The code is how it is write in Model
* 可以放在公用类库目中,也可以放在本地类库中./application/library/
* 下例是放在公用类库中 /Uacool/TmongoDB.php 默认类名为TmongoDB,修改类名称为 Uacool_TmongoDB
* 下例是模型文件范例
    class UserModel extends Uacool_TmongoDB
    {
        public static function getUser()
        {
            $argv = array(
                'name' => 'Joe'
            );
            $ret = self::fetchAll($argv);
            return $ret;
        }
    }

 'Others' 
...


Documentation
-------------
The homepage of TmongoDB is at http://project.uacool.com
The code is at https://github.com/thendfeel/TmongoDB


Contact
-------
Author: Joe (thendfeel)
Email : thendfeel@gmail.com
Site  : www.uacool.com
