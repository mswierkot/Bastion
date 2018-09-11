<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <title>CENTRUM SPORTOWE BASTION</title>

  <meta charset="utf-8">
   
  <meta name="description" content="CENTRUM SPORTOWE BASTION - zapraszamy do centrum sportowego - trenuj z nami szeroki zakres sportów walki i nie tylko. W Bastionie dostępna jest także siłownia.">
  <meta name="keywords" content="Bastion, Centrum, Sportowe, MMA, Boks, BJJ, brazylijskie, jiu, jitsu, tychy, samoobrona, crossfit, treningi, sztuki, walki
  sport, trenuj">
   
   <link rel="shortcut icon" href="pictures/favicon.ico">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="style.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
   <!-- Zestaw czcionek -->
   <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link href="https://fonts.googleapis.com/css?family=Italianno" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Playball|Pragati+Narrow" rel="stylesheet">
   <link rel="stylesheet" href='<?php echo asset('css/style.css')?>' type="text/css"> 
</head>
   
    <body id="entry">
   
   <!-- Strona początkowa --> 
   
<div id="entry" class="container">

     <!-- Nagłówek górny -->
         <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <a href="{{ url('index') }}"> <h1 id="hEntry" class="cool-link" align="center">CENTRUM SPORTOWE <span style="color:#A62938;">BASTION</span> </h1></a>
              </div>
         </div>
     <!-- Nagłówek górny -->
     
    <!-- Kafeleki -->
    <div style="margin-top: 50px;" class="row">
  
         <!--Lewy kafelek -->
        <a href="{{ url('sportywalki') }}"> 
              <div  class="col-xs-12 col-sm-12 col-md-6 col-lg-1"> </div>
              <div id="entryLeft" class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> 
                  <h2 id="h2Entry" align="center">SPORTY WALKI</h2>
             </div> 

        </a>

         <!--Prawy kafelek -->
       <a href="{{ url('silownia') }}">
          
             <div id="entryRight" class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> 

                 <h2 id="h3Entry"  align="center">SIŁOWNIA FUNKCJONALNA</h2>
                 <h4 id="h4Entry" align="center"> ŚCIANKA WSPINACZKOWA</h4>


             </div> 
             <div  class="col-xs-12 col-sm-12 col-md-6 col-lg-1"> </div>
       </a>
 
  </div>
 
  </div>
   
    </body>
</html>
