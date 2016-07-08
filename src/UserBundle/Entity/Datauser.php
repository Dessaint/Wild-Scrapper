<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Datauser
 *
 * @ORM\Table(name="datauser")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\DatauserRepository")
 */
class Datauser
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
     * @ORM\Column(name="userNom", type="string", length=255, nullable=true)
     */
    private $userNom;

    /**
     * @var string
     *
     * @ORM\Column(name="userPrenom", type="string", length=255, nullable=true)
     */
    private $userPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="userVille", type="string", length=255, nullable=true)
     */
    private $userVille;

    /**
     * @var string
     *
     * @ORM\Column(name="userFonction", type="string", length=255, nullable=true)
     */
    private $userFonction;

    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Please, upload the product brochure as a JPEG file.")
     * @Assert\File(maxSize = "5M", mimeTypes={ "image/jpeg" })
     */
    private $userImage;

    /**
     * @var int
     *
     * @ORM\Column(name="userId", type="integer", unique=true)
     * @ORM\OneToOne(targetEntity="UserBundle\Entity\User", cascade={"persist"})
     */
    private $userId;


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
     * Set userNom
     *
     * @param string $userNom
     *
     * @return Datauser
     */
    public function setUserNom($userNom)
    {
        $this->userNom = $userNom;

        return $this;
    }

    /**
     * Get userNom
     *
     * @return string
     */
    public function getUserNom()
    {
        return $this->userNom;
    }

    /**
     * Set userPrenom
     *
     * @param string $userPrenom
     *
     * @return Datauser
     */
    public function setUserPrenom($userPrenom)
    {
        $this->userPrenom = $userPrenom;

        return $this;
    }

    /**
     * Get userPrenom
     *
     * @return string
     */
    public function getUserPrenom()
    {
        return $this->userPrenom;
    }

    /**
     * Set userVille
     *
     * @param string $userVille
     *
     * @return Datauser
     */
    public function setUserVille($userVille)
    {
        $this->userVille = $userVille;

        return $this;
    }

    /**
     * Get userVille
     *
     * @return string
     */
    public function getUserVille()
    {
        return $this->userVille;
    }

    /**
     * Set userFonction
     *
     * @param string $userFonction
     *
     * @return Datauser
     */
    public function setUserFonction($userFonction)
    {
        $this->userFonction = $userFonction;

        return $this;
    }

    /**
     * Get userFonction
     *
     * @return string
     */
    public function getUserFonction()
    {
        return $this->userFonction;
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
     * Set userId
     *
     * @param integer $userId
     *
     * @return Datauser
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
}
