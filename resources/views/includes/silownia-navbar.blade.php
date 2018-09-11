 
<nav id="navbarTop" class="navbar navbar-fixed-top navbar-inverse">
  <div class="container-fluid">
   
           
     <div class="navbar-header"> <!-- Logo z nazwą --> 
            <button id="buttontoggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <div>
                    <a id="logo" style="font-size: 290%;  color:white; letter-spacing: 0px;" class="navbar-brand" href="{{ url('index') }}">BASTION</a>
            </div>
    </div>
    
    
    <div id="navbar" class="navbar-collapse collapse pull-right">
      <ul class="nav navbar-nav">
      
          <li class="dropdown">
          <a id="slow-trans" href="{{ url('silownia') }}" role="button" aria-haspopup="true" aria-expanded="false">SILOWNIA  </a>
            <!-- <ul class="dropdown-menu">
            <li><a href="#sportyWalkiRodzajeZajec">RODZAJE ZAJĘĆ</a></li>
            <li><a href="#sportyWalkiFAQ">FAQ</a></li>
            <li><a href="#sportyWalkiTreningiDzieci">TRENING DLA DZIECI</a></li>
           
          </ul>-->
           </li>  
        <li class="dropdown">
          <a id="slow-trans" href="{{ url('silownia-cennik') }}" role="button" aria-haspopup="true" aria-expanded="false">CENNIK  </a>
        <!-- <ul class="dropdown-menu">
            <li><a href="#sportyWalkiRodzajeZajec">RODZAJE ZAJĘĆ</a></li>
            <li><a href="#sportyWalkiFAQ">FAQ</a></li>
            <li><a href="#sportyWalkiTreningiDzieci">TRENING DLA DZIECI</a></li>
           
          </ul>-->
        </li>  
           <li class="dropdown">
          <a id="slow-trans" href="{{ url('silownia-harmonogram') }}" role="button" aria-haspopup="true" aria-expanded="false">HARMONOGRAM  </a>
        <!-- <ul class="dropdown-menu">
            <li><a href="#sportyWalkiRodzajeZajec">RODZAJE ZAJĘĆ</a></li>
            <li><a href="#sportyWalkiFAQ">FAQ</a></li>
            <li><a href="#sportyWalkiTreningiDzieci">TRENING DLA DZIECI</a></li>
           
          </ul>-->
        </li>  
           <li class="dropdown">
          <a id="slow-trans" href="{{ url('silownia-aktualnosci') }}" role="button" aria-haspopup="true" aria-expanded="false">AKTUALNOŚCI </a>
        <!-- <ul class="dropdown-menu">
            <li><a href="#sportyWalkiRodzajeZajec">RODZAJE ZAJĘĆ</a></li>
            <li><a href="#sportyWalkiFAQ">FAQ</a></li>
            <li><a href="#sportyWalkiTreningiDzieci">TRENING DLA DZIECI</a></li>
           
          </ul>-->
        </li>  
       
        
           <li class="dropdown">
          <a id="slow-trans" href="{{ url('silownia-trenerzy') }}"  role="button" aria-haspopup="true" aria-expanded="false">TRENERZY</a>
         <!-- <ul class="dropdown-menu">
            <li><a href="#">PLAN ZAJĘĆ</a></li>
            <li><a href="#">REGULAMIN</a></li>
            <li><a href="#">CENNIK</a></li>
          
          </ul> -->
        </li>
        <li><a id="slow-trans" href="{{ url('silownia-multimedia') }}">MULTIMEDIA</a></li>
         <li ><a id="slow-trans" href="{{ url('silownia-sponsorzy') }}">SPONSORZY</a></li>
        <li><a id="slow-trans" href="{{ url('silownia-kontakt') }}">KONTAKT</a></li>
        
      </ul>

    </div>
 
  </div>
 
</nav>