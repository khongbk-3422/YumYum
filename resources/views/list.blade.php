<h1>Restaurant List</h1>

<form action="addPic" method="POST" enctype="multipart/form-data">
    @csrf
    <select name="upt_rest_id">
        @foreach ($rests as $rest)
            <option value="{{$rest['rest_id']}}">{{$rest['rest_id']}} - {{$rest['rest_name']}}</option>   
        @endforeach
    </select>
    <input type="file" name="restPic">
    <input type="submit" value="Submit">
</form>