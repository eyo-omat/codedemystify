@extends('layouts.admin')

@section('content')
    <h1>Edit User</h1>

    <div class="row">
        <div class="col-sm-3">
            <img class="img-responsive img-rounded"
                 src="{{$user->photo ? $user->photo->path : '/images/1515592165bart.png'}}" alt="">

        </div>

        <div class="col-sm-9">
            {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}

            <div class="form-group">
                <div>
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter name' ]) !!}
                </div>

                <div>{!! Form::label('email', 'Email:') !!}
                    {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Enter email' ]) !!}</div>

                <div>
                    {!! Form::label('password', 'Password:') !!}
                    {!! Form::password('password', ['class'=>'form-control']) !!}
                </div>

                <div>
                    {!! Form::label('role_id', 'Role:') !!}
                    {!! Form::select('role_id', $roles, null, ['class'=>'form-control', 'placeholder'=>'Select Role...' ]) !!}
                </div>

                <div>
                    {!! Form::label('status', 'Status:') !!}
                    {!! Form::label('status', 'Active') !!}
                    {!! Form::radio('is_active', 1, ['class'=>'form-control']) !!}
                    {!! Form::label('status', 'Inactive') !!}
                    {!! Form::radio('is_active', 0) !!}
                </div>

                <div>
                    {!! Form::label('photo_id', 'File:') !!}
                    {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
                </div>

                <div>
                    {!! Form::submit('Edit User', ['class'=>' btn btn-primary']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="row">
        @include('includes.form_error')
    </div>

@endsection

