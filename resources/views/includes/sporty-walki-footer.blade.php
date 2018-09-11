 <footer id="myFooter">
        
           <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo"><a href="{{ url('index') }}">  <img src="{{URL::asset('/image/logo.png')}}" alt="profile Pic" style="width: 50%;"></a></h2>
                </div>
                <div style="border-left: 1px solid rgb(52,52,52);"  class="col-sm-2">
                    <h5>SPORTY WALKI</h5>
                    <ul>
                        <li><a class="cool-link" href="{{ url('sportywalki') }}">Co mogę ćwiczyć?</a></li>
                        <li><a class="cool-link" href="{{ url('sw-cennik') }}">Cennik</a></li>
                        <li><a class="cool-link" href="{{ url('sportywalki#sportyWalkiFAQ') }}">Pytania i odpowiedzi</a></li>
                        <li><a class="cool-link" href="{{ url('sportywalki#kidsFight') }}">Treningi dla juniorów</a></li>

                    </ul>
                </div>
                <div style="border-left: 1px solid rgb(52,52,52);"   class="col-sm-2">
                    <h5>SIŁOWNIA</h5>
                    <ul>
                        <li><a class="cool-link" href="{{ url('silownia-cennik') }}">Cennik</a></li>
                        <li><a class="cool-link" href="{{ url('silownia#silowniainfo') }}">Wyposażenie sali</a></li>
                       
                        <li><a class="cool-link" href="{{ url('silownia#wspinaczkaFirst') }}">Ścianka wspinaczkowa</a></li>
                    </ul>
                </div>
                <div  style="border-left: 1px solid rgb(52,52,52);"    class="col-sm-2">
                    <h5>WIĘCEJ</h5>
                    <ul>
                        <li><a target="_blank" class="cool-link" href="https://www.google.pl/maps/dir//Klub+Bastion,+Borowa+128,+43-100+Tychy/@50.1134113,18.9609358,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x4716c81a4c3988df:0x5264cf44433a9555!2m2!1d18.9631245!2d50.1134079!3e0">Lokalizacja</a></li>
                        <li><a class="cool-link" href="{{ url('sw-multimedia') }}">Multimedia</a></li>
                        <li><a class="cool-link" href="{{ url('sw-kontakt') }}">Kontakt</a></li>
                        <li><a class="cool-link" href="{{ url('sw-aktualnosci') }}">Aktualności Bastion</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <div class="social-networks">
                        
                        <a target="_blank" href="https://www.facebook.com/csBastion/" class="facebook"><i style="font-size: 55px;" class="fa fa-facebook"></i></a>
                      
                    </div>
                    
                </div>
            </div>
        </div>
       
    </footer>
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
        if (pos < winTop + 900) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
