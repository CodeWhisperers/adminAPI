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
    private $status;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $ts;

    /**
     * @var integer
     */
    private $targets_to_achive;


    /**
     * @var integer
     */
    private $t_xp;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getTs()
    {
        return $this->ts;
    }

    /**
     * @param int $ts
     */
    public function setTs($ts)
    {
        $this->ts = $ts;
    }

    /**
     * @return int
     */
    public function getTargetsToAchive()
    {
        return $this->targets_to_achive;
    }

    /**
     * @param int $targets_to_achive
     */
    public function setTargetsToAchive($targets_to_achive)
    {
        $this->targets_to_achive = $targets_to_achive;
    }

    /**
     * @return int
     */
    public function getTXp()
    {
        return $this->t_xp;
    }

    /**
     * @param int $t_xp
     */
    public function setTXp($t_xp)
    {
        $this->t_xp = $t_xp;
    }

}
