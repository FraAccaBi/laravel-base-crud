@extends('layouts.app')
@section('content')
<table class="table">
    <a href="{{route('comics.create')}}">Add</a>
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>description</th>
            <th>thumb</th>
            <th>price</th>
            <th>series</th>
            <th>sale_date</th>
            <th>type</th>

            <th>actions</th>
        </tr>
    </thead>
    <tbody>

    @foreach($comics as $comic)
        <tr>
            <td scope="row">{{$comic->id}}</td>
            <th>title</th>
            <td>{{$comic->title}}</td>
            <th>{{$comic->description}}</th>
            <td><img width="60px" height="60px" src="{{$comic->thumb}}" alt=""> </td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->sale_date}}</td>
            <td>{{$comic->type}}</td>

            <td>
                <a href="{{route('comics.show', $comic->id)}}"> View -</a>
                <a href="{{route('comics.edit', $comic->id)}}"> Edit -</a>
                <form action="{{route('comics.destroy',$comic->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-danger" type="submit" value="Delete">
                </form>
                {{-- <a href="{{route('comics.destroy', $comic->id)}}"> Delete</a> --}}
            </td>
        </tr>

        @endforeach
    </tbody>
</table>


@endsection
