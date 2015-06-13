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
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="achivement_id", type="integer")
     */
    private $achivementId;


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
     * Set userId
     *
     * @param integer $userId
     * @return UserAchivements
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set achivementId
     *
     * @param integer $achivementId
     * @return UserAchivements
     */
    public function setAchivementId($achivementId)
    {
        $this->achivementId = $achivementId;

        return $this;
    }

    /**
     * Get achivementId
     *
     * @return integer 
     */
    public function getAchivementId()
    {
        return $this->achivementId;
    }
}
