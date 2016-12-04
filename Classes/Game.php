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

    /**
     * Video constructor.
     */
    public function __construct($gameID = false)
    {
        if ($gameID != false) {
            $sql = "SELECT * FROM games WHERE GameID = $gameID";
            $con = mysqli_connect("localhost", "cs", "", "cs3500");

            if (mysqli_connect_errno($con)) {

            } else {
                $result = mysqli_query($con, $sql);
                $arr = mysqli_fetch_array($result);
                $this->_gameTitle = $arr["GameTitle"];
                $this->_thumbnail = $arr["Thumbnail"];
                $this->_releaseDate = $arr["ReleaseDate"];
                $this->_gameID = $arr["GameID"];
            }
        }
    }



}