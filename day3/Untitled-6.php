<?php
abstract class ParentClass {
    abstract protected function prefixName($name);
}
class ChildClass extends ParentClass{
    public function prefixName($name){
        if($name=="John Doe"){
            $prefix = "Mr . ";
        }elseif($name=="jane Doe"){
            $frefix = "Mrs . ";
        }else {
            $prefix = "";
        }
        return "{$prefix} {$name}";
    }
}
?>