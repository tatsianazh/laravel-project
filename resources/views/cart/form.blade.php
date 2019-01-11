

    <form action="{{route('add_to_cart')}}" method="post">
        @csrf
        <input type="text" name="id">
        <input type="text" name="count">
        <input type="submit" value="send">
    </form>

