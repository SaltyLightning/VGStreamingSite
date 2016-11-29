<?php

/**
 * Created by PhpStorm.
 * User: xay
 * Date: 11/29/2016
 * Time: 11:58 AM
 */
class Game
{
    private $_gameTitle;
    private $_thumbnail;
    private $_releaseDate;
    private $_gameId;

    /**
     * @return mixed
     */
    public function getGameTitle()
    {
        return $this->_gameTitle;
    }

    /**
     * @return mixed
     */
    public function getThumbnail()
    {
        return $this->_thumbnail;
    }

    /**
     * @return mixed
     */
    public function getReleaseDate()
    {
        return $this->_releaseDate;
    }

    /**
     * @return mixed
     */
    public function getGameId()
    {
        return $this->_gameId;
    }

}