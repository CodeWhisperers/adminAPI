<?php

namespace eQuest\Api\QuestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quest
 */
class Quest
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $img;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $active;

    /**
     * @var integer
     */
    private $achivmentId;


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
     * @return Quest
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
     * Set img
     *
     * @param string $img
     * @return Quest
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
     * Set description
     *
     * @param string $description
     * @return Quest
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set active
     *
     * @param integer $active
     * @return Quest
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return integer 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set achivmentId
     *
     * @param integer $achivmentId
     * @return Quest
     */
    public function setAchivmentId($achivmentId)
    {
        $this->achivmentId = $achivmentId;

        return $this;
    }

    /**
     * Get achivmentId
     *
     * @return integer 
     */
    public function getAchivmentId()
    {
        return $this->achivmentId;
    }
}
