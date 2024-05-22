@extends('layouts.admin')

@section('content')
    <h2>Projects</h2>
    @dump($technologies)
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Project</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($technologies as $technology )
            <tr>
                <th scope="row">{{ $technology->name }}</th>
                <td>Mark</td>
              </tr>
            @endforeach
        </tbody>
      </table>
@endsection
