@extends('layouts.base')

@php $dir = "company"; @endphp
@section('title', '株式会社  三協')

@section('main')
<main class="main">
  <div class="mv mv__company">
    <h1 class="mv__title">
      <span class="mv__title--ja">会社情報</span>
      <span class="mv__title--en">COMPANY</span>
    </h1>
  </div>
  <div class="breadcrumb pc">
    <ul class="breadcrumb__list">
      <li class="breadcrumb__item">
        <a href="">TOP</a>
      </li>
      <li class="breadcrumb__item">会社情報</li>
    </ul>
  </div>
  <section class="company">
    <h2 class="titleType01"><span class="titleType01--en">COMPANY PROFILE</span></h2>
    <div class="sec__wrapper">
      <dl class="company__list">
        <dt class="company__term">会社名</dt>
        <dd class="company__desc">株式会社 三協</dd>
        <dt class="company__term">URL</dt>
        <dd class="company__desc"><a href="https://www.kk-sankyo.com" target="_blank">https://www.kk-sankyo.com</a></dd>
        <dt class="company__term">創立</dt>
        <dd class="company__desc">昭和43年（1968年）</dd>
        <dt class="company__term">資本金</dt>
        <dd class="company__desc">3,000万円</dd>
        <dt class="company__term">本社所在地</dt>
        <dd class="company__desc">
          <address>〒578-0903<br>大阪府東大阪市今米1-15-11</address>
          TEL.072-967-6010（代） <br class="sp">FAX.072-967-6012
        </dd>
        <dt class="company__term">代表者</dt>
        <dd class="company__desc">代表取締役　山田孝治</dd>
        <dt class="company__term">従業員数</dt>
        <dd class="company__desc">
          290名<br>
          物流技術管理士　2名<br>
          システムエンジニア　5名
        </dd>
        <dt class="company__term">組織</dt>
        <dd class="company__desc">物流事業部、物流技術室、システム開発室、営業部、管理部、デザイン室</dd>
        <dt class="company__term">業務内容</dt>
        <dd class="company__desc">
          物流業務全般<br>
          物流コンサルティング<br>
          倉庫運営代行<br>
          物流業務用システム開発<br>
          海外工場向け家電製品キットの仕入れから輸入までの一貫サービス<br>
          家電製品（ デジカメ、ビデオ ）の組立加工<br>
          ギフト、通信販売、カタログ等のライン詰合せ作業<br>
          衣料品など輸出商材の入荷加工<br>
          化粧品の製造に関わる加工作業（充填、包装など）<br>
          広告代理業
        </dd>
        <dt class="company__term">許認可</dt>
        <dd class="company__desc">
          倉庫業登録番号 許可番号第4017号<br>
          トランクルーム認定 許可番号第1248号<br>
          高度管理医療機器等販売業・貸与業 許可番号第N07295号<br>
          医薬部外品製造業 許可番号第27DZ200203号<br>
          化粧品製造業 許可番号第27CZ200478号<br>
          経済産業省「事業継続力強化計画」認定<br>
          プライバシーマーク 登録番号第20001629号
        </dd>
        <dt class="company__term">取引銀行</dt>
        <dd class="company__desc">りそな銀行 住道支店<br>三井住友銀行 徳庵支店</dd>
        <dt class="company__term">参加団体</dt>
        <dd class="company__desc">
          日本ロジスティクスシステム協会<br>
          Eコマース事業協会<br>
          大阪府運輸倉庫協会<br>
          大阪商工会議所<br>
          堺商工会議所<br>
          京都商工会議所<br>
          神戸商工会議所<br>
          東大阪商工会議所
        </dd>
        <dt class="company__term">その他</dt>
        <dd class="company__desc">セレッソ大阪オフィシャルスポンサー<br>Yahoo!JAPAN コマースパートナー認定</dd>
      </dl>
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