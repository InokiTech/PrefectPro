
@extends('layouts.signin_page')

@section('title') {{ "Register".' | '.get_settings('system_title') }} @endsection

@section('content')
    <!-- Modal Header  -->
    <div class="register-section container shadow" id="myModal">
        <!-- Modal header -->
        <div class="modal-header modal-head mt-3">
            <h4>Registration Form</h4>
        </div>

        <!-- Modal body -->
        <div class="row popup">
            <form method="POST" enctype="multipart/form-data" class="modal-body ajaxForm"
                action="{{ route('school.create') }}">
                @csrf
                <div class="register-left">
                    <h6>{{ get_phrase('SCHOOL INFO') }}</h6>
                    <div class="mb-1 mt-3">
                        <label for="school_name" class="form-label">{{ get_phrase('School Name') }}</label>
                        <input type="text" class="form-control" id="school_name" name="school_name" required />
                    </div>
                    <div class="mb-1 mt-2">
                        <label for="school_address" class="form-label">{{ get_phrase('School Address') }}</label>
                        <input type="text" class="form-control" id="school_address" name="school_address" required />
                    </div>
                    <div class="mb-1 mt-2">
                        <label for="school_email" class="form-label">{{ get_phrase('School Email') }}</label>
                        <input type="email" class="form-control" id="school_email" name="school_email" required />
                    </div>
                    <div class="mb-1 mt-2">
                        <label for="school_phone" class="form-label">{{ get_phrase('School Phone') }}</label>
                        <input type="text" class="form-control" id="school_phone" name="school_phone" required />
                    </div>
                    <div class="mt-3">
                        <label for="school_info" class="form-label">{{ get_phrase('School info') }}</label>
                        <textarea class="form-control school-info" style="min-height: 250px; height: 265px; max-height: 350px;" id="school_info"
                            name="school_info" required></textarea>
                    </div>

                </div>
                <div class="register-right">
                    <h6 class="admin-info">{{ get_phrase('ADMIN INFO') }}</h6>

                    <div class="mb-1 mt-3">
                        <label for="admin_name" class="form-label">{{ get_phrase('Admin Name') }}</label>
                        <input type="text" class="form-control" id="admin_name" name="admin_name" required />
                    </div>

                    <div class="input-group mb-1 mt-2 flex-column">
                        <label for="inputGroupSelect04" class="form-label mb-1 mt-1">{{ get_phrase('Gender') }}</label>
                        <select class="form-select w-auto" id="gender" name="gender" required>
                            <option selected>{{ get_phrase('Select a gender') }}</option>
                            <option value="Male">{{ get_phrase('Male') }}</option>
                            <option value="Female">{{ get_phrase('Female') }}</option>
                        </select>
                    </div>
                    <div class="input-group mb-1 mt-2 flex-column">
                        <label for="blood_group" class="form-label mb-1 mt-1">{{ get_phrase('Blood group') }}</label>
                        <select class="form-select w-auto" id="blood_group" name="blood_group" required>
                            <option value="">{{ get_phrase('Select a blood group') }}</option>
                            <option value="a+">{{ get_phrase('A+') }}</option>
                            <option value="a-">{{ get_phrase('A-') }}</option>
                            <option value="b+">{{ get_phrase('B+') }}</option>
                            <option value="b-">{{ get_phrase('B-') }}</option>
                            <option value="ab+">{{ get_phrase('AB+') }}</option>
                            <option value="ab-">{{ get_phrase('AB-') }}</option>
                            <option value="o+">{{ get_phrase('O+') }}</option>
                            <option value="o-">{{ get_phrase('O-') }}</option>
                        </select>
                    </div>
                    <div class="mb-1 mt-2">
                        <label for="admin_address" class="form-label">{{ get_phrase('Admin Address') }}</label>
                        <input type="text" class="form-control" id="admin_address" name="admin_address" required />
                    </div>
                    <div class="mb-1 mt-2">
                        <label for="admin_phone" class="form-label">{{ get_phrase('Admin Phone Number') }}</label>
                        <input type="text" class="form-control" id="admin_phone" name="admin_phone" required />
                    </div>
                    <div class="mb-1 mt-2">
                        <label for="photo" class="form-label">{{ get_phrase('Photo') }}</label>
                        <input class="form-control" type="file" accept="image/*" id="photo" name="photo" />
                    </div>
                    <div class="mb-1 mt-2">
                        <label for="admin_email" class="form-label">{{ get_phrase('Admin Email') }}</label>
                        <input id="admin_email" name="admin_email" type="email" class="form-control" required>
                    </div>
                    <div class="mb-1 mt-2">
                        <label for="admin_password" class="form-label">{{ get_phrase('Admin Password') }}</label>
                        <input type="password" id="admin_password" class="form-control mb-3" name="admin_password"
                            required />
                    </div>
                    <button type="submit" class="btn btn-primary mt-5 " style="float: right">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
