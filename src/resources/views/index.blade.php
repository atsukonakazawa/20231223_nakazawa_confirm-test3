<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
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
        </div>
    </header>

    <main>
        <div class="title">
            <div class="title-inner">
                <h2>Contact</h2>
            </div>
        </div>
        <div class="contact-content">
            <div class="contact-content__inner">
                <form class="contact-form" action="/confirm" method="post">
                    @csrf
                    <table>
                        <tr class="name-row">
                            <th class="contact-form__input-title">
                                お名前<span>※</span>
                            </th>
                            <td>
                                <input class="contact-form__input-name" type="text" name="first_name" placeholder="例:山田">
                                <input class="contact-form__input-name" type="text" name="last_name" placeholder="例:太郎">
                            </td>
                            @error('name')
                            <p style="color: red">
                                {{$errors->first('email')}}
                            </p>
                            @enderror
                        </tr>
                        <tr class="gender-row">
                            <th class="contact-form__input-title">
                                性別<span>※</span>
                            </th>
                            <td>
                                <div class="radio-group">
                                    <input class="contact-form__input" type="radio" name="gender"  id="man" value="男性" checked>
                                    <label for="man">男性</label>
                                    <input class="contact-form__input" type="radio" name="gender" id="woman" value="女性">
                                    <label for="woman">女性</label>
                                    <input class="contact-form__input" type="radio" name="gender" id="other" value="その他">
                                    <label for="other">その他</label>
                                </div>
                            </td>
                            @error('gender')
                            <p style="color: red">
                                {{$errors->first('email')}}
                            </p>
                            @enderror
                        </tr>
                        <tr class="email-row">
                            <th class="contact-form__input-title">
                                メールアドレス<span>※</span>
                            </th>
                            <td>
                                <input class="contact-form__input" type="email" name="email" placeholder="例:test@example.com">
                            </td>
                            @error('email')
                            <p style="color: red">
                                {{$errors->first('email')}}
                            </p>
                            @enderror
                        </tr>
                        <tr class="tell-row">
                            <th class="contact-form__input-title">
                                電話番号<span>※</span>
                            </th>
                            <td>
                                <div class="tel-group">
                                    <input class="contact-form__input-tel-first" type="tel" name="tell" placeholder="080">
                                    <p class="tel-p">-</p>
                                    <input class="contact-form__input-tel-second" type="tel" name="tell" placeholder="1234">
                                    <p class="tel-p">-</p>
                                    <input class="contact-form__input-tel-third" type="tel" name="tell" placeholder="1234">
                                </div>
                            </td>
                            @error('tell')
                            <p style="color: red">
                                {{$errors->first('email')}}
                            </p>
                            @enderror
                        </tr>
                        <tr class="address-row">
                            <th class="contact-form__input-title">
                                住所<span>※</span>
                            </th>
                            <td>
                                <input class="contact-form__input" type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3">
                            </td>
                            @error('address')
                            <p style="color: red">
                                {{$errors->first('email')}}
                            </p>
                            @enderror
                        </tr>
                        <tr class="building-row">
                            <th class="contact-form__input-title">
                                建物名
                            </th>
                            <td>
                                <input class="contact-form__input" type="text" name="building" placeholder="千駄ヶ谷マンション101">
                            </td>
                        </tr>
                        <tr class="category-row">
                            <th class="contact-form__input-title">
                                お問い合わせの種類<span>※</span>
                            </th>
                            <td>
                                <select class="contact-form__input-category" name="content" id="">
                                    <option name="content" value="選択してください" selected>選択してください</option>
                                    <option name="content" value="商品のお届けについて">商品のお届けについて</option>
                                    <option name="content" value="商品の交換について">商品の交換について</option>
                                    <option name="content" value="商品トラブル">商品トラブル</option>
                                    <option name="content" value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                                    <option name="content" value="その他">その他</option>
                                </select>
                            </td>
                            @error('category_id')
                            <p style="color: red">
                                {{$errors->first('email')}}
                            </p>
                            @enderror
                        </tr>
                        <tr class="detail-row">
                            <th class="contact-form__input-title-detail">
                                お問い合わせ内容<span>※</span>
                            </th>
                            <td class="table-td">
                                <textarea class="contact-form__textarea" name="detail" id="" cols="50" rows="5" placeholder="お問い合わせ内容をご記載ください"></textarea>
                            </td>
                            @error('detail')
                            <p style="color: red">
                                {{$errors->first('email')}}
                            </p>
                            @enderror
                        </tr>
                    </table>
                    <div class="create-form__button">
                        <button class="create-form__button-submit" type="submit">
                            確認画面
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>

