@extends('layouts.master')

@section('menu')
@parent
@endsection

@section('content')

<div class="label lable-info">{{$page}}</div>

@if(session('errors') && count(session('errors')) > 0)
<div class="alert alert-danger" >
    @foreach(session('errors')->all() as $er)
    <div>{{$er}}</div>
    @endforeach
</div>
@endif

@if(session('message'))
<div class="alert alert-success" >
    {{session('message')}}
</div>
@endif

{!! Form::model($topic, ['action'=>'App\Http\Controllers\TopicController@store']) !!}
<div class='form-group'>
    {!! Form::label('topicname','Topic name')!!}
    {!! Form::text('topicname', '', ['class'=>'form-control'])!!}
</div>
<button class="btn btn-success" type="submit">Add Topic</button>
{!! Form::close() !!}

@endsection
