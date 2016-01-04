<?php

namespace LeHibouc\AppBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

use LeHibouc\AppBundle\Entity\UserBook;

/**
 * @ORM\Entity
 */
class User extends BaseUser
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @ORM\OneToMany(targetEntity="LeHibouc\AppBundle\Entity\UserBook", mappedBy="user")
   */
  private $booksBorrowed;

  public function __construct()
  {
    parent::__construct();
    $this->booksBorrowed = new ArrayCollection();
  }

  /**
   * Get books borrowed
   *
   * @return Array(UserBook)
   */
  public function getBooksBorrowed()
  {
    return $this->booksBorrowed;
  }

  /**
   * Add a book borrowed
   *
   * @param UserBook $bookBorrowed
   *
   * @return User
   */
  public function addBookBorrowed(UserBook $bookBorrowed)
  {
      $this->booksBorrowed[] = $bookBorrowed;

      return $this;
  }

  /**
   * Remove a book borrowed
   *
   * @param UserBook $bookBorrowed
   */
  public function removeBookBorrowed(UserBook $bookBorrowed)
  {
      $this->booksBorrowed->removeElement($bookBorrowed);
  }
}
