@extends('Layout.main')


@section('content')
    <div>
        Add Main Department
    </div>
    <div class="border-bottom border-primary col-lg-4"></div>
    <form action="{{ route('subdept.store') }}" method="POST">
        @csrf
        <div class="col-lg-4">
            <div class="form-group">
                <label class="m-0">Select Main Department</label>
                <select class="form-control select2" name="dept_id">
                    @forelse ($dept as $dd)
                        <option value="{{ $dd->id }}">{{ $dd->dept_name }}</option>
                    @empty
                        <option value="">No Departments Available</option>
                    @endforelse
                </select>
                @error('dept_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label class="m-0">Sub Department Name</label>
                <input type="text" class="form-control" placeholder="enter sub dept" name="sub_deptname">
            </div>
            @error('sub_deptname')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Add Sub Department</button>
            <a href="{{route('subdept.index')}}" class="btn btn-secondary">View Sub Department</a>
        </div>
    </form>
@endsection
