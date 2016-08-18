<?php
/**
 * Created by PhpStorm.
 * User: akung
 * Date: 8/18/16
 * Time: 13:55
 */

namespace App\Models\Entities;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class Comment
 * @package App\Models\Entities
 * @ORM\Entity
 * @ORM\Table(name="comments")
 */
class Comment
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Post", inversedBy="comments")
     */
    protected $post;

    /**
     * @ORM\Column(type="string")
     */
    protected $content;
}