<?php



class RobotMerger
{

    private float $height;
    private float $weight;
    private float $speed;

    /**
     * RobotMerger constructor.
     */
    public function __construct()
    {
        $this->height = 0;
        $this->weight = 0;

    }

    /**
     * @param $robots
     */
    public function addRobot($robots){

        if (gettype($robots) == 'array'){

            foreach ($robots as $robot){

                $this->setProps($robot);

            }

        } else  {

            $this->setProps($robots);

        }
    }

    /**
     * @param Robot $robot
     */
    private function setProps(Robot $robot){

        $this->height += $robot->getHeight();
        $this->weight += $robot->getWeight();

        if(!isset($this->speed) or $this->speed > $robot->getSpeed()){

            $this->speed = $robot->getSpeed();

        }

    }

    /**
     * @return Robot
     */
    public function getMergedRobot(): Robot
    {
        $margeRobot = new Robot();

        $margeRobot->setHeight($this->height);
        $margeRobot->setWeight($this->weight);
        $margeRobot->setSpeed($this->speed);

        return $margeRobot ;
    }

}