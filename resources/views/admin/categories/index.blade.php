@extends('admin.layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
@endpush

@section('content')

    {!! $dataTable->table() !!}

@endsection

@push('scripts')
<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('vendor/datatables/buttons.server-side.js')}}"></script>
{!! $dataTable->scripts() !!}
<script>
    $(document).on('click', '.btn-create', function() {
        window.location = '{{ route("categories.create") }}'
    });

    $(document).on('click', '.btn-trashed', function() {
        window.location = '{{ route("categories.trashed") }}'
    })
</script>
@endpush
