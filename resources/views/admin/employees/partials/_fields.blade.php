<br>

<div class="form-group bmd-form-group">
<label class="bmd-label-floating">
First Name <span style="color: red"> * </span> </label>
        <input name="first_name" type="text" class="form-control {{$errors->has('first_name') ? 'is-invalid':''}}"
               value="{{ ($action == 'edit') ? $employee->first_name : old('first_name') }}">
        <div class="row">
            <div class="col-md-12">
                @if($errors->has('first_name'))
                    <div class="alert alert-danger w-100 m-0" role="alert">
                        {{$errors->first('first_name')}}
                    </div>
                @endif
            </div>
        </div>
</div>

<div class="form-group bmd-form-group">
    <label class="bmd-label-floating">
    Last Name <span style="color: red"> * </span> </label>
            <input name="last_name" type="text" class="form-control {{$errors->has('last_name') ? 'is-invalid':''}}"
                   value="{{ ($action == 'edit') ? $employee->last_name : old('last_name') }}">
            <div class="row">
                <div class="col-md-12">
                    @if($errors->has('last_name'))
                        <div class="alert alert-danger w-100 m-0" role="alert">
                            {{$errors->first('last_name')}}
                        </div>
                    @endif
                </div>
            </div>
    </div>

<div class="form-group bmd-form-group">
<label class="bmd-label-floating">
Email <span
            style="color: red"> * </span> </label>
        <input name="email" type="text" class="form-control {{$errors->has('email') ? 'is-invalid':''}}"
               value="{{ ($action == 'edit') ? $employee->email : old('email') }}">
        <div class="row">
            <div class="col-md-12">
                @if($errors->has('email'))
                    <div class="alert alert-danger w-100 m-0" role="alert">
                        {{$errors->first('email')}}
                    </div>
                @endif
            </div>
        </div>
</div>

<div class="form-group">
    <label for="exampleFormControlSelect1">Companies</label>
    <select class="form-control" name="company_id">
        <option value="">Select Option</option>
        @foreach ($companies as $company)
            <option value="{{ $company->id }}">{{ $company->name }}</option>
        @endforeach
    </select>
</div>



<div class="form-group bmd-form-group">
<label class="bmd-label-floating">
Phone <span
            style="color: red"> * </span> </label>
        <input name="phone" type="number" class="form-control {{$errors->has('phone') ? 'is-invalid':''}}"
               value="{{ ($action == 'edit') ? $employee->phone : old('phone') }}">
        <div class="row">
            <div class="col-md-12">
                @if($errors->has('phone'))
                    <div class="alert alert-danger w-100 m-0" role="alert">
                        {{$errors->first('phone')}}
                    </div>
                @endif
            </div>
        </div>
</div>
