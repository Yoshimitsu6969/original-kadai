<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; 

use App\Restaurant; 

use App\AreaGroup;

use App\Prefecture;



class UsersController extends Controller
{
        public function index()
    {
        // ユーザ一覧をidの降順で取得
        $users = User::orderBy('id', 'desc')->paginate(15);
        
        $restaurants = Restaurant::all();

        // ユーザ一覧ビューでそれを表示
        return view('users.index', [
            'users' => $users,
            "restaurants" => $restaurants,
        ]);
    }
        public function show($id)
    {
        // idの値でユーザを検索して取得
        $user = User::findOrFail($id);

        // $user->loadRelationshipCounts();

        $restaurant = Restaurant::findOrFail($id);
        $restaurants = $user->restaurants();
        // ユーザ詳細ビューでそれを表示
        return view('users.show', [
            'user' => $user,
            "restaurant" => $restaurant,
            "restaurants" => $restaurants
        ]);
    }
    
            public function edit($id)
    {
        // idの値でユーザを検索して取得
        $user = User::findOrFail($id);

        // $user->loadRelationshipCounts();

        $restaurant = Restaurant::findOrFail($id);
        $restaurants = $user->restaurants();
        // ユーザ詳細ビューでそれを表示
        return view('users.edit', [
            'user' => $user,
            "restaurant" => $restaurant,
            "restaurants" => $restaurants
        ]);
    }
    
          public function favorites($id)
    {
        // dd(\Auth::id());
        // dd($id);
        // idの値でユーザを検索して取得
        $user = User::findOrFail($id);
        
        $user->loadRelationshipCounts();
       
       
        // ユーザのfavorite一覧を取得
        $restaurants= $user->favorites()->paginate(5);
        
     
     
        // favorite一覧ビューでそれらを表示
        return view('users.favorites', [
            'user' => $user,
            'restaurants' => $restaurants,
          
        ]);
    }
}
