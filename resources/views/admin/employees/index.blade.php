@extends('admin.layouts.app')



@section('content')

<div class="row">
  <div class="col-md-12">
    <a href="{{ route('employees.create') }}" class="btn btn-primary float-right mt-3">Add employee</a>
  </div>

</div>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title ">Employees</h4>
        <p class="card-category"> Here is a table of employees</p>
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
                First Name
              </th>
              <th>
                Last Name
              </th>
              <th>
                Email
              </th>
              <th>
                Company
              </th>
              <th>
                Phone
              </th>
              <th>
                Actions
              </th>
            </tr>
          </thead>
            <tbody>
              @foreach ($employees as $employee)
              <tr>
                <td>{{ $employee->id }}</td>
                <td><a href="{{ route('employees.show', $employee->id) }}">{{ $employee->first_name }}</a></td>
                <td>{{ $employee->last_name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->company->name }}</td>
                <td>{{ $employee->phone }}</td>

                <td class="td-actions">
                  <div class="row">
                    <a href="{{ route('employees.edit', $employee->id) }}" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Employee">
                      <i class="material-icons">edit</i>
                    </a>
  
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                      @csrf
                      @method('delete')
                      <button type="submit" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm"
                          data-original-title="Remove Employee">
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
  {{ $employees->links('pagination::bootstrap-4') }}
</div>



@endsection
