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
     * @var int
     *
     * @ORM\Column(name="meetupgroupeid", type="integer", nullable=true)
     */
    private $meetupgroupeid;

    /**
     * @var int
     *
     * @ORM\Column(name="meetuptopicid", type="integer", nullable=true)
     */
    private $meetuptopicid;

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
     *
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

    /**
     * Set meetupgroupeid
     *
     * @param integer $meetupgroupeid
     *
     * @return Topics
     */
    public function setMeetupgroupeid($meetupgroupeid)
    {
        $this->meetupgroupeid = $meetupgroupeid;

        return $this;
    }

    /**
     * Get meetupgroupeid
     *
     * @return integer
     */
    public function getMeetupgroupeid()
    {
        return $this->meetupgroupeid;
    }

    /**
     * Set meetuptopicid
     *
     * @param integer $meetuptopicid
     *
     * @return Topics
     */
    public function setMeetuptopicid($meetuptopicid)
    {
        $this->meetuptopicid = $meetuptopicid;

        return $this;
    }

    /**
     * Get meetuptopicid
     *
     * @return integer
     */
    public function getMeetuptopicid()
    {
        return $this->meetuptopicid;
    }
}
