@extends('layouts')


@section('content')
    <div class="row">
        <div style="margin-top:70px; margin-bottom:30px;" class="col-lg-12 margin-tb">
            <div>
                <h5>Zarzadzanie postami</h5>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-striped ">
        <tr>
            <th>No</th>
            <th>Tytuł</th>
            <th>Treść</th>
            <th width="310px">Akcja</th>
        </tr>
    @foreach ($silownias as $silownia)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $silownia->title}}</td>
        <td>{{ str_limit($silownia->body, 100)}}</td> 
        <td>
            <a class="btn btn-info " href="{{ route('admins.shows',$silownia->id) }}">Szczegóły</a>
            <a class="btn btn-primary " href="{{ route('admins.edits',$silownia->id) }}">Edytuj</a>
            {!! Form::open(['method' => 'DELETE','route' => ['admins.destroy', $silownia->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Usuń', ['class' => 'btn btn-danger ']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
 <div class="row">
        <div class="col-lg-12 margin-tb">
           
            <div class="pull-right">
                <a class="btn btn-info " href="{{ route('admins.creates') }}"> Nowy post</a>
            </div>
        </div>
    </div>

    {!! $silownia->links() !!}
@endsection