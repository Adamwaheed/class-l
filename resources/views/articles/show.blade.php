@extends('base')

@section('main')
    <h1>{{$article->title}}</h1>
    <p>{{$article->body}}</p>

    <form action="{{ route('articles.destroy', $article)}}" method="post">
        @csrf
        @method('DELETE')
        <a class="btn btn-info" href="{{ url()->previous() }}" >back</a>
        <button class="btn btn-danger" type="submit">Delete</button>
    </form>
@endsection
