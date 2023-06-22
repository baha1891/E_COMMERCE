/*
=========================================
|                                       |
|       Multi-Check checkbox            |
|                                       |
=========================================
*/

function checkall(clickchk, relChkbox) {

    var checker = $('#' + clickchk);
    var multichk = $('.' + relChkbox);


    checker.click(function () {
        multichk.prop('checked', $(this).prop('checked'));
    });
}


/*
=========================================
|                                       |
|           MultiCheck                  |
|                                       |
=========================================
*/

/*
    This MultiCheck Function is recommanded for datatable
*/

function multiCheck(tb_var) {
    tb_var.on("change", ".chk-parent", function() {
        var e=$(this).closest("table").find("td:first-child .child-chk"), a=$(this).is(":checked");
        $(e).each(function() {
            a?($(this).prop("checked", !0), $(this).closest("tr").addClass("active")): ($(this).prop("checked", !1), $(this).closest("tr").removeClass("active"))
        })
    }),
    tb_var.on("change", "tbody tr .new-control", function() {
        $(this).parents("tr").toggleClass("active")
    })
}


function confirmDelete(id,model) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to Delete this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url:`/${model}/delete`,
                METHOD:'delete',
                data:{
                    'id':id
                },
                success:function(response){
                    console.log(response);
                    if(response.message=='success'){

                        $("#"+id).remove();
                        Swal.fire(

                            'Deleted!',
                            'this item has been deleted.',
                            'success'
                            )


                    }
                },
                error:function(xhr){
                    Swal.fire(

                        'Error!',
                        'this oprate not success.',
                        'error'
                        )
                }
            })

        }
        })
}
