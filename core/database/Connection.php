<?php

class Connection{
    public static function make($config){
        try{
            return new PDO(
                
                $config['connection'].';dbname='.$config['dbname'],
                $config['dbuser'],
                $config['dbpass'],
                $config['options']);

        } catch(PDOException $e){
            die('Error:'.$e->getMessage());
        }
    }
}