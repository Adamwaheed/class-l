@extends('base')

@section('main')
<form method="post" action="{{route('articles.update',$article)}}">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="exampleInputPassword1">Title</label>
        <input name="title" type="text" class="form-control" value="{{$article->title}}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">body</label>
        <textarea name="body" class="form-control" rows="3">{{$article->body}}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
