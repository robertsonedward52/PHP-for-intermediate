<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .myHeader {
        background: dodgerblue;
        padding: .5rem .3rem;
        overflow: hidden;
    }

    ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    li {
        font-size: 1.5rem;
        font-family: arial, sans-serif;
        padding: 1rem;
        display: block;
        float: left;

    }
    a {
        color: #f00;
        text-decoration: none;
    }
    </style>
</head>
<body>
    <header class="myHeader">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Blog</a></li>
        </ul>
    </header>

    <main class="flex-container">
        <div class="item1"></div>
        <div class="item2"></div>
        <div class="item3"></div>
    </main>


    
<?php
include "footer.php";

?>


</body>
</html>