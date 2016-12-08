<?php

if (isset($_GET["title"])){
    $release = date("Y-m-d", strtotime($_GET["release"]));
    $sql = sprintf("INSERT INTO games (GameTitle, Thumbnail, ReleaseDate, GameID) VALUES ('%s', '%s_tn.jpg', '%s', NULL)", $_GET["title"], $_GET["title"], $release);
    $con = mysqli_connect("localhost", "cs", "", "videogamestreaming");
    if (mysqli_connect_errno($con)) {

    }
    else {
        $result = mysqli_query($con, $sql);
        if (!$result) {
            echo "<p>error." . $_GET["title"] . " " . $_GET["release"] .  "</p>";
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
    <label>Release Date</label>
    <input type="text" name="release"/>
    <input type="submit"/>
</form>
</body>
</html>
