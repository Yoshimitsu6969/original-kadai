@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{ Auth::user()->name }}
    @else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>レストラン検索</h1>
            {{-- ユーザ登録ページへのリンク --}}
            {!! link_to_route('signup.get', '新規作成', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
        @endif
@endsection