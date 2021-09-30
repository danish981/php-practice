<?php

// little bit dangerous and faulty code that may let you access the private information of the user
// getting the ip address of the cline t (user)

// this is only generated if the php script is running under a server
// in  cmd it is showing that REMOTE_ADDR in undefined
// and in running the php script in the browser under local server, it saying ::1
echo $_SERVER["REMOTE_ADDR"];









