<?php

namespace ENT\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Contact
 *
 * @ORM\Table(name="membre")
 * @ORM\Entity(repositoryClass="ENT\SiteBundle\Repository\ContactRepository")
 */
class Contact
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
   * @ORM\Column(name="id_membre", type="smallint", unique=true)
   */
  private $idMembre;

  /**
   * @var string
   *
   * @ORM\Column(name="pseudo", type="string", length=20, unique=true)
   */
  private $pseudo;

  /**
   * @var string
   *
   * @ORM\Column(name="mdp", type="string", length=32)
   */
  private $mdp;

  /**
   * @var string
   *
   * @ORM\Column(name="nom", type="string", length=20)
   */
  private $nom;

  /**
   * @var string
   *
   * @ORM\Column(name="prenom", type="string", length=20)
   */
  private $prenom;

  /**
   * @var string
   *
   * @ORM\Column(name="email", type="string", length=50, unique=true)
   */
  private $email;

  /**
   * @var int
   *
   * @ORM\Column(name="tel", type="bigint", unique=true)
   */
  private $tel;

  /**
   * @var string
   *
   * @ORM\Column(name="civilite", type="string", length=20)
   */
  private $civilite;

  /**
   * @var string
   *
   * @ORM\Column(name="ville", type="string", length=40)
   */
  private $ville;

  /**
   * @var int
   *
   * @ORM\Column(name="code_postal", type="bigint")
   */
  private $codePostal;

  /**
   * @var string
   *
   * @ORM\Column(name="adresse", type="string", length=100)
   */
  private $adresse;

  /**
   * @var int
   *
   * @ORM\Column(name="statut", type="smallint")
   */
  private $statut;


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
   * Set idMembre
   *
   * @param integer $idMembre
   *
   * @return Membre
   */
  public function setIdMembre($idMembre)
  {
      $this->idMembre = $idMembre;

      return $this;
  }

  /**
   * Get idMembre
   *
   * @return int
   */
  public function getIdMembre()
  {
      return $this->idMembre;
  }

  /**
   * Set pseudo
   *
   * @param string $pseudo
   *
   * @return Membre
   */
  public function setPseudo($pseudo)
  {
      $this->pseudo = $pseudo;

      return $this;
  }

  /**
   * Get pseudo
   *
   * @return string
   */
  public function getPseudo()
  {
      return $this->pseudo;
  }

  /**
   * Set mdp
   *
   * @param string $mdp
   *
   * @return Membre
   */
  public function setMdp($mdp)
  {
      $this->mdp = $mdp;

      return $this;
  }

  /**
   * Get mdp
   *
   * @return string
   */
  public function getMdp()
  {
      return $this->mdp;
  }

  /**
   * Set nom
   *
   * @param string $nom
   *
   * @return Membre
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
   * Set prenom
   *
   * @param string $prenom
   *
   * @return Membre
   */
  public function setPrenom($prenom)
  {
      $this->prenom = $prenom;

      return $this;
  }

  /**
   * Get prenom
   *
   * @return string
   */
  public function getPrenom()
  {
      return $this->prenom;
  }

  /**
   * Set email
   *
   * @param string $email
   *
   * @return Membre
   */
  public function setEmail($email)
  {
      $this->email = $email;

      return $this;
  }

  /**
   * Get email
   *
   * @return string
   */
  public function getEmail()
  {
      return $this->email;
  }

  /**
   * Set tel
   *
   * @param integer $tel
   *
   * @return Membre
   */
  public function setTel($tel)
  {
      $this->tel = $tel;

      return $this;
  }

  /**
   * Get tel
   *
   * @return int
   */
  public function getTel()
  {
      return $this->tel;
  }

  /**
   * Set civilite
   *
   * @param string $civilite
   *
   * @return Membre
   */
  public function setCivilite($civilite)
  {
      $this->civilite = $civilite;

      return $this;
  }

  /**
   * Get civilite
   *
   * @return string
   */
  public function getCivilite()
  {
      return $this->civilite;
  }

  /**
   * Set ville
   *
   * @param string $ville
   *
   * @return Membre
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
   * Set codePostal
   *
   * @param integer $codePostal
   *
   * @return Membre
   */
  public function setCodePostal($codePostal)
  {
      $this->codePostal = $codePostal;

      return $this;
  }

  /**
   * Get codePostal
   *
   * @return int
   */
  public function getCodePostal()
  {
      return $this->codePostal;
  }

  /**
   * Set adresse
   *
   * @param string $adresse
   *
   * @return Membre
   */
  public function setAdresse($adresse)
  {
      $this->adresse = $adresse;

      return $this;
  }

  /**
   * Get adresse
   *
   * @return string
   */
  public function getAdresse()
  {
      return $this->adresse;
  }

  /**
   * Set statut
   *
   * @param integer $statut
   *
   * @return Membre
   */
  public function setStatut($statut)
  {
      $this->statut = $statut;

      return $this;
  }

  /**
   * Get statut
   *
   * @return int
   */
  public function getStatut()
  {
      return $this->statut;
  }
}
