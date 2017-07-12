<?php

class Base
{
    public function sayHello()
    {
        echo 'Hello';
    }
}
trait SayWorld
{
  public function sayHello()
  {
      parent::sayHello();
      echo 'World!';
  }
}
class MyHelloWorld extends Base
{
    use SayWorld;
    // public function sayHello()
    // {
    //     parent::sayHello();
    //     echo 'MY!!!!!';
    // }
}
$o = new MyHelloWorld();
$o->sayHello();

trait A {
    public function smallTalk()
    {
        echo 'a';
    }
    public function bigTalk()
    {
        echo 'A';
    }
}
trait B {
    public function smallTalk()
    {
        echo 'b';
    }
    public function bigTalk()
    {
        echo 'B';
    }
}
class Talker
{
    use A, B {
        A::smallTalk insteadof B;
        B::bigTalk insteadof A;
        A::bigTalk as talk;
    }
}
$o = new Talker;
$o->smallTalk();
$o->bigTalk();
$o->talk();
