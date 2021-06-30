<br>
 
<div class="form-group bmd-form-group">
    <label class="bmd-label-floating">Name<span style="color: red"> * </span> </label>
    <input name="name" type="text" class="form-control {{$errors->has('name') ? 'is-invalid':''}}" value="{{ ($action == 'edit') ? $company->name : old('name') }}">
    <div class="row">
        <div class="col-md-12">
            @if($errors->has('name'))
                <div class="alert alert-danger w-100 m-0" role="alert">
                    {{$errors->first('name')}}
                </div>
            @endif
        </div>
    </div>
</div>

<div class="form-group bmd-form-group">
<label class="bmd-label-floating">Email<span style="color: red"> * </span> </label>
    <input name="email" type="text" class="form-control {{$errors->has('email') ? 'is-invalid':''}}" value="{{ ($action == 'edit') ? $company->email : old('email') }}">
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

<div class="form-group bmd-form-group">
    <label class="bmd-label-floating">Website <span style="color: red"> * </span> </label>
    <input name="website" type="string" class="form-control {{$errors->has('website') ? 'is-invalid':''}}" value="{{ ($action == 'edit') ? $company->website : old('website') }}">
    <div class="row">
        <div class="col-md-12">
            @if($errors->has('website'))
                <div class="alert alert-danger w-100 m-0" role="alert">
                    {{$errors->first('website')}}
                </div>
            @endif
        </div>
    </div>
</div>

<div class="bmd-form-group">
    <div>
        <label>Logo<span style="color: red"> * </span></label> <br>
        <input type="file" name="logo" class="form-control {{$errors->has('logo') ? 'is-invalid':''}}">
        <div class="row">
            <div class="col-md-12">
                @if($errors->has('logo'))
                    <div class="alert alert-danger w-100 m-0" role="alert">
                        {{$errors->first('logo')}}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>


{{-- 
<div class="form-group">
    <label class="bmd-label-floating">Logo</label>
    <input type="file" class="form-control {{$errors->has('icon') ? 'is-invalid':''}}" name="logo">
    
    <div class="row">
        <div class="col-md-12">
            @if($errors->has('icon'))
                <div class="alert alert-danger w-100 m-0" role="alert">
                    {{$errors->first('icon')}}
                </div>
            @endif
        </div>
    </div>
</div> --}}