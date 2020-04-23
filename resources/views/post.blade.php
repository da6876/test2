@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="card">
        <div class="card-header">
            Create Student
        </div>
        <div class="card-body">
            <form action="{{route('store')}}" method="post" data-parsley-validate>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div class="form-group">
                    <label for="exampleFormControlInput1">Title</label>
                    <input type="text" name="title" class="form-control" maxlength="100" id="Enter Title"
                           placeholder="Enter Your Name" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Decp:</label>
                    <input type="text" name="decp" class="form-control" id="" placeholder="Decp Here"
                           required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">User ID</label>
                    <input type="number" name="user_id" class="form-control" id="exampleFormControlInput1"
                           placeholder="User ID" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Catagory ID</label>
                    <input type="number" name="catagory_id" class="form-control" id="exampleFormControlInput1"
                           placeholder="Catagory Id" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>
@endsection
