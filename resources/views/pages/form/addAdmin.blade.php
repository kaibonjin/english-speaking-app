@extends('layouts.layout')

@section('title', 'Register')

@section('menubar')
    @parent
    新規作成ページ

@endsection

@section('content')
@if(count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
    <form action="/person/add" method="post">
        <table>
            @csrf
            <input type="hidden" name="scope" value="1">
            <tr><th>姓: </th><td><input type="text" name="last_name" value="{{old('name')}}"></td></tr>
            <tr><th>名: </th><td><input type="text" name="first_name" value="{{old('name')}}"></td></tr>
            <tr><th>メールアドレス: </th><td><input type="text" name="email" value="{{old('email')}}"></td></tr>
            <tr><th>パスワード: </th><td><input type="text" name="password" value="{{old('password')}}"></td></tr>
            <tr><th>年齢: </th><td><input type="text" name="age" value="{{old('age')}}"></td></tr>
            <tr><th>電話番号: </th><td><input type="text" name="phone_number" value="{{old('phone_number')}}"></td></tr>
            <tr><th></th><td><input type="submit" value="submit"></td></tr>
        </table>
    </form>
@endsection

@section('footer')
copyright 2021 kaisei.

@endsection
