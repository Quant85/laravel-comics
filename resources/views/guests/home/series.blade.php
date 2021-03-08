<section class="series container-fluid">
  <div class="container">
    <h2 class="series-title">Current Series</h2>
    <!-- /.series-title -->
    <div class="last-series">
      @foreach ($series as $serie)
      @if ($serie->created_at > '2021-03-07')
        <div class="serie-card">
          @if ($serie->cover)
            <img src="{{asset( 'storage/'.$serie->cover)}}" alt="cover {{$serie->name}}">
            
          @else
            <img src="{{asset( 'img/default/DC_placeholder_series_573b3c5dac0485-40480935.jpg')}}" alt="img cover out serie {{$serie->name}}">
          @endif
          <h3 class="serie-title">{{$serie->name}}</h3>
        </div>
      @endif
      @endforeach
      <!-- /.serie-card -->
    </div>
  </div>
  <!-- /.container -->
</section>
<!-- /.series container-fluid -->