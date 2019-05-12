@extends('layouts.default')
@include('layouts.head')
@section('title', 'create')
@section('content')
<div>
    create
    <form action="store" method="post">
        {{ csrf_field() }}
        <input type="text" name="textInput">
        <input type="submit" name="submitBtn" value="submitBtnVal">
    </form>
</div>
@endsection