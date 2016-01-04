<?php

namespace LeHibouc\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use LeHibouc\EBookLibraryBundle\Entity\Book;

/**
 * UserBook
 *
 * @ORM\Table(name="user_book")
 * @ORM\Entity(repositoryClass="LeHibouc\AppBundle\Repository\UserBookRepository")
 */
class UserBook
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
     * @var User
     * 
     * @ORM\ManyToOne(targetEntity="LeHibouc\AppBundle\Entity\User", inversedBy="booksBorrowed", cascade={"persist"}, fetch="LAZY")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false)
     */
    private $user;

    /**
     * @var Book
     *
     * @ORM\ManyToOne(targetEntity="LeHibouc\EBookLibraryBundle\Entity\Book", cascade={"persist"}, fetch="LAZY")
     * @ORM\JoinColumn(name="book_id", referencedColumnName="id",nullable=false)
     */
    private $book;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="borrow", type="datetime")
     */
    private $borrow;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="returned", type="datetime", nullable=true)
     */
    private $returned;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_pages_read", type="integer")
     */
    private $nbPagesRead;


    public function __construct()
    {
        $this->borrow = new \DateTime('now');
        $this->returned = null;
        $this->nbPagesRead = 0;
    }

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
     * Set user
     *
     * @param User user
     *
     * @return UserBook
     */
    public function setUser(User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set Book
     *
     * @param Book book
     *
     * @return UserBook
     */
    public function setBook(Book $book)
    {
        $this->book = $book;

        return $this;
    }

    /**
     * Get Book
     *
     * @return Book
     */
    public function getBook()
    {
        return $this->book;
    }

    /**
     * Set borrow
     *
     * @param \DateTime $borrow
     *
     * @return UserBook
     */
    public function setBorrow($borrow)
    {
        $this->borrow = $borrow;

        return $this;
    }

    /**
     * Get borrow
     *
     * @return \DateTime
     */
    public function getBorrow()
    {
        return $this->borrow;
    }

    /**
     * Set returned
     *
     * @param \DateTime $returned
     *
     * @return UserBook
     */
    public function setReturned($returned)
    {
        $this->returned = $returned;

        return $this;
    }

    /**
     * Get returned
     *
     * @return \DateTime
     */
    public function getReturned()
    {
        return $this->returned;
    }

    /**
     * Set nbPagesRead
     *
     * @param integer $nbPagesRead
     *
     * @return UserBook
     */
    public function setNbPagesRead($nbPagesRead)
    {
        $this->nbPagesRead = $nbPagesRead;

        return $this;
    }

    /**
     * Get nbPagesRead
     *
     * @return int
     */
    public function getNbPagesRead()
    {
        return $this->nbPagesRead;
    }
}
