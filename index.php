<?php
    $text ="Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, libero provident molestiae eos suscipit quos, recusandae dicta odio quisquam voluptatem atque, veniam ducimus fugiat voluptates nemo corrupti nisi qui delectus!";
    $badwords = $_GET["badwords"];

    echo $text;
    echo "<br>";
    echo "Lunghezza paragrafo: " .strlen($text);
    
    
    var_dump($_GET);
    echo "Parola da censurare <strong>ipsum</strong>" .stripos($badwords, "***");
    echo "<br>";

    if (stripos($badwords, "ipsum") !== false) {
        $badwords = str_replace("ipsum", "***", $text);
    }

    echo $badwords;
    echo "<br>";
    echo "Lunghezza paragrafo: " .strlen($badwords);
?>





