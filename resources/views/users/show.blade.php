@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <div class="row">
        <aside class="col-sm-4">
            {{-- ユーザ情報 --}}
            @include('users.card')
            
        </aside>
        <div class="col-sm-8">
            <ul class="nav nav-tabs nav-justified mb-3">
            @include('users.navtabs')
            
        
            @include("restaurants.restaurants")
            </ul>
        </div>
    </div>
   
@endsection