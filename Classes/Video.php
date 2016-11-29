<?php

/**
 * Created by PhpStorm.
 * User: xay
 * Date: 11/29/2016
 * Time: 11:54 AM
 */
class Video
{
    private $_title;
    private $_video_url;
    private $_thumbnail;
    private $_video_length;
    private $_uploader;
    private $_gameID;
    private $_videoID;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * @return mixed
     */
    public function getVideoUrl()
    {
        return $this->_video_url;
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
    public function getVideoLength()
    {
        return $this->_video_length;
    }

    /**
     * @return mixed
     */
    public function getUploader()
    {
        return $this->_uploader;
    }

    /**
     * @return mixed
     */
    public function getGameID()
    {
        return $this->_gameID;
    }

    /**
     * @return mixed
     */
    public function getVideoID()
    {
        return $this->_videoID;
    }

}