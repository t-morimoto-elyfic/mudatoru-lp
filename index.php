<!DOCTYPE html>
<html lang="ja">
<head>


  <?php wp_head(); ?>
</head>
<body>

  <!-- Header -->
  <header>
    <div class="logo-area">
      <img loading="lazy" src="<?php m_asset('mudatoru-logo.png'); ?>" alt="ムダトル 定額制DX支援サービス by ELYFIC" class="logo-header">
    </div>
        <button type="button" aria-label="メニューを開く" class="hamburger" id="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <div class="header-nav" id="headerNav">
      <div class="mobile-menu-logo-wrapper sp-only">
        <img loading="lazy" src="<?php m_asset('mudatoru-logo.png'); ?>" alt="ムダトル">
      </div>
      <a href="#about" class="menu-link"><span class="menu-icon sp-only"></span>サービス内容</a>
      <a href="#features" class="menu-link"><span class="menu-icon sp-only"></span>特徴</a>
      <a href="#pricing" class="menu-link"><span class="menu-icon sp-only"></span>料金プラン</a>
      <a href="#flow" class="menu-link"><span class="menu-icon sp-only"></span>導入の流れ</a>
      <a href="#faq" class="menu-link"><span class="menu-icon sp-only"></span>よくある質問</a>
      <a href="#contact" class="btn-primary pc-only">無料で相談してみる</a>
      
      <a href="#contact" class="mobile-menu-cta sp-only">
        <img loading="lazy" src="<?php m_asset('hero-cta-btn.svg'); ?>" alt="お問い合わせ">
      </a>
      <div class="mobile-menu-footer sp-only">
        <a href="https://elyfic.jp" target="_blank" rel="noopener noreferrer">運営会社</a>
        <a href="https://elyfic.jp/law/" target="_blank" rel="noopener noreferrer">特定商取引法に基づく表記</a>
        <a href="https://elyfic.jp/privacy/" target="_blank" rel="noopener noreferrer">個人情報保護方針</a>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container hero__container">
      <div class="hero__copy">
        <img loading="lazy" src="<?php m_asset('mudatoru-logo.png'); ?>" alt="ムダトル 定額制DX支援サービス by ELYFIC" class="hero__logo">
        <h1>小さな改善から<br><span>大きな改善と成果</span>に繋げる</h1>
        <p>定額制でDX推進チームが、<br>あなたの会社のDX・業務改善をサポート</p>
        <div class="hero__cta-wrap">
          <a href="#contact" class="hero__cta-link">
            <img loading="lazy" src="<?php m_asset('hero-cta-btn.svg'); ?>" alt="お問い合わせ・資料請求（無料）はこちら" class="hero__cta-img hover-translate-up">
          </a>
        </div>
      </div>
      <div class="hero__img-area">
        <img loading="lazy" src="<?php m_asset('mudatoru-hero.webp'); ?>" alt="ムダトルのDXチーム" class="hero__img">
      </div>
    </div>
  </section>

  <!-- Problems Section -->
  <section class="section problems">
    <div class="container">
      <div class="problems__headline-wrap text-center">
        <h2 class="problems__headline">
          こんな<span class="problems__highlight">お悩み</span>ありませんか？
        </h2>
      </div>
      <div class="problems__layout-wrap">
        <div class="problems__list-wrap">
          <ul class="problems__checklist problems__bubble-layout">
            <li class="problems__bubble-box">
              <div class="problems__bubble-header">
                <span class="problems__bubble-category">リソース不足</span>
                <img loading="lazy" src="<?php m_asset('problems-icon01.svg'); ?>" class="problems__bubble-icon" alt="">
              </div>
              <div class="problems__bubble-text">人手不足で業務改善まで手が回らない</div>
            </li>
            <li class="problems__bubble-box">
              <div class="problems__bubble-header">
                <span class="problems__bubble-category">業務の非効率</span>
                <img loading="lazy" src="<?php m_asset('problems-icon02.svg'); ?>" class="problems__bubble-icon" alt="">
              </div>
              <div class="problems__bubble-text">データ入力や紙の業務が多く、非効率になっている</div>
            </li>
            <li class="problems__bubble-box">
              <div class="problems__bubble-header">
                <span class="problems__bubble-category">業務の属人化</span>
                <img loading="lazy" src="<?php m_asset('problems-icon03.svg'); ?>" class="problems__bubble-icon" alt="">
              </div>
              <div class="problems__bubble-text">属人化している業務が多く、担当者が休むと止まる</div>
            </li>
            <li class="problems__bubble-box">
              <div class="problems__bubble-header">
                <span class="problems__bubble-category">DXの推進</span>
                <img loading="lazy" src="<?php m_asset('problems-icon04.svg'); ?>" class="problems__bubble-icon" alt="">
              </div>
              <div class="problems__bubble-text">DX推進したいが何から始めるべきかわからない</div>
            </li>
            <li class="problems__bubble-box">
              <div class="problems__bubble-header">
                <span class="problems__bubble-category">ツールの定着</span>
                <img loading="lazy" src="<?php m_asset('problems-icon05.svg'); ?>" class="problems__bubble-icon" alt="">
              </div>
              <div class="problems__bubble-text">ツールを導入したが、現場に定着していない</div>
            </li>
            <li class="problems__bubble-box">
              <div class="problems__bubble-header">
                <span class="problems__bubble-category">人材採用</span>
                <img loading="lazy" src="<?php m_asset('problems-icon06.svg'); ?>" class="problems__bubble-icon" alt="">
              </div>
              <div class="problems__bubble-text">DX人材やSEの採用は、コストが高く難しい</div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Reason Section -->
  <section class="reason">
    <div class="container reason__container">
      <div class="reason__img-wrapper">
        <img loading="lazy" src="<?php m_asset('reason-image.webp'); ?>" alt="DX推進の壁" class="reason__img">
      </div>
      <div class="reason__content">
        <h2 class="reason__title">なぜ、DXや業務改善が<br class="sp-br">進まないのか？</h2>
        <div class="reason__text">
          <p>DXが進まないのは、ITやツールの問題だけではありません。</p>
          <p>
            経営は方針を示す。<br>
            現場は日々の業務に追われる。<br>
            情シスはシステムを支える。
          </p>
          <p>では、誰が業務を変えるのか。</p>
          <p>実はここが曖昧なまま、DXが止まっている企業は少なくありません。</p>
          <p>
            課題が見えていても、<br>
            誰も旗を振らなければ、業務は変わらない。
          </p>
          <p class="reason__conclusion">
            DXに必要なのは、新しいツールだけではない。<br>
            <span class="reason__highlight">「変える人」</span>と<span class="reason__highlight">「変えきる仕組み」</span>です。
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- What is Mudatoru -->
  <section id="about" class="section about">
    <div class="container">
      <div class="about__box">
        <div class="about__header-wrap">
          <p class="about__subtitle">定額制DX支援サービス</p>
          <h2 class="about__header">
            <img loading="lazy" src="<?php m_asset('mudatoru-logo.png'); ?>" alt="ムダトル" class="about__logo">
            <span class="about__towa-text">とは？</span>
          </h2>
          <p class="about__description">
            貴社専属のDX推進チームを、格安月額で社内に作れる定額制サービスです。<br>
            ITツールの導入から業務フローの定着まで、現場に寄り添い共に改善を進めます。
          </p>
        </div>
        
        <div class="mod-about-7">
          <picture>
            <source media="(max-width: 900px)" srcset="<?php m_asset('about-illust-sp.webp'); ?>">
            <img loading="lazy" src="<?php m_asset('about-illust-pc.webp'); ?>" alt="ムダトル体制図：業務フロー整理、AI活用、エンジニア、ITツール導入、RPA開発、データ集計" class="about__img">
          </picture>
        </div>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section id="features" class="features">
    <div class="container">
      <div class="features__header">
        <p class="features__subtitle">定額制DX支援サービス</p>
        <h2 class="features__title">
          <img loading="lazy" src="<?php m_asset('mudatoru-logo.png'); ?>" alt="ムダトル" class="about__logo">
          <span>の特徴</span>
        </h2>
      </div>
      <div class="features__list">
        <div class="features__item">
          <div class="features__item-content">
            <div class="features__point-badge">POINT 01</div>
            <h3>採用不要で、<br><span class="features__highlight">社外DX推進部</span>を持てる</h3>
            <p>担当者を採用・育成することなく、月額制でDXのプロチームをご利用いただけます。<br>優秀なチームを低コストかつ定額でご提供します。</p>
            <ul class="features__checklist">
              <li>必要なタイミングでプロが集結</li>
              <li>柔軟かつスピーディに対応</li>
              <li>採用や教育コストを大幅削減</li>
            </ul>
          </div>
          <div class="features__item-img-wrap">
            <img loading="lazy" src="<?php m_asset('features01.webp'); ?>" alt="必要なタイミングでプロが集結する社外DX推進部をイメージしたイラスト" class="features__img">
          </div>
        </div>
        <div class="features__item features__item--delay-2">
          <div class="features__item-content">
            <div class="features__point-badge">POINT 02</div>
            <h3>毎月、会社に合わせて<br>支援内容を<span class="features__highlight">カスタマイズ</span></h3>
            <p>会社の状況や課題に合わせて、業務の可視化やデータ整理など、契約時間内で支援内容を自由にカスタマイズ。企業ニーズに応じた自由度の高さが大きな魅力です。</p>
            <ul class="features__checklist">
              <li>毎月必要な業務だけを依頼可能</li>
              <li>業務の可視化からツール導入まで対応</li>
              <li>無駄なコストを抑えて最適化</li>
            </ul>
          </div>
          <div class="features__item-img-wrap">
            <img loading="lazy" src="<?php m_asset('features02.webp'); ?>" alt="会社の状況に合わせて支援内容をカスタマイズするイメージイラスト" class="features__img">
          </div>
        </div>
        <div class="features__item features__item--delay-4">
          <div class="features__item-content">
            <div class="features__point-badge">POINT 03</div>
            <h3><span class="features__highlight">戦略・実行・改善</span>まで、<br>まとめて任せられる</h3>
            <p>企画だけ、導入だけでは終わりません。現状分析から改善までを一貫してサポートします。コストパフォーマンスの良さと、一貫した伴走体制でビジネスを加速させます。</p>
            <ul class="features__checklist">
              <li>現状の課題分析と戦略立案</li>
              <li>ツールの選定と導入サポート</li>
              <li>導入後の定着化と継続的な改善</li>
            </ul>
          </div>
          <div class="features__item-img-wrap">
            <img loading="lazy" src="<?php m_asset('features03.webp'); ?>" alt="現状分析から改善までを一貫してサポートする伴走体制のイメージイラスト" class="features__img">
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Pricing -->
  <section id="pricing" class="section pricing">
    <div class="container">
      <h2 class="section-title">料金プラン</h2>
      <span class="section-subtitle">- PRICING -</span>

      
      <div class="pricing__grid">
        <!-- Starter Plan -->
        <div class="pricing__card">
          <div class="pricing__header">
            <p class="pricing__sub">＼ まずはスポットで試したい方 ／</p>
            <h3 class="pricing__name">Starterプラン</h3>
            <div class="pricing__price">29,800<span>円／月</span></div>
            <div class="pricing__initial-cost">初期費用 <span>50,000円</span></div>
          </div>
          <div class="pricing__body">
            <ul class="pricing__features">
              <li><span>✔ 改善チケット</span> <span>4枚 / 月</span></li>
              <li><span>✔ 同時進行タスク</span> <span>1タスク</span></li>
              <li><span>✔ 定例ミーティング</span> <span>月1回（30分）</span></li>
              <li><span>✔ チャット相談</span> <span>◯（営業時間内）</span></li>
              <li><span>✔ 業務課題の整理・フロー作成</span> <span>◯</span></li>
              <li><span>✔ 改善ロードマップ作成</span> <span>◯</span></li>
              <li class="pricing__features-item--disabled"><span>ー KPI・進捗レビュー</span> <span>-</span></li>
              <li class="pricing__features-item--disabled"><span>ー 改善優先順位の見直し</span> <span>-</span></li>
              <li class="pricing__features-item--disabled"><span>ー 全社DX方針・レポート作成</span> <span>-</span></li>
              <li class="pricing__features-item--disabled"><span>ー 外部SaaS・システム選定アドバイス</span> <span>-</span></li>
            </ul>
          </div>
        </div>
        
        <!-- Standard Plan -->
        <div class="pricing__card pricing__card--standard pricing__card--delay-2">
          <div class="pricing__header">
            <p class="pricing__sub">＼ 部署の業務効率化を進めたい方 ／</p>
            <h3 class="pricing__name">Standardプラン</h3>
            <div class="pricing__price">69,800<span>円／月</span></div>
            <div class="pricing__initial-cost">初期費用 <span>50,000円</span></div>
          </div>
          <div class="pricing__body">
            <ul class="pricing__features">
              <li><span>✔ 改善チケット</span> <span>12枚 / 月</span></li>
              <li><span>✔ 同時進行タスク</span> <span>最大2タスク</span></li>
              <li><span>✔ 定例ミーティング</span> <span>月2回（各40分）</span></li>
              <li><span>✔ チャット相談</span> <span>◯（優先対応）</span></li>
              <li><span>✔ 業務課題の整理・フロー作成</span> <span>◯</span></li>
              <li><span>✔ 改善ロードマップ作成</span> <span>◯</span></li>
              <li><span>✔ KPI・進捗レビュー</span> <span>◯</span></li>
              <li><span>✔ 改善優先順位の見直し</span> <span>◯</span></li>
              <li class="pricing__features-item--disabled"><span>ー 全社DX方針・レポート作成</span> <span>-</span></li>
              <li class="pricing__features-item--disabled"><span>ー 外部SaaS・システム選定アドバイス</span> <span>-</span></li>
            </ul>
          </div>
        </div>
        
        <!-- Premium Plan -->
        <div class="pricing__card pricing__card--delay-4">
          <div class="pricing__header">
            <p class="pricing__sub">＼ 複数部署・全社のDXを推進したい方 ／</p>
            <h3 class="pricing__name">Premiumプラン</h3>
            <div class="pricing__price">118,000<span>円／月</span></div>
            <div class="pricing__initial-cost">初期費用 <span>50,000円</span></div>
          </div>
          <div class="pricing__body">
            <ul class="pricing__features">
              <li><span>✔ 改善チケット</span> <span>24枚 / 月</span></li>
              <li><span>✔ 同時進行タスク</span> <span>制限なし</span></li>
              <li><span>✔ 定例ミーティング</span> <span>月4回（各60分）</span></li>
              <li><span>✔ チャット相談</span> <span>◯（最優先対応）</span></li>
              <li><span>✔ 業務課題の整理・フロー作成</span> <span>◯</span></li>
              <li><span>✔ 改善ロードマップ作成</span> <span>◯</span></li>
              <li><span>✔ KPI・進捗レビュー</span> <span>◯</span></li>
              <li><span>✔ 改善優先順位の見直し</span> <span>◯</span></li>
              <li><span>✔ 全社DX方針・レポート作成</span> <span>◯</span></li>
              <li><span>✔ 外部SaaS・システム選定アドバイス</span> <span>◯</span></li>
            </ul>
          </div>
        </div>
      </div>
      <p class="pricing__note">※ 上記表示価格は全て税別となります。</p>
    </div>
  </section>

  <!-- Simulation Section -->
  <section id="simulation" class="simulation">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">ご利用イメージ</h2>
      <span class="section-subtitle">- USE CASE -</span>
      </div>
      <div class="simulation__tabs-wrapper">
        <div class="simulation__tabs">
          <div class="simulation__tab active" data-target="sim-starter">Starterプラン</div>
          <div class="simulation__tab" data-target="sim-standard">Standardプラン</div>
          <div class="simulation__tab" data-target="sim-premium">Premiumプラン</div>
        </div>
      </div>

      <!-- Starter Plan Panel -->
      <div id="sim-starter" class="simulation__panel active">
        <div class="simulation__grid">
          <!-- Card 1 -->
          <div class="simulation__card">
            <h3>不動産仲介</h3>
            <ul class="simulation__list">
              <li><span>内見予約フォーム作成</span><span class="simulation__ticket">1枚</span></li>
              <li><span>スプシ自動集計連携（GAS）</span><span class="simulation__ticket">1枚</span></li>
              <li><span>Slackへの即時通知設定</span><span class="simulation__ticket">1枚</span></li>
              <li><span>操作マニュアル（1点）作成</span><span class="simulation__ticket">1枚</span></li>
            </ul>
            <div class="simulation__total">
              合計 <span class="simulation__total-ticket">4<span>枚</span></span>
            </div>
          </div>
          
          <!-- Card 2 -->
          <div class="simulation__card">
            <h3>士業<br><span class="simulation__card-subtitle">（税理士・社会保険労務士）</span></h3>
            <ul class="simulation__list">
              <li><span>顧客資料回収チェックリスト作成</span><span class="simulation__ticket">1枚</span></li>
              <li><span>未提出顧客の抽出ロジック設定</span><span class="simulation__ticket">1枚</span></li>
              <li><span>メール一括自動送信（GAS）</span><span class="simulation__ticket">2枚</span></li>
            </ul>
            <div class="simulation__total">
              合計 <span class="simulation__total-ticket">4<span>枚</span></span>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="simulation__card">
            <h3>飲食・小売り<br><span class="simulation__card-subtitle">（複数店舗）</span></h3>
            <ul class="simulation__list">
              <li><span>店舗別日次売上報告フォーム作成</span><span class="simulation__ticket">1枚</span></li>
              <li><span>全店売上自動集計スプシ作成</span><span class="simulation__ticket">2枚</span></li>
            </ul>
            <div class="simulation__total">
              合計 <span class="simulation__total-ticket">3<span>枚</span></span>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Standard Plan Panel -->
      <div id="sim-standard" class="simulation__panel">
        <div class="simulation__grid">
          <!-- Card 1 -->
          <div class="simulation__card">
            <h3>建設・リフォーム</h3>
            <ul class="simulation__list">
              <li><span>稼働スケジュール管理シート作成</span><span class="simulation__ticket">4枚</span></li>
              <li><span>現場用報告フォーム＆集計（GAS）</span><span class="simulation__ticket">3枚</span></li>
              <li><span>運用レクチャー</span><span class="simulation__ticket">2枚</span></li>
            </ul>
            <div class="simulation__total">
              合計 <span class="simulation__total-ticket">9<span>枚</span></span>
            </div>
          </div>
          
          <!-- Card 2 -->
          <div class="simulation__card">
            <h3>人材派遣・紹介</h3>
            <ul class="simulation__list">
              <li><span>応募者データ自動集約シート構築</span><span class="simulation__ticket">3枚</span></li>
              <li><span>面談案内メール一括送信（GAS）</span><span class="simulation__ticket">3枚</span></li>
              <li><span>カレンダー連携&リマインド自動化</span><span class="simulation__ticket">4枚</span></li>
              <li><span>進捗確認ミーティング対応</span><span class="simulation__ticket">2枚</span></li>
            </ul>
            <div class="simulation__total">
              合計 <span class="simulation__total-ticket">12<span>枚</span></span>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="simulation__card">
            <h3>Eコマース<br><span class="simulation__card-subtitle">（EC・通販）</span></h3>
            <ul class="simulation__list">
              <li><span>データ一括整形（GAS）</span><span class="simulation__ticket">3枚</span></li>
              <li><span>在庫アラート自動通知設定</span><span class="simulation__ticket">2枚</span></li>
              <li><span>出荷指示用CSV自動出力構築</span><span class="simulation__ticket">3枚</span></li>
              <li><span>出荷フロー見直し・改善提案</span><span class="simulation__ticket">2枚</span></li>
            </ul>
            <div class="simulation__total">
              合計 <span class="simulation__total-ticket">10<span>枚</span></span>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Premium Plan Panel -->
      <div id="sim-premium" class="simulation__panel">
        <div class="simulation__grid">
          <!-- Card 1 -->
          <div class="simulation__card">
            <h3>広告代理店</h3>
            <ul class="simulation__list">
              <li><span>全社業務フロー棚卸し・課題抽出</span><span class="simulation__ticket">4枚</span></li>
              <li><span>案件収支ダッシュボード設計</span><span class="simulation__ticket">6枚</span></li>
              <li><span>外注費・経費データ自動連携（GAS）</span><span class="simulation__ticket">4枚</span></li>
              <li><span>SaaSからのCSVデータ自動加工</span><span class="simulation__ticket">4枚</span></li>
              <li><span>請求・入金データ自動照合</span><span class="simulation__ticket">3枚</span></li>
            </ul>
            <div class="simulation__total">
              合計 <span class="simulation__total-ticket">21<span>枚</span></span>
            </div>
          </div>
          
          <!-- Card 2 -->
          <div class="simulation__card">
            <h3>医療・介護法人</h3>
            <ul class="simulation__list">
              <li><span>部門別紙申請のフォーム化</span><span class="simulation__ticket">3枚</span></li>
              <li><span>スプシ承認ワークフロー構築</span><span class="simulation__ticket">6枚</span></li>
              <li><span>シフト作成補助プログラム作成</span><span class="simulation__ticket">6枚</span></li>
              <li><span>施設への運用レクチャー</span><span class="simulation__ticket">4枚</span></li>
            </ul>
            <div class="simulation__total">
              合計 <span class="simulation__total-ticket">19<span>枚</span></span>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="simulation__card">
            <h3>製造業<br><span class="simulation__card-subtitle">（中小メーカー）</span></h3>
            <ul class="simulation__list">
              <li><span>受注〜出荷の工程管理DB設計</span><span class="simulation__ticket">8枚</span></li>
              <li><span>部門間スプシデータ連携</span><span class="simulation__ticket">6枚</span></li>
              <li><span>クラウド請求・在庫ツール連携アドバイス</span><span class="simulation__ticket">4枚</span></li>
              <li><span>全社DX推進レポート作成＆週次伴走</span><span class="simulation__ticket">6枚</span></li>
            </ul>
            <div class="simulation__total">
              合計 <span class="simulation__total-ticket">24<span>枚</span></span>
            </div>
          </div>
        </div>
      </div>
      <p class="simulation__note">※消費されるチケット枚数に関しては目安となります</p>
    </div>
  </section>


  <!-- Mid CTA -->
  <section id="mid-cta" class="mid-cta-section">
    <div class="container mid-cta-container">
      <div class="mid-cta-image">
        <img loading="lazy" src="<?php m_asset('features03.webp'); ?>" alt="無料トライアルイメージ">
      </div>
      <div class="mid-cta-content">
        <p class="mid-cta-lead">【毎月5社限定】初期費用が今なら0円！</p>
        <h2 class="mid-cta-title">定額制DX支援で、<br><span class="pc-only">自社の</span>業務効率化を<span class="mid-cta-highlight"><span class="pc-only">今すぐ</span>スタート！</span></h2>
        <p class="mid-cta-desc">社内のDX推進・自動化のお悩みを、プロが伴走サポートします。</p>
        <div class="mid-cta-btn-wrap">
          <a href="#contact" class="btn-mid-cta">
            <span class="pc-only">＼限定キャンペーンに応募する（無料相談）／</span>
            <span class="sp-only">＼キャンペーンに応募する／</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Flow -->
  <section id="flow" class="section">
    <div class="container">
      <h2 class="section-title">サービス導入までの流れ</h2>
      <span class="section-subtitle">- FLOW -</span>
      
      <div class="flow__list">
        <!-- Step 01 -->
        <div class="flow__item">
          <div class="flow__img-circle">
            <img loading="lazy" src="<?php m_asset('flow-icon01.svg'); ?>" alt="">
          </div>
          <div class="flow__content">
            <div class="flow__step-label">Step 01</div>
            <h3 class="flow__step-title">お問い合わせ</h3>
            <p class="flow__step-desc">まずはお気軽にご相談・資料請求ください。</p>
          </div>
        </div>
        
        <!-- Step 02 -->
        <div class="flow__item">
          <div class="flow__img-circle">
            <img loading="lazy" src="<?php m_asset('flow-icon02.svg'); ?>" alt="">
          </div>
          <div class="flow__content">
            <div class="flow__step-label">Step 02</div>
            <h3 class="flow__step-title">打ち合わせ</h3>
            <p class="flow__step-desc">オンライン（Zoom／Meetなど）で全国どこからでもお打ち合わせ可能です。<br>サービス概要のご案内や、現状の課題・ご要望をお伺いします。</p>
          </div>
        </div>

        <!-- Step 03 -->
        <div class="flow__item">
          <div class="flow__img-circle">
            <img loading="lazy" src="<?php m_asset('flow-icon03.svg'); ?>" alt="">
          </div>
          <div class="flow__content">
            <div class="flow__step-label">Step 03</div>
            <h3 class="flow__step-title">開始日・プランの確定</h3>
            <p class="flow__step-desc">サービス提供の開始日や具体的なプランを確定します。</p>
          </div>
        </div>

        <!-- Step 04 -->
        <div class="flow__item">
          <div class="flow__img-circle">
            <img loading="lazy" src="<?php m_asset('flow-icon04.svg'); ?>" alt="">
          </div>
          <div class="flow__content">
            <div class="flow__step-label">Step 04</div>
            <h3 class="flow__step-title">お申し込み</h3>
            <p class="flow__step-desc">正式なお申し込み手続きをし、サービス提供の準備をさせていただきます。</p>
          </div>
        </div>

        <!-- Step 05 -->
        <div class="flow__item">
          <div class="flow__img-circle">
            <img loading="lazy" src="<?php m_asset('flow-icon05.svg'); ?>" alt="">
          </div>
          <div class="flow__content">
            <div class="flow__step-label">Step 05</div>
            <h3 class="flow__step-title">サービス開始</h3>
            <p class="flow__step-desc">キックオフミーティングにて、改善フローや課題の整理を行ないます。<br>場合によっては、現地までお伺いいたします。</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" class="section mod-faq-1">
    <div class="container">
      <h2 class="section-title">よくある質問</h2>
      <span class="section-subtitle">- FAQ -</span>
      
      <div class="faq__list">
        <div class="faq__item">
          <div class="faq__question">
            <h3>普段の連絡手段はどのツールを使用しますか？</h3>
            <span class="faq-icon">+</span>
          </div>
          <div class="faq__answer">
          <div class="faq__answer-inner">
            <p>品質管理を徹底するため、Slackでのやり取りをお願いしております。</p>
          </div>
          </div>
        </div>
        <div class="faq__item">
          <div class="faq__question">
            <h3>余ったチケットは繰り越せますか？</h3>
            <span class="faq-icon">+</span>
          </div>
          <div class="faq__answer">
          <div class="faq__answer-inner">
            <p>はい。未使用分は翌月へ繰り越し可能です。（※繰り越しは翌月まで有効）</p>
          </div>
          </div>
        </div>
        <div class="faq__item">
          <div class="faq__question">
            <h3>チケットが足りなくなったらどうなりますか？</h3>
            <span class="faq-icon">+</span>
          </div>
          <div class="faq__answer">
          <div class="faq__answer-inner">
            <p>追加チケットをご購入いただくか、翌月分をご利用いただけます。</p>
          </div>
          </div>
        </div>
        <div class="faq__item">
          <div class="faq__question">
            <h3>契約期間はありますか？</h3>
            <span class="faq-icon">+</span>
          </div>
          <div class="faq__answer">
          <div class="faq__answer-inner">
            <p>最低契約期間は3ヶ月となります。<br>解約をご希望の場合は、前月までにご申告ください。</p>
          </div>
          </div>
        </div>
        <div class="faq__item">
          <div class="faq__question">
            <h3>対応時間は決まっていますか？</h3>
            <span class="faq-icon">+</span>
          </div>
          <div class="faq__answer">
          <div class="faq__answer-inner">
            <p>平日9:00~18:00となります。<br>時間外のご依頼やご連絡は翌営業日に対応させていただきます。</p>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Form -->
  <section id="contact" class="section mod-contactform-1">
    <div class="container contact-split">
      <!-- Left Info -->
      <div class="contact-info">
        <span class="contact-subtitle">Contact</span>
        <h2 class="contact-title">お問い合わせ</h2>
        <p class="contact-desc">ムダトルへのお問い合わせ、ご質問などはフォーム<br>よりお問い合わせください</p>
      </div>
      
      <!-- Right Form -->
      <div class="contact-form-wrapper">
        <form id="gas-contact-form" class="contact-form">
          <div class="contact__form-group">
            <label class="contact__form-label">お問い合わせ種別 <span class="badge-required-outline">必須</span></label>
            <div class="radio-group mod-contactform-2">
              <label class="contact__radio-label">
                <input class="contact__radio-input" type="radio" name="category" value="まずは相談する" required> まずは相談する
              </label>
              <label class="contact__radio-label">
                <input class="contact__radio-input" type="radio" name="category" value="資料を請求する" required> 資料を請求する
              </label>
            </div>
          </div>
          <div class="contact__form-group">
            <label class="contact__form-label">会社名 <span class="badge-optional-outline">任意</span></label>
            <input type="text" name="company" class="form-input" placeholder="株式会社〇〇">
          </div>
          
          <div class="form-row">
            <div class="form-group half">
              <label class="contact__form-label">姓 <span class="badge-required-outline">必須</span></label>
              <input type="text" name="lastName" class="form-input" placeholder="山田" required>
            </div>
            <div class="form-group half">
              <label class="contact__form-label">名 <span class="badge-required-outline">必須</span></label>
              <input type="text" name="firstName" class="form-input" placeholder="太郎" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group half">
              <label class="contact__form-label">セイ <span class="badge-required-outline">必須</span></label>
              <input type="text" name="lastNameKana" class="form-input" placeholder="ヤマダ" required>
            </div>
            <div class="form-group half">
              <label class="contact__form-label">メイ <span class="badge-required-outline">必須</span></label>
              <input type="text" name="firstNameKana" class="form-input" placeholder="タロウ" required>
            </div>
          </div>

          <div class="contact__form-group">
            <label class="contact__form-label">メールアドレス <span class="badge-required-outline">必須</span></label>
            <input type="email" name="email" class="form-input" placeholder="mudatoru@example.com" required>
          </div>

          <div class="contact__form-group">
            <label class="contact__form-label">電話番号 <span class="badge-required-outline">必須</span></label>
            <input type="tel" name="tel" class="form-input" placeholder="090-1234-5678" required>
          </div>

          <div class="contact__form-group">
            <label class="contact__form-label">お問い合わせ内容 <span class="badge-optional-outline">任意</span></label>
            <textarea name="message" class="form-input form-textarea" placeholder="ご相談内容やご質問などを入力してください" rows="6"></textarea>
          </div>

          <div class="contact__privacy-wrap">
            <label class="contact__privacy-label">
              <input type="checkbox" name="privacy" required class="contact__privacy-input">
              <a href="https://elyfic.jp/privacy" target="_blank" class="contact__privacy-link">プライバシーポリシー</a>に同意する
            </label>
          </div>
          <div class="form-submit contact__submit-wrap">
            <button type="submit" class="btn-primary contact__submit-btn">送信する</button>
          </div>
        </form>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer class="footer">
    <div class="container footer__container">
      <div class="footer__left">
        <a href="#" class="footer__logo">
          <img loading="lazy" src="<?php m_asset('mudatoru-logo.png'); ?>" alt="MUDATORU" class="footer__logo-img">
        </a>
      </div>
      <div class="footer__right">
        <ul class="footer__nav">
          <li><a href="#features">サービスの特徴</a></li>
          <li><a href="#pricing">ご利用料金</a></li>
          <li><a href="#simulation">ご利用イメージ</a></li>
          <li><a href="#flow">導入までの流れ</a></li>
          <li><a href="#faq">よくある質問</a></li>
        </ul>
      </div>
    </div>
    <div class="footer__bottom-wrapper">
      <div class="container footer__bottom">
        <div class="footer__company-info">
          <a class="footer__link" href="https://elyfic.jp" target="_blank" rel="noopener noreferrer">運営会社</a>
          <a class="footer__link" href="https://elyfic.jp/law" target="_blank" rel="noopener noreferrer">特定商取引法に基づく表記</a>
          <a class="footer__link" href="https://elyfic.jp/privacy" target="_blank" rel="noopener noreferrer"> 個人情報保護方針</a>
        </div>
        <p class="footer__copyright">&copy; <?php echo date('Y'); ?> mudatoru All Rights Reserved.</p>
      </div>
    </div>
  </footer>



  <?php wp_footer(); ?>
</body>
</html>
