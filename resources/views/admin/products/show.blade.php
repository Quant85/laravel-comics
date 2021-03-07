@extends('layouts.dashboard')

@section('content')
  <div class="container comics-show">
    <div class="info-comics">
      <h1 class="comics-title-vol">{{$product->title}} #{{$product->volume}}</h1>
      <!-- /.comics-title-vol -->
      <div class="buy-section">
        <span class="price-box">U.S. Price: <span class="bold">${{$product->price}}</span></span>
        <div class="buy-box">
          @if ($product->price)
              <span class="available">AVAILABLE</span>
              <span class="buy">Buy Now <i class="fas fa-caret-down"></i></span>
          @else
              <span class="available">AVAILABLE SOON</span>
                <span class="buy not">Buy now <i class="fas fa-caret-down"></i></span>
          @endif
        </div>
        <!-- /.buy-box -->
      </div>
      <!-- /.buy-section -->
      <div class="description-comics">
        <p class="description">{!!$product->description!!}</p>
      </div>
      <!-- /.description-comics -->
    </div>
    <!-- /.info-comics -->
  </div>
  <!-- /.container -->
  <div class="comics-details container-fluid">
    <div class="container">
      <section class="talent">
        <h2 class="section-title">
          talent
        </h2>
        <ul>
          <li>
            <span class="span-left">Art by: </span>
            @if (count($product->talents) > 0 )
              @foreach ($product->talents as $key => $talent)
                @foreach ($talent->credits as $credit)
                  @if ($credit->type == 'Art')                     
                  <span class="talent span-rigth">{{$key>0 ? ',' :' '}} <a href="">{{$talent->name}}</a></span>                    
                  @endif
                @endforeach
              @endforeach
              @else
                N/a
              @endif
          </li>
          <li>
            <span class="span-left">Writer by: </span>
            @if (count($product->talents) > 0 )
              @foreach ($product->talents as $key => $talent)
                @foreach ($talent->credits as $credit)
                  @if ($credit->type == 'Writer')                     
                  <span class="talent span-rigth">{{$key>0 ? ',' :' '}} <a href="">{{$talent->name}}</a></span>                    
                  @endif
                @endforeach
              @endforeach
              @else
                N/a
              @endif
          </li>
        </ul>

      </section>
      <section class="specs">
        <h2 class="section-title">
          specs
        </h2>
        <ul>
          <li>
            <span class="span-left">Series: </span><span class="span-right"><a href="">{{optional($product->serie)->name}}</a></span>
          </li>
          <li>
            <span class="span-left">U.S. Price: </span><samp class="span-right">{{$product->price}}</samp>
          </li>
          <li>
            <span class="span-left">On Sale Date: </span><samp class="span-right">{{\Carbon\Carbon::parse($product->sale_date)->format('l m Y')}}</samp>
          </li>
          <li>
            <span class="span-left">Volume/Issue #:  </span><samp class="span-right">{{$product->volume}}</samp>
          </li>
          <li>
            <span class="span-left">Trim Size: </span><samp class="span-right">{{optional($product->size)->size}}</samp>
          </li>
          <li>
            <span class="span-left">Page Count: </span><samp class="span-right">{{$product->page_count}}</samp>
          </li>
          <li>
            <span class="span-left">Rated: </span><samp class="span-right">{{optional($product->rated)->name}}</samp>
          </li>
        </ul>
        
      </section>
    </div>
  </div>
  <!-- /.comics-details -->
@endsection