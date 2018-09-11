<div class="row">
   
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nazwa zajęć:</strong>
            {!! Form::text('body', null, array('placeholder' => '','class' => 'form-control' )) !!}
        </div>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Godzina:</strong>
            {!! Form::text('title', null, array('placeholder' => '--:-- do --:--','class' => 'form-control')) !!}
           
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:right;">
            <button href="{{ url()->previous() }} type="submit" class="btn btn-primary">Zatwierdź</button>
    </div>
</div>