<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table(name="person")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersonRepository")
 */
class Person
{
    
    /** 
     * @var int
     *
     * @ORM\Column(name="personid", type="integer", unique=true)
     * @ORM\Id
     */
    public $personid;

    /**
     * @var string
     *
     * @ORM\Column(name="personname", type="string", length=100)
     */
    public $personname;

    /**
     * @var int
     *
     * @ORM\Column(name="phone1", type="integer", nullable=true)
     */
    public $phone1;
    
    /**
	* @var int
	* 
	* @ORM\Column(name="phone2", type="integer", nullable=true)
	*/
	public $phone2;


    /**
     * Set personid
     *
     * @param integer $personid
     * @return Person
     */
    public function setPersonid($personid)
    {
        $this->personid = $personid;

        return $this;
    }

    /**
     * Get personid
     *
     * @return integer 
     */
    public function getPersonid()
    {
        return $this->personid;
    }

    /**
     * Set personname
     *
     * @param string $personname
     * @return Person
     */
    public function setPersonname($personname)
    {
        $this->personname = $personname;

        return $this;
    }

    /**
     * Get personname
     *
     * @return string 
     */
    public function getPersonname()
    {
        return $this->personname;
    }

    /**
     * Set phone1
     *
     * @param integer $phone1
     * @return Person
     */
    public function setPhone1($phone1)
    {
        $this->phone1 = $phone1;

        return $this;
    }

    /**
     * Get phone1
     *
     * @return integer 
     */
    public function getPhone1()
    {
        return $this->phone1;
    }
    
    
    /**
     * Set phone2
     *
     * @param integer $phone2
     * @return Person
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;

        return $this;
    }

    /**
     * Get phone2
     *
     * @return integer 
     */
    public function getPhone2()
    {
        return $this->phone2;
    }
}
