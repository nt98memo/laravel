
@extends('layouts.default')
@include('layouts.head')
@section('title', 'store')
@section('content')
@if(!empty($errors))
    @foreach ($errors->all() as $error)
        <div>{{$error}}</div>
    @endforeach
@endif
@if($errors->has('textInput'))
    @foreach ($errors->get('textInput') as $error)
        <div>{{$error}}</div>
    @endforeach
@endif
<div>
    store
    <br>
    {{old('textInput')}}
    {{$textInput}}
    <br>
    {{$submitBtn}}
</div>
@endsection