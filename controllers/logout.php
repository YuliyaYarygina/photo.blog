<?php
session_start();
session_destroy();
header('Location:http://photo.blog/index.php');