<?php

class GumballMachine
{
private $gumball;

    /**
     * @return mixed
     */
    public function getGumball()
    {
        return $this->gumball;
    }

    /**
     * @param mixed $gumball
     */
    public function setGumball($amount)
    {
        $this->gumball = $amount;
    }
    public function turnWhee()
    {
        $this->$this->setGumball($this->getGumball() -1);
    }
}