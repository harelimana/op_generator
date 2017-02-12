<?php
    
/*
Créez une classe : OperationsGenerator ​
 
pouvant générer aléatoirement un nombre choisi d’opérations de calcul (addition, soustraction, multiplication division).  
Les différentes opérations seront conservées sous forme de chaines de caractères dans une 
propriété [private] de la classe (un array) et pourront être récupérées à l’aide d’une méthode. 
 */
    
    require_once(dirname(__FILE__) . '/OperationSolver.php');

    class OperationsGenerator
    {

        private $operators  = ["+", "-", "*", "/"];
        private $operations = Array();
        private $operator   = '';

        const NBOP = 12;

        /*==============*/
        /* constructeur */
        /*==============*/
        
        public function __construct($operators, $operations)
        {
            $this->setOperator($operators);
            $this->setOperations($operations);
        }
        
        /*===========*/
        /* getters   */
        /*===========*/
         
        function getOperators()
        {
            return $this->$operators;
        }

        function getOperations()
        {
            return $this->$operations;
        }

        function getOperator()
        {
            return $this->$operator;
        }
        
        /*===========*/
        /* setters   */
        /*===========*/
    
        /* setting an operator from the array $operators */

        function setOperator($operator)
        {
            $this->operator = $operator;
        }
        
        /*===========*/
        /* methodes  */
        /*===========*/
        
        function setOperations(/* $operator */)
        {
            //extracted  here the content of OperationSolver
        }

        function afficherOperator($operator)
        {
            echo sprintf("operator: %s", $this->operator = $operator . "<br>");
        }

        public function afficherResultat($operations,$res)
        {
            $this->ops = $operations;
            $this->res = $res;
            echo " "; // The results are displayed from the Solver 
        }

    }
    