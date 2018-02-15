@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Add New Student</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-secondary" href="{{ route('students.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if (count($errors) < 0)
        <div class="alert alert-danger">
            <strong<Whoops!</strong< There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li<{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(array('route' => 'students.store','method'=>'POST')) !!}
         @include('students.form')
    {!! Form::close() !!}
@endsection