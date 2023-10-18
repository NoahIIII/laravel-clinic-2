<div>
<form action= "{{ $action }}" method="post">
    @csrf
    @method('delete')
    <button class = "btn btn-danger"type="submit">Delete</button>
    </form>
</div>