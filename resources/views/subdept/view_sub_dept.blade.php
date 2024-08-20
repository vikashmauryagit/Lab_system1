@extends('Layout.main')


@section('content')
    <div class="container">
        @session('status')
            <div class="alert alert-primary mt-1" role="alert">
                {{ session('status') }}
            </div>
        @endsession
    </div>
    <div class="pt-3">
        <div class="card ">
            <div class="d-flex justify-content-between mt-2 mx-2">
                <div>
                    <h3 class="card-title">Search Department and Update</h3>
                </div>
                <div>
                    <a href="{{ route('department.create') }}" class="btn btn-primary fw-bold"><i class="fa-solid fa-plus"></i>
                        Add Main Department</a>
                    <a href="{{ route('subdept.create') }}" class="btn btn-secondary fw-bold"><i
                            class="fa-solid fa-plus"></i> Add Sub
                        Department</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Department</th>
                            <th>SubDepartment</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->dept->dept_name}}</td>
                                <td>{{$item->sub_deptname}}</td>
                                <td>Action</td>
                            </tr>
                        @endforeach
                        {{-- @foreach ($dept as $dd)
                            <tr>
                                <td>{{ $dd->id }}</td>
                                <td>{{ $dd->dept_name }}</td>
                                <td>
                                    <a href="" class="btn btn-primary p-2"><i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="" class="btn btn-danger p-2"><i class="fa-solid fa-trash"></i> </a>
                                </td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>DepartMent</th>
                            <th>SubDepartMent</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
@endsection
