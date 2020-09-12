$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("select[name='search_lop']").change(function(){
    var class_id = $(this).data('id');
    var url = $(this).data('url');
    alert(class_id);
    $.ajax({
        url: url,
        method:'POST',
        data:{ class_id: class_id},
        dataType:'html',
        success: function(result){
            //$("#classsearch").html(result);
            $("select[name='search_lop']").html(result);
        }
        });
    });

    // $("select[name='search_lop']").change(function (){
    //     var class_id = $(this).val();
    //     var url = $(this).data('url');
    //     //alert(class_id);
    //     $.ajax({
    //         url: url,
    //         method:'POST',
    //         data:{class_id:class_id}, 
    //         dataType: 'html',          
    //         success: function(result){          
    //             $('#asds').html(result);
    //            // $("select[name='asd']").html(result);
    //         }
    //     });
    // });
});  