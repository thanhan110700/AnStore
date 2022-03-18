$(document).ready( function(){
    $(".updatecart").click(function(){
        var rowid = $(this).attr('id');
        var rowqty = $(this).parent().parent().find('.qty').val();
       // alert(rowid);

    $.ajax({
        url:'xlcngiohang/'+rowid+'/'+rowqty,
        type: 'GET',
        data:{"idsp":rowid,'qty':rowqty},
        success:function (data){
            if (data == 'ok'){
                window.location="giohang";
            }
        }
    });
    });
});
