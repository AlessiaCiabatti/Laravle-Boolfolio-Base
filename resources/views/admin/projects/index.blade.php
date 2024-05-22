@extends('layouts.admin')

@section('content')
    <h2>Projects</h2>
    @dump($projects)
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Project</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
          </tr>
        </tbody>
      </table>
@endsection
