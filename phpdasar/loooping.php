<?php

    //Perulangan for
    for($i = 0; $i < 10; $i++){
        echo "<h2>Ini perulangan ke-$</h2>";
    }

    //Perulangan while
    $ulangi = 0;

    while($ulangi < 10){
        echo "<p>Ini adalah perulangan ke-$ulangi<p/>";
        $ulangi++;
    }

    //Perulangan do/while
    $loop = 10;

    do {
        echo "<p>Looping $ulangi</p>";
        $loop--;
    } while ($loop > 0);

    //Perulangan foreach
    $books = [
        "Panduan belajar PHP unntuk pemula",
        "Membangun aplikasi Web dengan PHP",
        "Tutorial PHP dan MySQL",
        "Membuat ChatBot dengan PHP"
    ];

    echo "<h5>Judul Buku PHP:</h5>";
    echo "</ul>";
    foreach($books as $buku){
        echo "<li>$buku</li>";
    }
    echo "</ul>";
?>