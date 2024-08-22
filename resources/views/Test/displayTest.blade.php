@extends('Layout.main')
@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-6">
              
                    <div class="card">
                        <div class="card-header bg-primary text-center p-2">
                            <h1 class="text-light">Test Name:{{$data->test_name}}</h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 text-center">
                                {{-- <h3>{{$data->subDep->sub_deptname}}</h3> --}}
                                <p>Sub Department Name</p>
                            </div>
                            <div class="col-lg-6 text-center">
                                {{-- <h3>{{$data->center1->center_name}}</h3> --}}
                                <p>Center</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3>Rs.</h3>
                                </div>
                                <div>
                                    <a href="" class="btn btn-outline-primary">Back</a>
                                    <a href="" class="btn btn-outline-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
               
            </div>
        </div>
    </div>
@endsection
