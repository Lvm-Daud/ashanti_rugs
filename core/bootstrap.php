<?php
error_reporting(E_ALL);

$config = require 'config.php';

require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'core/Request.php';
require 'core/Router.php';
require 'functions.php';


return new QueryBuilder(Connection::make($config['database']));