
<form class="form-group center-" method="post" action="{{route('productStore')}}" enctype="multipart/form-data">
    {{csrf_field()}}
    <label>Picture</label><input type='file' name="pippi" id="pippi" required><br>
    <input type="submit" class="btn btn-default" value="save" name="savebtn" id="savebtn">
</form>