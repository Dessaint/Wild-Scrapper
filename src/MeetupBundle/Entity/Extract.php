<?php

namespace MeetupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Extract
 *
 * @ORM\Table(name="extract")
 * @ORM\Entity(repositoryClass="MeetupBundle\Repository\ExtractRepository")
 */
class Extract
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
     * @ORM\Column(name="dateExtract", type="bigint", nullable=true)
     */
    private $dateExtract;


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
     * Set dateExtract
     *
     * @param integer $dateExtract
     *
     * @return Extract
     */
    public function setDateExtract($dateExtract)
    {
        $this->dateExtract = $dateExtract;

        return $this;
    }

    /**
     * Get dateExtract
     *
     * @return int
     */
    public function getDateExtract()
    {
        return $this->dateExtract;
    }
}
