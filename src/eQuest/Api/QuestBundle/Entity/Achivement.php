<?php

namespace eQuest\Api\QuestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Achivement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="eQuest\Api\QuestBundle\Entity\AchivementRepository")
 */
class Achivement
{
    private $id;

    private $name;

    private $status;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

}
