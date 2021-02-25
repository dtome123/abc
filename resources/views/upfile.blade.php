<form action="{{ route('upfile')}}" enctype="multipart/form-data" method="POST">
    @csrf
    <input type="text" name="name">
    <input type="file" name="file" >
    <input type="submit" value="submit">
</form>
