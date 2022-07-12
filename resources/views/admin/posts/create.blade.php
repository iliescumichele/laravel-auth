@extends('layouts.admin')

@section('content')

<div class="container ">
    <h1 class="">Rotta CREATE della CRUD </h1>
    <a href="{{ route('admin.posts.index') }}">&#60&#60 Go back</a>

    <div class="justify-content-center d-flex">


        <form action="{{ route('admin.posts.store') }}" method="POST" class="my-5 w-50">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">
                    <strong>Titolo</strong>
                </label>
                <input type="text" id="title" name="title" class="form-control" placeholder="Inserisci il titolo">
            </div>
            <div class="mb-3">
                <label  class="form-label" for="content">
                    <strong>Testo</strong>
                </label>
                <textarea name="content" class="form-control" id="content" placeholder="Scrivi il contenuto" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    </div>
</div>
@endsection
