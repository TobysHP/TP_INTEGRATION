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
    
    private $date_naissance1="1980-09-29";
    private $date_naissance2="1981-10-30";
    private $date_naissance3="1982-12-31";
    
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
        $this->assertEquals(true,$this->gumballMachineInstance->AffichageProf("After Insertion of Professors"));
    }
     
    
    public function testAffichageCoursAVI()
    {
        $this->assertEquals(true,$this->gumballMachineInstance->AffichageCours("After Insertion of Cours"));
    }
    public function testInsertC()
    {
        $max__id1=$this->gumballMachineInstance->GetLastIDC();
        $this->assertEquals(true,$this->intitule1,$this->duree1, $this->gumballMachineInstance->GetIdP($this->nom2,$this->prenom2)));
        $max__id2=$this->gumballMachineInstance->GetLastIDC();
        $this->assertEquals($max__id1+1,$max__id2);
        
        $max__id1=$this->gumballMachineInstance->GetLastIDC();
        $this->assertEquals(true,$this->intitule2,$this->duree2, $this->gumballMachineInstance->GetIdP($this->nom1,$this->prenom1)));
        $max__id2=$this->gumballMachineInstance->GetLastIDC();
        $this->assertEquals($max__id1+1,$max__id2);
        
        $max__id1=$this->gumballMachineInstance->GetLastIDC();
        $this->assertEquals(true,$this->intitule3,$this->duree3, $this->gumballMachineInstance->GetIdP($this->nom3,$this->prenom3)));
        $max__id2=$this->gumballMachineInstance->GetLastIDC();
        $this->assertEquals($max__id1+1,$max__id2);
        
        $max__id1=$this->gumballMachineInstance->GetLastIDC();
        $this->assertEquals(true,$this->intitule4,$this->duree4, $this->gumballMachineInstance->GetIdP($this->nom3,$this->prenom3)));
        $max__id2=$this->gumballMachineInstance->GetLastIDC();
        $this->assertEquals($max__id1+1,$max__id2);
        
    }
    public function testAffichageCoursAPI()
    {
         $this->assertEquals(true,$this->gumballMachineInstance->AffichageCours("After Insertion of Cours"));
    }
    
    public function clearDB()
    {
        /*try 
	    {
	       $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	       $sql = "DELETE *"
	       $bdd->exec($sql);
	       return true;
	    }
	    catch(PDOException $e)
	    {
	        echo $sql . "<br>" . $e->getMessage();
	        return false;
	    }*/
    }

   
}
