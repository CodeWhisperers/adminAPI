<?php

namespace eQuest\Api\QuestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Points
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="eQuest\Api\QuestBundle\Entity\PointsRepository")
 */
class Points
{
    private $id;

    private $x;

    private $y;

    private $type;

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
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getMapId()
    {
        return $this->mapId;
    }

    /**
     * @param mixed $mapId
     */
    public function setMapId($mapId)
    {
        $this->mapId = $mapId;
    }

    /**
     * @return mixed
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param mixed $details
     */
    public function setDetails($details)
    {
        $this->details = $details;
    }

    /**
     * @return mixed
     */
    public function getQrCode()
    {
        return $this->qrCode;
    }

    /**
     * @param mixed $qrCode
     */
    public function setQrCode($qrCode)
    {
        $this->qrCode = $qrCode;
    }

    private $mapId;

    private $details;

    private $qrCode;

}
