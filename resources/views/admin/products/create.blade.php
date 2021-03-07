@extends('layouts.dashboard')

@section('content')
    <div class="row">
  <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a Comics</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <button type="button" class="btn btn-light btn-ms"> 
        <a href="{{ route('admin.products.index') }}">Return Admin Panel</a> 
      </button>
      <form method="post" action="{{ route('admin.products.store') }}" class="needs-validation" enctype="multipart/form-data">
          @csrf
          <div class="form-group">    
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title" value="{{ old('title') }}"/>
          </div>
          @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <div class="row">
            <div class="form-group col-3">    
                <label for="volume" class="col-4col-form-label">Number Vol:</label>
                <input type="number" min="0" class="form-control" name="volume" value="{{ old('volume') }}"/>
            </div>
            @error('volume')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group col-4">
                <label for="categories">Categories: </label>
              <select class="form-control" name="category_id" id="categories">
                    <option value="null"> </option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->type}}</option>
                @endforeach
              </select>
            </div>
            @error('categories')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
  
            <div class="form-group col-5">
                <label for="series">Serie</label>
              <select class="form-control" name="serie_id" id="series">
                    <option value="null"> </option>
                @foreach ($series as $serie)
                    <option value="{{$serie->id}}">{{$serie->name}}</option>
                @endforeach
              </select>
            </div>
            @error('series')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="row">
            
            <div class="form-group col-3">    
                <label for="page_count">Number Pages:</label>
                <input type="number" min="0" class="form-control" name="page_count" value="{{ old('page_count') }}"/>
            </div>
            @error('page_count')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group col-4">
                <label for="rateds">Rated</label>
              <select class="form-control" name="rated_id" id="rateds">
                    <option value="null"> </option>
                @foreach ($rateds as $rated)
                    <option value="{{$rated->id}}">{{$rated->name}}</option>
                @endforeach
              </select>
            </div>
            @error('rateds')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group col-5">
                <label for="sizes">Trim Size</label>
              <select class="form-control" name="size_id" id="sizes">
                    <option value="null"> </option>
                @foreach ($sizes as $size)
                    <option value="{{$size->id}}">{{$size->size}}</option>
                @endforeach
              </select>
            </div>
            @error('sizes')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="row">

            <div class="form-group col-4">    
                <label for="price">U.S.Price:</label>
                <input type="number" min="1" step="0.01" class="form-control" name="price" value="{{ old('price') }}"/>
            </div>
            @error('price')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group col-6">    
                <label for="sale_date">Sale Date:</label>
                <input type="date" class="form-control" name="sale_date" value="{{ old('sale_date') }}"/>
            </div>
            @error('sale_date')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group col-2">
                <label for="available">Available:</label>
                <input type="checkbox" name="available" class="switch-input" value="1" {{ old('available') ? 'checked="checked"' : '' }}/>
            </div>
            @error('available')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="row">
              <div class="form-group col-6">
                  @if(count($talents) > 0)
                  <label for="talents">Writer</label>
                  <select class="form-control" name="talents[]" id="talents" multiple>
                    <option value="null" disabled> </option>
                    @foreach ($talents as $talent)
                        <option value="{{$talent->id}}">{{$talent->name}}</option>
                    @endforeach
                  </select>
                  @endif
                </div>
              @error('tags')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror

              <div class="form-group col-6">
                  @if(count($talents) > 0)
                  <label for="talents">Art</label>
                  <select class="form-control" name="talents[]" id="talents" multiple>
                    <option value="null" disabled> </option>
                    @foreach ($talents as $talent)
                        <option value="{{$talent->id}}">{{$talent->name}}</option>
                    @endforeach
                  </select>
                  @endif
                </div>
              @error('tags')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>


          <div class="form-group">
              <label for="description">Comic Description:</label>
              <textarea id="description" class="form-control " name="description" cols="50" rows="10">{{ old('description') }}</textarea>
          </div>
          @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          
          <div class="form-group">
            <label for="cover">Cover</label>
            <input type="file" class="form-control-file" name="cover" id="cover" placeholder="Add a cover image" aria-describedby="coverHelper">
            <small id="coverHelper" class="form-text text-muted">Add cover image for current post</small>
          </div>
          @error('cover')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <button type="submit" class="btn btn-outline-primary btn-block">Add Post</button>
      </form>
  </div>
</div>
@endsection