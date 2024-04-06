<?php

namespace Calc;

class Calculator
{
    private const OPERATOR_PLUS     = 'plus';
    private const OPERATOR_MINUS    = 'minus';
    private const OPERATOR_DIVISION = 'division';
    private const OPERATOR_MULTIPLE = 'multiple';
    
    private string $operator;
    private int    $number1;
    private int    $number2;
    private ?int   $result = null;
    private array  $errors = [];
    
    public function __construct(
        string $operator,
        int $number1,
        int $number2
    ) {
        $this->operator = $operator;
        $this->number1 = $number1;
        $this->number2 = $number2;
    }
    
    public function calculate(): void
    {
        if ($this->validate()) {
            switch ($this->operator) {
                case self::OPERATOR_PLUS:
                    $this->result = $this->plus();
                    break;
                case self::OPERATOR_MINUS:
                    $this->result = $this->minus();
                    break;
                case self::OPERATOR_DIVISION:
                    $this->result = $this->division();
                    break;
                case self::OPERATOR_MULTIPLE:
                    $this->result = $this->multiple();
                    break;
            }
        }
    }
    
    public function validate(): bool
    {
        if ($this->operator === 'division' && $this->number2 <= 0) {
            $this->errors[] = 'Деление на 0 запрещено';
        }
        
        return empty($this->errors);
    }
    
    private function plus(): int
    {
        return $this->number1 + $this->number2;
    }
    
    private function minus(): int
    {
        return $this->number1 - $this->number2;
    }
    
    private function division(): int
    {
        return $this->number1 / $this->number2;
    }
    
    private function multiple(): int
    {
        return $this->number1 * $this->number2;
    }
    
    public function getResult(): ?int
    {
        return $this->result;
    }
    
    public function getErrors(): array
    {
        return $this->errors;
    }
}


