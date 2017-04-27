<?php

namespace ENT\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Documentation
 *
 * @ORM\Table(name="membre")
 * @ORM\Entity(repositoryClass="ENT\SiteBundle\Repository\AdminpageRepository")
 */
class Documentation
{

    /**
     * @var int
     *
     * @ORM\Column(name="id_membre", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="statut", type="smallint")
     */
    private $status;

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
     * Set statut
     *
     * @param integer $statut
     *
     * @return Adminpage
     */
    public function setStatut($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get statut
     *
     * @return int
     */
    public function getStatut()
    {
        return $this->status;
    }
}
