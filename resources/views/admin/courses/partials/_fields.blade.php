<br>

<div class="form-group bmd-form-group">
    <label class="bmd-label-floating">Name<span style="color: red"> * </span> </label>
    <input name="name" type="text" class="form-control {{$errors->has('name') ? 'is-invalid':''}}" value="{{ ($action == 'edit') ? $course->name : old('name') }}">
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
    <label class="exampleFormControlTextarea1">Description<span style="color: red"> * </span> </label>
    <textarea name="description" cols="30" id="exampleFormControlTextarea1"  rows="10" class="form-control {{$errors->has('description') ? 'is-invalid':''}}">{{ ($action == 'edit') ? $course->description : old('description') }}</textarea>
    <div class="row">
        <div class="col-md-12">
            @if($errors->has('description'))
                <div class="alert alert-danger w-100 m-0" role="alert">
                    {{$errors->first('description')}}
                </div>
            @endif
        </div>
    </div>
</div>

<div class="form-group bmd-form-group">
    <label class="bmd-label-floating">Rating <span style="color: red"> * </span> </label>
    <input name="rating" type="number" class="form-control {{$errors->has('rating') ? 'is-invalid':''}}" value="{{ ($action == 'edit') ? $course->rating : old('rating') }}">
    <div class="row">
        <div class="col-md-12">
            @if($errors->has('rating'))
                <div class="alert alert-danger w-100 m-0" role="alert">
                    {{$errors->first('rating')}}
                </div>
            @endif
        </div>
    </div>
</div>

<div class="form-group bmd-form-group">
    <label class="bmd-label-floating">Views <span style="color: red"> * </span> </label>
    <input name="views" type="number" class="form-control {{$errors->has('views') ? 'is-invalid':''}}" value="{{ ($action == 'edit') ? $course->views : old('views') }}">
    <div class="row">
        <div class="col-md-12">
            @if($errors->has('views'))
                <div class="alert alert-danger w-100 m-0" role="alert">
                    {{$errors->first('views')}}
                </div>
            @endif
        </div>
    </div>
</div>

<div class="form-group">
    <label for="exampleFormControlSelect1">Category <span style="color: red"> * </span> </label>
    <select class="form-control {{$errors->has('category_id') ? 'is-invalid':''}}" name="category_id">
        <option value="">Select Option</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $action == 'edit' && $course->category->name == $category->name ? 'selected' : '' }}>{{ $category->name }}</option>
        @endforeach
    </select>
    <div class="row">
        <div class="col-md-12">
            @if($errors->has('category_id'))
                <div class="alert alert-danger w-100 m-0" role="alert">
                    {{$errors->first('category_id')}}
                </div>
            @endif
        </div>
    </div>

<div class="form-group">
    <label for="exampleFormControlSelect1">Level <span style="color: red"> * </span> </label>
    <select class="form-control {{$errors->has('level') ? 'is-invalid':''}}" name="level">
        <option value="">Select Option</option>
        <option value="beginner" {{ $action == 'edit' && $course->level == 'beginner' ? 'selected' : '' }}>Beginner</option>
        <option value="intermediate" {{ $action == 'edit' && $course->level == 'intermediate' ? 'selected' : '' }}>Intermediate</option>
        <option value="high" {{ $action == 'edit' && $course->level == 'high' ? 'selected' : '' }}>High</option>
    </select>
    <div class="row">
        <div class="col-md-12">
            @if($errors->has('level'))
                <div class="alert alert-danger w-100 m-0" role="alert">
                    {{$errors->first('level')}}
                </div>
            @endif
        </div>
    </div>
</div>

<div class="form-group bmd-form-group">
    <label class="bmd-label-floating">Hours <span style="color: red"> * </span> </label>
    <input name="hours" type="number" class="form-control {{$errors->has('hours') ? 'is-invalid':''}}" value="{{ ($action == 'edit') ? $course->hours : old('hours') }}">
    <div class="row">
        <div class="col-md-12">
            @if($errors->has('hours'))
                <div class="alert alert-danger w-100 m-0" role="alert">
                    {{$errors->first('hours')}}
                </div>
            @endif
        </div>
    </div>
</div>

<div class="form-group">
    <label for="exampleFormControlSelect1">Active <span style="color: red"> * </span> </label>
    <select class="form-control {{$errors->has('active') ? 'is-invalid':''}}" name="active">
        <option value="">Select Option</option>
        <option value="hide" {{ $action == 'edit' && $course->active == 'hide' ? 'selected' : '' }}>Hide</option>
        <option value="show" {{ $action == 'edit' && $course->active == 'show' ? 'selected' : '' }}>Show</option>
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
