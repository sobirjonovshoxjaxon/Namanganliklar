@extends('admin.requires.general')
@section('content')


    <h1>Category Show Page</h1>

    <h4><b>Category: </b>{{ $category->category }}</h4>

    <a href="{{ route('categories.index')}}" class="btn btn-dark">Back</a>


@endsection