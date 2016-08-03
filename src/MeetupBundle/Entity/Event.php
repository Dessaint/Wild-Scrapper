<?php

namespace MeetupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="MeetupBundle\Repository\EventRepository")
 */
class Event
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
     * @ORM\Column(name="id_groupes", type="integer", nullable=true)
     */
    private $idGroupes;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="rsvp", type="integer", nullable=true)
     */
    private $rsvp;

    /**
     * @var int
     *
     * @ORM\Column(name="created", type="bigint", nullable=true)
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="topic", type="string", nullable=true)
     */
    private $topic;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", nullable=true)
     */
    private $ville;

    /**
     * @var int
     *
     * @ORM\Column(name="rating", type="float", nullable=true)
     */
    private $rating;

    /**
     * @var string
     *
     * @ORM\Column(name="namegroup", type="string", nullable=true)
     */
    private $nameGroup;

    /**
     * @var datetime
     *
     * @ORM\Column(name="createdAt", type="datetime", nullable=true)
     */
    private $date;

    public function __construct()
    {
        $this->date = new \DateTime('now');     
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

    /**
     * Set idGroupes
     *
     * @param integer $idGroupes
     *
     * @return Event
     */
    public function setIdGroupes($idGroupes)
    {
        $this->idGroupes = $idGroupes;

        return $this;
    }

    /**
     * Get idGroupes
     *
     * @return integer
     */
    public function getIdGroupes()
    {
        return $this->idGroupes;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Event
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
     * Set rsvp
     *
     * @param integer $rsvp
     *
     * @return Event
     */
    public function setRsvp($rsvp)
    {
        $this->rsvp = $rsvp;

        return $this;
    }

    /**
     * Get rsvp
     *
     * @return integer
     */
    public function getRsvp()
    {
        return $this->rsvp;
    }

    /**
     * Set created
     *
     * @param integer $created
     *
     * @return Event
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
     * Set topic
     *
     * @param string $topic
     *
     * @return Event
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * Get topic
     *
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Event
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set rating
     *
     * @param float $rating
     *
     * @return Event
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return float
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set nameGroup
     *
     * @param string $nameGroup
     *
     * @return Event
     */
    public function setNameGroup($nameGroup)
    {
        $this->nameGroup = $nameGroup;

        return $this;
    }

    /**
     * Get nameGroup
     *
     * @return string
     */
    public function getNameGroup()
    {
        return $this->nameGroup;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Event
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}
