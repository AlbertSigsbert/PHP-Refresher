<?php

session_start();

//SESSION DESTROY
session_destroy();

header('Location: ./sessions.php');