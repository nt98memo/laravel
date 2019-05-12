@extends('layouts.default')
@include('layouts.head')
@section('title', 'index')
@section('content')
<div>
   index
   <ul>
       @each('components.array', $arrayData, 'item')
   </ul>
</div>
@endsection