<?php

namespace MeetupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Topics
 *
 * @ORM\Table(name="topics")
 * @ORM\Entity(repositoryClass="MeetupBundle\Repository\TopicsRepository")
 */
class Topics
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\OneToOne(targetEntity="Groupes_Topics", mappedBy="topics")
     */
    private $groupes_topics;

    public function __construct() {

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
     * Set name
     *
     * @param string $name
     * @return Topics
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
     * Add groupe
     *
     * @param \MeetupBundle\Entity\Groupes $groupe
     *
     * @return Topics
     */
    public function addGroupe(\MeetupBundle\Entity\Groupes $groupe)
    {
        $this->groupes[] = $groupe;

        return $this;
    }

    /**
     * Remove groupe
     *
     * @param \MeetupBundle\Entity\Groupes $groupe
     */
    public function removeGroupe(\MeetupBundle\Entity\Groupes $groupe)
    {
        $this->groupes->removeElement($groupe);
    }

    /**
     * Get groupes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroupes()
    {
        return $this->groupes;
    }

    /**
     * Set groupesTopics
     *
     * @param \MeetupBundle\Entity\Groupes_Topics $groupesTopics
     *
     * @return Topics
     */
    public function setGroupesTopics(\MeetupBundle\Entity\Groupes_Topics $groupesTopics = null)
    {
        $this->groupes_topics = $groupesTopics;
    
        return $this;
    }

    /**
     * Get groupesTopics
     *
     * @return \MeetupBundle\Entity\Groupes_Topics
     */
    public function getGroupesTopics()
    {
        return $this->groupes_topics;
    }
}
