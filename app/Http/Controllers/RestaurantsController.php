<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Restaurant; 

use App\AreaGroup;

use App\Prefecture;

class RestaurantsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
         // getでrestaurants/にアクセスされた場合の「一覧表示処理」
    public function index(Request $request)
    {
       

        $prefectures = AreaGroup::with('prefectures')->get()->mapWithKeys(function ($areaGroup) {
        return [$areaGroup->name => $areaGroup->prefectures->pluck('name', 'id')];
        })->toArray();    
        //   dd($prefectures); 
        
        
        if($request->has(["prefecture_id"])){
            

            
            $restaurants = Restaurant::where("prefecture_id",$request->prefecture_id)->paginate(25);
        }else{
            $restaurants = Restaurant::paginate(25);

                    


        }

        
        return view('restaurants.index',
        [
                'prefectures' => $prefectures,
                'restaurants' => $restaurants,
             
                
                
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     // getでrestaurants/createにアクセスされた場合の「新規登録画面表示処理」
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
         // postでrestaurants/にアクセスされた場合の「新規登録処理」
    public function store(Request $request)
    {
        
        $restaurant = new Restaurant;
        $restaurant->save();
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
         // getでrestaurants/（任意のid）にアクセスされた場合の「取得表示処理」
        public function show($id)

    {
            

        $restaurant = Restaurant::findOrFail($id);
 
        return view("restaurants.show",[
            'restaurant' => $restaurant,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
         // getでrestaurants/（任意のid）/editにアクセスされた場合の「更新画面表示処理」
    public function edit($id)
    {
        
                $restaurant = Restaurant::findOrFail($id);
 
        return view("restaurants.edit",[
           
            'restaurant' => $restaurant,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
         // putまたはpatchでrestaurants/（任意のid）にアクセスされた場合の「更新処理」
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
         // deleteでrestaurants/（任意のid）にアクセスされた場合の「削除処理」
    public function destroy($id)
    {
            
        // idの値で投稿を検索して取得
        $restaurant = \App\Restaurant::findOrFail($id);

        // 認証済みユーザ（閲覧者）がその投稿の所有者である場合は、投稿を削除
        if (\Auth::id() === $restaurant->user_id) {
            $restaurant->delete();
        }

        // 前のURLへリダイレクトさせる
        return back();
    
    }

}
