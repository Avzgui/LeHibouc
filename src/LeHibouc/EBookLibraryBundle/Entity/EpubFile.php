<?php

namespace LeHibouc\EBookLibraryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EpubFile
 *
 * @ORM\Table(name="epub_file")
 * @ORM\Entity(repositoryClass="LeHibouc\EBookLibraryBundle\Repository\EpubFileRepository")
 */
class EpubFile
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

