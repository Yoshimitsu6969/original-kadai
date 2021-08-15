<ul class="nav nav-tabs nav-justified mb-3">


    <li class="nav-item">
        <a href="{{ route('users.favorites', ['id' => $user->id]) }}" class="nav-link {{ Request::routeIs('users.favorites') ? 'active' : '' }}">
            レストランお気に入り一覧
        <span class="badge badge-secondary">{{ $user->favorites_count }}</span>

        </a>
    </li>
    </ul>
