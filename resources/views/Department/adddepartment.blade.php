@extends('Layout.main')


@section('content')
    <div>
        <h2>Add Main Department</h2>
    </div>
    <div class="border-bottom border-primary col-md-5"></div>
    <form action="{{ route('department.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-4">
                <label for="">Add Main Department</label>
                <input type="text" class="form-control" placeholder="add department" name="add_dept">
                @error('add_dept')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
        </div>
        <div class="mt-2">
            <button type="submit" class="btn btn-primary">Add Main Department</button>
            <a href="{{route('department.index')}}" class="btn btn-danger">View Main DepartMent<a>
        </div>
    </form>
@endsection
