<?php

// this autoloader i learned from the shakil khan programmer | he is from malakand batkhel KPK

spl_autoload_register(static function ($classname) {
    include("classes/$classname.php");
});

echo "new file created";







