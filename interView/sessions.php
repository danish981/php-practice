<?php

// sessions in php

// starting the sessions
session_start();

$_SESSION["username"] = "Danish Mehmood";
echo $_SESSION["username"];

// deleting a session, unsetting a session
unset($_SESSION["username"]);

// session data is lasted for 30 minutes by default in the browser
// session can be stored on both server sides and client sides
// sessions are preferred over cookies, becuase cookes can be hijacked by the end user
// because cookies are stored in the browser only as text files like user, name, etc
// cookies are used to track user

/*

By default, session data will last for 24 minutes or 1440 seconds in PHP. But if you want, you can change the duration by modifying the value of gc_maxlifetime directive in php.ini file. To set the session time for 30 minutes, open php.ini file and set the value of gc_maxlifetime directive as follows,
gc_maxlifetime = 1800 

*/

