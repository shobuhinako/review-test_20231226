@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="admin__content">
    <div class="admin-form__heading">
        <h2>Admin</h2>
    </div>
<form class="search-form">
    <div class="search-form__item">
        <input class="search-from__item-input" type="search" placeholder="名前やメールアドレスを入力してください" />
    </div>
    <div class="select__box">
        <select class="select__category" name="category">
                <option value="全て">全て</option>
                <option value="名前">名前</option>
                <option value="メールアドレス">メールアドレス</option>
                <option value="性別">性別</option>
        </select>
    </div>

@endsection