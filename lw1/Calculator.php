<?php

class calculator
{
    public int $res = 0;
    public int $number = 0;
    public bool $nol = false;
    function sum($number): self
    {
        $this->res += $number;
        return $this;
    }
    function min($number): self
    {
        $this->res -= $number;
        return $this;
    }
    function pro($number): self
    {
        $this->res *= $number;
        return $this;
    }
    function div($number): self
    {
        if ($number === 0) {
            $this->nol = true;
        } else {
            $this->res = $this->res / $number;
        }
        return $this;
    }
    function getResult(): int
    {
        if ($this->nol === false) {
            return $this->res;
        }
        if ($this->nol === true) {
            $this->res = 0;
            return $this->res;
        }
    }
}

$Calculator = new calculator();
echo $Calculator->sum(3)->min(2)->div(1)->pro(9)->getResult();
