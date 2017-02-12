<?php

 /* namaspace ISL\POO\Calculator; */
    
    Class OperationGenerato
    {

        static private $opeartors = array('-', '+');
        private $operations       = array();
        private $maxOperandValue  = 100;

        public function __construct($maxOperandValue)
        {
            $this->$maxOperandValue = $maxOperandValue;
        }
private function generateOperations($num=1){
    for ($i=0;$i<$num;$i++){
        $operationIndex = array_rand();
    }
}
    }
    