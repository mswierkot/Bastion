@extends('layouts.sporty-walki')

@section('content')

    

<div  id="sportyWalkiKontenerTop" class="container">
           
          <div class="col col-xs-0 col-sm-0 col-md-3 col-lg-4"> <!-- Ten container jest pusty i tworzy pusta przestrzen po lewej od tekstu --><img class="slideanim" src="{{URL::asset('/image/logo.png')}}" alt="profile Pic" style="width: 80%; margin-top:90px;"> </div>
          
          <div class="slideanim col col-xs-12 col-sm-12 col-md-6 col-lg-7">
          
            <p id="sportyWalkiTytul1">CENTRUM SPORTOWE BASTION</p>
              
            <h2 id="sportyWalkiTytul2" >SPORTY WALKI</h2>  
             
        
          </div>  
          <div class="col col-xs-12 col-sm-12 col-md-3 col-lg-1">
          
              
        
          </div>
           
</div>
       
        <div> <!-- Ten container przechowuje informacje o poszczegolnych stylach walk -->
            
            <div  id="sportyWalkiRodzajeZajec" style="margin: 0;  background-color: whitesmoke; color: black;" class="fog jumbotron">     
            
                    <h2 align="center" style="font-size:55px; font-family: 'Pragati Narrow', sans-serif; text-align: center; margin: 0 auto 0 auto;">
                    
                     <h style="color:black;">  CO MOŻESZ ĆWICZYĆ W BASTIONIE? </h>
                    
                    </h2> 
         
             </div>
            
            <div class="col">
                  
                    <div  class="paragrafOpisSztukWalk col-xs-12 col-sm-12 col-md-6 col-lg-6">
             
                         <h1 class="slideanim" style="margin-bottom: 30px; color:firebrick;"> 
                         
                         Brazylijskie Jiu-Jitsu <hr>
                         
                         </h1>
                 
                    <p class="slideanim"> 
                    
                     
                       Brazylijskie Jiu-Jitsu to specjalnie opracowane techniki kontroli przeciwnika w stójce i parterze. Pozwalają osiągnąć dużą skuteczność w sytuacji zagrożenia. BJJ kładzie duży nacisk na umiejętność kontroli nad rywalem, przez zajmowanie odpowiedniej pozycji, wykorzystywanie nie tylko uderzeń, ale także dźwigni, podduszeń i unieruchomień.
                  
                    </p>
               
               </div>
               
               <div id="bjj" class="obrazekSztukiWalk col-xs-12 col-sm-12 col-md-6 col-lg-6">
               
                 <!--PUSTY DIV -->
                   
               </div>
               
               
               </div>
         
           
            <div class="col">
             
              <div id="mma" class="obrazekSztukiWalk col-xs-12 col-sm-12 col-md-6 col-lg-6">
               
                  <!--PUSTY DIV -->
             
               </div>
               
               <div class="paragrafOpisSztukWalk col-xs-12 col-sm-12 col-md-6 col-lg-6">
             
                   <h1 class="slideanim" style="margin-bottom: 30px; color:firebrick;">
                   
                     MMA - mixed martial arts  <hr/>
                     
                  </h1>
                  
                  <p class="slideanim"> 
                  
                      MMA to dyscyplina, w której zawodnicy walczą wręcz z dużym zakresem dozwolonych technik. MMA to jeden ze współczesnych kierunków rozwoju sztuk walki – zapewnienie widowiska sportowego, jak najbardziej zbliżonego do realnej walki, przy jak najmniejszych ograniczeniach i jednoczesnym zminimalizowaniu ryzyka śmierci i poważnych, trwałych obrażeń ciała.
                
                  </p>
              
                </div>
               
               
           </div>
         
            <div class="col">
               
               <div class="paragrafOpisSztukWalk col-xs-12 col-sm-12 col-md-6 col-lg-6">
            
                   <h1 class="slideanim" style="margin-bottom: 30px; color:firebrick;"> 
                   
                   Submission fighting  <hr/>
                   
                   </h1>
                   
                    <p class="slideanim">  
                  
                     Submission fighting to forma walki zapaśniczej. Walka toczy się przy użyciu chwytów. Dozwolone jest używanie dźwigni oraz duszeń, zabronione są natomiast uderzenia. Formuła ta została stworzona, aby umożliwić rywalizację zawodników różnych stylów na prostych i jednoznacznych zasadach.
                  
                    </p>
               
               </div>
             
                 <div id="subfight" class="obrazekSztukiWalk col-xs-12 col-sm-12 col-md-6 col-lg-6">
                
                   <!--PUSTY DIV -->
              
                </div>
               
           </div>
           
            <div class="col">
             
               <div id="zapasy" class="obrazekSztukiWalk col-xs-12 col-sm-12 col-md-6 col-lg-6">
               
               <!--PUSTY DIV -->
               
               </div>
             
                 <div  class="paragrafOpisSztukWalk col-xs-12 col-sm-12 col-md-6 col-lg-6">
             
                   <h1 class="slideanim" style="margin-bottom: 30px; color:firebrick;"> 
                  
                    Zapasy <hr/>
                  
                    </h1>
                   
                 <p class="slideanim"> 
                  
                    Zapasy jako jedna z najstarszych dyscyplin sportowych, są znakomitym punktem wyjścia do uprawiania innych sportów walki. Trening zapaśniczy znajduje zastosowanie w sytuacji zagrożenia, sprawdza się gdy zaatakowany będzie musiał się obronić.
                </p>
               
               </div>
               
               
           </div>
  
            <div class="col">
             
               <div  class="paragrafOpisSztukWalk col-xs-12 col-sm-12 col-md-6 col-lg-6">
          
                <h1 class="slideanim" style="margin-bottom: 30px; color:firebrick;">
                      
                 Techniki samoobrony    <hr/>
                        
                 </h1>
                  
                
                <p class="slideanim">   
                
                      Eksperci samoobrony znają setki technik, jednak w sytuacji stresowej instynktownie stosują technikę, którą mają najlepiej opanowaną. Dzieje się tak dlatego, że realnie atak jest zwykle błyskawiczny i nie ma czasu na zastanawianie się. Zastosowanie kilku prostych reguł i dobrze opanowanych podstawowych technik pozwala zwykle skutecznie zlikwidować zagrożenie.
                 </p>
              
                </div>
               
                 <div id="samoobrona" class="obrazekSztukiWalk col-xs-12 col-sm-12 col-md-6 col-lg-6">
                 
                 <!--PUSTY DIV -->
                 
                 </div>
               
           </div>
        
          <div class="col">
             
               <div id="box" class="obrazekSztukiWalk col-xs-12 col-sm-12 col-md-6 col-lg-6">
               
               <!--PUSTY DIV -->
               
               </div>
              
                <div class="paragrafOpisSztukWalk col-xs-12 col-sm-12 col-md-6 col-lg-6">
             
                   <h1 class="slideanim" style="margin-bottom: 30px; color:firebrick;"> 
                   
                   Boks <hr/>
                   
                   </h1>
                  
                <p class="slideanim"> 
                  
                   Trening bokserski stanowi bardzo dobre uzupełnienie chwytów wykorzystywanych w BJJ czy Submission Wrestling. Boks można także uprawiać jako intensywną formę ćwiczeń ruchowych z elementami sportów walki lub samoobrony.
                </p>
             
              </div>
               
               
           </div>
           
             <div class="col">
             
               <div class="paragrafOpisSztukWalk col-xs-12 col-sm-12 col-md-6 col-lg-6">
             
                   <h1 class="slideanim" style="margin-bottom: 30px; color:firebrick;">
                   
                     Crossfit  <hr/>
                     
                  </h1>
                  
             <p class="slideanim">    
                  
                  Program treningu siłowego i kondycyjnego, który opiera się na wzroście dziesięciu najważniejszych zdolności siłowych. Podczas ćwiczeń rozwija się siłę i masę mięśni, aby wzmocnić siłę ruchu mięśni.
            
            </p>
               
            </div>
                
            <div id="crossfit" class="obrazekSztukiWalk col-xs-12 col-sm-12 col-md-6 col-lg-6">
                       
              <!--PUSTY DIV -->
                       
              </div>
     
           </div>
          
        </div>
     
              

               <div id="sportyWalkiFAQ" style="width: 100%;  display:inline-block; background-color: whitesmoke; " class="fog container">
       
                   <h2 style="margin-top: 5px; margin-bottom:40px;color:black;"    class="paragrafTytul">FAQ - NAJCZĘSTSZE PYTANIA <i style="font-size: 45px;" class="material-icons">question_answer</i>        </h2> 
                   
                
          <div class="row">
    
   
   
    	        <div  class="panel-group" id="accordion">
                        <div class="panel panel-default" id="panel1">
        
                            <div style="background-color:#C84B4A; border-radius: 0;" class="panel-heading">
                             <h4 class="panel-title">
        
                                 <a data-toggle="collapse" data-target="#collapseOne">
                          
                                      <span class="hoverhand question cool-link"> Jak wygląda przystąpienie do pierwszego treningu? </span>
                        
                                </a>
     
                             </h4>

                          </div>
        
           <div id="collapseOne" class="panel-collapse collapse">
            
            <div class="panel-body">
             <p style="font-family: 'Pragati Narrow', sans-serif; font-size:25px; ">
                Masz czas na podjęcie decyzji czy chcesz kontynuować zajęcia, przyjdź na pierwszy trening i przekonaj się sam, czy odpowiada ci forma ćwiczeń.
                </p>
            </div>
        
        </div>
    </div>
   
     <div class="panel panel-default" id="panel2">
        
        <div style="background-color:#C84B4A; border-radius: 0;" class="panel-heading">
             <h4 class="panel-title">
        
                 <a data-toggle="collapse" data-target="#collapseTwo">
          
                    <span class="hoverhand question cool-link"> Co warto zabrać ze sobą na trening? </span>
                </a>
     
         </h4>

        </div>
        
           <div id="collapseTwo" class="panel-collapse collapse">
            
            <div class="panel-body">
             <p style="font-family: 'Pragati Narrow', sans-serif; font-size:25px;">
               Zmienne obuwie, np.: klapki – na wyłożonej specjalną matą sali, ćwiczymy boso, przybory kąpielowe (żel pod prysznic, ręcznik), wodę (nie zostawiamy butelek po napojach na sali), strój – spodenki/spodnie z dresu i bluzę/koszulkę lub kimono. Na trening bokserski należy obowiązkowo zabrać ochraniacz na szczękę. Dodatkowo na zajęcia z boksu, warto zabrać swoje rękawice, mimo, że na wyposażeniu klubu dostępne są rękawice klubowe). <b> Do klubu nie zapomnij zabrać pozytywnego nastawienia! </b>
            </div>
        
        </div>
    </div>
   
     <div class="panel panel-default" id="panel3">
        
        <div style="background-color:#C84B4A; border-radius: 0;" class="panel-heading">
             <h4 class="panel-title">
        
                 <a data-toggle="collapse" data-target="#collapseThree">
          
                    <span class="hoverhand question cool-link"> Kiedy mój syn/córka może rozpocząć ćwiczyć w Bastionie? </span>
                </a>
     
         </h4>

        </div>
        
           <div id="collapseThree" class="panel-collapse collapse">
            
            <div class="panel-body">
            <p style="font-family: 'Pragati Narrow', sans-serif; font-size:25px;">
               Dolną granicą wiekową dołączenia do klubu jest 6 lat. Wraz z wiekiem, trudniej jest przełamać pewne wyrobione odruchy, które utrudniają opanowanie ćwiczeń. Dzieciom przychodzi to znacznie sprawniej – im wcześniej dziecko zacznie ćwiczyć, tym więcej i sprawniej jest w stanie się nauczyć.
                </p>
            </div>
        
        </div>
    </div>
    
    
