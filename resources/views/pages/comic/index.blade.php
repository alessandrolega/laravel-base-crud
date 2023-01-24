@extends('layouts.app')
@section('Page-Title', 'Welcome')
@section('library')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css' integrity='sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==' crossorigin='anonymous'/>
  
@endsection


@section('Main-Content')
<h1>Index Page Comic</h1>
<div>
  <a class="btn btn-success" href="{{route('comic.create')}}">Create Comic</a>
</div>

<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#id</th>
            <th scope="col">Title</th>
            {{-- <th scope="col">Description</th> --}}
            <th scope="col">Thumb</th>
            <th scope="col">Price</th>
            <th scope="col">Series</th>
            <th scope="col">Sale Date</th>
            <th scope="col">Type</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $elem)
             <tr>
                <td>{{$elem->id}}</td>
                <td>{{$elem->title}}</td>
                {{-- <td>{{$elem->description}}</td> --}}
                <td>
                    <img src="{{$elem->thumb}}"
                        alt="{{$elem->title}}"
                        width="50px">  
                </td>
                <td>{{$elem->price}}</td>
                <td>{{$elem->series}}</td>
                <td>{{$elem->sale_date}}</td>
                <td>{{$elem->type}}</td>
                <td>
                  <a href="{{route('comic.show', $elem->id)}}">
                    <i class="fa-solid fa-eye"></i>
                  </a>
                </td>
                <td>
                  <form action="{{ route('comic.destroy', $elem->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </form>
                </td>
                <td>
                  <a href="{{ route('comic.edit', $elem->id) }}">
                    <button class="btn btn-primary">
                        <i class="fa-solid fa-pen"></i>
                    </button>
                </a>
                </td>
          </tr>   
            @endforeach
          
        </tbody>
      </table>

      {{$comics->links()}}
</div>
@endsection