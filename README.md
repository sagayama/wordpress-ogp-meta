# WordPress OGP & Twitter Card Meta Tags

WordPressサイト用の **OGP（Open Graph Protocol）** と **Twitterカード** を自動出力するPHPサンプルです。  
`header.php` に追加するだけで、SNSシェア時の見た目を最適化できます。

---

## 🧩 特徴
- ページタイトル・説明文・URLを自動取得  
- 投稿ページではアイキャッチ画像をOGP画像として使用  
- トップページは `type="website"`、記事ページは `type="article"` を自動判定  
- Twitterカードも同時に対応（`summary_large_image`）

---

## 🛠 使い方
1. テーマの `header.php` に以下のコードを貼り付け  
   （`</head>` の直前がおすすめ）

2. テーマフォルダに共通OGP画像を配置  


3. 必要に応じてTwitterアカウントを設定
<meta name="twitter:site" content="@youraccount" />

---

### 🖼️ 推奨画像サイズ
| 用途         | サイズ        | 比率   |
| ---------- | ---------- | ---- |
| OGP画像      | 1200×630px | 16:9 |
| Twitterカード | 1200×630px | 16:9 |

---

### 💬 ライセンス

このコードは自由に利用・改変できます。
商用利用もOKですが、再配布時はこのREADMEのクレジットを残してください。

---

### 👤 Author

Created by sagayama
(WordPress Web Director / Designer)


```html
