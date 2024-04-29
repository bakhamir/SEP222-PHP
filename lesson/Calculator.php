<?php
interface OperationInterface {
    public function calculate($operand1, $operand2);
}
 
class Addition implements OperationInterface {
    public function calculate($operand1, $operand2) {
        return $operand1 + $operand2;
    }
}

class Subtraction implements OperationInterface {
    public function calculate($operand1, $operand2) {
        return $operand1 - $operand2;
    }
}

class Multiplication implements OperationInterface {
    public function calculate($operand1, $operand2) {
        return $operand1 * $operand2;
    }
}

class Division implements OperationInterface {
    public function calculate($operand1, $operand2) {
        if ($operand2 == 0) {
            throw new Exception("Division by zero!");
        }
        return $operand1 / $operand2;
    }
}
class Factorial implements OperationInterface{
    public function calculate($operand1, $operand2) {
        $factorial = 1; 
        if ($operand1 = 0)
            return $factorial;

        
        for ($x=$operand1; $x>=1; $x--)
        {
        $factorial = $factorial * $x;
        }

        return $factorial;
    }

}
class Fibonacci implements OperationInterface{
    public function calculate($operand1,$operand2){
        if ($operand1 == 0) { return 0; }
        if ($operand1 == 1) { return 1; }
        
        return $this->calculate($operand1 - 1, $operand2) + $this->calculate($operand1 - 2, $operand2);
    }
}
 
class OperationFactory {
    public function createAdditionOperation(): OperationInterface {
        return new Addition();
    }

    public function createSubtractionOperation(): OperationInterface {
        return new Subtraction();
    }

    public function createMultiplicationOperation(): OperationInterface {
        return new Multiplication();
    }

    public function createDivisionOperation(): OperationInterface {
        return new Division();
    }
    public function createFactorialOperation(): OperationInterface{
        return new Factorial();
    }
    public function createFibOperation(): OperationInterface{
        return new Fibonacci();
    }
}

class Calculator {
    private $operationFactory;

    public function __construct(OperationFactory $operationFactory) {
        $this->operationFactory = $operationFactory;
    } 

    public function calculate($operationType, $operand1, $operand2) {
        switch ($operationType) {
            case "+":
                $operation = $this->operationFactory->createAdditionOperation();
                break;
            case "-":
                $operation = $this->operationFactory->createSubtractionOperation();
                break;
            case "*":
                $operation = $this->operationFactory->createMultiplicationOperation();
                break;
            case "/":
                $operation = $this->operationFactory->createDivisionOperation();
                break;
            case "!":
                $operation = $this->operationFactory->createFactorialOperation();
                break;
            case "fib":
                    $operation = $this->operationFactory->createFibOperation();
                    break;
            default:
                // throw new Exception("Invalid operation type!");
                echo "";
        }
        return $operation->calculate($operand1, $operand2);
    }
}
?>