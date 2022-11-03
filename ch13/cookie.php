<?php
// create a coolie
setcookie('location', 'USA', time() + 60 * 60 * 24 * 7, '/');
// read a cookie
if (isset($_COOKIE['location']) $location = $_COOKIE['location'];
// destroy a cookie
setcookie('location', 'USA', time() - 2592000, '/');
