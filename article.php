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

// echo "Connected successfully <br>";

if(isset($_GET['id']) && is_numeric($_GET['id'])){

$sql = "SELECT * 
        FROM articles 
        WHERE id = " . $_GET['id'];

$results = mysqli_query($conn, $sql);

if($results === false){
    echo mysqli_error($conn);
} else {
    $article = mysqli_fetch_assoc($results);
}

} else {
    $article = null;
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
    <meta charset="utf-8">
</head>
<body>

    <header>
        <h1>My blog</h1>
    </header>

    <main>
        <?php if ($article === null): ?>
            <p>No articles found.</p>
        <?php else: ?>

            
                        <article>
                            <h2><?= $article['title']; ?></h2>
                            <p><?= $article['content']; ?></p>
                        </article>
              

        <?php endif; ?>
    </main>
</body>
</html>
