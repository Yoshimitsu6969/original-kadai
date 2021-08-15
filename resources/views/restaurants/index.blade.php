@extends('layouts.app')


@section('content')

{!! Form::open(['route' => 'restaurants.index', "method" => "get"]) !!}

{!! Form::select('prefecture_id',$prefectures, request('prefecture_id')) !!}

{!! Form::submit('検索', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}


    <h1>レストラン一覧</h1>

    @if (count($restaurants) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                   
                    <th>レストラン</th>
                    
                    <th>地域番号</th>
                    


      
                </tr>
            </thead>
            <tbody>
                @foreach ($restaurants as $restaurant)
                <tr>



                    <td>{!! link_to_route("restaurants.show",$restaurant->name,["restaurant"=>$restaurant->id])!!}</td>

                    
                    <td>{{ $restaurant->prefecture_id }}</td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
    @endif
    {{-- ページネーションのリンク --}}
    {{ $restaurants->links() }}
<a class="navbar-brand" href="/">トップページはこちら</a>

@endsection