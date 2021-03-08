@extends('layouts.dashboard')

@section('content')
<h1>Comics</h1>
    <div class="row container">
        <div class="col-sm-12">
            <h1 class="display-3">Admin Panel Series</h1>  
            <div>
                <a style="margin: 19px;" href="{{ route('admin.series.create')}}" class="btn btn-primary">New Serie</a>
            </div>
        
        @foreach($series as $serie)
            <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Cover Preview</td>
                    <td>Cover URL</td>
                    <td>Description</td>
                    <td>Vol Tot</td>
                    <td>Slug</td>
                    <td>Created At</td>
                    <td>Update At</td>
                    <td colspan = 2>Actions</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$serie->id}}</td>
                    <td>{{$serie->name}}</td>
                    <td>
                        @if ($serie->cover)
                        <img src="{{asset( 'storage/'.$serie->cover)}}" alt="img cover" style="width: 120px">         
                        @else
                        <img src="{{asset( 'img/default/DC_placeholder_series_573b3c5dac0485-40480935.jpg')}}" alt="img cover" style="width: 120px">       
                        @endif
                    </td>
                    <td>
                        <h6 style="
                        font-size: 16px;
                        height: 60px;
                        width: 320px;
                        overflow: auto;">
                            {{$serie->cover}}
                        </h6>
                    </td>
                    <td>
                        <p style="
                        font-size: 12px;
                        height: 200px;
                        width: 320px;
                        overflow: auto;">
                            {{$serie->description}}
                        </p>
                    </td>
                    <td>{{$serie->total_vol}}</td>
                    <td>{{$serie->slug}}</td>
                    <td>{{$serie->created_at}}</td>
                    <td>{{$serie->updated_at}}</td>
{{-- controller --}}
                    <td>
                        <a href="{{route('admin.series.show', ['series' => $serie->slug])}}" class="btn btn-primary"><i class="fas fa-eye fa-xs fa-fw"></i></a>
                        <a href="{{route('admin.series.edit', ['series' => $serie->slug])}}" class="btn btn-warning"><i class="fas fa-pencil-ruler fa-xs fa-fw"></i></a>

                        {{-- Botton trigger Modal --}}
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#destroy-{{ $serie->id }}"><i class="fas fa-trash fa-xs fa-fw"></i></button>
                    </td>

                    {{-- Start Add Modal -  --}}
                    <div class="modal fade" id="destroy-{{ $serie->id }}" tabindex="-1" role="dialog" aria-labelledby="serie-destroy-{{ $serie->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="#destroy-{{ $serie->id }} title">Delete Serie</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            🚨 Sei sicuro di volerla cancellare? 🚨 <br> 🚨 E se poi te ne penti?! 🚨
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            {{-- <form action="{{ route('admin.series.destroy',['serie' => $serie->slug])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash fa-xs fa-fw"></i></button>
                            </form> --}}
                            </div>
                        </div>
                        </div>
                    </div>

                    {{-- End Add Model --}}
                    </tr>
                </tbody>
            </table>
        @endforeach
    </div>
    <div class="col-sm-12">
        @if(session()->get('success'))
            <div class="alert alert-success">
            {{ session()->get('success') }}  
            </div>
        @endif
    </div>
@endsection