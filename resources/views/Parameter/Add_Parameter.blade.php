@extends('Layout.main')


@section('content')
    <div class="pt-3">
        <div class="card ">
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Test_ID</th>
                            <th>Test Name</th>
                            <th>Test Price</th>
                            <th>Test Parameter</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Test_ID</td>
                            <td>Test Name</td>
                            <td>Test Price</td>
                            <td>Test Parameter</td>
                            <td>
                                <a href="" class="btn btn-primary p-1" data-toggle="modal"
                                    data-target="#exampleModal">Add Test Parameter</a>
                            </td>
                        </tr>

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


<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button> --}}

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Help Value</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('parameter.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="">Test Name<span class="text-danger">*</span></label>
                            <input type="text" name="test_id" id="" class="form-control"
                                value="{{ $para->id }}" disabled>
                        </div>
                        <div class="col-lg-4">
                            <label for="">Parameter Name<span class="text-danger">*</span></label>
                            <input type="text" name="paraName" id="" class="form-control">
                            @error('paraName')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-4">
                            <label for="">Unit<span class="text-danger">*</span></label>
                            <input type="text" name="paraunit" id="" class="form-control">
                            @error('paraunit')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-4">
                            <label for="">Decimal<span class="text-danger">*</span></label>
                            <input type="text" name="decimal" id="" class="form-control">
                            @error('decimal')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-8">
                            <label for="">Help Values:<span class="text-danger">*</span></label>
                            <input type="text" name="helpvalue" id="" class="form-control">
                            @error('helpvalue')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-4">
                            <label for="">Normal Range:<span class="text-danger">*</span></label>
                            <input type="text" name="normalrange" id="" class="form-control">
                            @error('normalrange')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-4">
                            <label for="">Min:<span class="text-danger">*</span></label>
                            <input type="text" name="min" id="" class="form-control">
                            @error('min')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-4">
                            <label for="">Max:<span class="text-danger">*</span></label>
                            <input type="text" name="max" id="" class="form-control">
                            @error('max')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-12">
                            <label for="">Test Footer:<span class="text-danger">*</span></label>
                            <input type="text" name="footer" id="" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
