<!DOCTYPE html>
<html>
<head>
<title>Laravel 5.5 CRUD Application</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

</head>

<body style="background-color: whitesmoke;">

 @if(isset(Auth::user()->id))
<div style="font-family: 'Montserrat', sans-serif;" class="container">
    @yield('content')
</div>

@else

    <div class="row">
       
      <p style="font-size: 22px; text-align:center; margin-top: 50px;">Bastion - odmowa dostępu dla niepowołanych użytkowników.</p>
             
    </div>
        
    <div class="row">
        <div class="col-md-5 col-md-offset-5">
            <img width="25%;" src="http://bastion-tychy-katowice.xaa.pl/pictures/logo.png" alt="Bastion Tychy">
        </div>
    </div>
    
@endif

</body>
</html>