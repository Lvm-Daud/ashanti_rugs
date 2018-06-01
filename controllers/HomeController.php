<?php

require('User.php');


$users = $query->fetchALL('users','User');

//dd($users);

require('../views/index.view.php');