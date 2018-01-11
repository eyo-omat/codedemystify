@extends('layouts.admin')

@section('content')
    <h1>Create POSTS</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}

    <div class="form-group">
        <div>
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control', 'placeHolder'=>'Enter title' ]) !!}
        </div>
        <div>
            {!! Form::label('category_id', 'Category:') !!}
            {!! Form::select('category_id', ['1'=>'Eyioyo'], null, ['class'=>'form-control', 'placeholder'=>'Select Category...' ]) !!}
        </div>
        <div >
            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
        </div>
        <div>
            {!! Form::label('body', 'Body:') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control', 'placeHolder'=>'Enter Body']) !!}
        </div>
        {!! Form::submit('Create Post', ['class'=>' btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

    @include('includes.form_error')

@endsection

