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
     * @ORM\Column(name="[D[D[3~[3~[3~tus[3~[3~[3~[3~", type="integer")
     */
    private $[D[D[3~[3~[3~tus[3~[3~[3~[3~;

    /**
     * @var integer
     *
     * @ORM\Column(name="progress", type="integer")
     */
    private $progress;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalpoints", type="integer")
     */
    private $totalpoints;


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
     * @return UserQuests
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
     * Set [D[D[3~[3~[3~tus[3~[3~[3~[3~
     *
     * @param integer $[D[D[3~[3~[3~tus[3~[3~[3~[3~
     * @return UserQuests
     */
    public function set[D[D[3~[3~[3~tus[3~[3~[3~[3~($[D[D[3~[3~[3~tus[3~[3~[3~[3~)
    {
        $this->[D[D[3~[3~[3~tus[3~[3~[3~[3~ = $[D[D[3~[3~[3~tus[3~[3~[3~[3~;

        return $this;
    }

    /**
     * Get [D[D[3~[3~[3~tus[3~[3~[3~[3~
     *
     * @return integer 
     */
    public function get[D[D[3~[3~[3~tus[3~[3~[3~[3~()
    {
        return $this->[D[D[3~[3~[3~tus[3~[3~[3~[3~;
    }

    /**
     * Set progress
     *
     * @param integer $progress
     * @return UserQuests
     */
    public function setProgress($progress)
    {
        $this->progress = $progress;

        return $this;
    }

    /**
     * Get progress
     *
     * @return integer 
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * Set totalpoints
     *
     * @param integer $totalpoints
     * @return UserQuests
     */
    public function setTotalpoints($totalpoints)
    {
        $this->totalpoints = $totalpoints;

        return $this;
    }

    /**
     * Get totalpoints
     *
     * @return integer 
     */
    public function getTotalpoints()
    {
        return $this->totalpoints;
    }
}
