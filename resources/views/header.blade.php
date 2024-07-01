<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Beyond Borders</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" >
        <link rel="stylesheet" href="{{asset('css/main.css')}}" >
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@1,400&display=swap" rel="stylesheet">

    </head>
    <body>
        
    <section class="header">
        <div class="container-fluid">
            <div class="row header-navigation">
                <div class="col-lg-3">
                    <img src="{{asset('assets/images/logo.png')}}" alt="">
                </div>
                <div class="col-lg-6">
                    <ul class="nav">
                        <li>Home</li>
                        <li>About Us</li>
                        <li>Our Services</li>
                        <li>Our Team</li>
                        <li>Contact Us</li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <ul>
                        <li><button>Find Jobs</button></li>
                        <li><button>Hire Talent</button></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>