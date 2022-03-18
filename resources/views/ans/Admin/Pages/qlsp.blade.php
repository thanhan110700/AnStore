
<div class="row" style="padding: 0px; margin: 0px;">
        <div class="col-sm-12 banner" style="padding-top: 1em;" align='center'>
            <form method="GET" action="{{url('admin/phanloai')}}">
                @csrf
                    <select name="phanloai" class="custom-select">
                        <option>iphone</option>
                        <option>ipad</option>
                        <option>mac</option>
                        <option>watch</option>
                     </select>
                     <input type="submit" class="btn-success btn-okpl" name="ok" value="OK">
                </form>
            </div>

</div>



