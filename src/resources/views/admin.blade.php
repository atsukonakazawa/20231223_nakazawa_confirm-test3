<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gorditas&family=Indie+Flower&family=Kaisei+Decol:wght@400;500&family=Noto+Serif+JP:wght@900&family=Playpen+Sans:wght@100&family=Zen+Maru+Gothic:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__title">
                FashionablyLate
            </h1>
            <div class="link-button">
                <a href="/register">logout</a>
            </div>
        </div>
    </header>

    <main>
        <div class="title">
            <div class="title-inner">
                <h2>Admin</h2>
            </div>
        </div>
        <div class="admin-content">
            <div class="admin-content__inner">
                <div class="search-form">
                    <div class="search-form__inner">
                        <input class="search-form__input" type="text" placeholder="名前やメールアドレスを入力してください">
                        <select class="search-select__gender" name="gender" id="">
                            <option value="性別">
                                性別
                            </option>
                            <option value="男性">
                                男性
                            </option>
                            <option value="女性">
                                女性
                            </option>
                            <option value="その他">
                                その他
                            </option>
                        </select>
                        <select class="search-select__category" name="" id="">
                            <option value="お問い合わせの種類">
                                お問い合わせの種類
                            </option>
                            <option value="商品のお届けについて">
                                商品のお届けについて
                            </option>
                            <option value="商品の交換について">
                                商品の交換について
                            </option>
                            <option value="商品トラブル">
                                商品トラブル
                            </option>
                            <option value="ショップへのお問い合わせ">
                                ショップへのお問い合わせ
                            </option>
                            <option value="その他">
                                その他
                            </option>
                        </select>
                        <div class="search-select__date" >
                            日付を選択してください
                            <!--カレンダーを入れる-->
                        </div>
                    </div>
                    <div class="export-pages">
                        <div class="export-button">
                            <button class="export-button__submit">
                                エクスポート
                            </button>
                        </div>
                        <div class="pages">
                            <div class="pages-inner">
                                123
                            <!--ページネーションを入れる-->
                            </div>
                        </div>
                    </div>
                    <div class="search-table__outer">
                        <table class="search-table">
                            <tr class="search-table__title-row">
                                <th>お名前</th>
                                <th>性別</th>
                                <th>メールアドレス</th>
                                <th>お問い合わせの種類</th>
                            </tr>
                            <tr class="search-table__first-row">
                                <!--contactsテーブルから引っ張ってくる-->
                            </tr>
                            <tr class="search-table__second-row">
                                <!--contactsテーブルから引っ張ってくる-->
                            </tr>
                            <tr class="search-table__third-row">
                                <!--contactsテーブルから引っ張ってくる-->
                            </tr>
                        </table>
                        <div class="reset-button__outer">
                            <div class="reset-button">
                                <button class="reset-button__submit">
                                    リセット
                                    <!--モーダルウィンドウに繋ぐ-->
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
