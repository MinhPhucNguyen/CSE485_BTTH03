<?php
class Article
{
    private $id;
    private $title;
    private $summary;
    private $content;
    private $category_id;
    private $member_id;


    public function __construct($id, $title, $summary, $content, $category_id, $member_id)
    {
        $this->id = $id;
        $this->title = $title;
        $this->summary = $summary;
        $this->content = $content;
        $this->category_id = $category_id;
        $this->member_id = $member_id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getCategory_id()
    {
        return $this->category_id;
    }

    public function getMember_id()
    {
        return $this->member_id;
    }

    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;
    }

    public function setMember_id($member_id)
    {
        $this->member_id = $member_id;
    }
}
