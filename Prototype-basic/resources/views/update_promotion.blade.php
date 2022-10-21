
<form action="/edit/{{ $promotion[0]->id }}" method="get">

    @foreach ($promotion as $row)

    <input type="text" name="name" value="{{ $row->name }} ">
    <button>Edit</button>
</form>

@endforeach

