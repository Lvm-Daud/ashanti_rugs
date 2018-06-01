<?php

class QueryBuilder{

    protected $pdo;
    
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function fetchALL($tbl,$inToClass){
        
        $statement = $this->pdo->prepare('select * from '.$tbl);
        $statement->execute();
        //dd($statement->fetchAll(PDO::FETCH_OBJ)); //gen class
        return $statement->fetchAll(PDO::FETCH_CLASS, $inToClass); //named class
    }

}