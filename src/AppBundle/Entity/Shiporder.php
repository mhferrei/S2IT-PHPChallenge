<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shiporder
 *
 * @ORM\Table(name="shiporder")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ShiporderRepository")
 */
class Shiporder
{
    
    /**
     * @var int
     *
     * @ORM\Column(name="orderid", type="integer", unique=true)
     * @ORM\Id
     */
    private $orderid;

    /**
     * @var int
     * 
     * @ORM\ManyToOne(targetEntity="Person")
     * @ORM\JoinColumn(name="orderperson", referencedColumnName="personid")
     */
    private $orderperson;

    /**
     * @var string
     *
     * @ORM\Column(name="shiptoname", type="string", length=100)
     */
    private $shiptoname;

    /**
     * @var string
     *
     * @ORM\Column(name="shiptoaddress", type="string", length=200)
     */
    private $shiptoaddress;

    /**
     * @var string
     *
     * @ORM\Column(name="shiptocity", type="string", length=100)
     */
    private $shiptocity;

    /**
     * @var string
     *
     * @ORM\Column(name="shiptocountry", type="string", length=50)
     */
    private $shiptocountry;



    /**
     * Set orderid
     *
     * @param integer $orderid
     * @return Shiporder
     */
    public function setOrderid($orderid)
    {
        $this->orderid = $orderid;

        return $this;
    }

    /**
     * Get orderid
     *
     * @return integer 
     */
    public function getOrderid()
    {
        return $this->orderid;
    }

    /**
     * Set shiptoname
     *
     * @param string $shiptoname
     * @return Shiporder
     */
    public function setShiptoname($shiptoname)
    {
        $this->shiptoname = $shiptoname;

        return $this;
    }

    /**
     * Get shiptoname
     *
     * @return string 
     */
    public function getShiptoname()
    {
        return $this->shiptoname;
    }

    /**
     * Set shiptoaddress
     *
     * @param string $shiptoaddress
     * @return Shiporder
     */
    public function setShiptoaddress($shiptoaddress)
    {
        $this->shiptoaddress = $shiptoaddress;

        return $this;
    }

    /**
     * Get shiptoaddress
     *
     * @return string 
     */
    public function getShiptoaddress()
    {
        return $this->shiptoaddress;
    }

    /**
     * Set shiptocity
     *
     * @param string $shiptocity
     * @return Shiporder
     */
    public function setShiptocity($shiptocity)
    {
        $this->shiptocity = $shiptocity;

        return $this;
    }

    /**
     * Get shiptocity
     *
     * @return string 
     */
    public function getShiptocity()
    {
        return $this->shiptocity;
    }

    /**
     * Set shiptocountry
     *
     * @param string $shiptocountry
     * @return Shiporder
     */
    public function setShiptocountry($shiptocountry)
    {
        $this->shiptocountry = $shiptocountry;

        return $this;
    }

    /**
     * Get shiptocountry
     *
     * @return string 
     */
    public function getShiptocountry()
    {
        return $this->shiptocountry;
    }

    /**
     * Set orderperson
     *
     * @param \AppBundle\Entity\Person $orderperson
     * @return Shiporder
     */
    public function setOrderperson(\AppBundle\Entity\Person $orderperson = null)
    {
        $this->orderperson = $orderperson;

        return $this;
    }

    /**
     * Get orderperson
     *
     * @return \AppBundle\Entity\Person 
     */
    public function getOrderperson()
    {
        return $this->orderperson;
    }
}
