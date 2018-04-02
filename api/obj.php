<?php

class person{
    public $name;
    public $xb;
    function _construct($xm,$sex){
        $this->name=$xm;
        $this->xb=$sex;
    }
}
class student extends person{
    var $xh;
    function _construct($xm,$sex,$id){
        $this->xh=$id;
        parent::_construct($xm,$sex);
    }
    function getInfo(){
        echo '姓名：'.$this->name.'';
        echo '性别：'.$this->xb.'';
        echo '学号：'.$this->xh.'';
    }
}

$stu1=new student;
$stu1->_construct('张三','男','20011020305');
$stu1->getInfo();