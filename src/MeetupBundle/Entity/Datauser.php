<?php

namespace MeetupBundle\Entity;

/**
 * Datauser
 */
class Datauser
{
    /**
     * @var string
     */
    private $usernom;

    /**
     * @var string
     */
    private $userprenom;

    /**
     * @var string
     */
    private $userville;

    /**
     * @var string
     */
    private $userfonction;

    /**
     * @var string
     */
    private $userImage;

    /**
     * @var integer
     */
    private $userid;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set usernom
     *
     * @param string $usernom
     *
     * @return Datauser
     */
    public function setUsernom($usernom)
    {
        $this->usernom = $usernom;
    
        return $this;
    }

    /**
     * Get usernom
     *
     * @return string
     */
    public function getUsernom()
    {
        return $this->usernom;
    }

    /**
     * Set userprenom
     *
     * @param string $userprenom
     *
     * @return Datauser
     */
    public function setUserprenom($userprenom)
    {
        $this->userprenom = $userprenom;
    
        return $this;
    }

    /**
     * Get userprenom
     *
     * @return string
     */
    public function getUserprenom()
    {
        return $this->userprenom;
    }

    /**
     * Set userville
     *
     * @param string $userville
     *
     * @return Datauser
     */
    public function setUserville($userville)
    {
        $this->userville = $userville;
    
        return $this;
    }

    /**
     * Get userville
     *
     * @return string
     */
    public function getUserville()
    {
        return $this->userville;
    }

    /**
     * Set userfonction
     *
     * @param string $userfonction
     *
     * @return Datauser
     */
    public function setUserfonction($userfonction)
    {
        $this->userfonction = $userfonction;
    
        return $this;
    }

    /**
     * Get userfonction
     *
     * @return string
     */
    public function getUserfonction()
    {
        return $this->userfonction;
    }

    /**
     * Set userImage
     *
     * @param string $userImage
     *
     * @return Datauser
     */
    public function setUserImage($userImage)
    {
        $this->userImage = $userImage;
    
        return $this;
    }

    /**
     * Get userImage
     *
     * @return string
     */
    public function getUserImage()
    {
        return $this->userImage;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     *
     * @return Datauser
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    
        return $this;
    }

    /**
     * Get userid
     *
     * @return integer
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

