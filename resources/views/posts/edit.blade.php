@extends('layouts.master')

@section('content')
    <h1>Edit Post</h1>

    @include('errors.all')

    {!! Form::model($post, ['method' => 'put', 'route' => ['posts.update', $post->id], 'class' => 'form']) !!}
    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['required', 'class' => 'form-control', 'placeholder' => 'Input title']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Body') !!}
        {!! Form::textarea('body', null, ['required', 'class' => 'form-control', 'placeholder' => 'Input your text']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@endsection