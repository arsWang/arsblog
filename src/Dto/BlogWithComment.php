<?php

namespace App\Dto;

use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Blog;
use App\Entity\User;
use App\Entity\Comment;

use function PHPUnit\Framework\returnSelf;

class BlogWithComment
{
    /**
    * @Assert\NotBlank
    */
    public $blog_id;
    public $blog_title;
    public $blog_blog;
    public $comment_id;
    public $comment_text;

    public static function getBlogWithComment(Blog $blog):self{
        $BlogWithComment =new self();
        $BlogWithComment->blog_id = $blog->getId();
        $BlogWithComment->blog_title = $blog->getTitle();
        $BlogWithComment->blog_blog = $blog->getId();
               
        
        return $BlogWithComment;
    }
}