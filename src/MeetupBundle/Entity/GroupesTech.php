<?php

namespace MeetupBundle\Entity;

/**
 * GroupesTech
 */
class GroupesTech
{
    /**
     * @var integer
     */
    private $index;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $members;

    /**
     * @var string
     */
    private $city;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set index
     *
     * @param integer $index
     *
     * @return GroupesTech
     */
    public function setIndex($index)
    {
        $this->index = $index;
    
        return $this;
    }

    /**
     * Get index
     *
     * @return integer
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return GroupesTech
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
     * Set created
     *
     * @param integer $created
     *
     * @return GroupesTech
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return integer
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set members
     *
     * @param integer $members
     *
     * @return GroupesTech
     */
    public function setMembers($members)
    {
        $this->members = $members;
    
        return $this;
    }

    /**
     * Get members
     *
     * @return integer
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return GroupesTech
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
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

