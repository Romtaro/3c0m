<?php

namespace ENT\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Documentation
 *
 * @ORM\Table(name="documentation")
 * @ORM\Entity(repositoryClass="ENT\SiteBundle\Repository\DocumentationRepository")
 */
class Documentation
{

    /**
     * @var int
     *
     * @ORM\Column(name="id_documentation", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

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
    * @var Date
    *
    * @ORM\Column(name="date_enregistrement", type="date")
    */
   private $dateEnregistrement;

//    /**
  //   * @var int
  //   *
  //   * @ORM\Column(name="dfnmgj", type="smallint", unique=true)
  //   */
  //  private $idDocumentation;


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
     * Set idCat
     *
     * @param integer $idCat
     *
     * @return Documentation
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
     * @return Documentation
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
     * @return Documentation
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
     * Set dataEnregistrement
     *
     * @param Date $dateEnregistrement
     *
     * @return Documentation
     */
    public function setDateEnregistrement($dateEnregistrement)
    {
        $this->dateEnregistrement = $dateEnregistrement;

        return $this;
    }

    /**
     * Get dateEnregistrement
     *
     * @return Date
     */
    public function getDateEnregistrement()
    {
        return $this->dateEnregistrement;
    }

    /**
     * Set idDocumentation
     *
     * @param integer $idDocumentation
     *
     * @return Documentation
     */
    public function setIdDocumentation($idDocumentation)
    {
        $this->idDocumentation = $idDocumentation;

        return $this;
    }

    /**
     * Get idDocumentation
     *
     * @return int
     */
    public function getIdDocumentation()
    {
        return $this->idDocumentation;
    }
}
