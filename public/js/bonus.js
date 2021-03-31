$(document).ready(function(){
    $('.deleteForm').click(function(evt){
        evt.preventDefault();
        var name=$(this).data("name");
        var form=$(this).closest("form");
        swal({
            // title: `ต้องการลบข้อมูล ${name} หรือไม่ ?`,
            title: `ต้องการลบข้อมูล  หรือไม่ ?`,
            text: "ถ้าลบแล้วจะกู้คืนไม่ได้",
            icon: "warning",
            buttons:true,
            dangerMode:true
        }).then((willDelete)=>{
            if(willDelete){
                form.submit();
            }
        })
    });
});
