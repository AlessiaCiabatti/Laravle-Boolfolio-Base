@extends('layouts.admin')

@section('content')
    <h2>Technologies</h2>

    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{session('error')}}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif


    <div class="my-4">
        <form action="{{ route('admin.technologies.store') }}" method="POST" class="d-flex">
            @csrf
            <input class="form-control me-2" type="search" placeholder="Search" name="name">
            <button class="btn btn-outline-success" type="submit">Send</button>
        </form>
    </div>

    <table class="table crud-table">
        <thead>
            <tr>
                <th scope="col">Technology</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($technologies as $technology)
                <tr>
                    <td>
                        <input type="text" value="{{ $technology->name }}">
                    </td>

                    <td>
                        <button class="btn my_bgy me-2"><i class="fa-solid fa-pencil"></i></button>
                        <button class="btn my_bgr"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
