<?php
// src/AppBundle/Entity/User.php

namespace ENT\SiteBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\GroupableInterface;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity
 * @ORM\Table(name="membre")
 */
class User extends BaseUser
{
    /**
 * @ORM\Id
 * @ORM\Column(type="integer")
 * @ORM\GeneratedValue(strategy="AUTO")
 */
protected $id;

    public function __construct()
    {
        parent::__construct();
    // your own logic
    }
}
