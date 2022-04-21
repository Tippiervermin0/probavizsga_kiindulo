<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content=<?php $token = csrf_token(); echo $token; ?>>

    <title>Szakdolgozat2022</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="./css/kezdooldal.css">
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        main {
            width: 100%;
            background-color:#bfbfbf;


        }
        article{
            width: 90%;
            padding-top:20px;
            background-color:#ffffff;
            margin-left: auto;
            margin-right: auto;
        }
        .tarolo{
            text-align:center;
            margin:auto;
        }
        .tablazat {
            font-family: Arial, Helvetica, sans-serif;
            width: 90%;
            text-align: left;
            margin-left: auto;
            margin-right: auto;
            }

        .tablazat td, th {
        height: 20px;
        padding: 8px;
        }

        .tablazat tr:nth-child(even){
            background-color: #f2f2f2;}

        .tablazat tr:hover {
            background-color: #ddd;}

        .tablazat th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #000000;
        color: #ffffb3;
        }
        #form{
            margin-left: auto;
            margin-right: auto;
            width: 90%;
            text-align:right;
        }
        #uj_gomb{
            border-radius: 12px;
            border: 1px solid black;
            margin:left;
            padding: 10px 15px;
        }
        input[type=text] {
            width: 70%;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            }
        .modosit{
            padding-right:10px;
        }

        @media screen and (max-width: 800px) {
            .tablazat {
                width: 100%;
                font-size:10px;
            }
            header{
                font-size:10px;
            }
            section{
                font-size:10px;
            }
        }
        @media screen and (max-width: 650px) {
            .tablazat {
                
                font-size:8px;
            }

            #form{
                font-size:10px;
             }
        }

     

        a {
            background-color: transparent
        }

    </style>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="./js/dogaklistazasa.js" type="module"></script>
    <script src="js/ajax.js"></script>
    <script src="js/script.js"></script>
</head>

<body class="antialiased">


    <main>

        <header>
        <div class="topnav" id="myTopnav">
            <a href="index.php">Szakdolgozat</a>
            <a href="index.php">Admin</a>
        </div>
            <h1 class="kozepre">Számalk-Szalézi technikum és Szakgimnázium 2020-2022 évfolyam szoftverfejlesztőinek szakdolgozatai</h1>
        </header>
        <section class="bejelentkezes kozepre">
            <h2>A szakdolgozatokat bejelentkezés után tudja megnézni!</h2>
            @if (Route::has('login'))
            <div class=" px-6 py-4 sm:block">
                @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Szakdolgozatok</a>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Bejelentkezés</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Regisztráció</a>
                @endif
                @endauth
            </div>

            @endif
            
        </section>
        <article>
        <div class="tarolo">
        <p>Admin oldal</p>
        <table class="tablazat">

        </table>
        </div>
        <form id="form">
        <label for="fname">Szakdolgozat címe:</label>
        <input type="text" id="szakdoga_nev"><br>

        <label for="lname">Készítők neve:</label>
        <input type="text" id="keszitokneve"><br>

        <label for="fname">Az oldal elérhetősége:</label>
        <input type="text" id="oldalcim"><br>

        <label for="lname">Github elérhetőség:</label>
        <input type="text" id="gitlink"><br>

        <button id="uj_gomb" name="uj_gomb" onclick="return false">Új</button>
        </form>
        

        </article>
        
    </main>
    </div>
    </div>
</body>

</html>
