@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Rotta index della CRUD </h1>

    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($posts as $item)
                <tr>
                    <th scope="row">{{ $item->id}}</th>
                    <td>{{ $item->title}}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('admin.posts.show', $item) }}">SHOW</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    {{ $posts->links() }}
      
</div>
@endsection
