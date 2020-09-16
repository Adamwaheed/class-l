@extends('base')

@section('main')
<form method="post" action="{{route('articles.store')}}">
    @method('POST')
    @csrf
    <div class="form-group">
        <label for="exampleInputPassword1">Title</label>
        <input name="title" type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">body</label>
        <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <a class="btn btn-info" href="{{ url()->previous() }}" >back</a>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
