<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>NKRIOFFICE</title>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <!-- Font Montserrat -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <style>
    html {
      scroll-behavior: smooth;
    }
    body {
      font-family: 'Montserrat';
    }
    .bg-body {
      background: #0e1111;
    }
    .active {
      color: #BAF200;
    }
    .ic-about {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
    }
    .card-about {
      background: rgb(0,0,0);
      background: linear-gradient(300deg, rgba(0,0,0,1) 0%, rgba(80,98,20,1) 100%, rgba(186,242,0,1) 100%); 
      border: 1px solid #fff;
      border-radius: 20px;
    }
    .ic-user-centric {
      top: 20px;
      width: 65px;
    }
    .ic-innovations {
      top: 20px;
      width: 55px;
    }
    .ic-integrity {
      top: 20px;
      width: 50px;
    }
    .ic-quality {
      top: 20px;
      width: 25px;
    }
    .ornament {
      background-image: url('<?= base_url('public/assets/images/ornament.png') ?>');
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
    }
  </style>
</head>

<body class="flex flex-col min-h-screen bg-body ornament">
