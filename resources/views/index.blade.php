@extends('requires.main')
@section('content')

    <div class="container">
      <div class="covid-block basic-flex ">
      	<div class="covid-block__title basic-flex">
      	  <div class="covid-title__img"></div>
      	  <a href="#" class="covid-title__text">Коронавирус COVID-19
      	    в Узбекистане</a>
      	</div>
      	<div class="covid-block__stats basic-flex">
      	  <div class="stats__item basic-flex">
      	    <div class="stats__img"></div>
      	    <div class="stats-text-box">
      	      <h4>Инфицированы</h4>
      	      <p>3000</p>
      	    </div>
      	  </div>
      	  <div class="stats__item basic-flex">
      	    <div class="stats__img"></div>
      	    <div class="stats-text-box">
      	      <h4>Выздоровели</h4>
      	      <p>2438</p>
      	    </div>
      	  </div>
      	  <div class="stats__item basic-flex">
      	    <div class="stats__img"></div>
      	    <div class="stats-text-box">
      	      <h4>Умерли</h4>
      	      <p>12</p>
      	    </div>
      	  </div>
      	</div>
      </div>
    </div>


    {{-- Ads Posts --}}
        @include('requires/adsPosts')
    {{-- Ads Posts --}}



    {{-- Category Posts --}}
        @include('requires/latestPosts')
    {{-- Category End Posts --}}


    <div class="apps-block container basic-flex">
      <div class="apps-block__image"></div>
      <div class="apps-block__content">
        <h4>Всегда будьте в курсе последних новостей!</h4>
        <p>Установите мобильное приложение NAMANGANLIKLAR24 и все новости в вашем кармане!</p>
      </div>
      <div class="apps-block__links basic-flex">
        <div class="links__item">
          <a href="#"><img src="{{ asset ('assets/img/googleplay.png')}}" alt="googleplay"></a>
        </div>
        <div class="links__item">
          <a href="#"><img src="{{ asset ('assets/img/appstore.png')}}" alt="googleplay"></a>
        </div>
      </div>
    </div>

@endsection