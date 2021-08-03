

    @if (request()->routeIs('categories.trashed'))
        <a href="{{ route('categories.restore', [$id]) }}" rel="tooltip" title="" class="btn btn-info btn-link btn-sm" data-original-title="Restore Category">
            <i class="material-icons">restore</i>
        </a>

        <form action="{{ route('categories.kill', [$id]) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm"
                data-original-title="Remove Category">
                <i class="material-icons">close</i>
            </button>
        </form>
    @else
        <div>
            <a href="{{ route('categories.edit', [$id]) }}" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Category">
                <i class="material-icons">edit</i>
            </a>

            <form action="{{ route('categories.destroy', [$id]) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm"
                    data-original-title="Remove Category">
                    <i class="material-icons">close</i>
                </button>
            </form>
        </div>
    @endif
