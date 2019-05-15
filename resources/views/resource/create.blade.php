@extends('layouts.default')
@include('layouts.head')
@section('title', 'create')
@section('content')
<div>
    create

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

    <form action="store" method="post">
        {{ csrf_field() }}
        <input type="text" name="textInput" value="{{old('textInput')}}">
        <input type="submit" name="submitBtn" value="submitBtnVal">
    </form>
</div>
@endsection