</div>
</div>
       </div>
      
         
          <div id="kidsFight" style="width:100%; min-height: 200px; height: 400px; background-color: lightcoral;" class="fog container">

             <div style="margin-bottom: 80px; margin-top: 80px;">
                   <h2 style="font-family: 'Pragati Narrow', sans-serif; font-size:55px; color:yellow;" align="center" style="margin-left:auto; margin-right: auto;">TRENINGI DLA DZIECI I JUNIORÓW</h2> 
                 <hr/ style="width: 35%;">
                 <h5 class="slideanim" style=" margin-top: 40px; font-family: 'Pragati Narrow', sans-serif; font-size:25px; color: yellow; margin-left:auto; margin-right: auto;" align="center" >Przyjdź na trening osobiście i przekonaj się, jak wyglądają zajęcia dla najmłodszych lub zajrzyj już teraz do<a style="color:white;" href="multimedia.html"> <b>sekcji multimedialnej</b></a>, gdzie znajdziesz materiały wideo z ćwiczeń.</h5>

             </div>    

       
        
        </div>
           
  <div class="row" style="margin-left: 0px; ">
                      <div style="background-color:  #A62938; color:black; height: 530px; min-height: 530px; " class="opisDlaDzieci col-xs-12 col-sm-12 col-md-12 col-lg-4">
                     
                                <p style="color: #353030; text-align: center; margin-top: 40px; margin-bottom: -80px;">  <i style="font-size: 80px;" class="material-icons">tag_faces </i></p>
                                
                                 <p style="text-align:center;" class="slideanim dzieciOpisParagraf">

                                     Zajęcia dla najmłodszych łączą w sobie zabawy ruchowe i ćwiczenia ogólnorozwojowe. Ćwiczenia prowadzone są w parach, w różnych grupach wiekowych.  
                                     
                                 </p>

                    </div>    
                   
                  
                     <div style="background-color: #353030; color: white; height:  530px; min-height: 530px;" class="opisDlaDzieci col-xs-12 col-sm-12 col-md-12 col-lg-4">
                      
                                
                                <p style="color: white; text-align: center; margin-top: 40px; margin-bottom: -80px;">  <i style="font-size: 80px;" class="material-icons">fitness_center </i></p>
                                 <ul class="slideanim dzieciOpisParagraf" style="list-style-type:-;">

                                         Zajęcia ogólnorozwojowe i BJJ:
                                         <li>uczą szacunku i samodyscypliny </li>
                                         <li>poprawiają siłę, koordynację ruchową, kondycję i powodują wzrost poczucia własnej wartości </li>
                                         <li>ruch pomaga rozwiązać problem z nadwagą </li>

                                </ul>
   
                    
                     
                     </div>    
                   
                     <div style="background-color: dimgray; color:black; height: 530px; min-height: 530px;" class="opisDlaDzieci col-xs-12 col-sm-12 col-md-12 col-lg-4">
                    
                             <p style="color: #353030; text-align: center; margin-top: 40px; margin-bottom: -80px;">  <i style="font-size: 80px;" class="material-icons"> visibility </i></p>
                               
                            <p style="text-align: center;" class="slideanim dzieciOpisParagraf">
                              
                                 Grupy dziecięce w Bastionie prowadzone są przez wykwalifikowanych adeptów sportów walk. Grupy dzielą się ze względu na stopień zaawansowania oraz wiek:  od 6 do 9 lat, oraz od 10 do 13 lat.
                                 
                            </p>
                     
                     
                    </div>
    </div>
       <div id="kidsFight2" class="fog container">

          
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
        if (pos < winTop + 900) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>


@stop