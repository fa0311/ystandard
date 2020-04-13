# yStandard

![yStandard](./screenshot.png "yStandard")

## カスタマイズありきの一風変わったWordPressテーマ「yStandard」

yStandardは「自分色に染めた、自分だけのサイトを作る楽しさ」を感じてもらうために作った一風変わったテーマです

詳しくは公式サイトをご覧ください

[yStandard](https://wp-ystandard.com/)

## 「yStandard」の由来

「標準」といった意味の「Standard」に作者が自作物やハンドルネームによく使う「ys」というフレーズをくっつけて、「yStandard」にしました。
（「ys-standard」という案もありましたがなんとなくやめておきました。）

先頭の「y」に意味はなく、発音する必要も無いと思っておりましたが、「yStandard」を「y」の部分まで発音すると「why standard」に聞こえることから"一風変わった"というコンセプトを掲げています

## 必要な動作環境

- WordPress : 5.0以上
- PHP : 7.2以上

## Third-party resources

### normalize.css
License: MIT  
Source : <https://github.com/necolas/normalize.css>

### Simple Icons
License: CC0 - 1.0  
Source : <https://github.com/simple-icons/simple-icons>

### Simple Icons
License: MIT  
Source : <https://github.com/feathericons/feather>

### Font Awesome

Font License: SIL OFL 1.1  
Code License: MIT License  
Source      : <https://fortawesome.github.io/Font-Awesome/>

### Theme Update Checker Library

License: GPL  
Source : <http://w-shadow.com/>

### \_decimal.scss

License: MIT License  
Source : <https://gist.github.com/terkel/4373420>

### css-vars-ponyfill

License: MIT License  
Source : <https://github.com/jhildenbiddle/css-vars-ponyfill>

### object-fit-images

License: MIT License  
Source : <https://github.com/fregante/object-fit-images>

### stickyfill

License: MIT License  
Source : <https://github.com/wilddeer/stickyfill>

## 変更履歴

### v4.x.x

#### v4.0.0-alpha-1
- [追加] α版リリース 2020/04/13 

### v3.x.x

#### v3.14.1
- [修正] user-custom-head,user-custom-head-amp の読み込み不具合対応

#### v3.14.0
- [追加] WordPerss 5.4向けの対応
- [修正] 独自AMPページ作成機能を非推奨に変更
- [修正] 著者情報表示ショートコード・ウィジェットで「特定のユーザーの表示」ができない場合がある点の修正
- [修正] カテゴリー・タグの編集画面で「[ys]パーツ」がない場合の案内文表示追加
- [修正] カテゴリー・タグの編集画面で画像編集部分の保存ができない場合がある点の修正
- [修正] ワンカラム表示＆画像を大きく表示するとき、お知らせバー下に余白ができる点の修正

#### v3.13.1
- [修正] 固定ヘッダー不具合修正
- [修正] ヘッダーを重ねるオプションONの場合のお知らせバー表示不具合対処

#### v3.13.0
- [追加] カテゴリー・タグ一覧ページの説明カスタマイズ追加
- [追加] 「[ys]パーツ」コンテンツ管理機能追加（ショートコード・ウィジェット）
- [追加] お知らせバー表示機能追加
- [修正] カスタマイザーのJavaScriptエラー対処
- [修正] 一覧ページが1ページしかない場合でもページ送りが表示されていた点の修正
- [調整] カスタマイザーメニューの整理
- [調整] パンくずリストスタイル調整
- [調整] 著者情報ボックススタイル調整

#### v3.12.1
- [修正] Androidで太字指定が太字にならない点の修正

#### v3.12.1
- [調整] アイキャッチ画像がない場合の記事一覧ウィジェットと記事下「関連記事」のアイコンを調整

#### v3.12.0
- [追加] ヘッダーロゴの横幅指定機能
- [調整] ロゴ画像の推奨サイズ変更
- [調整] ギャラリーブロックのCSS調整

#### v3.11.2
- [調整] グループブロックの余白調整

#### v3.11.1
- [調整] パンくずリスト フッター・表示なしの場合のレイアウト調整

#### v3.11.0
- [追加] パンくずリストの表示位置変更機能追加

#### v3.10.0
- [追加] フォント変更機能追加
- [修正] グローバルナビゲーション IEで折返しが発生する不具合修正
- [調整] ブロックエディター（編集画面） 見出しスタイル調整

#### v3.9.1
- [調整] パンくず調整

#### v3.9.0
- [追加] yStandard Blocksを使っている場合、ブログカード表示をyStandard Blocksのカードブロックに合わせる
- [追加] カラーパレットにオレンジ追加
- [調整] カラーパレット選択時のCSS詳細度調整

#### v3.8.1
- [修正] YouTubeの埋め込みがAMPページで崩れる点の修正

#### v3.8.0
- [追加] Font Awesome(アイコンフォント)の軽量版読み込みオプション追加
- [修正] JavaScript読み込みのバージョン指定が子テーマのバージョンになっていた点の修正
- [修正] 投稿者プロフィール下のボタン表示不具合修正
- [調整] 詳細ページ下部プロフィール欄から「記事一覧」ボタンを削除

#### v3.7.3
- [修正] TinyMCE関連のスクリプトでエラーが発生する点の対処
- [調整] ボタンブロックのスタイル調整
- [調整] 記事下 広告を2つ表示する場合のスタイル調整
- [調整] 広告設定でショートコードを利用できるように調整

#### v3.7.2
- [調整] 上部パンくずリスト下の余白調整
- [調整] ヘッダーメディアの動画をモバイルでも表示

#### v3.7.1
- [調整] シェアボタンスタイル調整（スマートフォンで4つボタンを並べても文字が折り返さないように）

#### v3.7.0
- [追加] 固定ヘッダー機能追加
  - 影響のあるテンプレート
    - template-parts/header/global-nav.php
- [調整] テンプレートHTML構造変更（classの変更）
  - 影響のあるテンプレート
    - 404.php
    - archive.php
    - page.php
    - sidebar.php
    - single.php
    - page-template/template-one-column.php
    - page-template/template-one-column-no-title.php
    - page-template/template-one-column-no-title-slim.php
    - page-template/template-one-column-wide.php
    - template-parts/404/content.php
    - template-parts/archive/content.php
    - template-parts/page/content.php
    - template-parts/single/content.php
- [調整] カスタマイザーメニューの整理（\[ys\]デザイン設定 → ヘッダー設定）

#### v3.6.0
- [修正] メディアと文章ブロックIE不具合対応
- [修正] 入れ子のあるブロックのマージン調整
- [修正] 「最新の記事」ブロックで日付部分がフォーマットによって改行される点の修正
- [調整] CSS読み込み処理の調整
  - フック廃止
    - ys_get_customizer_inline_css_custom_header
- [調整] サイト背景色を設定した場合のレイアウト調整
- [調整] カラム・メディアと文章・カバーブロックの中身のマージン調整
- [調整] ヘッダータイトル・概要レイアウト調整
- [調整] アーカイブ 文字サイズ等のレイアウト調整
- [調整] 記事一覧 文字サイズ等のレイアウト調整

#### v3.5.1
- [修正] ボタンブロックの角丸0指定が効いていない不具合の修正
- [修正] 追加CSSをエディターのCSSとしてセットする際の不具合修正

#### v3.5.0
- [調整] WordPress 5.3で使えるようになったブロック・変更になったブロックに合わせてCSSを調整
- [調整] 次の記事・前の記事スタイル調整
- [調整] 汎用クラスの一部削除
- [調整] Gutenberg用スタイルシート読み込み設定の調整

#### v3.4.1
- [修正] ブロックエディターの編集画面CSSが適用されない問題の修正
- [調整] ブログカード表示のドメイン部分をモバイルでは非表示に変更

#### v3.4.0
- [追加] AMPプラグイン連携機能の追加
  - 影響のあるテンプレートファイル
    - header.php
    - footer.php
- [追加] タイトルなしテンプレートのスリム版追加
- [調整] 画像ブロックの余白調整
- [調整] 背景色ありの段落ブロックスタイル調整

#### v3.3.0
- [追加] モバイル固定フッターメニュー追加
- [追加] 広告ラベルの変更機能追加 
- [調整] フッターナビゲーション調整
- [調整] 広告表示の調整

#### v3.2.1
- [修正] 動画ヘッダー設定の不具合対処
- [修正] ヘッダーメニュー下線にテキストカラーが反映されない不具合修正

#### v3.2.0
- [追加] Font Awesomeのjs/css切り替え機能追加
- [追加] Font Awesome Kitsの設定追加
    
#### v3.1.4
- [修正] ボタンブロックの編集画面スタイルの調整
- [修正] アドミンバー用スタイルシートの読み込み不具合修正
    
#### v3.1.3
- [修正] アドミンバーのユーザー画像が大きく表示される点の修正
- [修正] メディアと文章ブロックの画像幅変更不具合修正

#### v3.1.2 
- [調整] AMP：画像タグ内の!importantを削除

#### v3.1.1
- [調整] カバーブロックのスタイル調整・編集画面側CSSの調整
    
#### v3.1.0
- [追加] 投稿者SNSリンク、フッターSNSリンクにAmazonアイコンを追加
  - template-parts/footer/footer-sns.php を修正
- [調整] FontAwesome関連処理の調整
- [調整] ブログカード形式の外部サイト概要文の表示文字数調整
- [調整] 投稿者画像の取得方法変更
  - ys_the_author_avatar,ys_get_author_avatar を非推奨に変更
- [調整] PHP処理でコストの掛かりそうな処理をリファクタリング
    
#### v3.0.7
- [修正] パンくずリストの構造化データ エラー対処
    
#### v3.0.6
- [修正] 投稿リストショートコードのスライド表示がsafariでスライド表示にならない点の修正

#### v3.0.5
- [調整] ボタンブロックのスタイル調整
- [調整] グローバルメニュー サブテキストの調整
- [調整] 記事上下ウィジェットの案内文修正

#### v3.0.4
- [修正] `has-text-align-xxx`の不具合修正

#### v3.0.3
- [修正] カスタムプロフィール画像選択機能の不具合修正

#### v3.0.2
- [修正] 広告表示用テキストウィジェットにAdsenseを貼り付けると正しく表示されない点の修正
    
#### v3.0.1
- [修正] 記事下広告の上部余白が消えている点の修正
- [修正] TOPとそれ以外でサイトタイトルの高さが微妙に違う点の修正
- [修正] AMPレイアウトでパンくず前後の余白が大きくなる点修正
- [修正] yStandardウィジェットの共通設定でタイプ別の表示設定が選択できない点の修正
- [調整] 記事下フォローボックスの枠線削除

#### v3.0.0 : 2019/07/31
- [追加] v3.0.0リリース
