@extends('layout.umm')

@section('content')
    <h1>Donate Now</h1>
    {!! Form::open(['action' => 'DonationsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('amount', 'amount')}}
            {{Form::number('amount', '', ['class' => 'form-control', 'placeholder' => 'amount'])}}
        </div>
        <div class="form-group">
            {{Form::hidden('campaign_id', $campaigns->id, ['class' => 'form-control', 'placeholder' => 'campaign_id'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection