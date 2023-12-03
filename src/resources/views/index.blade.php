@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('content')
<div class="main__header">
    <h2 class="main__header-title">Contact</h2>
</div>

<div class="contact__form">
    <form class="contact__form-inner" action="/confirm" method="post">
        @csrf
        <div class="name">
        <label class="label__name">お名前
            <span class="form__label-required">※</span>
            <input class="last-name" type="text" name="last_name" placeholder="例:山田" value="{{ old('last_name') }}" />
            @if ($errors->has('last_name'))
            <p>{{$errors->first('last_name')}}</p>
            @endif
            <input class="first-name" type="text" name="first_name" placeholder="例:太郎" value="{{ old('first_name') }}" />
            @if ($errors->has('first_name'))
            <p>{{$errors->first('first_name')}}</p>
            @endif
        </label>
        </div>
        <div class="gender">
        <label class="label__gender">性別
            <span class="form__label-required">※</span>
            <input class="gender" type="radio" name="gender" value="1" {{ old('gender', '1') == '1' ? 'checked' : '' }}>男性
            <input class="gender" type="radio" name="gender" value="2" {{ old('gender') == '2' ? 'checked' : '' }}>女性
            <input class="gender" type="radio" name="gender" value="3" {{ old('gender') == '3' ? 'checked' : '' }}>その他
            @if ($errors->has('gender'))
            <p>{{$errors->first('gender')}}</p>
            @endif
        </label>
        </div>
        <div class="email">
        <label class="label__email">メールアドレス
            <span class="form__label-required">※</span>
            <input class="email" type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
            @if ($errors->has('email'))
            <p>{{$errors->first('email')}}</p>
            @endif
        </label>
        </div>
        <div class="tell">
        <label class="label__tell">電話番号
            <span class="form__label-required">※</span>
            <input class="tell" type="tel" name="tell_part1" placeholder="080" value="{{ old('tell_part1') }}" />
            @if ($errors->has('tell_part1'))
            <p>{{$errors->first('tell_part1')}}</p>
            @endif
            <span class="tel__hyphen">-</span>
            <input class="tell" type="tel" name="tell_part2" placeholder="1234" value="{{ old('tell_part2') }}" />
            @if ($errors->has('tell_part2'))
            <p>{{$errors->first('tell_part2')}}</p>
            @endif
            <span class="tel__hyphen">-</span>
            <input class="tell" type="tel" name="tell_part3" placeholder="5678" value="{{ old('tell_part3') }}" />
            @if ($errors->has('tell_part3'))
            <p>{{$errors->first('tell_part3')}}</p>
            @endif
        </label>
        </div>
        <div class="address">
        <label class="label__address">住所
            <span class="form__label-required">※</span>
            <input class="address" type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
            @if ($errors->has('address'))
            <p>{{$errors->first('address')}}</p>
            @endif
        </label>
        </div>
        <div class="building-name">
        <label class="label__building-name">建物名
            <input class="building-name" type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" />
        </label>
        </div>
        <div class="contact-category">
        <label class="label__contact-category">お問い合わせの種類
            <span class="form__label-required">※</span>
            <select class="contact-category" name="content" id="content">
                <option value="選択してください" selected>選択してください</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->content }}</option>
                @endforeach
            </select>
        </label>
        </div>
        <div class="contact-content">
        <label class="label__contact-content">お問い合わせ内容
            <span class="form__label-required">※</span>
            <textarea name="detail" placeholder="お問い合わせ内容をご記載ください"></textarea>
            @if ($errors->has('detail'))
            <p>{{$errors->first('detail')}}</p>
            @endif
        </label>
        </div>
        <div class="confirm__button">
        <input class="confirm__button" type="submit" name="button" value="確認画面" />
        </div>
    </form>
</div>
@endsection