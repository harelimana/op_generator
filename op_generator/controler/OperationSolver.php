<?php

    /* Créez une seconde classe "OperationSolver" avec une méthode statique "solve" ​
      prenant en paramètre un "tableau d’opérations" sous formes de "chaine de caractère" et dont l’objectif est de
      résoudre les opérations et de renvoyer un "tableau associatif".
      exemple : array(‘operation’ => solution) */

    class OperationSolver
    {
        private $result;
        public function __construct($operations, $operator, $operand1, $operand2)
        {
            $this->solve($operations, $operator, $operand1, $operand2);
        }

        static function solve($operations, $operator, $operand1, $operand2)
        {
            switch ($operator)
            {
                case "+" :
                    $result = eval($operand1 + $operand2);
                    array_push($this->operations, $operand1 . '+' . $operand2);
                    break;
                case "-" :
                    $result = $operand1 - $operand2;
                    array_push($this->operations, $operand1 . '-' . $operand2);
                    break;
                case "*" :
                    $result = $operand1 * $operand2;
                    array_push($this->operations, $operand1 . '*' . $operand2);
                    break;
                case "/" :
                    $result = $operand1 / $operand2;
                    array_push($this->operations, $operand1 . '/' . $operand2);
                    break;
                case "default":
                    echo "error";
                    break;
            }
            echo $operations . " = " . $result . "\n"; //afficher l'operation
            return $operations;
        }
    }
    