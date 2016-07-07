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
     * @ORM\Column(name="id_groupes", type="integer", unique=true)
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
     * @ORM\Column(name="created", type="integer", nullable=true)
     */
    private $created;


    /**
     * Get id
     *
     * @return int
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
     * @return int
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
     * @param string $rsvp
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
     * @return string
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
     * @return int
     */
    public function getCreated()
    {
        return $this->created;
    }
}
