@extends('Layout.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h3>New Test Entry</h3>
                        <div class="border-bottom border-primary col-lg-6"></div>
                    </div>
                    <form action="{{ route('test.store') }}" method="POST">
                        @csrf
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td class="col-lg-6">Select Center Department <span class="text-danger">*</span></td>
                                <td class="col-lg-6">
                                    <select name="center_id" id="cent_dept" class="form-control">
                                        @forelse ($center as $ss)
                                            <option value="{{ $ss->id }}">
                                                {{ $ss->center_name }}</option>
                                        @empty
                                            <option class="" value="">No Data Available!</option>
                                        @endforelse
                                    </select>
                                    {{-- @if ($errors->any())
                                        <span class="text-danger">
                                            @error('sub_dept_id')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    @endif --}}
                                </td>
                            </tr>
                            <tr>
                                <td class="col-lg-6">Select Sub Department <span class="text-danger">*</span></td>
                                <td class="col-lg-6">
                                    <select name="sub_dept_id" id="" class="form-control">
                                        @forelse ($sub as $sub1)
                                            <option value="{{ $sub1->id }}">{{ $sub1->sub_deptname }}</option>
                                        @empty
                                            <option value="">No Data Available</option>
                                        @endforelse
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="col-lg-6">Test Name<span class="text-danger">*</span></td>
                                <td>
                                    <input type="text" name="tname" id="" class="form-control">
                                    @error('tname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>

                            </tr>
                            <tr>
                                <td class="col-lg-6">Short Name<span class="text-danger">*</span></td>
                                <td>
                                    <input type="text" name="shortName" id="" class="form-control" autocomplete="tname">
                                    @error('shortName')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>

                            </tr>
                            <tr>
                                <td class="col-lg-6">Technical Name<span class="text-danger">*</span></td>
                                <td>
                                    <input type="text" name="technicalName" id="" class="form-control" autocomplete="tname">
                                    @error('technicalName')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>

                            </tr>
                            <tr>
                                <td class="col-lg-6">Test Price<span class="text-danger">*</span></td>
                                <td>
                                    <input type="text" name="testprice" id="" class="form-control">
                                    @error('testprice')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>

                            </tr>
                        </table>
                        <div>
                            <button type="submit" class="btn btn-primary m-2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
