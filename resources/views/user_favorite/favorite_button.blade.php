
    @if (Auth::user()->is_favorites($restaurant->id))
        {!! Form::open(['route' => ['favorites.unfavorite', $restaurant->id], 'method' => 'delete']) !!}
            {!! Form::submit('お気に入り解除', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['favorites.favorite', $restaurant->id]]) !!}
            {!! Form::submit('お気に入り', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
