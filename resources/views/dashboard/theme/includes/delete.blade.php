<form action="{{ route('theme.destroy', [$theme]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Удалить</button>
</form>