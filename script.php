<?php
$path  = $_SERVER['REQUEST_URI'];
$filename  = basename($path);
$ipAddress = $_SERVER['REMOTE_ADDR'];
$useragent = $_SERVER['HTTP_USER_AGENT'];

echo "Path: $path;<br>
File: $filename;<br>
IP address: $ipAddress;<br>
User agent: $useragent";