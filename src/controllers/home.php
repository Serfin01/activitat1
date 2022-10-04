<?php
    require 'src/render.php';
    $title="Superman";
    $alumnes=[
        'Perico Palotes',
        'Jesus'
    ];
    echo render('home',['title'=>$title, 'alumnes'=>$alumnes]);