<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('client_id') }}
            {{ Form::select('client_id',$clients, null,['class' => 'form-control'] ) }}
            {!! $errors->first('client_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('price') }}
            {{ Form::text('price', $order->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>