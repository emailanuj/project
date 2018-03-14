<?php
namespace CarBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use CarBundle\Entity\Make;
use CarBundle\Entity\Model;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoadDictionary
 *
 * @author anujdubey
 */
class LoadDictionary extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){
        $make1=new Make();
        $make1->setName('Ferrari');
        
        $make2=new Make();
        $make2->setName('Innova');
        
        $make3=new Make();
        $make3->setName('Scoda');
        
        $make4=new Make();
        $make4->setName('Honda');
        
        $make5=new Make();
        $make5->setName('Jaguar');
        
        $make6=new Make();
        $make6->setName('Volcs Wagon');
        
        $manager->persist($make1);
        $manager->persist($make2);
        $manager->persist($make3);
        $manager->persist($make4);
        $manager->persist($make5);
        $manager->persist($make6);
        
        $model1=new Model();
        $model1->setName('X1');
        
        $model2=new Model();
        $model2->setName('X2');
        
        $model3=new Model();
        $model3->setName('X3');
        
        $model4=new Model();
        $model4->setName('X4');
        
        $model5=new Model();
        $model5->setName('X5');
        
        $model6=new Model();
        $model6->setName('X6');
        
        $manager->persist($model1);
        $manager->persist($model2);
        $manager->persist($model3);
        $manager->persist($model4);
        $manager->persist($model5);
        $manager->persist($model6);
        
        $this->addReference("X1",$model1);
        $this->addReference("X2",$model2);
        $this->addReference("X3",$model3);
        $this->addReference("X4",$model4);
        $this->addReference("X5",$model5);
        $this->addReference("X6",$model6);
        
        $this->addReference("Ferrari",$make1);
        $this->addReference("Innova",$make2);
        $this->addReference("Scoda",$make3);
        $this->addReference("Honda",$make4);
        $this->addReference("Jaguar",$make5);
        $this->addReference("Volcs Wagon",$make6);
        $manager->flush();
    }
   /**
    * Get the Order of the fixture
    * 
    * @return int
    */
    public function getOrder(){
        return 1;
    }
}
