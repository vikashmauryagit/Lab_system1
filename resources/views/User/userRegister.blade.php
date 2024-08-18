@extends('Layout.main')


@section('content')
    <div class=" text-primary border-botton border-primary">
        <h3>User Register</h3>
    </div>
    <form action="{{route('userRegister')}}" method="POST">
        @csrf
        <div class="col-3">
            <label for="" class="m-0">Name<span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="enter name" name="name">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-3">
            <label for="" class="m-0">Email<span class="text-danger">*</span></label>
            <input type="email" class="form-control" placeholder="enter emai" name="email">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-3">
            <label for="" class="m-0">Username<span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="enter emai" name="username">
            @error('username')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-3">
            <label for="" class="m-0">Password<span class="text-danger">*</span></label>
            <input type="password" class="form-control" placeholder="enter emai" name="password">
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="">
            <button type="submit" class="btn btn-primary mt-2 ">Submit</button>
        </div>
    </form>
@endsection
