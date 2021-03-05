<?php


class Robot2 extends Robot
{

    private const MAX_HEIGHT = 7;
    private const MIN_HEIGHT = 2;
    private const MAX_WEIGHT = 500;
    private const MIN_WEIGHT = 100;
    private const MAX_SPEED = 200;
    private const MIN_SPEED = 50;



    public function __construct()
    {

        $this->height = rand(self::MAX_HEIGHT, self::MIN_HEIGHT);
        $this->weight = rand(self::MAX_WEIGHT, self::MIN_WEIGHT);
        $this->speed = rand(self::MAX_SPEED, self::MIN_SPEED);

    }

}