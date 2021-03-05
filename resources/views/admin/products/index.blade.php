@extends('layouts.dashboard')

@section('content')
  <h1>Comics</h1>
    <div class="row container">
      <div class="col-sm-12">
        <h1 class="display-3">Admin Panel Comics</h1>  

        <div>
          <a style="margin: 19px;" href="{{ route('admin.products.create')}}" class="btn btn-primary">New post</a>
        </div>
        
        @foreach($products as $product)
        <table class="table table-striped">
          <thead>
              <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Volume</td>
                <td>Category</td>
                <td>Series</td>
                <td>Rated</td>
                <td>U.S. Price</td>
                <td>On Sale Date</td>
                <td>Cover</td>
                <td>Trim Size</td>
                <td>Descriptio</td>
                <td>Page Count</td>
                <td>Available</td>
                <td colspan = 2>Talent</td>
                {{-- Many to Many talent_redit --}}
                    {{-- @if (count($product->talents) > 0 )
                      @foreach ($product->talents as $talent)
                      @if ($talent->credits)
                          @foreach ($talent->credits as $credit)
                          <td class="talent"> {{$credit->type}} </td>        
                          @endforeach
                      @endif                     
                      @endforeach
                      @else
                        N/a
                    @endif --}}
                <td colspan = 2>Actions</td>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>{{$product->id}}</td>
                  <td>{{$product->title}}</td>
                  <td>{{$product->volume}}</td>
                  <td>{{optional($product->category)->type}}</td>
                  <td>{{optional($product->serie)->name}}</td>
                  <td>{{optional($product->rated)->name}}</td>
                  <td>{{$product->price}}</td>
                  <td>{{$product->sale_date}}</td>
                  <td>
                    @if ($product->cover)
                    <img src="{{asset( 'storage/'.$product->cover)}}" alt="img cover" style="width: 120px">                        
                    @else
                    <img src="{{asset( 'img/default/DC_placeholder_comic-active_573b3c29745fb7.57372980.jpg')}}" alt="img cover" style="width: 120px">                        
                    @endif
                  </td>
                  <td>{{optional($product->size)->size}}</td>
                  <td>{{$product->description}}</td>
                  <td>{{$product->page_count}}</td>
                  <td>{{$product->available ? 'Available' :'Not Available'}}</td>

                  <td class="talents_art">
                    {{-- Many to Many talent_redit --}}
                    @if (count($product->talents) > 0 )
                      @foreach ($product->talents as $talent)
                        @foreach ($talent->credits as $credit)
                          @if ($credit->type == 'Art')
                          <span class="talent"> {{$credit->type}} </span>                      
                          <span class="talent"> {{$talent->name}} </span>                    
                          @endif
                        @endforeach
                      @endforeach
                      @else
                        N/a
                    @endif
                  </td>
                  <td class="talents_art">
                    {{-- Many to Many talent_redit --}}
                    @if (count($product->talents) > 0 )
                      @foreach ($product->talents as $talent)
                        @foreach ($talent->credits as $credit)
                          @if ($credit->type == 'Writer')
                          <span class="talent"> {{$credit->type}} </span>                      
                          <span class="talent"> {{$talent->name}} </span>                  
                          @endif
                        @endforeach
                      @endforeach
                      @else
                        N/a
                    @endif
                  </td>
                  <td>
                    <a href="{{route('admin.products.show', ['product' => $product->slug])}}" class="btn btn-primary"><i class="fas fa-eye fa-xs fa-fw"></i></a>
                    <a href="{{route('admin.products.edit', ['product' => $product->slug])}}" class="btn btn-warning"><i class="fas fa-pencil-ruler fa-xs fa-fw"></i></a>

                    {{-- Botton trigger Modal --}}
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#destroy-{{ $product->id }}"><i class="fas fa-trash fa-xs fa-fw"></i></button>
                  </td>

                  {{-- Start Add Modal -  --}}
                  <div class="modal fade" id="destroy-{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="product-destroy-{{ $product->id }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="#destroy-{{ $product->id }} title">Delete Product</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          🚨 Sei sicuro di volerlo cancellare? 🚨 <br> 🚨 E se poi te ne penti?! 🚨
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <form action="{{ route('admin.products.destroy',['product' => $product->slug])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash fa-xs fa-fw"></i></button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                  {{-- End Add Model --}}
                </tr>
            </tbody>
          </table>
          @endforeach
      <div>
    </div>
    <div class="col-sm-12">

      @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}  
        </div>
      @endif
    </div>
@endsection