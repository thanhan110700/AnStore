   <div class="container">
            <h2>Quản lý khách hàng</h2>
            <input class="form-control input-tenkhh"  id="myInput" type="text" placeholder="Nhập tên khách hàng">
            <br>

            <table class="table table-bordered table-striped tblqlkh">
              <thead>
                    <tr style="background-color: #90edd8;">
                            <th>Tên khách hàng</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Số đơn hàng đã mua</th>
                        </tr>
              </thead>
              <tbody id="myTable">
                    @foreach ($data as $key => $item)
                    <tr>
                        <th class="ten">{{$item->tenkh}}</th>
                        <th>{{$item->sdt}}</th>
                        <th>{{$item->diachi}}</th>
                        <th>{{$item->hdon()->count('makh')}}</th>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          <script>
          $(document).ready(function(){
            $("#myInput").on("keyup", function() {
              var value = $(this).val().toLowerCase();
              $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
            });
          });
          </script>

