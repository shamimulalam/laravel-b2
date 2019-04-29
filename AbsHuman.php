<?php
include 'HumanInterface.php';


abstract class AbsHuman implements HumanInterface
{
    public function sleep()
    {
        echo 'This is sleep method';
    }
    public function move()
    {
        echo 'This is move method';
    }
    public function eat()
    {
        echo 'This is eat method';
    }
    abstract public function voice();
}