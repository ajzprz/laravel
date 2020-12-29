@extends('layouts.app')

@section('content')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card note">
                <div class="card-header">Hey, <b> Guest  </b> User </div>

                <div class="card-body">
                    You can only view Books and Cds!!!
                    <br>
                    Only Admin and users can add, delete or edit the products!!!
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container hold mt-4 ">
    <div class="row">
        <div class="col-4 mx-auto  rounded bg-smooth shadow-lg max-height ">
            <h1 class="unselectable text-center">Books</h1>
            @foreach ($books as $book)
            <div class="card my-4 shadow-sm  ">
                <ul class="p-2">
                    <li class="font-weight-bold">{{$book->title}}</li>
                    <li>{{$book->fname}} </li>
                    <li class="dim">{{$book->sname}}</li>
                    <li class="dimmer">${{$book->price}}</li>
                    <li class="dimmest">Number of Pages: {{$book->pages}}</li>
                    <div class="select float-right">
                        <li> <a href="{{route('admin_editbook', $book -> id) }}"><button type="button"
                                    class="btn btn-primary">Select</button> </a></li>
                    </div>
            </div>
            </ul>
            @endforeach

        </div>



        <div class="col-4 mx-auto bg-smooth rounded shadow-lg max-height">
            <h1 class="unselectable text-center">Cds</h1>


            @foreach ($cds as $cd)
            <div class="card my-4 shadow-sm">
                <ul class="p-2">

                    <li class="font-weight-bold">{{$cd->title}}</li>
                    <li>{{$cd->fname}} </li>
                    <li class="dim">{{$cd->sname}}</li>
                    <li class="dimmer">${{$cd->price}}</li>
                    <li class="dimmest">Play Length: {{$cd->play_length}}</li>
                    <div class="select float-right">
                        <li> <a href="{{route('admin_editcd', $cd -> id) }}"><button type="button"
                                    class="btn btn-primary">Select</button> </a></li>
                    </div>
            </div>
            </ul>
            @endforeach

        </div>
    </div>



    @endsection