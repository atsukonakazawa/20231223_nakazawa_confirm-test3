<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
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
                <h2>Confirm</h2>
            </div>
        </div>
        <div class="confirm-content">
            <div class="confirm-content__inner">
                <table class="confirm-table">
                    <tr class="name-row">
                        <th>
                            お名前
                        </th>
                        <td >
                            {{$contact['first_name']['last_name']}}
                        </td>
                    </tr>
                    <tr class="gender-row">
                        <th>
                            性別
                        </th>
                        <td value="{{$contact['gender']}}">
                            {{$contact['gender']}}
                        </td>
                    </tr>
                    <tr class="email-row">
                        <th>
                            メールアドレス
                        </th>
                        <td value="{{$contact['email']}}">
                            {{$contact['email']}}
                        </td>
                    </tr>
                    <tr class="tell-row">
                        <th>
                            電話番号
                        </th>
                        <td value="{[$contact['tell']]}">
                            {[$contact['tell']]}
                        </td>
                    </tr>
                    <tr class="address-row">
                        <th>
                            住所
                        </th>
                        <td value="{{$contact['address']}}">
                            {{$contact['address']}}
                        </td>
                    </tr>
                    <tr class="building">
                        <th>
                            建物名
                        </th>
                        <td value="{{$contact['building']}}">
                            {{$contact['building']}}
                        </td>
                    </tr>
                    <tr class="category_id-row">
                        <th>
                            お問い合わせの種類
                        </th>
                        <td value="{{$category['content']}}">
                            {{$category['content']}}
                        </td>
                    </tr>
                    <tr class="detail-row">
                        <th>
                            お問い合わせ内容
                        </th>
                        <td value="{{$content['detail']}}">
                            {{$content['detail']}}
                        </td>
                    </tr>
                </table>
                <div class="confirm-table__button">
                    <button class="confirm-table__button-submit" type="submit">
                        送信
                    </button>
                    <button class="confirm-table__button-fix" type="submit">
                        修正
                    </button>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
