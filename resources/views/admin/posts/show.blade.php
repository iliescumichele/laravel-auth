@extends('layouts.admin')

@section('content')

<div class="container ">
    <h1 class="">Rotta SHOW della CRUD </h1>
    <a href="{{ route('admin.posts.index') }}">&#60&#60 Go back</a>

    <div class="d-flex justify-content-center my-5">
        <div class="text-center p-3" style="background-color: rgb(150, 204, 252); width:50%;">
            <h3 class="mb-5" style="text-decoration: underline">{{ $item->title}}</h3>
            <p>{{ $item->content }}</p>
        </div>
    </div>
</div>
@endsection
