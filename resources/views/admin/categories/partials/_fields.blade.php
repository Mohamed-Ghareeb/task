<br>

<div class="form-group bmd-form-group">
    <label class="bmd-label-floating">Name <span style="color: red"> * </span> </label>
    <input name="name" type="text" class="form-control {{$errors->has('name') ? 'is-invalid':''}}"
            value="{{ ($action == 'edit') ? $category->name : old('name') }}">
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

<div class="form-group">
    <label for="exampleFormControlSelect1">Active <span style="color: red"> * </span> </label>
    <select class="form-control {{$errors->has('active') ? 'is-invalid':''}}" name="active">
        <option value="">Select Option</option>
        <option value="hide" {{ $action == 'edit' && $category->active == 'hide' ? 'selected' : '' }}>Hide</option>
        <option value="show" {{ $action == 'edit' && $category->active == 'show' ? 'selected' : '' }}>Show</option>
    </select>
    <div class="row">
        <div class="col-md-12">
            @if($errors->has('active'))
                <div class="alert alert-danger w-100 m-0" role="alert">
                    {{$errors->first('active')}}
                </div>
            @endif
        </div>
    </div>
</div>

