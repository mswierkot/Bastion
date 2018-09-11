@extends('layouts')


@section('content')
    <div class="row">
        <div style="margin-top:70px; margin-bottom:30px;" class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>Zmiana zajęć  {{ $silownia -> body}} o godzinie {{ $silownia -> title }} </h5>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url()->previous() }}"> Wróć</a>
            </div>
        </div>
    </div>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {!! Form::model($silownia, ['method' => 'PATCH','route' => ['admins.update', $silownia->id]]) !!}
        @include('admins.forms')
    {!! Form::close() !!}


@endsection
