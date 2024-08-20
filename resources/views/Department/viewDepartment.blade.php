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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dept as $dd)
                            <tr>
                                <td>{{ $dd->id }}</td>
                                <td>{{ $dd->dept_name }}</td>
                                <td>
                                    {{-- <button class="btn btn-primary p-2" data-toggle="modal" data-target="#exampleModal"
                                        deta-param_id="{{ $dd->id }}" deta-param-depart={{ $dd->dept_name }}><i
                                            class="fa-solid fa-pen-to-square"></i>
                                    </button> --}}
                                    <button class="btn btn-primary p-2" data-toggle="modal" data-target="#exampleModal"><i
                                            class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <a href="" class="btn btn-danger p-2"><i class="fa-solid fa-trash"></i> </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>DepartMent</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->
    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
    </button> --}}

@endsection


<script>
    $(document).ready(function() {
                $('#exampleModal').on('show.bs.modal', function(event) {
                        var button = $()
                    }

                })
</script>






<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
