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
                    <form action="">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td class="col-lg-6">Select Sub Department <span class="text-danger">*</span></td>
                                <td class="col-lg-6">
                                    <select name="sub_dept_id" id="sub_dept" class="form-control">
                                        {{-- @forelse ($sub as $ss)
                                            <option value="{{ $ss->id }}" class="">
                                                {{ $ss->sub_department_name }}</option>
                                        @empty
                                            <option class="" value="">No Data Available!</option>
                                        @endforelse --}}
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
                                    <select name="" id="" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="col-lg-6">Test Name<span class="text-danger">*</span></td>
                                <td>
                                    <input type="text" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td class="col-lg-6">Short Name<span class="text-danger">*</span></td>
                                <td>
                                    <input type="text" name="shortName" id="">
                                </td>
                            </tr>
                            <tr>
                                <td class="col-lg-6">Technical Name<span class="text-danger">*</span></td>
                                <td>
                                    <input type="text" name="technicalName" id="">
                                </td>
                            </tr>
                            <tr>
                                <td class="col-lg-6">Test Price<span class="text-danger">*</span></td>
                                <td>
                                    <input type="text" name="testprice" id="">
                                </td>
                            </tr>
                        </table>
                        <div>
                            <a href="" class="btn btn-sm btn-primary">Add Test</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
