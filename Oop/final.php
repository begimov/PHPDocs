<?php

class BaseClass
{
    public function test()
    {

    }
    final public function more()
    {

    }
}
final class ChildClass extends BaseClass
{
    public function test()
    {

    }
    // public function more()
    // {
    //   # code...
    // }
}
class GrandChildClass extends ChildClass
{
  
}
