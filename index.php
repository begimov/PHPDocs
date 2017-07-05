<?php

const BR = '</br>';

$userAgent = $_SERVER['HTTP_USER_AGENT'];

echo $userAgent . BR;

if (strpos($userAgent, 'Chrome') !== FALSE) {
    echo strpos($userAgent, 'Chrome') . BR;
    echo "Chrome" . BR;
    echo strtoupper($userAgent) . BR;
    echo strlen($userAgent) . BR;
}

?>
<form action="action.php" method="post">
    <p>Ваше имя: <input type="text" name="name" /></p>
    <p>Ваш возраст: <input type="text" name="age" /></p>
    <p><input type="submit" /></p>
</form>

<p<?php if (-1): ?> style="color:red"<?php endif; ?>>COLORED OR NOT</p>
