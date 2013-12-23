<?php
include '../TmongoDB.php';

class Db_User extends TmongoDB
{
    
    // Set DB
    // 定义数据库
    protected static $_db = 'user';
    
    // Set collection
    // 定义收集器
    protected static $_collection = 'user';
    
    // Data validate support the callback function
    // 数据验证支持回调函数，用于数据类型格式等校验，回调函数支持通用函数以及类静态函数，使用前需引用
    // 类方法作为回调函数时，类名和方法名用 :: 分隔 也可以用 -> 分隔
    protected static $_validate = array(
        'uid' => array(
            'type' => 'int',
            'min' => 6,
            'max' => 10,
            'func' => 'Filter::isString'/* callback function, use the function isString() in class Filter */
        ),
        'time' => array(
            'type' => 'int',
            'min' => 10,
            'max' => 10,
            'func' => 'Filter->isIntval' /* callback function */ 
        ),
        'email' => array(
            'func' => 'function2'   /* callback function 2 */ 
        ),
        /* ....some more filed validate */ 
    );
}
/* ====================================================== */
// common function
function function1($var)
{
    return intval($var);
}

function function2($var)
{
    return $var;
}
/* ====================================================== */
// The filter class
class Filter
{

    public static function isString($string)
    {
        return strval(trim($string));
    }

    public static function isIntval($string)
    {
        return intval($string);
    }

    public static function isEmail($string)
    {
        return 'work@uacool.com';
    }
}
