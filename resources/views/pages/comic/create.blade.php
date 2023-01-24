@extends('layouts.app')
@section('Page-Title', 'Welcome')
@section('Main-Content')
<h1>Create Page Comic</h1>
<form action="{{route('comic.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="">Title</label>
        <input class="form-control" type="text" name="title">
    </div>
    <div class="mb-3">
        <label class="form-label" for="">Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label" for="">Thumb</label>
        <input class="form-control" type="text" name="thumb">
    </div>
    <div class="mb-3">
        <label class="form-label" for="">Price</label>
        <input class="form-control" type="number" name="price" step="0.01">
    </div>
    <div class="mb-3">
        <label class="form-label" for="">Series</label>
        <input class="form-control" type="text" name="series">
    </div>
    <div class="mb-3">
        <label class="form-label" for="">Sale Date</label>
        <input class="form-control" type="date" name="sale_date">
    </div>
    <div class="mb-3">
        <label class="form-label" for="">Type</label>
        <input class="form-control" type="text" name="type">
    </div>
    <button class="btn btn-primary" type="submit">Crea Comic</button>
</form>
@endsection