<?php
class Schoolsingleton{
    private static $schoolName;
    private static $schollAdd;
    private static  $singlenstance ;
private function __construct($name, $add){
    self::$schoolName = $name;
    self::$schollAdd=$add;
}
public static function  getinstance($name,$add){
    if(self::$singlenstance==null){
           self::$singlenstance=new self($name,$add);}
    return self::$singlenstance;
}
public static function getschooladd(){
    return self::$schollAdd;
}


    public static function getschoolname(){
    return self::$schoolName;
    }

private function __clone(): void
{}

}

Schoolsingleton::getinstance('mansoura school','mansoura');
echo Schoolsingleton::getschooladd();
 echo Schoolsingleton::getschoolname();
Schoolsingleton::getinstance('cairo school','cairo');

echo Schoolsingleton::getschooladd();
echo Schoolsingleton::getschoolname();