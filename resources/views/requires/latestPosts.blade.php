{{-- Category Posts --}}
    <section class="news">
      <div class="container">
        <div class="news__wrapper basic-flex">


          <div class="column-news">
            <h2 class="news__title">Последние новости</h2>
            <ul class="news__list basic-flex">

              @foreach($posts as $post)
                <li class="news__item">
                  <a href="{{ route('postdetail.page',$post->id)}}" class="basic-flex news__link">
                    <div class="news-image-wrapper"><img src="{{ asset('storage/'.$post->image)}}" alt="Bottom Img"></div>
                    <div class="news-box basic-flex">
                      <h4 class="news__title">{{ $post->title }}</h4>
                      <p class="news__description">{{ $post->content }}</p>
                      <span class="news__date basic-flex">11:31 / 15.05.2020</span>
                    </div>
                  </a>
                </li>
              @endforeach
             
             

            </ul>
            <button type="button" class="btn load-more-btn">Больше новостей</button>
          </div>

          {{-- Popular Posts --}}
            @include('requires.popularPosts')
          {{-- End Popular Posts --}}



        </div>
      </div>
    </section>
    {{-- Category End Posts --}}