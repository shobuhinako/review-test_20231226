@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="main__header">
    <h2 class="main__header-title">Confirm</h2>
</div>

<div class="confirm__form">
<form class="form">
    <table class="confirm__form-content">
        <tr class="confirm__form-row">
            <th class="confirm__form-th">お名前</th>
            <td class="confirm__form-td">{{ $contact['last_name'] }}</td>
            <td class="confirm__form-td">{{ $contact['first_name'] }}</td>
        </tr>
        <tr class="confirm__form-row">
            <th class="confirm__form-th">性別</th>
            <td class="confirm__form-td">
                @if($contact['gender'] == 1)
                    男性
                @elseif($contact['gender'] == 2)
                    女性
                @else($contact['gender'] == 3)
                    その他
                @endif
            </td>
        </tr>
        <tr class="confirm__form-row">
            <th class="confirm__form-th">メールアドレス</th>
            <td class="confirm__form-td">{{ $contact['email'] }}</td>
        </tr>
        <tr class="confirm__form-row">
            <th class="confirm__form-th">電話番号</th>
            <td class="confirm__form-td">{{ $contact['tell_part1'] }}{{ $contact['tell_part2'] }}{{ $contact['tell_part3'] }}</td>
        </tr>
        <tr class="confirm__form-row">
            <th class="confirm__form-th">住所</th>
            <td class="confirm__form-td">{{ $contact['address'] }}</td>
        </tr>
        <tr class="confirm__form-row">
            <th class="confirm__form-th">建物名</th>
            <td class="confirm__form-td">{{ $contact['building'] }}</td>
        </tr>
        <tr class="confirm__form-row">
            <th class="confirm__form-th">お問い合わせの種類</th>
            <td class="confirm__form-td">
                {{ $category_id }}
            </td>
        </tr>
        <tr class="confirm__form-row">
            <th class="confirm__form-th">お問い合わせ内容</th>
            <td class="confirm__form-td">{{ $contact['detail'] }}</td>
        </tr>
    </table>
</form>
<div>

<div class="confirm__form-footer">
    <form class="confirm__form-button" action="/thanks" method="post">
        @csrf
        <input class="confirm__form-submit" type="submit" name="submit-button" />
    </form>
    <form class="confirm__form-button" action="/" method="get">
        @csrf
        <input class="confirm__form-modify" type="submit" name="modify-button" value="修正" />
    </from>
</div>
@endsection