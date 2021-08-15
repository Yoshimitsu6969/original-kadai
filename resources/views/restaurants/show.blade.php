@extends('layouts.app')

@section('content')

<h1> {{$restaurant->name}}のレストラン詳細ページ</h1>

<table class="table table-bordered">

   
    <tr>
    <th>名前</th>
    <td>{{$restaurant->name}}</td>
    </tr>
    
    <tr>
    <th>電話番号</th>
    <td>{{$restaurant->phoneNumber}}</td>
    </tr>
    
    <tr>
    <th>メールアドレス</th>
    <td>{{$restaurant->email}}</td>
    </tr>

    <tr>
    <th>住所</th>
    <td>{{$restaurant->address}}</td>
    </tr>
    
</table>
 @include('user_favorite.favorite_button')
<a class="navbar-brand" href="/">トップページはこちら</a>
<a class="navbar-brand" href= "/restaurants/?prefecture_id={{ $restaurant->prefecture_id }}">戻る</a>
@endsection