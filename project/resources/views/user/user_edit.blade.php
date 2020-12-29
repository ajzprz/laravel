@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-5 m-auto p-5 align-self-center bg-smooth  rounded">
            <h1 class="unselectable text-center">Edit</h1>
            <br>

            <form action="{{route('update', $data->id)}}" method="post">
                @csrf
                <div class="form  note ">
                    <input type="text" class="form-control mb-2" value="{{$data->title}}" name="title" required>
                    <input type="text" class="form-control mb-2 " value="{{$data->fname}}" name="fname" required>
                    <input type="text" class="form-control mb-2" value="{{$data->sname}}" name="sname" required>
                    <input type="text" class="form-control mb-2" value="{{$data->pages}}" name="pages/play_length" required>
                    <input type="text" class="form-control mb-2" value="{{$data->price}}" name="price" required>
                    <button type="submit" class="btn btn-primary text-light mb-2 float-right ">Update</button>

                </div>
            </form>
            <a class="note" href="{{route('deleteproduct', $data->id)}} ">
                <button type="button" class="btn btn-primary  mb-2 float-left text-light">Delete</button></a>
        </div>
    </div>
</div>
@endsection