@extends('layout.master')
@section('title','Books')
@section('main-section')
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .head {
            background-color: #2ecc71;
            padding: 10px;
        }

        .head:hover {
            background-color: #007bff;

        }

        span {
            color: green;

        }

        form {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            margin-left: 30px;
        }

        .form-row {
            margin-bottom: 10px;
        }

        table,
        th,
        td {
            border: 1px solid;
            padding: 5px 20px 5px 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 30%;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        button[type="submit"] {

            width: 10%;
            padding: 5px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>


<body>
    <form>
        <h1> View Book</h1>

        {{-- vao trang trong tap tin book --}}
        <span class="head"><a href="{{url('/book/create')}}">Create new</a></span>
        <form class="form-row" method="get" action="{{url('/book/getPrice')}}">
            <label for="priceFrom">Price <span>From $</span>
                <input type="text" pattern="\d+(\.\d+)?" id="priceFrom" value="10" name="p1" min=0 >
                <span>to $</span>
                <input type="text" pattern="\d+(\.\d+)?" id="priceTo" value="20" name="p2" >
                <button type="submit" value="Search" name="search">Search</button>
            </label>
        </form>

        <div>
            <span>
                @if(Session::has('message'))
                <p>
                    {{ Session::get('message') }}</p>

@endif
            </span>
        </div>
        <hr>
        <table class="table table-hover table-striped">
            <thead>

                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Price</th>
                    <th>Author </th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                {{-- $book tu BookController.php --}}
               @foreach($books as $item)
                <tr>
                    <td>{{$item->code}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->author}}</td>
                    <td><a href="{{url("/book/delete/$item->code")}}" onclick="return yesno()"> Remove</a>
                        <a href="{{url("/book/update/$item->code")}}"> Update</a></td>

                    </tr>
                    @endforeach

            </tbody>

        </table>

    </form>
</body>
<script>
        function yesno(){
            return confirm("are u sure ?")
        }
    </script>

</html>
@endsection
