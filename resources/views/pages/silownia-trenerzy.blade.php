@extends('layouts.silownia')

@section('content')
 

 
 <div style="background-color: whitesmoke; margin-top:-20px;" class="fog container">
  

   
     <div style=" border: 0;" class="page-header">
           
             <h2 class="paragrafTytul" style="color: black; margin-top: 0px;">TRENERZY PERSONALNI</h2> 
          
    </div>
   
   
 
   
    <div  class="row" align="center">
      
      <div  class="col-xs-12 col-sm-12 col-md-6 col-lg-4  pull-left col-xl-4">
       
      <div class="section-box-one">
                    <!---->
                    <figure>
                        <h3 >Karolina Sładki</h3>
                                <p>Trener Personalny/Fizjoterapeutka/Akupunkturzystka/Doradca ds. Dietetyki
                                Absolwentka Śląskiego Uniwersytetu Medycznego w Katowicach
                                Specjalizuje się w treningu fizjoterapeutycznym (medycznym) 
                                z uwzględnieniem wad postawy i dysbalansu mięśniowego klienta 
                                oraz w treningu wytrzymałościowo - siłowym.
                                Kładę duży nacisk na technikę wykonywanych ćwiczeń, patrzę na człowieka
                                całościowo z uwzględnieniem słabych i mocnych stron 
                                (człowiek jest tak mocny jak jego najsłabsze ogniwo)
                                Ze sportem jestem związana od najmłodszych lat, wcześniej była to piłka ręczna
                                (12 lat),później trening siłowy typu crossfit teraz są to sztuki walki (niebieski pas BJJ)
                                Mam szczęście,że mogę łączyć swoją pasje z pracą, która sprawia mi wiele
                                radości i satysfakcji.Cały czas się rozwijam i pogłębiam swoją wiedzę, aby
                                móc zaoferować pomoc na najwyższym poziomie.</p>
                        <h3 style="color:gold;">tel. 793-017-927</h3>
                       
                    </figure>
                    <img  src="{{URL::asset('/image/onas/kadra/karolinasladki.jpg')}}" class="img-responsive"/>
                </div>
      </div>
    
       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
       
      <div class="section-box-one">
                    <!---->
                    <figure>
                        <h3>Tomek Jakubiec</h3>
                                <p>Trener personalny który poprawi każda twoja słabą stronę. Specjalizuje sie w treningu sztuk walki jak i treningu siłowo wytrzymałościowym. Jeśli chcesz poprawić swoją sylwetkę, kondycję lub rozwinąć swoje umiejętności sztuk walki - Trafiłeś idealnie. Zawodnik MMA z rekordem zawodowym 8-2 , brązowy pas BJJ. </p>
                        <h3 style="color:gold;">tel. 660073874</h3>
                       
                    </figure>
                    <img  src="{{URL::asset('/image/onas/kadra/tomekjakubiec.jpg')}}" class="img-responsive"/>
                </div>
      </div>
     
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 pull-right col-xl-4">
       <div class="section-box-one">
                    <!---->
                    <figure>
                        <h3 >Przemek Kostarz</h3>
                        
                          <h3 style="color:gold;">tel. 503-050039</h3>
                    </figure>
                    <img  src="{{URL::asset('/image/onas/kadra/przemekkostarz.jpg')}}" class="img-responsive"/>
                </div>
  
      </div>
   
            </div>

    </div>



       <footer id="myFooter">
        
           <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo"><a href="index.html"><img style="width: 50%;"src="pictures/logo.png"/></a></h2>
                </div>
                <div style="border-left: 1px solid rgb(52,52,52);"  class="col-sm-2">
                    <h5>SPORTY WALKI</h5>
                    <ul>
                        <li><a class="cool-link" href="sportywalki.html#sportyWalkiRodzajeZajec">Co mogę ćwiczyć?</a></li>
                        <li><a class="cool-link" href="cennik.html">Cennik</a></li>
                        <li><a class="cool-link" href="sportywalki.html#sportyWalkiFAQ">Pytania i odpowiedzi</a></li>
                        <li><a class="cool-link" href="sportywalki.html#kidsFight">Treningi dla juniorów</a></li>

                    </ul>
                </div>
                <div style="border-left: 1px solid rgb(52,52,52);"   class="col-sm-2">
                    <h5>SIŁOWNIA</h5>
                    <ul>
                        <li><a class="cool-link" href="cenniksilownia.html">Cennik</a></li>
                        <li><a class="cool-link" href="silownia.html#silowniainfo">Wyposażenie sali</a></li>
                        <li><a class="cool-link" href="silownia.html#wspinaczkaFirst">Ścianka wspinaczkowa</a></li>
                    </ul>
                </div>
                <div  style="border-left: 1px solid rgb(52,52,52);"    class="col-sm-2">
                    <h5>WIĘCEJ</h5>
                    <ul>
                        <li><a target="_blank" class="cool-link" href="https://www.google.pl/maps/dir//Klub+Bastion,+Borowa+128,+43-100+Tychy/@50.1134113,18.9609358,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x4716c81a4c3988df:0x5264cf44433a9555!2m2!1d18.9631245!2d50.1134079!3e0">Lokalizacja</a></li>
                        <li><a class="cool-link" href="multimediasilownia.html">Multimedia</a></li>
                        <li><a class="cool-link" href="kontaktsilownia.html">Kontakt</a></li>
                        <li><a class="cool-link" href="aktualnoscisilownia.html">Aktualności Bastion</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <div class="social-networks">
                        
                        <a target="_blank" href="https://www.facebook.com/bastiontychy/" class="facebook"><i style="font-size: 55px;" class="fa fa-facebook"></i></a>
                      
                    </div>
                    
                </div>
            </div>
        </div>
        
@stop