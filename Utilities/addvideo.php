<?php

if (isset($_GET["title"])){
    $length = date("h:i:s", strtotime($_GET["length"]));
    $sql = sprintf("INSERT INTO videos (VideoName, Thumbnail, VideoURl, VideoLength, Uploader, GameID, VideoID) VALUES ('%s', '%s_tn.jpg', '%s', '%s', '%s','%d', NULL)",
        $_GET["title"], $_GET["title"], $_GET["title"] . ".php" , $length, $_GET["uploader"], $_GET["ID"]);
    $con = mysqli_connect("localhost", "cs", "", "videogamestreaming");
    if (mysqli_connect_errno($con)) {

    }
    else {
        $result = mysqli_query($con, $sql);
        if (!$result) {
            echo "<p>error. $sql</p>";
        }
    }
}
?>

<html>
<title>Game Import</title>
<body>
<form action="" method="GET">
    <label>Title</label>
    <input type="text" name="title"/>

    <label>Length</label>
    <input type="text" name="length"/>
    <label>Uploader</label>
    <input type="text" name="uploader"/>
    <label>GameID</label>
    <input type="text" name="ID"/>

    <input type="submit"/>
</form>
</body>
</html>
