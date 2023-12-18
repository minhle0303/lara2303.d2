@extends('layout.master')
@section('title','create')
@section('main-section')
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
                <h3>Create New  </h3>
                <form action="{{url('/book/createSave')}}" method="post">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label for="name">name : </label>
                        <input type="text" class="form-control" placeholder="Enter Book name" id="name" name="name" value="NEW Book" required maxlength="50" required>
                    </div>
                    <div class="mb-3">
                        <label for="price">Price : </label>
                        <input type="text"
                        placeholder="Enter start price"
                        class="form-control"
                        id="price" name="price" value="123"
                        min="1" max="2000"
                        required pattern="\d+(\.\d+)?">
                    </div>
                    <div class="mb-3">
                        <label for="author">author : </label>
                        <input type="text"
                        placeholder="Enter author"
                        class="form-control"
                        id="author" name="author" value="Minh"
                     maxlength="30">
                    </div>
                    <hr>
                    <button type="submit"
                    class="btn btn-danger" name="submit">Submit</button>

                    <button type="reset"
                    class="btn btn-info">Reset</button>
                </form>

            </div>

        </div>



    </div>

</body>

</html>
@endsection
