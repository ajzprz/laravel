{{-- @extends('layouts.app')

@section('content')



    

<div class="books col mx-2  rounded bg-smooth shadow-lg max-height ">
    <h1 class="unselectable">Books</h1>
    @foreach ($books as $book)
    <div class="card my-4 shadow-sm  ">
        <ul class="p-2">
            <li class="font-weight-bold">{{$book->title}}</li>
            <li>{{$book->fname}} </li>
            <li class="dim">{{$book->sname}}</li>
            <li class="dimmer">${{$book->price}}</li>
            <li class="dimmest">Number of Pages: {{$book->pages}}</li>
            <div class="select float-right">
                <li> <a href="{{route('edit', $book -> id) }}"><button type="button"
                            class="btn btn-primary">Select</button> </a></li>
            </div>
    </div>
    </ul>
    @endforeach

</div>


<div class="create col mx-2  rounded bg-smooth  shadow-lg max-height  ">
    <h1 class="unselectable">Create</h1>

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
            <input type="text" class="form-control mb-2" placeholder="Pages/Play Length" name="pages/play_length"
                required>
            <input type="text" class="form-control mb-2" placeholder="Price" name="price" required>
            <button type="submit" class="btn btn-primary  mb-2 float-right text-light">Submit</button>
        </div>
    </form>
</div>

<div class="cds col mx-2 bg-smooth rounded shadow-lg max-height">
    <h1 class="unselectable">Cds</h1>


    @foreach ($cds as $cd)
    <div class="card my-4 shadow-sm">
        <ul class="p-2">

            <li class="font-weight-bold">{{$cd->title}}</li>
            <li>{{$cd->fname}} </li>
            <li class="dim">{{$cd->sname}}</li>
            <li class="dimmer">${{$cd->price}}</li>
            <li class="dimmest">Play Length: {{$cd->play_length}}</li>
            <div class="select float-right">
                <li> <a href="{{route('edit', $cd -> id) }}"><button type="button"
                            class="btn btn-primary">Select</button> </a></li>
            </div>
    </div>
    </ul>
    @endforeach

</div>




@endsection --}}