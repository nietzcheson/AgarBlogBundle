<?php

namespace ArtesanIO\AgarBlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posts
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ArtesanIO\AgarBlogBundle\Entity\PostsRepository")
 */
class Posts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="string", length=144)
     */
    private $summary;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="categorys", type="integer")
     */
    private $categorys;

    /**
     * @var integer
     *
     * @ORM\Column(name="users", type="integer")
     */
    private $users;

    /**
     * @var integer
     *
     * @ORM\Column(name="cover", type="integer")
     */
    private $cover;

    /**
     * @var integer
     *
     * @ORM\Column(name="folders", type="integer")
     */
    private $folders;


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
     * Set title
     *
     * @param string $title
     *
     * @return Posts
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set summary
     *
     * @param string $summary
     *
     * @return Posts
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Posts
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set categorys
     *
     * @param integer $categorys
     *
     * @return Posts
     */
    public function setCategorys($categorys)
    {
        $this->categorys = $categorys;

        return $this;
    }

    /**
     * Get categorys
     *
     * @return integer
     */
    public function getCategorys()
    {
        return $this->categorys;
    }

    /**
     * Set users
     *
     * @param integer $users
     *
     * @return Posts
     */
    public function setUsers($users)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return integer
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set cover
     *
     * @param integer $cover
     *
     * @return Posts
     */
    public function setCover($cover)
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Get cover
     *
     * @return integer
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Set folders
     *
     * @param integer $folders
     *
     * @return Posts
     */
    public function setFolders($folders)
    {
        $this->folders = $folders;

        return $this;
    }

    /**
     * Get folders
     *
     * @return integer
     */
    public function getFolders()
    {
        return $this->folders;
    }
}

