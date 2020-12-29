@extends('layouts.app')

@section('content')
<div class="container note">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text">
                <div class="card-header">Hey, <b>{{ Auth::user()->name }}</b> User</div>

                <div class="card-body">
                    You can add, delete and edit products!!!
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container count  ">
    <div class="row ">

        <div class="col-4 border rounded bg-smooth p-2 text-center " >

            Total number of Books: {{$countbook}}

        </div>
        <div class="col-4">

        </div>
        <div class="col-4 border rounded bg-smooth p-2 text-center">
            Total number of CDs: {{$countcd}}

        </div>

    </div>
</div>



<div class="container hold ">
    <div class="row">
        <div class="books col-3 mx-2  rounded bg-smooth shadow-lg  ">
            <h1 class="unselectable text-center">Books</h1>
            @foreach ($books as $book)
            <div class="card my-4 shadow-lg  ">
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


        <div class="create col-5 mx-2 p-3  rounded bg-smooth  shadow-lg max-height  ">
            <h1 class="unselectable text-center">Create</h1>

            <form action="{{route('addproduct')}}" method='post'>
                @csrf
                <label for="producttype">Product Type:</label>
                <select id="id" name="producttype">
                    <option value="book">Book</option>
                    <option value="cd">CD</option>

                </select>
                <div class="form ">
                    <input type="text" class="form-control mb-2" placeholder="Title" name="title" required>
                    <input type="text" class="form-control mb-2 " placeholder="FName" name="fname" required>
                    <input type="text" class="form-control mb-2" placeholder="SName" name="sname" required>
                    <input type="text" class="form-control mb-2" placeholder="Pages/Play Length"
                        name="pages/play_length" required>
                    <input type="text" class="form-control mb-2" placeholder="Price" name="price" required>
                    <button type="submit" class="btn btn-primary  mb-2 float-right text-light">Submit</button>
                </div>
            </form>
        </div>

        <div class="cds col-3 mx-2 bg-smooth rounded shadow-lg">
            <h1 class="unselectable text-center">Cds</h1>


            @foreach ($cds as $cd)
            <div class="card my-4 shadow-lg">
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
</div>

@endsection