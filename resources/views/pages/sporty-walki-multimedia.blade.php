@extends('layouts.sporty-walki')

@section('content')
 <script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
    <div id="loader"></div>
   
    <div style="background-color: snow; margin-top:-20px;" class="fog container">


        <h2 style="font-family: 'Pragati Narrow', sans-serif; font-size:55px; margin-top: 60px; margin-bottom: 40px; color:black; text-align: center;">
    <span class="cool-link-black" style="color:black;">Zdjęcia</span>
    </h2>





<div onload="myFunction()"  id="myDiv" class="animate-bottom" class="col-md-12">
<div class="row">


	 	<div class="gal">
	<a href="{{URL::asset('/image/multimedia_zdjecia/1.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/1.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/2.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/2.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/3.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/3.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/4.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/4.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/5.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/5.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/6.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/6.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/7.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/7.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/8.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/8.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/9.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/9.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/9.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/9.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/9.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/9.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/10.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/10.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/11.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/11.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/12.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/12.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/13.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/13.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/14.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/14.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/15.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/15.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/16.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/16.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/16.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/16.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/17.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/17.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/18.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/18.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/19.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/19.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/20.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/20.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/21.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/21.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/22.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/22.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/23.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/23.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/24.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/24.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/25.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/25.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/26.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/26.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/27.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/27.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/28.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/28.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/29.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/29.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/30.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/30.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/31.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/31.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/32.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/32.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/33.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/33.jpg')}}" alt=""></a>
  
<a href="{{URL::asset('/image/multimedia_zdjecia/33.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/33.jpg')}}" alt=""></a>
  
<a href="{{URL::asset('/image/multimedia_zdjecia/34.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/34.jpg')}}" alt=""></a>
 
  
<a href="{{URL::asset('/image/multimedia_zdjecia/35.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/35.jpg')}}" alt=""></a>
  
 
<a href="{{URL::asset('/image/multimedia_zdjecia/36.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/36.jpg')}}" alt=""></a>
  
<a href="{{URL::asset('/image/multimedia_zdjecia/37.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/37.jpg')}}" alt=""></a>
  
<a href="{{URL::asset('/image/multimedia_zdjecia/38.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/38.jpg')}}" alt=""></a>
  
<a href="{{URL::asset('/image/multimedia_zdjecia/39.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/39.jpg')}}" alt=""></a>
  
<a href="{{URL::asset('/image/multimedia_zdjecia/40.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/40.jpg')}}" alt=""></a>
  
   <a href="{{URL::asset('/image/multimedia_zdjecia/41.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/41.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/42.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/42.jpg')}}" alt=""></a>
 
<a href="{{URL::asset('/image/multimedia_zdjecia/43.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/43.jpg')}}" alt=""></a>
  
<a href="{{URL::asset('/image/multimedia_zdjecia/43.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/43.jpg')}}" alt=""></a>
  
<a href="{{URL::asset('/image/multimedia_zdjecia/44.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/44.jpg')}}" alt=""></a>
  
<a href="{{URL::asset('/image/multimedia_zdjecia/45.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/45.jpg')}}" alt=""></a>
  
<a href="{{URL::asset('/image/multimedia_zdjecia/46.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/46.jpg')}}" alt=""></a>
  
<a href="{{URL::asset('/image/multimedia_zdjecia/47.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/47.jpg')}}" alt=""></a>
  
<a href="{{URL::asset('/image/multimedia_zdjecia/48.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/48.jpg')}}" alt=""></a>
  
<a href="{{URL::asset('/image/multimedia_zdjecia/49.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/49.jpg')}}" alt=""></a>
  
<a href="{{URL::asset('/image/multimedia_zdjecia/50.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/50.jpg')}}" alt=""></a>
  
<a href="{{URL::asset('/image/multimedia_zdjecia/51.jpg')}}" target="_blank"><img src="{{URL::asset('/image/multimedia_zdjecia/51.jpg')}}" alt=""></a>
  
 
 
   

  		
	</div>
	</div>

