<?php

class Robot1 extends Robot
{

    private const MAX_HEIGHT = 5;
    private const MIN_HEIGHT = 1;
    private const MAX_WEIGHT = 5000;
    private const MIN_WEIGHT = 50;
    private const MAX_SPEED = 100;
    private const MIN_SPEED = 10;



    public function __construct()
    {

        $this->height = rand(self::MAX_HEIGHT, self::MIN_HEIGHT);
        $this->weight = rand(self::MAX_WEIGHT, self::MIN_WEIGHT);
        $this->speed = rand(self::MAX_SPEED, self::MIN_SPEED);

    }

}