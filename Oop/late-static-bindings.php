<?php

// class A
// {
//     public static function who()
//     {
//         echo __CLASS__;
//     }
//     public static function test()
//     {
//         echo static::who();
//     }
// }
// class B extends A
// {
//     public static function who()
//     {
//         echo __CLASS__;
//     }
// }
//
// B::test();

// class A {
//     private function foo() {
//         echo "success!\n";
//     }
//     public function test() {
//         $this->foo();
//         static::foo();
//     }
// }
//
// class B extends A {
//    /* foo() будет скопирован в В, следовательно его область действия по прежнему А,
//       и вызов будет успешен*/
// }
//
// class C extends A {
//     private function foo() {
//         /* исходный метод заменен; область действия нового метода С */
//     }
// }
//
// $b = new B();
// $b->test();
// $c = new C();
// $c->test();
// //::1:63013 [500]: /oop/late-static-bindings.php - Call to private method C::foo()
// //from context 'A' in /Users/max/Desktop/PHPDocs/oop/late-static-bindings.php on line 30

class A {
    public static function foo() {
        static::who();
    }

    public static function who() {
        echo __CLASS__."\n";
    }
}

class B extends A {
    public static function test() {
        A::foo();
        parent::foo();
        self::foo();
    }

    public static function who() {
        echo __CLASS__."\n";
    }
}
class C extends B {
    public static function who() {
        echo __CLASS__."\n";
    }
}

C::test();
