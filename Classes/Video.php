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

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->_title = $title;
    }

    /**
     * @param mixed $video_url
     */
    public function setVideoUrl($video_url)
    {
        $this->_video_url = $video_url;
    }

    /**
     * @param mixed $thumbnail
     */
    public function setThumbnail($thumbnail)
    {
        $this->_thumbnail = $thumbnail;
    }

    /**
     * @param mixed $video_length
     */
    public function setVideoLength($video_length)
    {
        $this->_video_length = $video_length;
    }

    /**
     * @param mixed $uploader
     */
    public function setUploader($uploader)
    {
        $this->_uploader = $uploader;
    }

    /**
     * @param mixed $gameID
     */
    public function setGameID($gameID)
    {
        $this->_gameID = $gameID;
    }

    /**
     * Video constructor.
     */
    public function __construct($videoID = false)
    {
        if ($videoID != false) {
            $sql = "SELECT * FROM videos WHERE VideoID = $videoID";
            $con = mysqli_connect("localhost", "cs", "", "videogamestreaming");

            if (mysqli_connect_errno($con)) {

            } else {
                $result = mysqli_query($con, $sql);
                if (!$result)
                {
                    echo "<p>sql = $sql. Result = " . mysqli_error($con) . "</p>";
                }
                else
                {
                    $arr = mysqli_fetch_array($result);
                    $result_t = get_class($result);

                    $this->_title = $arr["VideoName"];
                    $this->_thumbnail = $arr["Thumbnail"];
                    $this->_uploader = $arr["Uploader"];
                    $this->_gameID = $arr["GameID"];
                    $this->_videoID = $arr["VideoID"];
                }
            }
        }
    }

    public function isUploaded(){
        $sql = "SELECT * FROM Videos WHERE VideoID = " . $this->_videoID;
        $con = mysqli_connect("localhost", "cs", "", "videogamestreaming");

        if (mysqli_connect_errno($con)) {
            return false;
        } else {
            return true;
        }

    }

    public function uploadVideo(){
        $sql = "INSERT INTO videos (VideoName, Thumbnail, VideoURL, VideoLength, Uploader, GameID)";
        $sql .= sprintf("VALUES (%s, %s, %s, %s, %s, %s)", $this->_title, $this->_thumbnail, $this->_video_url, $this->_video_length, $this->_uploader, $this->_gameID);
        $con = mysqli_connect("localhost", "cs", "", "videogamestreaming");

        if (mysqli_connect_errno($con)){
            return false;
        }
        else{
            return true;
        }

    }

    public function updateVideoDetails(){
        if ($this->isUploaded()){
            $sql = sprintf("UPDATE videos SET VideoName=%s, Thumbnail=%s, VideoURL=%s, VideoLength=%s, Uploader=%s, GameID=%s where VideoID = %s",
                $this->_title, $this->_thumbnail, $this->_video_url, $this->_video_length, $this->_uploader, $this->_gameID);
            $con = mysqli_connect("localhost", "cs", "", "videogamestreaming");
            if (mysqli_connect_errno($con)){
                return false;
            }
            else{
                return true;
            }
        }
    }






}