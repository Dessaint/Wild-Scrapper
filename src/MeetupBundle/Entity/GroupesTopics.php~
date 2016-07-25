<?php

namespace MeetupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupesTopics
 *
 * @ORM\Table(name="groupes_topics")
 * @ORM\Entity(repositoryClass="MeetupBundle\Repository\GroupesTopicsRepository")
 */
class GroupesTopics
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
     * @ORM\Column(name="idGroupe", type="integer")
     */
    private $idGroupe;

    /**
     * @var int
     *
     * @ORM\Column(name="idTopic", type="integer")
     */
    private $idTopic;


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
     * Set idGroupe
     *
     * @param integer $idGroupe
     *
     * @return GroupesTopics
     */
    public function setIdGroupe($idGroupe)
    {
        $this->idGroupe = $idGroupe;

        return $this;
    }

    /**
     * Get idGroupe
     *
     * @return integer
     */
    public function getIdGroupe()
    {
        return $this->idGroupe;
    }

    /**
     * Set idTopic
     *
     * @param integer $idTopic
     *
     * @return GroupesTopics
     */
    public function setIdTopic($idTopic)
    {
        $this->idTopic = $idTopic;

        return $this;
    }

    /**
     * Get idTopic
     *
     * @return integer
     */
    public function getIdTopic()
    {
        return $this->idTopic;
    }
}
