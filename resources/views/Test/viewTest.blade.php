@extends('Layout.main')


@section('content')
    <div class="container">
        @session('status')
            <div class="alert alert-primary mt-1" role="alert">
                {{ session('status') }}
            </div>
        @endsession
    </div>
    <div class="container">
        @session('status1')
            <div class="alert alert-danger mt-1" role="alert">
                {{ session('status1') }}
            </div>
        @endsession
    </div>
    <div class="pt-3">
        <div class="card ">
            <div class="d-flex justify-content-between mt-2 mx-2">
                <div>
                    <h3 class="card-title">Search Test and Update</h3>
                </div>
                <div>
                    <a href="{{ route('test.create') }}" class="btn btn-primary fw-bold"><i class="fa-solid fa-plus"></i>
                        Add Test</a>
                    <a href="" class="btn btn-secondary fw-bold"><i class="fa-solid fa-plus"></i> Add Parameter</a>
                    <a href="" class="btn btn-warning fw-bold"><i class="fa-solid fa-plus"></i> Edit Parameter</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Test_ID</th>
                            <th>Test Name</th>
                            <th>Test Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($test as $test1)
                            <tr>
                                <td>{{ $test1->id }}</td>
                                <td>{{ $test1->test_name }}</td>
                                <td>{{ $test1->test_price }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('test.show', $test1->id) }}" class="btn btn-primary p-1">View</a>
                                        <form action="{{ route('test.destroy', $test1->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger p-1">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Test_ID</th>
                            <th>Test Name</th>
                            <th>Test Price</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
@endsection
