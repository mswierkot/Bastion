@extends('layouts.sporty-walki')

@section('content')

 
<div style="padding-top: 180px; margin-top:-20px;" id="planzajec" class="fog container">
<h2 style="background-color: dimgray; color: white; font-size: 45px; font-family: 'Pragati Narrow', sans-serif; margin-bottom: 52px; text-align: center; padding: 5px">Godziny otwarcia:
         poniedziałek - piątek&nbsp;<em><span style="color: black">8:15 - 13:00</span></em> oraz&nbsp;<em><span style="color: black">15:00 - 22:30 &nbsp;</span></em>Soboty i niedziele&nbsp;<em><span style="color: black">10:00 - 16:00</span></em></h2><!-- start feedwind code -->
         
<!--<script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="57163/"></script> <!-- end feedwind code -->                                         <!-- odwołane;odwołany;odwołano;odwołam;odwołana;zmiana;planu; -->


<h2 style="background-color: darkgray; color: white; font-size: 35px; font-family: 'Pragati Narrow', sans-serif; margin-bottom: 52px; text-align: center; padding: 5px">Godziny zajęć trening&oacute;w funkcjonalnych (crossfit) na stronie  <a href="harmonogramsilowni.html">siłowni.</a></h2>



   

<table class="table table-striped table-dark">
                <tr>
                    <th style="width: 15%; ">Poniedziałek  
                     @if(Auth::check()) 
                     {{ Auth::user()->name }} 
                     <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                     </a>
                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                     @endif
                     </th>
                    <th style="width: 15%;">Wtorek</th>
                    <th style="width: 15%;">Środa</th>
                    <th style="width: 15%;">Czwartek</th>
                    <th style="width: 15%;">Piątek</th>
                    <th style="width: 15%;">Sobota</th>
                    <th style="width: 15%;">Niedziela</th>
                </tr>
            </table>
         <table class="table table-striped table-dark table-bordered">
                @foreach ($articles->chunk(7) as $chunk)
                   
                    <tr>
                        @foreach ($chunk as $article)
                            <td  style="width: 15%;" >
                                      
                                      <b>{{ $article->body }}</b>
                                      <br>
                                      {{ $article->title }}
                                        
                                        @if(Auth::check())  
                                           <a href="{{ route('admin.edit',$article->id) }}"><i style="font-size:15px; color:gray;" class="fa">&#xf013;</i> </a>
                                        @endif
                            </td>
                        @endforeach
                    
                    </tr>
                @endforeach
      </table>







<h2 style="background-color: #3B5998; color: white; font-size: 35px; font-family: 'Pragati Narrow', sans-serif; margin-bottom: 52px; text-align: center; padding: 5px">Informacji na temat zmian w terminarz szukaj na stronie <a href="https://www.facebook.com/bastiontychy/?fb_dtsg_ag=Adz8NNEZY483FQUluW5hkOCQaFyyD-GEAz3OrNJpIDMdng%3AAdxltBeAJANKmG1Z2NjvvLrPPv6dgnG7LJKUa1cFnI59rw">Facebook</a></h2>









</div> 

@stop