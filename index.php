<?php

$db_host = "127.0.0.1";
$db_name = "cms";
$db_user = "cms_www";
$db_pass = "oasis";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\
", mysqli_connect_error());
    exit();
}

echo "Connected successfully <br>";

$sql = "SELECT * 
        FROM articles 
        ORDER BY published_at;";

$results = mysqli_query($conn, $sql);

if($results === false){
    echo mysqli_error($conn);
} else {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);

    var_dump($articles);
}


?>