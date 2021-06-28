<h1>Saját publikációk</h1>

<ul class="articles">
<?php 

    
if(!isset($_GET['read']))
{
    
    echo '<h1>Saját publikációk</h1>';

    echo '<ul class="articles">';

    $a = 1;
    while(is_file("data/articles/article-". $a .".txt"))
    {
        $article = file_get_contents("data/articles/article-". $a .".txt");
        $record = explode(";", $article);
        $title = $record[0];
        $intro = $record[1];
        $image = $record[2];

            echo '<li class="preview">

            <img src="media/'. $image .'">
            <div>
                <h2>'. $title .'</h2>
                <p>'. $intro .'</p>


            </div>
            <a href="index.php?page=articles&read='. $a .'">Bővebben</a>

            </li>';

        $a++;
    }

    echo '</ul>';
    
}
else
{
    $read = $_GET['read'];
    
    if(is_file("data/articles/article-". $read .".txt"))
    
    {
        $article = file_get_contents("data/articles/article-". $read .".txt");
        $record = explode(";", $article);

        $title = $record[0];
        $intro = $record[1];
        $image = $record[2];
        $body = trim($record[3]);

        echo '<h2>'. $title. '</h2>';
        echo'<article>';
        echo '<h3>'. $intro .'</h3>';
        echo '<img src="media/'. $image .' ">';
        echo '<p>'. nl2br($body) .'</p>';

        echo'</article>';
    }
    else{
        echo '<h2>Nincs ilyen</h2>';
        echo '<p>Keresett cikk nem található</p>';
    }
    
    
}
?>



