<?php


class RobotFactory
{

    private array $robots;


    /**
     * @param Robot $robot
     */
    public function addType(Robot $robot)
    {

        $this->robots[get_class($robot)] = $robot;

    }


    /**
     * @param $method
     * @param $args
     * @return array
     * @throws Exception
     */
    public function __call($method, $args)
    {

        $type = str_replace('create', '', $method);


        if (array_key_exists($type, $this->robots) and isset($args[0]) and $args[0] > 0) {

            $robots = [];

            for ($i = 0; $i < $args[0]; $i++) {

                $robots[$i] = $this->robots[$type];
            }

            return $robots;

        }

        throw new Exception('There is not robot with type: ' . $type);

    }

    public function reset(){

        $this->robots = [];

    }

}