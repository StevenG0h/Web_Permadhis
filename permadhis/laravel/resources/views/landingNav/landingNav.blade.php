<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi:wght@400;500;600;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('image/LogoPmd.png') }}" type="image/x-icon">
    <title>Permadhis PCR</title>
</head>
<body onscroll="detectSection(); revealPage()">
    <div class="nav">
        <a href="" class="nav-home">
            Permadhis
        </a>
        <div class="nav-link-wrapper">
            <a href="#home" class="nav-link active">Beranda</a>
            <a href="#about" class="nav-link">Tentang</a>
            <a href="#event" class="nav-link">Event</a>
        </div>
    </div>
    @yield('content');
