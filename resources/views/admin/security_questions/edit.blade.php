@extends('admin.layout.admin')
@section('content')
    {!! Form::open(['method' => 'PUT', 'route' => ['securityQuestions.update',$question[0]['id']], 'enctype' => 'multipart/form-data'])!!}
    {{ csrf_field() }}
    {!! Form::text('question_text', old('question_text'),['class' => 'form-control', 'placeholder' => $question[0]['question_text']]) !!}
    <br>
    {!! Form::text('answer', old('answer'), ['class' => 'form-control', 'placeholder' => $question[0]['answer']]) !!}
    <br>
    {!! Form::submit(trans('module.submit'), ['class' => 'btn btn-danger' ,'data-value' => 'shake', 'onclick' => 'shake()']) !!}
    {{ Form::reset(trans('module.reset'), ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection