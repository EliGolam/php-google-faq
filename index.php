<?php

  /* Emulate Google FAQ page through PHP*/
  /* Parsing Json Files  */

  $jsonRawData = file_get_contents("data/faqData.json");
  $jsonData = json_decode($jsonRawData, true); // True to indicate associative arrays

  // var_dump($jsonData);

  
?><!DOCTYPE html>
<html lang="en">
<!-- METADATA -->
<head>
    <title>PHP Practice</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--#region FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700;900&display=swap" rel="stylesheet"> 

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--#endregion FONTS -->

    <!--#region Stylesheets and Scripts -->
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

     <!-- VUEJS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.7.10/vue.min.js" integrity="sha512-H8u5mlZT1FD7MRlnUsODppkKyk+VEiCmncej8yZW1k/wUT90OQon0F9DSf/2Qh+7L/5UHd+xTLrMszjHEZc2BA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <!-- AXIOS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- My CSS -->
    <link rel="stylesheet" href="./stylesheets/css-reset.css" type="text/css" />
    <link rel="stylesheet" href="./stylesheets/style.css" type="text/css" />

    <!-- My Scripts -->
    <script src="./scripts/script.js" type="text/javascript" defer></script>
    <!--#endregion Stylesheets and Scripts -->

    <!--#region META -->
    <meta name="searchtitle" content="Boolean">
    <meta name="keywords" content="Boolean, Programming, Coding">
    <meta name="description" content="Learn, Practice, Improve - with Boolean Careers">
    <!--#endregion META -->
    
</head>

<!-- BODY -->
<body>
  <header class="container">
    <h1 class="title">PHP Practice | Google FAQ mockup</h1>
    <p class="subtitle">by Elias Mahfuzul</p>
  </header>

  <main>
    <h2>Emulate Google's FAQ page using PHP</h2>

  </main>
</body>
</html>