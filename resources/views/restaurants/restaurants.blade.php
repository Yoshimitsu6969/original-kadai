
    <ul class="list-unstyled">
        @foreach ($restaurants as $restaurant)
            <li class="media mb-3">
                <div class="media-body">
                    <div>
               
                    </div>
                    <div>
          <p>{!! link_to_route("restaurants.edit",$restaurant->name,["restaurant"=>$restaurant->id])!!}</p>
          
          
              
          
          
          @include('user_favorite.favorite_button')
                         
                       
                    </div>
                </div>
            </li>
        @endforeach
        
    </ul>

