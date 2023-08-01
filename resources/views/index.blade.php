@extends('layout.base')

@php $dir = "home"; @endphp
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/top.css') }}" media="all">
@endsection
@section('title', '株式会社  三協')

@section('main')
<main class="main">
  <div class="mv">
    <figure class="mv__img">
      <figure>
        <source src="{{ asset('assets/img/top/mv-sp.png') }}" media="(max-width: 767px)"/>
        <img src="{{ asset('assets/img/top/mv.png') }}" alt="mv">
      </figure>
    </figure>
    <div class="mv__txt">
      <h2 class="mv__title">
        中小企業<small>の</small><br class="sp"><span>DX</span>導入<small>を</small>代行
      </h2>
      <p class="mv__note">物流専門のSE（システムエンジニア）が<br class="sp">貴社専用のDXを<br class="sp">提案・構築いたします。</p>
    </div>
  </div>
  <section class="intro">
    <h2 class="titleType01">
      <span class="titleType01--en">SANKYO QUALITY</span>
      <p class="titleType01--ja">DX<span>に</span>どう取り組んで<br class="sp"><span>よいか</span>分からない<br><span>中小企業の皆様へ</span></p>
    </h2>
    <div class="sec__wrapper">
      <p class="intro__note">中小企業では、デジタルデータやITツールの利用が進んでおらず、<br class="pc">以下のような問題を抱えていることが少なくありません。</p>
      <ul class="intro__list">
        <li class="intro__item">担当者レベルで作成された<br class="sp">エクセル管理に限界が来ている</li>
        <li class="intro__item">部門間で情報の共有がされておらず、二度手間が多い</li>
        <li class="intro__item">基幹システムと在庫管理<br class="sp">システムのデータ連携が不十分</li>
      </ul>
    </div>
    <section class="intro__content">
      <div class="intro__title">
        <h3 class="intro__inner">
          一方で中小企業でデジタル人材を<br class="sp">採用し活用することは、<br>
          <strong>時間的<span>・</span>費用的にも厳しい</strong><br class="sp">ことが少なくありません。
          <span class="intro__triangle">そこで！</span>
        </h3>
      </div>
      <p class="intro__txt">
        <span>経験豊富な弊社のエンジニア</span><br class="sp">がお客様のもとへ<span>直接出向き</span>、<br>
        現在使用している全ての業務システム<br class="sp">を<span>入念に分析</span>し、<br class="pc">
        仕事内容に合わせて<br class="sp"><span>システムを最適化・再構築</span><br class="sp">させていただきます。
      </p>
    </section>
  </section>
  <section class="quality">
    <h2 class="titleType01">
      <span class="titleType01--en">INTRODUCTION</span>
      <p class="titleType01--ja">三協<span>だから解決! <br class="sp"></span>不可能を可能に!!</p>
    </h2>
    <p class="sec__wrapper quality__txt">
      私たちは50年以上の歴史の中で、数百社を超える中小企業の生産管理、仕入管理、<br class="pc">
      在庫管理に関するあらゆるお悩みに関して、物流システムをベースとしたカスタマイズによって<br class="pc">
      個別具体的に解決してまいりました。これは<br>
      <span class="pc">他社には絶対に真似出来ない中小企業向けDX</span><br class="pc">
      <span class="sp">他社には絶対に真似出来ない</span><br class="sp">
      <span class="sp">中小企業向けDX</span><br class="sp">
      であると自負しております。
    </p>
    <div class="quality__content01">
      <div class="quality__inner">
        <div class="sec__wrapper">
          <div class="quality__wrapper">
            <ul class="quality__list">
              <li class="quality__item">工場内の製造状況を正確に把握できず、販売管理が難しい</li>
              <li class="quality__item">扱う商品が変わってきたので受注管理システムを変更する必要がある</li>
              <li class="quality__item">完成品だけでなく、工場内にある仕掛品の在庫管理も精緻におこないたい</li>
              <li class="quality__item">Eコマースのプラットフォームにこんな機能を追加したい</li>
            </ul>
            <figure class="quality__person"><img src="{{ asset('assets/img/top/person-old.png') }}" alt="悩んでいる人"></figure>
          </div>
          <p class="quality__note">
            三協であれば物流システムの構築に加えて、生産管理システムや受注管理システムなど<br class="pc">
            その周辺システムに関するベンダーとの打ち合わせサポートから要件定義の洗い出しや再定義、<br class="pc">
            仕様書・設計書の読み込みまで
          </p>
          <div class="quality__message01">
            <p class="note note01"><span>当事者の一員</span>として、一緒に<span>現場に入って<br>サポート</span>させて頂きます。</p>
            <span class="and">&</span>
            <p class="note note02">システムが<span>適正に稼働<br class="sp"></span>するまで<br class="pc"><span>必ずやり切る</span>こと<br class="sp">をお約束します。</p>
          </div>
        </div>
      </div>
      <figure class="quality__bg01">
        <picture>
          <source src="{{ asset('assets/img/top/quality-bg01-sp.png') }}" media="(max-width: 767px)"/>
          <img src="{{ asset('assets/img/top/quality-bg01.png') }}" alt="背景">
        <picture>
      </figure>
      <div class="quality__message02">
        <p class="txt">商材、物量、販売手法などに変化が生じた場合、従来の業務システムでは対応できなくなることも珍しくありません。VUCA（変動制、不確実性、複雑性、曖昧性）と呼ばれる変化の激しい近年において、企業がユーザーから選ばれ続けるためには、この問題に適切に対処することが大切です。</p>
        <p class="note">
          すなわち<span>徹底的なカスタマイズ</span><br class="sp">に加え、<br class="pc">
          業務が変化した際に<br class="sp"><span>すみやかにアップデート</span>させ<br class="sp">続けるための<br class="pc">
          <span>メンテナンス<br class="sp">がDXには必須</span>です。
        </p>
      </div>
    </div>
    <div class="quality__content02">
      <div class="quality__message03">
        <p class="txt">
          三協は現在<span>70社</span>のお客様と継続的に<br class="sp">お取引をしていますが、<br>
          当初のカスタマイズから、メンテナンスが<br class="sp"><span>1度も発生しなかった</span>お客様は<br>
          ただの<span>1社も存在しません。</span>
        </p>
      </div>
      <div class="quality__message04 sec__wrapper">
        <p class="txt">
          年間<span>300件</span>を超える大小様々な<br class="sp">
          メンテナンスを実施しており、<br>
          多種多様な中小企業様と一生のお付き合いを<br class="sp">
          させていただいております。これまで
          <span class="big">品質不良による解約が一度もない</span><br>
          ことが何よりも自慢です。
        </p>
        <h3 class="quality__subtitle">
          <span>今こそ、IT導入補助金を使って</span><br>
          <span>DXを成功させる</span><br>
          <span class="pc">最後のチャンスではないでしょうか！</span>
          <span class="sp">最後のチャンスでは</span><br class="sp">
          <span class="sp">ないでしょうか！</span>
        </h3>
      </div>
      <figure class="quality__bg02">
        <picture>
          <source src="{{ asset('assets/img/top/quality-bg03-sp.png') }}" media="(max-width: 767px)"/>
          <img src="{{ asset('assets/img/top/quality-bg03.png') }}" alt="DXを成功させる">
        <picture>
      </figure>
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
  <a class="slove" href="">
    <div class="slove__txt">
      <span>三協のSEがあらゆる問題を解決！</span>
      <strong>事例紹介はこちら</strong>
    </div>
  </a>
  <section class="feature">
    <h2 class="titleType01">
      <span class="titleType01--en">FEATURE</span>
      <p class="titleType01--ja">三協のDX<span>の特徴</span></p>
    </h2>
    <div class="sec__wrapper">
      <div class="feature__content">
        <h3 class="feature__title">在庫管理をキーにDXを推進</h3>
        <div class="feature__inner">
          <h4 class="feature__subtitle">「SANTA」を使った在庫管理のDX化は<br class="pc">中小企業の利益をぐっと高めます</h4>
          <div class="feature__txt">
            <p>在庫管理のDX化を実践すると、膨大な顧客の販売データと取り扱い商品が一元的に管理されるため、1to1マーケティングの実行（購入金額や回数に応じた販促施策、過去のクレーム記録を活用したCRM運用）、オムニチャネルのような新たな顧客接点や体験の提供、販売リードタイムの短縮化、販売状況に応じた機動的なセール開催などの柔軟な販売戦略が実行可能です。また、精緻な在庫状況がリアルタイムでモニタリング可能となるため、無駄に在庫を仕入れることや部材や仕掛品の数量を営業部門と工場間で何度も確認する手間から完全に解放されます。さらに、生産管理システムとの連携によっては工程ごとの進捗管理も細やかに行えます。したがって、最小限での在庫移動、機動的な仕入交渉が可能となり、生産管理面でも大きな効果が期待できます。中小企業にとって、多様化する時代のニーズやトレンドに合わせて、生産管理・仕入管理・販売管理を機動的・柔軟に動かせる在庫管理のDX化は競合との差別化に繋がります。「SANTA」であれば導入支援も含めてトータルでIT導入補助金が受けられますので費用対効果は抜群です</p>
          </div>
          <figure class="feature__img"><img src="{{ asset('assets/img/top/feature01.png') }}" alt="在庫管理をキーにDXを推進"></figure>
        </div>
      </div>
      <div class="feature__content">
        <h3 class="feature__title">DX導入で経費削減</h3>
        <div class="feature__inner">
          <h4 class="feature__subtitle">徹底的なカスタマイズがDX成功の秘訣</h4>
          <div class="feature__txt">
            <p>在庫管理のDXを成功させるには、一般的なパッケージシステムでは難しく、「成功させるには、徹底的なカスタマイズしかない」というのが数百社以上の在庫管理のデジタル化を支援してきた私たちの正直な感想です。なぜカスタマイズをしなければDXが円滑に進まないのでしょうか。たとえば、会計システムや経費精算システムの場合、会計ルールや税法など社会共通のルールに基づいてプログラムされているため、そのシステムに合わせて社内ルールを設定することが可能です。一方で、仕入、生産、販売など、在庫管理に関する業務においては、その業種や業態特有の商習慣に加え、販売先ごとの納入ルールや返品ルールなどが無数に存在するため、効率的な在庫管理はその企業ごとに全て異なります。この事実を無視してパッケージシステムを導入した場合、そのシステムでは対応出来ないパターンの業務が発生するたびにスタッフが専用のマニュアルを作って対応するといったことが必要となります。パッケージシステムでは対応出来ないルールや条件が増えるほど、スタッフの負担も重くなります。これでは導入効果も実感しづらく、機動的かつ柔軟なデジタル管理には程遠いでしょう。カスタマイズと言うと、膨大な時間とコストが掛かると思われがちですが、ご安心ください。三協は、社員のうち２０％がエンジニアであり、デジタル人材を完全に内製化しているため、業務システムの構築に関して外部コストが一切かかりません。また、元請け組織や外注企業との情報共有化の時間やすり合わせに関する時間も不要なため、他社と比較しても圧倒的なスピード感でプロジェクトを遂行します。</p>
            <p>「SANTA」であれば、業種・業態・企業固有の文化や業務ルールまでを踏まえた「在庫管理をベースとしたDX」を低コストかつスピーディで支援可能です。アパレル・化粧品・金属部品・医薬品などの業種、メーカー・卸・小売店などの業態に関わらず、数百社を超える中小企業様の在庫管理のデジタル化を成功させた実績があります。</p>
          </div>
          <figure class="feature__img"><img src="{{ asset('assets/img/top/feature02.png') }}" alt="DX導入で経費削減"></figure>
        </div>
      </div>
      <div class="feature__content">
        <h3 class="feature__title">DXを三協に任せる理由</h3>
        <div class="feature__inner">
          <h4 class="feature__subtitle">なぜ三協が在庫管理をキーとしたDX支援をするのか</h4>
          <div class="feature__txt">
            <p>
              最初は当社にも専門家がおらず、様々なソフトハウスにシステムの開発を依頼しました。しかしながら、現場の人間が心から使いやすいと感じるシステムは出来上がりませんでした。システムで対応出来ないことを現場が無理をして（部署間での無駄な確認作業や目視でのダブルチェックなど）業務の辻褄を合わせるという日々が続きました。カスタマイズ要望を何度も出して多くの時間とお金を掛けましたが、私たちが望むようなシステムは最後まで出来上がりませんでした。業務知識や現場感覚に乏しいシステム会社では仕事内容に完全にフィットしたシステムを作るということは難しいのだと認識しました。<br>
              私たちは、それから３０年以上の年月を経て、エンジニアチームを育成しその企業のオペレーションに最も適した在庫管理システム「SANTA」を開発、その企業の仕入・製造・販売を最も効率よくスピーディに回転させることが可能な状態を作り上げるお手伝いをしてきました。「システムで対応出来ないパターンを人が手管理する」「特定の納入先は送り状や納品書のフォーマットが違うので、注意して作業しないといけない」「同じバーコードだが、意識して古いものから出荷しないといけない」カスタマイズされていないデジタル管理がどれほど現場を疲弊させるか、身をもって知っている我々にしかこの在庫管理をキーとしたDXを成功させられないと考えております。
            </p>
            <h5>三協のエンジニアと他社のエンジジニアの違い</h5>
            <p>一般的に、システム会社のエンジニアは必ずしも在庫管理に関するシステムにだけ触れるわけではありません。あるプロジェクトでは生産管理システムの開発にあたり、その次は勤怠管理システムということが一般的です。一方で私たちのエンジニアチームは、在庫管理に特化しています。そのため、在庫管理という分野について非常に深く幅広い業務知識を保有しています。また、多種多様な業種・業態の開発を経験していることから、在庫管理に持たせるべき機能や条件フラグなど、スピーディに質の高い開発を行うことが可能です。</p>
            <p>
              さらに、三協のエンジニアは物流現場に何度も足運びます。実際に現場で起こっている問題を解決するにはその場所で何が起こっているのか、制約条件は何かを徹底的に考えることが必要だからです。言って、リアルなながら多種多様な業種・業態のリアルな課題をトライアンドエラー（失敗学のトライアンドエラーの箇所で）にて解決してきました。<br>
              このようなリアルの経験を通常のDX支援企業やシステム会社は経験していません。<br>
              また、<br>
              すなわち、仕入担当、製造担当、販売担当などコミュニケーションの中で業界の知見・その企業の業務プロセスを深く理解つつ、どのようなシステムを構築・活用すれば現場が上手く機能するかという現場目線で最適なシステムやデジタル技術を活用する
            </p>
            <p>そのフィードバックを反映し、日夜システムを高度化・最適化するなかで加えられた機能がが「SANTA」には標準搭載としてすでに組み込まれている。</p>
          </div>
          <figure class="feature__img"><img src="{{ asset('assets/img/top/feature03.png') }}" alt="DXを三協に任せる理由"></figure>
        </div>
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
  <section class="relation">
    <h2 class="relation__title">関連する事例紹介</h2>
    <div class="sec__wrapper relation__slider">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <a class="swiper-slide relation__slide">
            <span class="newCaption">NEW</span>
            <figure class="relation__thumbnail">
              <img src="{{ asset('assets/img/cases/dummy.png') }}" alt="">
            </figure>
            <div class="relation__info">
              <span class="relation__cat">カテゴリー名</span>
              <p class="relation__txt">抱えている在庫をバランス良く自動振り分け！満足度の高い福袋をすぐに用意することができました！</p>
            </div>
          </a>
          <a class="swiper-slide relation__slide">
            <figure class="relation__thumbnail">
              <img src="{{ asset('assets/img/cases/thumb02.png') }}" alt="">
            </figure>
            <div class="relation__info">
              <span class="relation__cat">カテゴリー名</span>
              <p class="relation__txt">物流コストを削減する倉庫管理システム（WMS）の活用方法</p>
            </div>
          </a>
          <a class="swiper-slide relation__slide">
            <figure class="relation__thumbnail">
              <img src="{{ asset('assets/img/cases/thumb03.png') }}" alt="">
            </figure>
            <div class="relation__info">
              <span class="relation__cat">カテゴリー名</span>
              <p class="relation__txt">【プロが解説】EC物流とは？仕組みや課題、EC物流の改善ポイントを徹底解説</p>
            </div>
          </a>
          <a class="swiper-slide relation__slide">
            <figure class="relation__thumbnail">
              <img src="{{ asset('assets/img/cases/thumb04.png') }}" alt="">
            </figure>
            <div class="relation__info">
              <span class="relation__cat">カテゴリー名</span>
              <p class="relation__txt">三協への物流委託をきっかけに、モール数12倍、EC売上10倍超まで成長！年間25万件の出荷でも取引以来10年以…上『誤出荷ゼロ』</p>
            </div>
          </a>
        </div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
    <a href="" class="btnType01">事例紹介一覧へ</a>
  </section>
  <section class="flow">
    <h2 class="titleType01">
      <span class="titleType01--en">FLOW</span>
      <p class="titleType01--ja">三協のDX導入の流れ</p>
    </h2>
    <div class="sec__wrapper">
      <ul class="flow__list">
        <li class="flow__item">
          <div class="flow__step">
            <span class="step">STEP</span>
            <span class="nmb">1</span>
          </div>
          <div class="flow__detail">
            <figure class="flow__img"><img src="{{ asset('assets/img/top/flow01.png') }}" alt="経営陣から各部署への徹底的なヒアリング"></figure>
            <p class="flow__txt">経営陣から各部署への徹底的な<br>ヒアリング</p>
          </div>
        </li>
        <li class="flow__item">
          <div class="flow__step">
            <span class="step">STEP</span>
            <span class="nmb">2</span>
          </div>
          <div class="flow__detail">
            <figure class="flow__img"><img src="{{ asset('assets/img/top/flow02.png') }}" alt="問題点の抽出、システム連携のご提案"></figure>
            <p class="flow__txt">問題点の抽出、システム連携のご提案</p>
          </div>
        </li>
        <li class="flow__item">
          <div class="flow__step">
            <span class="step">STEP</span>
            <span class="nmb">3</span>
          </div>
          <div class="flow__detail">
            <figure class="flow__img"><img src="{{ asset('assets/img/top/flow03.png') }}" alt="業務フローの見直し策定"></figure>
            <p class="flow__txt">業務フローの見直し策定</p>
          </div>
        </li>
        <li class="flow__item">
          <div class="flow__step">
            <span class="step">STEP</span>
            <span class="nmb">4</span>
          </div>
          <div class="flow__detail">
            <figure class="flow__img"><img src="{{ asset('assets/img/top/flow04.png') }}" alt="貴社専用のシステムを構築"></figure>
            <p class="flow__txt">貴社専用のシステムを構築</p>
          </div>
        </li>
        <li class="flow__item">
          <div class="flow__step">
            <span class="step">STEP</span>
            <span class="nmb">5</span>
          </div>
          <div class="flow__detail">
            <figure class="flow__img"><img src="{{ asset('assets/img/top/flow05.png') }}" alt="貴社にてシステムをインストール"></figure>
            <p class="flow__txt">貴社にてシステムをインストール</p>
          </div>
        </li>
      </ul>
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