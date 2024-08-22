@extends('Layout.main')

@section('content')
    @session('status')
        <div class="alert alert-primary mt-1" role="alert">
            {{ session('status') }}
        </div>
    @endsession
    <div>
        Create Center Reference
        <div class="col-4 border-bottom border-primary"></div>
    </div>
    <div class="row">
        <div class="col-6">
            <form action="{{route('addcenter') }}"method="POST">
                @csrf
                <div class="col-8">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="m-0">Center Full Name<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name"
                            name="center_name">
                        @error('center_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-8">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="m-0">Center Short Name<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="email"
                            name="short_name">
                        @error('short_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-8">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="m-0">Center Mobile Number<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="mobile"
                            name="mobile">
                        @error('mobile')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-8">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="m-0">Center Mobile No.2 (Optional)<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="optional number"
                            name="optional">
                        @error('optional')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-8">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Address<span class="text-danger">*</span></label>
                            <textarea class="form-control m-0" rows="3" placeholder="address" name="address"></textarea>
                        </div>
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-5 me-5">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Center Name</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($center as $doc)
                        <tr>
                            <th scope="row">{{$doc->id}}</th>
                            <td>{{$doc->center_name}}</td>
                            <td>{{$doc->mobile}}</td>
                            <td>{{$doc->address}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
