<?php

namespace App\Helper;
/**
 * Created by PhpStorm.
 * User: Rizqy
 * Date: 6/25/2016
 * Time: 12:12 AM
 */
class PageDescription
{
    public function __construct(){
        $this->title = null;
        $this->author = 'Anak anak Fasilkom';
        $this->description = 'Bla-bla';
        $this->keyword = 'sansaksnaksa';
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @param string $keyword
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
    }

    /**
     * @return null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param null $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }


}