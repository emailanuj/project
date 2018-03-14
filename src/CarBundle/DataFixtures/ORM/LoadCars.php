<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CarBundle\DataFixtures\ORM;
use CarBundle\Entity\Car;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of LoadCars
 *
 * @author anujdubey
 */
class LoadCars extends AbstractFixture implements OrderedFixtureInterface{
    /**
     * Load DataFixtures with the passed EntityManager
     * 
     * @param \CarBundle\DataFixtures\ORM\ObjectManage $manager
     */    
    public function load(ObjectManager $manager){
        $car1=new Car();
        $car1->setModel($this->getReference("X1"));
        $car1->setMake($this->getReference("Ferrari"));
        $car1->setPrice(123);
        
        $car2=new Car();
        $car2->setModel($this->getReference("X2"));
        $car2->setMake($this->getReference("Innova"));
        $car2->setPrice(1234);
        
        $car3=new Car();
        $car3->setModel($this->getReference("X3"));
        $car3->setMake($this->getReference("Scoda"));
        $car3->setPrice(124);
        
        $car4=new Car();
        $car4->setModel($this->getReference("X4"));
        $car4->setMake($this->getReference("Honda"));
        $car4->setPrice(12);
        
        $car5=new Car();
        $car5->setModel($this->getReference("X5"));
        $car5->setMake($this->getReference("Jaguar"));
        $car5->setPrice(123);
        
        $car6=new Car();
        $car6->setModel($this->getReference("X6"));
        $car6->setMake($this->getReference("Volcs Wagon"));
        $car6->setPrice(123);
       
       
        $manager->persist($car1);
        $manager->persist($car2);
        $manager->persist($car3);
        $manager->persist($car4);
        $manager->persist($car5);
        $manager->persist($car6);
        $manager->flush();
        
}
    /**
    * Get the Order of the fixture
    * 
    * @return int
    */
    public function getOrder(){
        return 2;
    }
}
