<header class="header-show">
  <div class="cover-preview container-fluid">
    @if ($comic->cover)                   
          {{-- <img class="larger-cover" src="{{asset( 'storage/'.$comic->gallery)}}"  alt="cover {{$comic->title}}"> --}}
          <img class="larger-cover" src="{{asset( 'img/gallery/Gallery_20210302_SWW-09_CoversCredits_60356be44ec476.55782690.jpg')}}"  alt="cover {{$comic->title}}"> 
        @else 
          <img class="larger-cover" src="{{asset( 'img/default/DC_placeholder_comic-active_573b3c29745fb7.57372980.jpg')}}" alt="img cover"> 
        @endif
    <div class="short-preview container">
      <a class="box-img" href="gallery" >
        @if ($comic->cover) 
          <samp class="tag-book">comic book</samp>                    
          <img  class="short-cover-preview" src="{{asset( 'storage/'.$comic->cover)}}"  alt="cover {{$comic->title}}"> 
        @else 
          <samp class="tag-book">comic book</samp>
          <img class="short-cover-preview" src="{{asset( 'img/default/DC_placeholder_comic-active_573b3c29745fb7.57372980.jpg')}}" alt="img cover"> 
        @endif
      </a>
    </div>
    <hr class="blue-break">
    <!-- /.short-preview container -->
  </div>
  <!-- /.cover-preview container-fluid -->
</header>
<!-- /.header-show -->