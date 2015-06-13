<?php

namespace eQuest\Api\QuestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserQuests
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="eQuest\Api\QuestBundle\Entity\UserQuestsRepository")
 */
class UserQuests
{
    private $id;

    private $userId;

    private $status;

    private $progress;

    private $quests_id;

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

    /**
     * @return mixed
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * @param mixed $progress
     */
    public function setProgress($progress)
    {
        $this->progress = $progress;
    }

    /**
     * @return mixed
     */
    public function getQuestsId()
    {
        return $this->quests_id;
    }

    /**
     * @param mixed $quests_id
     */
    public function setQuestsId($quests_id)
    {
        $this->quests_id = $quests_id;
    }

}