</div>




</div>
</div>

<div style="background-color: #3d3d3d;" class="fog container">
	    
   <h2 style="font-family: 'Pragati Narrow', sans-serif; font-size:55px; margin-top: 100px; margin-bottom: 40px; color:white; text-align: center;">
    <span class="cool-link" style="color:white;">Materiały wideo</span>
    </h2>
	    <div class="col-md-12">
    
           
         <div  style="margin-top:35px;" class="row">
         
     <h2 style="font-family: 'Pragati Narrow', sans-serif; font-size:35px; margin-top: 60px; margin-bottom: 40px; color:white; text-align: center;">Treningi w Bastionie</h2>

        <iframe style="border: 0; margin-bottom: 35px;" width="400" height="280" class="col-xs-12 col-sm-12 col-md-12 col-lg-4"
        src="https://www.youtube.com/embed/uxWVIiW_SVQ">
        </iframe>     
              <iframe style="border: 0; margin-bottom: 35px;" width="400" height="280" class="col-xs-12 col-sm-12 col-md-12 col-lg-4"
        src="https://www.youtube.com/embed/tbPukApBnZ4">
        </iframe>     
              <iframe style="border: 0; margin-bottom: 35px;" width="400" height="280" class="col-xs-12 col-sm-12 col-md-12 col-lg-4"
        src="https://www.youtube.com/embed/DcmzWgrtilE">
        </iframe>  


	    </div>
         
           
        <div style="margin-top:35px;" class="row">
         
   <h2 style="font-family: 'Pragati Narrow', sans-serif; font-size:35px; margin-top: 60px; margin-bottom: 40px; color:white; text-align: center;">Dzieci i juniorzy</h2>

              <iframe style="border: 0; margin-bottom: 35px;" width="400" height="280" class="col-xs-12 col-sm-12 col-md-12 col-lg-4"
        src="http://www.youtube.com/embed/5yeQ4g-nDjw">
        </iframe>     
     

              <iframe style="border: 0; margin-bottom: 35px;" width="400" height="280" class="col-xs-12 col-sm-12 col-md-12 col-lg-4"
        src="http://www.youtube.com/embed/VLwfuuvcxS4">
        </iframe>     
     

              <iframe style="border: 0; margin-bottom: 35px;" width="400" height="280" class="col-xs-12 col-sm-12 col-md-12 col-lg-4"
        src="http://www.youtube.com/embed/P-gwmaZeBE8">
        </iframe>     
      
           

              <iframe style="border: 0; margin-bottom: 35px;" width="400" height="280" class="col-xs-12 col-sm-12 col-md-12 col-lg-4"
        src="http://www.youtube.com/embed/upjO7VvAKkI">
        </iframe>     
     

              <iframe style="border: 0; margin-bottom: 35px;" width="400" height="280" class="col-xs-12 col-sm-12 col-md-12 col-lg-4"
        src="http://www.youtube.com/embed/5_o9AciZxDc">
        </iframe>     
     


	    </div>
         
             
        <div style="margin-top:35px;" class="row">
         
   <h2 style="font-family: 'Pragati Narrow', sans-serif; font-size:35px; margin-top: 60px; margin-bottom: 40px; color:white; text-align: center;">Zawodnicy Bastionu w boju</h2>

              <iframe style="border: 0; margin-bottom: 35px;" width="400" height="280" class="col-xs-12 col-sm-12 col-md-12 col-lg-4"
        src="http://www.youtube.com/embed/M5zhPX5fRo4">
        </iframe>     
     
              <iframe style="border: 0; margin-bottom: 35px;" width="400" height="280" class="col-xs-12 col-sm-12 col-md-12 col-lg-4"
        src="http://www.youtube.com/embed/fjRJmtL4nxE">
        </iframe>     
     
              <iframe style="border: 0; margin-bottom: 35px;" width="400" height="280" class="col-xs-12 col-sm-12 col-md-12 col-lg-4"
        src="http://www.youtube.com/embed/5DDhe4SKvFk">
        </iframe>     
     
              <iframe style="border: 0; margin-bottom: 35px;" width="400" height="280" class="col-xs-12 col-sm-12 col-md-12 col-lg-4"
        src="http://www.youtube.com/embed/47Q70CHVrpI">
        </iframe>     
     
              <iframe style="border: 0; margin-bottom: 35px;" width="400" height="280" class="col-xs-12 col-sm-12 col-md-12 col-lg-4"
        src="http://www.youtube.com/embed/QlN2jsnP04g">
        </iframe>     
     
              <iframe style="border: 0; margin-bottom: 35px;" width="400" height="280" class="col-xs-12 col-sm-12 col-md-12 col-lg-4"
        src="http://www.youtube.com/embed/-UxhxC6jqk0">
        </iframe>     
     
              <iframe
               style="border: 0; margin-bottom: 35px;" width="400" height="280" class="col-xs-12 col-sm-12 col-md-12 col-lg-4"
        src="http://www.youtube.com/embed/aE5zTVzcPvg">
        </iframe>     
     
              <iframe style="border: 0; margin-bottom: 35px;" width="400" height="280" class="col-xs-12 col-sm-12 col-md-12 col-lg-4"
        src="http://www.youtube.com/embed/EEbZYUZnMYI">
        </iframe>     
     
              <iframe style="border: 0; margin-bottom: 35px;" width="400" height="280" class="col-xs-12 col-sm-12 col-md-12 col-lg-4"
        src="http://www.youtube.com/embed/D7LRFsaa8d4">
        </iframe>     
     
              <iframe style="border: 0; margin-bottom: 35px;" width="400" height="280" class="col-xs-12 col-sm-12 col-md-12 col-lg-4"
        src="http://www.youtube.com/embed/Gh3iPtS4E-Q">
        </iframe>     
     
              <iframe style="border: 0; margin-bottom: 35px;" width="400" height="280" class="col-xs-12 col-sm-12 col-md-12 col-lg-4"
        src="http://www.youtube.com/embed/hDv9At4qBhM">
        </iframe>     
     
              <iframe style="border: 0; margin-bottom: 35px;" width="400" height="280" class="col-xs-12 col-sm-12 col-md-12 col-lg-4"
        src="http://www.youtube.com/embed/t32kXKjoGiU">
        </iframe>     
     
              <iframe style="border: 0; margin-bottom: 35px;" width="400" height="280" class="col-xs-12 col-sm-12 col-md-12 col-lg-4"
        src="http://www.youtube.com/embed/BUErfanHlRw">
        </iframe>     
     
              <iframe style="border: 0; margin-bottom: 35px;" width="400" height="280" class="col-xs-12 col-sm-12 col-md-12 col-lg-4"
        src="http://www.youtube.com/embed/bpe0Np-onEI">
        </iframe>     
     
              <iframe style="border: 0; margin-bottom: 35px;" width="400" height="280" class="col-xs-12 col-sm-12 col-md-12 col-lg-4"
        src="http://www.youtube.com/embed/ywfHzd4SQHo">
        </iframe>     
     

     


	    </div>
         
       
        
         
  
    </div>
    
	    
	</div>
       
           
            
             
               <div style="background-color: darkred" class="container">
            <p style="font-family: 'Pragati Narrow', sans-serif; font-size:45px; color: white; text-align: center;"> Po więcej materiałów zapraszamy na <a href="https://www.facebook.com/bastiontychy/">Facebook</a> oraz <a href="https://www.youtube.com/channel/UCX6Jv-cbcSsuFjV7POSZs6A"> Youtube </a> Bastionu.</p>
        </div>

@stop