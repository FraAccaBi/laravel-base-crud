@extends('layouts.app')
@section('content')
<form action="{{route('comics.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Naruto" aria-describedby="titleHelper">
        <small id="titleHelper" class="text-muted">Type the comic name here</small>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label for="thumb">thumb</label>
        <input type="text" name="thumb" id="thumb" class="form-control" placeholder="https.." aria-describedby="thumbHelper">
        <small id="thumbHelper" class="text-muted">Type the URL here</small>
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="text" name="price" id="price" class="form-control" placeholder="€9.99" aria-describedby="priceHelper">
      <small id="priceHelper" class="text-muted">Type the price here</small>
    </div>
    <div class="mb-3">
      <label for="series" class="form-label">Series</label>
      <input type="text" name="series" id="series" class="form-control" placeholder="Golden" aria-describedby="seriesHelper">
      <small id="seriesHelper" class="text-muted">type the series name here</small>
    </div>
    <div class="mb-3">
      <label for="sale_date" class="form-label">Sale Date</label>
      <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="05-05-05" aria-describedby="saleDateHelper">
      <small id="saleDateHelper" class="text-muted">Type the sale date here</small>
    </div>
    <div class="mb-3">
      <label for="type" class="form-label">Type</label>
      <input type="text" name="type" id="type" class="form-control" placeholder="Paper" aria-describedby="typeHelper">
      <small id="typeHelper" class="text-muted">Type the type here</small>
    </div>

    <button type="submit" class="btn btn-primary">add game</button>
</form>

@endsection
