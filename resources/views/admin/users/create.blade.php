@extends('layouts.admin')

@section('content')
    <h1>Create User</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}

        <div class="form-group">
        <div >
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter name' ]) !!}
        </div>

    <div >{!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Enter email' ]) !!}</div>

    <div >
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
    </div>

    <div >
            {!! Form::label('role_id', 'Role:') !!}
            {!! Form::select('role_id', $roles, null, ['class'=>'form-control', 'placeholder'=>'Select Role...' ]) !!}
    </div>

    <div >
            {!! Form::label('status', 'Status:') !!}
            {!! Form::label('status', 'Active') !!}
            {!! Form::radio('is_active', 1, ['class'=>'form-control']) !!}
            {!! Form::label('status', 'Inactive') !!}
            {!! Form::radio('is_active', 0, true) !!}
    </div>

    <div >
            {!! Form::label('file', 'File:') !!}
            {!! Form::file('file', null, ['class'=>'form--control']) !!}
    </div>

    <div >
            {!! Form::submit('Create User', ['class'=>' btn btn-primary']) !!}
    </div>
    </div>
     {!! Form::close() !!}

    @include('includes.form_error')

@endsection

