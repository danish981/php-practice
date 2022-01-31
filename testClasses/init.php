<?php

// autoload all these files into the current folder, and we don't need to include them several times
spl_autoload_register(static function ($classname) {
    // include("$classname.php");
    include($classname . ".php");
});


// what will happen if no parameter will be given to this function
// spl_autoload_register();