<?php
/**
 * Created by PhpStorm.
 * User: akung
 * Date: 8/18/16
 * Time: 13:53
 */

namespace App\Models\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Post
 * @package App\Models\Entities
 * @ORM\Entity
 * @ORM\Table(name="posts")
 */
class Post
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @ORM\Column(type="text")
     */
    protected $content;

    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="post", cascade={"persist"})
     * @var ArrayCollection|Comment[]
     */
    protected $comments;

    /**
     * Post constructor.
     */
    public function __construct()
    {
        $this->comments = new ArrayCollection();
    }

}