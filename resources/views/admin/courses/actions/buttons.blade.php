
    @if (request()->routeIs('courses.trashed'))
    <a href="{{ route('courses.restore', [$id]) }}" rel="tooltip" title="" class="btn btn-info btn-link btn-sm" data-original-title="Restore Course">
        <i class="material-icons">restore</i>
    </a>

    <form action="{{ route('courses.kill', [$id]) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm"
            data-original-title="Remove Course">
            <i class="material-icons">close</i>
        </button>
    </form>
@else
    <div>
        <a href="{{ route('courses.edit', [$id]) }}" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Course">
            <i class="material-icons">edit</i>
        </a>

        <form action="{{ route('courses.destroy', [$id]) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm"
                data-original-title="Remove Course">
                <i class="material-icons">close</i>
            </button>
        </form>
    </div>
@endif
