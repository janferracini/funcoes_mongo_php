<?php 
    class Model{
        public $item; //requests
        private $con; //conexção com DB

        function __construct($manager) {
            $this->con = new \MongoDB\Driver\Manager($manager);
        }
        
        function schema(){ // pega o $item e converte em []
            $array = (array) $this->item;
            return $array;            
        }

        function insert($collection){
            $tb = new \MongoDB\Driver\BulkWrite;
            $tb->insert($this->schema());
            $result = $this->con->executeBulkWrite($collection, $tb);
            return $result;
        }

    }