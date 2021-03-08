<div id="coverCarousel" class="carousel-slide">
    @foreach($comics as $key => $comic)
      <div class="carousel-cover {{$key < 5 ? 'active' : '' }}">
          <div class="comics-card col-md-12">
            <a href="{{route('comics.show', ['comic' => $comic->slug])}}">
              @if ($comic->cover) 
                <samp class="tag-book">comic book</samp>                    
                <img src="{{asset( 'storage/'.$comic->cover)}}"  alt="cover {{$comic->title}}"> 
              @else
                <img src="{{asset( 'img/default/DC_placeholder_comic-active_573b3c29745fb7.57372980.jpg')}}" alt="img cover"> 
              @endif
            </a>
            <h3 class="comics-title"><a href="{{route('comics.show', ['comic' => $comic->slug])}}">{{$comic->title}} #{{$comic->volume}}</a></h3>
            @if ($comic->available)
            <h3 class="available-comic">Available Now</h3>
            @else
            <h3 class="available-comic">Available Soon</h3>
            @endif
          </div>
      </div>
    @endforeach
</div>