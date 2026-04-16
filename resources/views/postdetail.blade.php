@extends('requires/main')
@section('content')

    <section class="article">
      <div class="container">
        <div class="news__wrapper basic-flex">

          <div class="article__wrapper">
            <h2 class="article__title">{{ $post->title }}</h2>
            <span class="article__date basic-flex">11:31 / 15.05.2020</span>
            <img src="{{ asset ('storage/'.$post->image)}}" alt="">
            <p class="important-text">
              {{ $post->content }}
            </p>

            <a href="{{ route('index.page')}}">Home</a>

           
            <div class="hashtags basic-flex">
              <a href="#">#хоким</a>
              <a href="#">#Шавкат Мирзиёев</a>
              <a href="#">#пандемия</a>
            </div>
          </div>

          {{-- Popular Posts --}}
                @include('requires/popularPosts')
          {{-- Popular Posts --}}


          {{-- Related Posts --}}
                @include('requires/relatedPosts')
          {{-- Related Posts --}}


        </div>
      </div>
    </section>

@endsection
 