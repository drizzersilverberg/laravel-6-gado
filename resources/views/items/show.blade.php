@extends('layouts.app')

@section('content')
    {{-- @dd($item) --}}
    <p>Id : {{ $item->id }}</p>
    <p>Name : {{ $item->name }}</p>
    <p>Stock : {{ $item->stock }}</p>
@endsection