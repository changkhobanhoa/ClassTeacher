@extends('layouts.admin')
@section('title')
    Admin
@endsection
@section('content')
toan 
    @if ($errors)
        <div class="alert alert-danger" role="alert">
            {{ $errors }}
        </div>
    @endif
@endsection
