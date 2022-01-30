<?php

// autoload all these files into the current folder, and we don't need to include them several times
spl_autoload_register(static function ($classname) {
    include("$classname.php");
});
