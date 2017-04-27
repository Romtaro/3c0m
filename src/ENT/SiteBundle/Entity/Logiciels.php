<?php

namespace ENT\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logiciels
 *
 * @ORM\Table(name="logiciels")
 * @ORM\Entity(repositoryClass="ENT\SiteBundle\Repository\LogicielsRepository")
 */
class Logiciels
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
     * @ORM\Column(name="id_logiciels", type="bigint", unique=true)
     */
    private $idLogiciels;

    /**
     * @var int
     *
     * @ORM\Column(name="id_cat", type="smallint")
     */
    private $idCat;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=40)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="taille", type="bigint")
     */
    private $taille;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_enregistrement", type="date")
     */
    private $dateEnregistrement;


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
     * Set idLogiciels
     *
     * @param integer $idLogiciels
     *
     * @return Logiciels
     */
    public function setIdLogiciels($idLogiciels)
    {
        $this->idLogiciels = $idLogiciels;

        return $this;
    }

    /**
     * Get idLogiciels
     *
     * @return int
     */
    public function getIdLogiciels()
    {
        return $this->idLogiciels;
    }

    /**
     * Set idCat
     *
     * @param integer $idCat
     *
     * @return Logiciels
     */
    public function setIdCat($idCat)
    {
        $this->idCat = $idCat;

        return $this;
    }

    /**
     * Get idCat
     *
     * @return int
     */
    public function getIdCat()
    {
        return $this->idCat;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Logiciels
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set taille
     *
     * @param integer $taille
     *
     * @return Logiciels
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return int
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set dateEnregistrement
     *
     * @param \DateTime $dateEnregistrement
     *
     * @return Logiciels
     */
    public function setDateEnregistrement($dateEnregistrement)
    {
        $this->dateEnregistrement = $dateEnregistrement;

        return $this;
    }

    /**
     * Get dateEnregistrement
     *
     * @return \DateTime
     */
    public function getDateEnregistrement()
    {
        return $this->dateEnregistrement;
    }
}

