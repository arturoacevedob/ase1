<?php
function createBlogList()
{
    $query = "select * from blog ORDER BY date DESC limit 4;";
    $recordSet = execute($query);

    $blogs = [];
    $counter = 0;
    while ($row = mysqli_fetch_array($recordSet)) {
        $blogs[$counter] = [];
        $blogs[$counter]["id"] = $row["id"];
        $blogs[$counter]["title"] = $row["title"];
        $blogs[$counter]["date"] = $row["date"];
        $blogs[$counter]["image_path"] = $row["image_path"];
        $counter++;
    }

    echo "
    <section class='container'>
        <h2 class='red h2-small'>Última noticia</h2>
        <a class='link' href='noticias_view.php?id=" . $blogs[0]["id"] . "' target='_self'>
            <article class='latest-news blog-item' style='background: linear-gradient(to top, rgba(61, 40, 10, 1), rgba(255, 255, 255, 0) 50%), url(../" . $blogs[0]["image_path"] . ") 50% 50% / cover no-repeat;'>
                <h3 class='light'>" . $blogs[0]["title"] . "</h3>
                <p class='light'>" . $blogs[0]["date"] . "</p>
            </article>
        </a>
    </section>
    <section class='container-sequel'>
        <h2 class='h2-small red'>Más noticias</h2>
        <div class='grid-news light'>
    ";

    for ($i = 1; $i < count($blogs); $i++) {
        echo "
        <a href='noticias_view.php?id=" . $blogs[$i]["id"] . "' target='_self'>
            <article class='blog-item' style='background: linear-gradient(to top, rgba(61, 40, 10, 1), rgba(255, 255, 255, 0) 50%), url(../" . $blogs[$i]["image_path"] . ") 50% 50% / cover no-repeat;'>
                <h3>" . $blogs[$i]["title"] . "</h3>
                <p>" . substr($blogs[$i]["date"], 0, 10) . "</p>
            </article>
        </a>
        ";
    }

    echo "
        </div>
    </section>
    ";
}
?>
