<?php

namespace MyProject\Sub {

    const CONNECT_OK = 1;
    class Connection {}
    function connect() {}

    echo __NAMESPACE__.'<br>';
}

namespace AnotherProject\Sub {
    echo __NAMESPACE__.'<br>';
}
