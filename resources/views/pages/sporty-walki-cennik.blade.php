
  
@extends('layouts.sporty-walki')

@section('content')

  
  
  <body>

  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  
 
 <div id="cennik" style="padding-top:120px; width:100%; display: inline-block;" class="container">
  
       <div class="container-fluid">
  <div style="font-family: 'Pragati Narrow', sans-serif; margin-bottom: 40px;" class="text-center">
      <h1 style="font-size: 55px;">Cennik - <strong>sporty walki</strong></h1>
    <h3>Obliczając wysokość opłaty kierujemy się ilością treningów, rodzaj treningu nie ma znaczenia.</h3>
  </div>
  
   <div class="row">
    

  
     <div class="cena-box col-xs-12 col-sm-12  col-md-6 col-lg-4">
      <div class="panel panel-default text-center">
        <div class="panel-cena-heading">
          <h1>Small</h1>
        </div>
        <div class="panel-cena-body">
          <p style="font-size: 45px; padding-top: 25px;"><strong>Ilość wejść:</strong> 4 </p>
         
         
        
        </div>
        <div class="panel-cena-footer">
          <h3 class="slideanim">70 zł</h3>
          <h4 class="slideanim">miesięcznie</h4>
         
        </div>
      </div> 
    </div> 
    
     <div class="cena-box col-xs-12 col-sm-12  col-md-6 col-lg-4">
      <div class="panel panel-default text-center">
        <div class="panel-cena-heading">
          <h1>Medium</h1>
        </div>
        <div class="panel-cena-body">
          <p style="font-size: 45px; padding-top: 25px;"><strong>Ilość wejść:</strong> 8 </p>
        
         
        
        </div>
        <div class="panel-cena-footer">
          <h3 class="slideanim">90 zł</h3>
          <h4 class="slideanim">miesięcznie</h4>
         
        </div>
      </div> 
    </div> 
   
     <div class=" col-xs-12 col-sm-12  col-md-6 col-lg-4">
      <div class="panel panel-default text-center">
        <div class="panel-cena-heading">
          <h1>Large</h1>
        </div>
        <div class="panel-cena-body">
          <p style="font-size: 45px; padding-top: 25px;"><strong>Ilość wejść:</strong> 12 </p>
       
         
        
        </div>
        <div class="panel-cena-footer">
          <h3  class="slideanim">100 zł</h3>
          <h4 class="slideanim">miesięcznie</h4>
         
        </div>
      </div> 
    </div> 
  
      <div  class=" col-xs-12 col-sm-12 col-md-6 col-lg-4">
      <div class="panel panel-default text-center">
        <div class="panel-cena-heading">
          <h1>Open</h1>
        </div>
        <div class="panel-cena-body">
          <p ><strong>Ilość wejść:</strong> <span style="font-size: 20px;">&#8734;</span> </p>
        
          
           <p style="padding-top: 5px;padding-bottom: 5px; color: white; font-size: 100%; background-color: silver; margin-top:46px;"> przy umowie na 12 miesięcy<br></p>
    
        
        </div>
        <div class="panel-cena-footer">
          <h3 class="slideanim">99 zł</h3>
          <h4 class="slideanim">miesięcznie</h4>
         
        </div>
      </div> 
    </div> 
  
  <div  class=" col-xs-12 col-sm-12  col-md-6 col-lg-4 ">
      <div class="panel panel-default text-center">
        <div class="panel-cena-heading">
          <h1>Open-1 </h1>
        </div>
        <div class="panel-cena-body">
          <p><strong>Ilość wejść:</strong> <span style="font-size: 20px;">&#8734;</span> </p>
          <p style="font-size: 85%;"><strong>Kobiety i młodzież do 18 lat:</strong> 90zł </p>
          
           <p style="padding-top: 5px;padding-bottom: 5px; color: white; font-size: 100%; background-color: silver;"> Sporty walki </p>
        
        </div>
        <div class="panel-cena-footer">
          <h3 class="slideanim">120 zł</h3>
          <h4 class="slideanim">miesięcznie</h4>
         
        </div>
      </div> 
    </div> 
    
  <div  class=" col-xs-12 col-sm-12  col-md-6 col-lg-4 ">
      <div class="panel panel-default text-center">
        <div class="panel-cena-heading">
          <h1>Open-2</h1>
        </div>
        <div class="panel-cena-body">
          <p><strong>Ilość wejść:</strong> <span style="font-size: 20px;">&#8734;</span> </p>
         <p style="font-size: 85%;"><strong>Kobiety i młodzież do 18 lat:</strong> 140zł </p>
            <p style="padding-top: 5px;margin-bottom:  5px; color: black; font-size: 100%; background-color: gold;"> Cały klub - siłownia funkcjonalna i sporty walki </p>
        
        </div>
        
        <div class="panel-cena-footer">
          <h3 class="slideanim">170 zł</h3>
          <h4 class="slideanim">miesięcznie</h4>
         
        </div>
      </div> 
    </div> 
  
 
  
  </div>

    <div class="row">
         
  
  
  
         <div style="padding: 15px; border-radius: 0px; background-color: #c84b4a; margin-left: auto; margin-right: auto; min-height: 90px; margin-top: 20px;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      
     <!-- <p style="font-family: 'Pragati Narrow', sans-serif; color:white; font-size: 30px; text-align: center; margin-top:22px;">Posiadacze karty Benefit Multisport ćwiczą bez dodatkowych opłat.
    </p>     -->
 
      <p  style="font-family: 'Pragati Narrow', sans-serif; background-color: silver; color:black; font-size: 32px; text-align: center; margin-top:22px;"> <strong>Karnet jednorazowy - 30 zł, pierwszy trening gratis!</strong></p>
      <p  style="font-family: 'Pragati Narrow', sans-serif; color:white; font-size: 32px; text-align: center; margin-top:22px;"> <strong>Jeżeli twoje dziecko ćwiczy w Bastionie sporty walki - 50zł siłownia open dla Ciebie. </strong></p>
      
  </div>
        
        

        
    </div>



</div>
    </div>


   
 
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 1000) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
</body>



@stop