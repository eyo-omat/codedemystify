@extends('layouts.admin')

@section('content')
    <h1>Create User</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter name' ]) !!}
        </div>
            <div class="form-group">{!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Enter email' ]) !!}</div>
<div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
</div><div class="form-group">
            {!! Form::label('role_id', 'Role:') !!}
            {!! Form::select('role_id', $roles, null, ['class'=>'form-control', 'placeholder'=>'Select Role...' ]) !!}

</div><div class="form-group">
            {!! Form::label('status', 'Status:') !!}
            {!! Form::label('status', 'Active') !!}
            {!! Form::radio('status', '1', ['class'=>'form-control']) !!}
            {!! Form::label('status', 'Inactive') !!}
            {!! Form::radio('status', '0', true) !!}

</div>
<div class="form-group">
            {!! Form::submit('Create User', ['class'=>' btn btn-primary']) !!}
        </div>
     {!! Form::close() !!}


@endsection

