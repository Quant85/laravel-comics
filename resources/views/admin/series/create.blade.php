@extends('layouts.dashboard')

@section('content')
<div class="row container">
  <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a Serie</h1>
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
        <a href="{{ route('admin.series.index') }}">Return Series Panel</a> 
      </button>
      <form method="post" action="{{ route('admin.series.store') }}" class="needs-validation" enctype="multipart/form-data">
          @csrf
          
          <div class="row">
            <div class="form-group col-9">    
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}"/>
            </div>
            @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group col-3">    
                <label for="total_vol" class="col-4col-form-label">Vol Tot Serie:</label>
                <input type="number" min="0" class="form-control" name="total_vol" value="{{ old('total_vol') }}"/>
            </div>
            @error('total_vol')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
              <label for="description">Serie Description:</label>
              <textarea id="description" class="form-control " name="description" cols="50" rows="10">{{ old('description') }}</textarea>
          </div>
          @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          
          <div class="form-group">
            <label for="cover">Cover</label>
            <input type="file" class="form-control-file" name="cover" id="cover" placeholder="Add a cover image" aria-describedby="coverHelper">
            <small id="coverHelper" class="form-text text-muted">Add cover image for current serie</small>
          </div>
          @error('cover')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <button type="submit" class="btn btn-outline-primary btn-block">Add Serie</button>
      </form>
  </div>
</div>
@endsection