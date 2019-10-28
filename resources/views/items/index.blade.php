@extends('layouts.app')

@section('content')
    {{-- @dd($items) --}}
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Stock</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>Beng-beng</td>
                        <td>7</td>
                        <td>
                            <a href="{{ url('items/' . $item->id) }}" class="view-item-button">View</a>
                            <a href="#" class="edit-item-button">Edit</a>
                            <a href="#" class="delete-item-button">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection