<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Listing
 *
 * @ORM\Table(name="listing")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ListingRepository")
 */
class Listing
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="userId", type="integer")
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="locationId", type="integer")
     */
    private $locationId;

    /**
     * @var int
     *
     * @ORM\Column(name="minQuantity", type="integer")
     */
    private $minQuantity;

    /**
     * @var int
     *
     * @ORM\Column(name="maxQuantity", type="integer")
     */
    private $maxQuantity;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer")
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="prestationDuration", type="string", length=255)
     */
    private $prestationDuration;


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
     * @return Listing
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
     * Set locationId
     *
     * @param integer $locationId
     * @return Listing
     */
    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * Get locationId
     *
     * @return integer 
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * Set minQuantity
     *
     * @param integer $minQuantity
     * @return Listing
     */
    public function setMinQuantity($minQuantity)
    {
        $this->minQuantity = $minQuantity;

        return $this;
    }

    /**
     * Get minQuantity
     *
     * @return integer 
     */
    public function getMinQuantity()
    {
        return $this->minQuantity;
    }

    /**
     * Set maxQuantity
     *
     * @param integer $maxQuantity
     * @return Listing
     */
    public function setMaxQuantity($maxQuantity)
    {
        $this->maxQuantity = $maxQuantity;

        return $this;
    }

    /**
     * Get maxQuantity
     *
     * @return integer 
     */
    public function getMaxQuantity()
    {
        return $this->maxQuantity;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Listing
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return Listing
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set prestationDuration
     *
     * @param string $prestationDuration
     * @return Listing
     */
    public function setPrestationDuration($prestationDuration)
    {
        $this->prestationDuration = $prestationDuration;

        return $this;
    }

    /**
     * Get prestationDuration
     *
     * @return string 
     */
    public function getPrestationDuration()
    {
        return $this->prestationDuration;
    }
}
