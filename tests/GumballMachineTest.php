<?php

require 'GumballMachine.php';

class GumballMachineTest extends PHPUnit_Framework_TestCase
{
    public $gumballMachineInstance;
    //prof
    private $nom1="XXX1";
    private $nom2="XX2";
    private $nom3="XXX3";
    
    private $prenom1="YYY1";
    private $prenom2="YYY2";
    private $prenom3="YYY3";
    
    private $date_naissanc1="1980-09-29";
    private $date_naissanc2="1981-10-30";
    private $date_naissanc3="1982-12-31";
    
    private $lieu_naissance1="ZZZ1";
    private $lieu_naissance2="ZZZ2";
    private $lieu_naissance3="ZZZ3";
    
    // cours
    
    private $intitule1="IOT";
    private $intitule2="IA";
    private $intitule3="C++";
    private $intitule4="EDL";
    
    private $duree1="10";
    private $duree2="12";
    private $duree3="18";
    private $duree4="30";
    
        
    public function setUp()
    {
        $this->gumballMachineInstance = new GumballMachine();
    }
    
    public function testAffichageProfAVI()
    {
        $this->assertEquals(true,$this->gumballMachineInstance->AffichageProf("Before Insertion of Professors"));
    }
    public function testInsertP()
    {
        $max__id1=$this->gumballMachineInstance->GetLastIDP();
        $this->assertEquals(true,$this->gumballMachineInstance->InsertP($this->gumballMachineInstance->getDB(),$this->nom1,$this->prenom1,$this->date_naissance1,$this->lieu_naissance1));
        $max__id2=$this->gumballMachineInstance->GetLastIDP();
        $this->assertEquals($max__id1+1,$max__id2);
        
        $max__id1=$this->gumballMachineInstance->GetLastIDP();
        $this->assertEquals(true,$this->gumballMachineInstance->InsertP($this->gumballMachineInstance->getDB(),$this->nom2,$this->prenom2,$this->date_naissance2,$this->lieu_naissance2));
        $max__id2=$this->gumballMachineInstance->GetLastIDP();
        $this->assertEquals($max__id1+1,$max__id2);
        
        $max__id1=$this->gumballMachineInstance->GetLastIDP();
        $this->assertEquals(true,$this->gumballMachineInstance->InsertP($this->gumballMachineInstance->getDB(),$this->nom3,$this->prenom3,$this->date_naissance3,$this->lieu_naissance3));
        $max__id2=$this->gumballMachineInstance->GetLastIDP();
        $this->assertEquals($max__id1+1,$max__id2);
    }
    public function testAffichageProfAPI()
    {
        /*à completer*/
    }
     
    
    public function testAffichageCoursAVI()
    {
        /*à completer*/
    }
    public function testInsertC()
    {
       
        $max__id1=$this->gumballMachineInstance->GetLastIDP();
        $this->assertEquals(true,$this->gumballMachineInstance->Insertc($this->gumballMachineInstance->getDB(),$this->intitule1,$this->duree1, 2));
        $max__id2=$this->gumballMachineInstance->GetLastIDP();
        $this->assertEquals($max__id1+1,$max__id2);
        
        $max__id1=$this->gumballMachineInstance->GetLastIDP()
        $this->assertEquals(true,$this->gumballMachineInstance->Insertc($this->gumballMachineInstance->getDB(),$this->intitule2,$this->duree2, 1));
        $max__id2=$this->gumballMachineInstance->GetLastIDP();
        $this->assertEquals($max__id1+1,$max__id2);
        
        $max__id1=$this->gumballMachineInstance->GetLastIDP();
        $this->assertEquals(true,$this->gumballMachineInstance->Insertc($this->gumballMachineInstance->getDB(),$this->intitule3,$this->duree3, 3));
        $max__id2=$this->gumballMachineInstance->GetLastIDP();
        $this->assertEquals($max__id1+1,$max__id2);
        
        $max__id1=$this->gumballMachineInstance->GetLastIDP();
        $this->assertEquals(true,$this->gumballMachineInstance->Insertc($this->gumballMachineInstance->getDB(),$this->intitule4,$this->duree4, 3));
        $max__id2=$this->gumballMachineInstance->GetLastIDP();
        $this->assertEquals($max__id1+1,$max__id2);
        
    }
    public function testAffichageCoursAPI()
    {
        /*à completer*/
    }

   
}
