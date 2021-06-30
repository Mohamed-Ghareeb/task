@extends('admin.layouts.app')



@section('content')

<div class="row">
  <div class="col-md-12">
    <a href="{{ route('companies.create') }}" class="btn btn-primary float-right mt-3">Add Company</a>
  </div>

</div>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title ">Companies</h4>
        <p class="card-category"> Here is a table of companies</p>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <tr>
              <th>
                ID
              </th>
              <th>
                Name
              </th>
              <th>
                Email
              </th>
              <th>
                Logo
              </th>
              <th>
                Actions
              </th>
            </tr>
          </thead>
            <tbody>
              @foreach ($companies as $company)
              <tr>
                <td>{{ $company->id }}</td>
                <td><a href="{{ route('companies.show', $company->id) }}">{{ $company->name }}</a></td>
                <td>{{ $company->email }}</td>

                <td>
                  <img src="{{ asset('storage') .'/'. $company->logo }}" alt="logo" height="100" width="100">
                </td>

                <td class="td-actions">
                  <div class="row">
                    <a href="{{ route('companies.edit', $company->id) }}" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Company">
                      <i class="material-icons">edit</i>
                    </a>
  
                    <form action="{{ route('companies.destroy', $company->id) }}" method="POST">
                      @csrf
                      @method('delete')
                      <button type="submit" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm"
                          data-original-title="Remove Company">
                          <i class="material-icons">close</i>
                      </button>
                    </form>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="float-right mt-4">
  {{ $companies->links('pagination::bootstrap-4') }}
</div>



@endsection
