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
     * @var integer
     *
     * @ORM\Column(name="[D[D[D[Ctus[3~[3~[3~[3~", type="integer")
     */
    private $[D[D[D[Ctus[3~[3~[3~[3~;


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
     * @return Achivement
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
     * Set [D[D[D[Ctus[3~[3~[3~[3~
     *
     * @param integer $[D[D[D[Ctus[3~[3~[3~[3~
     * @return Achivement
     */
    public function set[D[D[D[Ctus[3~[3~[3~[3~($[D[D[D[Ctus[3~[3~[3~[3~)
    {
        $this->[D[D[D[Ctus[3~[3~[3~[3~ = $[D[D[D[Ctus[3~[3~[3~[3~;

        return $this;
    }

    /**
     * Get [D[D[D[Ctus[3~[3~[3~[3~
     *
     * @return integer 
     */
    public function get[D[D[D[Ctus[3~[3~[3~[3~()
    {
        return $this->[D[D[D[Ctus[3~[3~[3~[3~;
    }
}
