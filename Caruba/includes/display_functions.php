<?php
/**
 * Created by PhpStorm.
 * User: xay
 * Date: 11/29/2016
 * Time: 12:04 PM
 */

include_once "/../Classes/Video.php";
include_once "/../Classes/User.php";
include_once "/../Classes/Game.php";


function generateVideoWell(array $videos){
    echo '<div class="row video-well">';

    foreach ($videos as $video){
        echo '<div class="col-md-1 video-tiny">';
        echo '<div class="" >';
//        echo '<img src="Images/Thumbnails/.png" />';
        echo sprintf('<a href="viewer.php?video=%s"><img src="images/Thumbnails/%s.png" title = "%s" class="v-thumb"/></a>', $video->getVideoID(), $video->getThumbnail(), $video->getTitle());
        echo '</div>';
        echo '<div class="caption" >';
        echo '<p><a href="viewer.php?video=' . $video->getVideoID() .  '">' . $video->getTitle() . '</a><br/>';
        echo ' by <a href="search-results.php?query=' . $video->getUploader() . '">'. $video->getUploader() . '</a></p>';
        echo '</div></div>';
    }
    echo '</div>';
}

function generateGameWell(){
    $games = getAllGames();
    echo '<div class="row video-well">';
    foreach ($games as $game){
        echo '<div class="col-md-3 game-tiny">';
        echo '<div class="" >';
        echo sprintf('<img src="images/Thumbnails/%s" title = "%s" class="g-thumb"/>', $game->getThumbnail(), $game->getThumbnail());
        echo '</div>';
        echo '<div class="caption" >';
        echo '<p><a href="search-results.php?query=' . $game->getGameTitle() . '">'. $game->getGameTitle() . '</a></p>';
        echo '</div></div>';
    }
    echo '</div>';
}

function getVideosFromQuery($query_string){
    $query = "SELECT videos.VideoID FROM videos INNER JOIN games ON videos.GameID = games.GameID WHERE videos.VideoName LIKE '%" .
        $query_string . "%' OR videos.Uploader LIKE '%" . $query_string ."%' OR games.GameTitle LIKE '%" . $query_string ."%'";
    $con = mysqli_connect("localhost", "cs", "", "videogamestreaming");
    $videos = array();
    if (mysqli_connect_errno($con)) {

    } else {
        $result = mysqli_query($con, $query);
        if (!$result)
        {
            echo "<p>sql = $query. Result = " . mysqli_error($con) . "</p>";
        }
        else
        {
            while ($arr = mysqli_fetch_array($result)){
                array_push($videos, new Video($arr["VideoID"]));
            }
        }
    }
    return $videos;
}

function getAllGames(){
    $games = array();
    $sql = "SELECT GameID FROM games";
    $con = mysqli_connect("localhost", "cs", "", "videogamestreaming");

    if (mysqli_connect_errno($con)) {

    }
    else {

        $result = mysqli_query($con, $sql);
        if (!$result){
            echo mysqli_error($con);
            return null;
        }
        else {
            while ($arr = mysqli_fetch_array($result)) {
                array_push($games, new Game($arr["GameID"]));
            }
        }
    }
    return $games;
}
