<?php

namespace eQuest\Api\QuestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserAchivements
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="eQuest\Api\QuestBundle\Entity\UserAchivementsRepository")
 */
class UserAchivements
{
    private $id;

    private $userId;

    private $achivementId;

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
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getAchivementId()
    {
        return $this->achivementId;
    }

    /**
     * @param mixed $achivementId
     */
    public function setAchivementId($achivementId)
    {
        $this->achivementId = $achivementId;
    }

}
