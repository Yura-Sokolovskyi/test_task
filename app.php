<?php

require ('Robot.php');
require ('Robot1.php');
require ('Robot2.php');
require('RobotFactory.php');
require('RobotMerger.php');

$marge = new RobotMerger();
$factory = new RobotFactory();

$factory->addType(new Robot1());
$factory->addType(new Robot2());

$rob1 = $factory->createRobot1(2);
$rob2 = new Robot1();


$marge->addRobot($rob1);
$marge->addRobot($rob2);




$factory->reset();

$factory->addType($marge->getMergedRobot());

var_dump($factory->createRobot(3));






