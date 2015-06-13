<?php

namespace eQuest\Api\QuestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="eQuest\Api\QuestBundle\Entity\MapRepository")
 */
class Map
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="building", type="string", length=255)
     */
    private $building;

    /**
     * @var integer
     *
     * @ORM\Column(name="floor_no", type="integer")
     */
    private $floorNo;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="text")
     */
    private $img;

    /**
     * @var integer
     *
     * @ORM\Column(name="domain_id", type="integer")
     */
    private $domainId;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Map
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set building
     *
     * @param string $building
     * @return Map
     */
    public function setBuilding($building)
    {
        $this->building = $building;

        return $this;
    }

    /**
     * Get building
     *
     * @return string 
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * Set floorNo
     *
     * @param integer $floorNo
     * @return Map
     */
    public function setFloorNo($floorNo)
    {
        $this->floorNo = $floorNo;

        return $this;
    }

    /**
     * Get floorNo
     *
     * @return integer 
     */
    public function getFloorNo()
    {
        return $this->floorNo;
    }

    /**
     * Set img
     *
     * @param string $img
     * @return Map
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set domainId
     *
     * @param integer $domainId
     * @return Map
     */
    public function setDomainId($domainId)
    {
        $this->domainId = $domainId;

        return $this;
    }

    /**
     * Get domainId
     *
     * @return integer 
     */
    public function getDomainId()
    {
        return $this->domainId;
    }
}
