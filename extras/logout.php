<?php

session_start();

session_destroy();

header('Location: /php_basics/13_sessions.php');