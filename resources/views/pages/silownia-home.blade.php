@extends('layouts.silownia')

@section('content')
 
      
<a href="https://icons8.com">Icon pack by Icons8</a>
      
      <div>
       <div id="silowniaKontereTop" class="container">
           
         <div class="slideanim col col-lg-6"> <img src="{{URL::asset('/image/logo.png')}}" alt="profile Pic" style="width: 60%; margin-top:250px;"></div>
          <div class="col col-lg-6">
          
         <p style=" margin-top: 150px; margin-bottom: 20px; font-family: 'Pragati Narrow', sans-serif; font-size: 45px; color: black; border-bottom: 1px solid white; "> 
                Zapraszamy do siłowni funkcjonalnej w Centrum Sportowym Bastion! Przestrzenna sala z nowym wyposażeniem oraz ścianką wspinaczkową - większe możliwości, więcej urządzeń, wydajniejsze treningi! 
               <strong>Już otwarte !</strong> 
         </p>  
          <p style="margin-top: 10px; font-family: 'Pragati Narrow', sans-serif; font-size: 25px; color: yellow;"> 
            Przyjdź na trening sam lub ze znajomym!
         </p>  
         </div>
            
       </div>
   
   
    
      <!--
       TUTAJ JEST TABELA Z PLANEM TYGODNIA
       -->
      
      
      
      <div class="fog" style="width:100%;  background-color: #ffffff;">
  
        <h2 style="padding-top: 55px; margin-bottom:55px; color:black;"    class="paragrafTytul">SIŁOWNIA FUNKCJONALNA W CENTRUM SPORTOWYM BASTION</h2> 
                 
          <div style="margin-right: auto; margin-left: auto; " class="row">
          
                 <div class="col">
                  
                    <div style="background-color:  #3e3e41;" class="fog paragrafOpisSztukWalk col-xs-12 col-sm-12 col-md-6 col-lg-6">
             
                         <h1 class="slideanim" style="margin-bottom: 30px; color:firebrick;"> 
                         
                         Siłownia 
                         
                         </h1>
                 
                    <p  class="slideanim"> 
                    
                     
                       Nowa, większa siłownia w Centrum Sportowym Bastion. Odświeżona sala została wyposażona w nowe urządzenia między innymi bieżnie, rowerki. Wewnątrz znajduje się także mini ring oraz ścianka wspinaczkowa. Pomieszczenie w którym wcześniej znajdowała się siłownia, zastąpione zostało szatnią.
                  
                    </p>
               
               </div>
               
               <div id="silownia"  class="obrazekSztukiWalk col-xs-12 col-sm-12 col-md-6 col-lg-6">
               
                 <!--PUSTY DIV -->
                   
               </div>
               
               
               </div>
   
          
          </div>
  
    </div>
      
    
   
      
  <div id="silowniainfo" style="height: AUTO; background-color: whitesmokel" class="fog container">
         
       
        <div class="row">
  <div class="col-md-4">
    <div style="border-radius: 0; background-color: transparent; border: none;" class="thumbnail">
     
        <img src="{{URL::asset('/image/silownia/silowniasecond.jpg')}}" style="width:100%; margin-top:80px;">
  
   
    </div>
  </div> 
  
   <div class="col-md-4">
    <div style="border-radius: 0; background-color: transparent; border: none;" class="thumbnail">
     
        <p style="font-family: 'Pragati Narrow', sans-serif; font-size: 28px; padding: 25px;" class="slideanim"> <i class="material-icons">arrow_drop_down</i>W siłowni funkcjonalnej znajdziesz szereg urządzeń, wykorzystywanych w treningach funkcjonalnych świetnie rozwijających wszystkie partie ciała oraz zwiększających sprawność fizyczną.</p>
    </div>
  </div> 

<div class="col-md-4">
     <div style="border-radius: 0; background-color: transparent; border: none;" class="thumbnail">
     
        <img src="{{URL::asset('/image/silownia/silowniafirst.jpg')}}" style="width:100%; margin-top:80px;">
  
   
    </div>
  </div> 
  
</div>      
       
        <div class="row">
 
  
   <div class="col-md-4">
    <div style="border-radius: 0;  background-color: transparent; border: none;" class="thumbnail">
     
        <p style="font-family: 'Pragati Narrow', sans-serif; font-size: 28px; padding: 25px;" class="slideanim"><i class="material-icons">arrow_drop_down</i> Zapraszamy - siłownia jest już otwarta! Cross-trainingi odbywają się z wykorzystaniem wszystkich jej urządzeń.</p>
   
    </div>
  </div> 

   <div class="col-md-4">
   <div style="border-radius: 0; background-color: transparent; border: none;" class="thumbnail">
     
        <img src="{{URL::asset('/image/silownia/silowniathird.jpg')}}" style="width:100%; margin-top:80px;">
  
   
    </div>
  </div> 
   <div class="col-md-4">
    <div style="border-radius: 0;  background-color: transparent; border: none;" class="thumbnail">
     
          <p style="font-family: 'Pragati Narrow', sans-serif; font-size: 28px; padding: 25px;" class="slideanim"><i class="material-icons">arrow_drop_down</i> Jeśli zapiszesz swoje dziecko na sztuki walki, dostęp do siłowni przysługuje ci za 50 zł.</p>
   
    </div>
  </div> 
</div>
      
    
     </div>


      <div id="wspinaczkaFirst" class="container">

          <h2 style="margin-top: 75px; margin-bottom:25px; color:black; font-size:70px; text-align: center;"    class="slideanim paragrafTytul">ŚCIANKA WSPINACZKOWA</h2> 
  
      </div>
      
      
 
          
      <div class="row" style="margin-left: 0px; ">
                      <div style="background-color:  #A62938; color:black; height: 480px; min-height: 480px; " class="opisDlaDzieci col-xs-12 col-sm-12 col-md-12 col-lg-4">
                   
                                <p style="text-align:center; padding-top:70px; margin-bottom: -60px; color: white; ">
                                      <img width="60px;" src="https://png.icons8.com/dotty/50/000000/bench-press-with-dumbbells.png">
                                </p>
                             
                                
                                 <p  class="dzieciOpisParagraf">

                               Wewnątrz sali siłowni funkcjonalnej, znajdziesz także ściankę wspianczkową. Znajduje ona zastosowanie zarówno w treningach funkcjonalnych jak i samodzielnych ćwiczeniach.
                                 </p>

                    </div>    
                   
                  
                     <div style="background-color: #353030; color: white; height:  480px; min-height: 480px;" id="wspinaczka" class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                      
                              

                    
                     
                     </div>    
                   
                     <div style="background-color: dimgray; color:black; height: 480px; min-height: 480px;" class="opisDlaDzieci col-xs-12 col-sm-12 col-md-12 col-lg-4">
                     
                                
                                 <p style="text-align:center; padding-top:70px; margin-bottom: -60px; color: white; ">
                                         <img width="60px" src="https://png.icons8.com/dotty/50/000000/pullups.png">
                                </p>
                                 <p class="dzieciOpisParagraf">

                  Czterometrowa ścianka wspinaczkowa stanowi wyzwanie trudne do pokonania dla początkujących, a także świetnie rozszerzenie treningów funkcjonalnych.
                                
                                </p>
                     
                     
                    </div>
    </div>
          


     
     
@stop
     
 