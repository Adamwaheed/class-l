@extends('base')

@section('main')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">date</th>
            <th scope="col">action</th>
        </tr>
        </thead>
        <tbody>
    @foreach($articles as $article)
        <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->created_at}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{route('articles.edit',$article)}}" type="button" class="btn btn-secondary">edit</a>
                    <a href="{{route('articles.show',$article)}}" class="btn btn-secondary">view</a>
                </div>
            </td>
        </tr>
     @endforeach
        </tbody>
    </table>
@endsection
