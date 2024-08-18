@extends('Layout.main')

@section('content')
    <div class="border-bottom border-primary px-3">
        <h2 class="text-center text-primary">Patient Register</h2>
    </div>
    <form action="{{ route('patient.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-2">
                <label for="" class="m-0">Patient's Id</label>
                <input type="text" class="form-control" disabled value="{{ $data }}">
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label class="m-0">Patient's Id</label>
                    <select class="form-control select2" name="patient_id">
                        <option value="aadhar">Aadhar</option>
                        <option value="pen">Pen card</option>
                    </select>
                    @error('patinet_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-7">
                <label for="" class="m-0">Enter Card no.</label>
                <input type="text" class="form-control" placeholder="123456 *******" name="pen_card">
                @error('pen_card')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-1">
                <div class="form-group">
                    <label class="m-0">Title<span class="text-danger">*</span></label>
                    <select class="form-control select2" name="title">
                        <option value="mr">Mr</option>
                        <option value="ms">Ms</option>
                    </select>
                </div>
            </div>
            <div class="col-4">
                <label for="" class="m-0">Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="first name" name="fname">
                @error('fname')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-4">
                <label for="" class="m-0">Middle Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="middle Name" name="mname">
                @error('mname')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-3">
                <label for="" class="m-0">Last Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Last Name" name="lname">
                @error('lname')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-3">
                <label for="" class="m-0">D.O.B<span class="text-danger">*</span></label>
                <input type="date" class="form-control" placeholder="Last Name" name="dob">
                @error('dob')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-3">
                <label for="" class="m-0">Age<span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="enter age" name="age">
                @error('age')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label class="m-0">Sex<span class="text-danger">*</span></label>
                    <select class="form-control select2" name="sex">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>
            <div class="col-3">
                <label for="" class="m-0">Mobile<span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Enter mobile" name="mobile">
                @error('mobile')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-3">
                <label for="" class="m-0">Alternative Number<span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Enter mobile" name="alternative">
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label class="m-0">Blood group<span class="text-danger">*</span></label>
                    <select class="form-control select2" name="blood_group">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div>
            </div>
            <div class="col-3">
                <label for="" class="m-0">Email<span class="text-danger">*</span></label>
                <input type="email" class="form-control" placeholder="Enter email" name="email">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-3">
                <label for="" class="m-0">Area<span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Area" name="area">
                @error('area')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-sm-12">
                <!-- textarea -->
                <div class="form-group">
                    <label>Address<span class="text-danger">*</span></label>
                    <textarea class="form-control m-0" rows="3" placeholder="Enter ..." name="address"></textarea>
                </div>
                @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="ms-5 ">
            <button type="submit" class="btn btn-sm btn-primary p-2 m-1">Submit</button>
            <button type="submit" class="btn btn-outline-danger">Reset</button>
        </div>
    </form>
@endsection
