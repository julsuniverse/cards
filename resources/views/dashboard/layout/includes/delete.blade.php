<form action="{{ route('dashboard.layout.destroy', [$layout]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Удалить</button>
</form>