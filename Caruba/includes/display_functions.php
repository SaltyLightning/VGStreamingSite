<?php
/**
 * Created by PhpStorm.
 * User: xay
 * Date: 11/29/2016
 * Time: 12:04 PM
 */

include_once "../Classes/Video.php";
include_once "../Classes/User.php";
function generateVideoWell(array $videos){
    echo '<div class="row">';

    foreach ($videos as $video){
        echo '<div class="col-md-3" >';
        echo '<div class="thumbnail" >';
        echo '<img src = "'. $video->getThumbnail() . '" title = "' . $video->getTitle() . '/>';
        echo '<div class="caption" >';
        echo '<p>' . $video->getTitle() . '</p>';
        echo '<p>' . $video->getUploader() . '</p>';
        echo '</div></div>';
    }
    echo '</div>';
}
