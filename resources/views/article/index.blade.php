@extends('layouts.base')

@php $dir = "company"; @endphp
@section('title', '株式会社  三協')

@section('main')
<main class="main">
  <div class="mv mv__case">
    <h1 class="mv__title">
      <span class="mv__title--ja">事例紹介</span>
      <span class="mv__title--en">CASE</span>
    </h1>
  </div>
  <div class="breadcrumb pc">
    <ul class="breadcrumb__list">
      <li class="breadcrumb__item">
        <a href="">TOP</a>
      </li>
      <li class="breadcrumb__item">事例紹介</li>
    </ul>
  </div>
  <section class="cases">
    <div class="sec__wrapper">
      <h2 class="titleType01">
        <span class="titleType01--en">CASE STUDY</span>
        <span class="titleType01--ja">導入事例や文章が入ります。ダミーです。</span>
      </h2>
      <div class="catList">
        <span class="catList__btn toggle">カテゴリーを選択</span>
        <ul class="catList__list">
          <li class="catList__item">
            <a href="">全てのカテゴリー</a>
          </li>
          <li class="catList__item">
            <a href="">カテゴリー01</a>
          </li>
          <li class="catList__item">
            <a href="">カテゴリー02</a>
          </li>
          <li class="catList__item">
            <a href="">カテゴリー03</a>
          </li>
          <li class="catList__item">
            <a href="">カテゴリー04</a>
          </li>
          <li class="catList__item">
            <a href="">カテゴリー05</a>
          </li>
          <li class="catList__item">
            <a href="">カテゴリー06</a>
          </li>
        </ul>
      </div>
      <div class="cases__wrapper">
        @if(isset($articles))
          <div class="cases__inner">
            @foreach($articles as $article) @if($article->status == 1)
              <article class="cases__article">
                <a href="">
                  <span class="newCaption">NEW</span>
                  <span class="cases__cat">カテゴリー名</span>
                  <figure class="cases__thumbnail"><img src="{{ $article->thumbnail }}" alt="{{ $article->title }}"></figure>
                  <p class="cases__txt">{{ $article->contents }}</p>
                </a>
              </article>
            @endif @endforeach
          </div>
        @else
          <p class="noFind">記事が見つかりませんでした。</p>
        @endif
      </div>
    </div>
  </section>
  <div class="induction">
    <h2 class="induction__title">CONTACT</h2>
    <h3 class="induction__subtitle"><span class="nmb">100</span>社<span class="nmb">100</span>様の事業に<strong>対応可能！<br class="sp"></strong>お問い合わせはこちら</h3>
    <div class="sec__wrapper">
      <div class="induction__contact tel">
        <p class="note">お電話でのお問い合わせ</p>
        <a class="nmb" href="tel:0729676010">072-967-6010</a>
        <span class="attetion sp">ここをタップでお電話できます</span>
        <p class="txt">［受付時間／平日9：00〜18：00］</p>
      </div>
      <div class="induction__contact mail">
        <p class="note">メールでのお問い合わせ</p>
        <a class="mail">お問い合わせフォームへ</a>
        <p class="txt">［受付時間／24時間365日受付］</p>
      </div>
    </div>
  </div>
</main>
@endsection