<?php

namespace Models;

class GameModel extends Bdd
{
    protected $id;
    protected $title;
    protected $min_player;
    protected $max_player;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }


    /**
     * @return mixed
     */
    public function getMaxPlayer()
    {
        return $this->max_player;
    }

    /**
     * @param mixed $max_player
     */
    public function setMaxPlayer($max_player): void
    {
        $this->max_player = $max_player;
    }

    /**
     * @return mixed
     */
    public function getMinPlayer()
    {
        return $this->min_player;
    }

    /**
     * @param mixed $min_player
     */
    public function setMinPlayer($min_player): void
    {
        $this->min_player = $min_player;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

}