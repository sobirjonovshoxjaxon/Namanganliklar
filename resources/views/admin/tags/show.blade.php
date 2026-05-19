@extends('admin.requires.general')
@section('content')


    <h1>Tag Show Page</h1>

    <h4><b>Tag: </b>{{ $tag->tag }}</h4>

    <a href="{{ route('tags.index')}}" class="btn btn-dark">Back</a>


@endsection