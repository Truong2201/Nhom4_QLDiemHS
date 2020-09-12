$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("select[name='gradesearch']").change(function(){
    var grade_id = $(this).val();
    var url = $(this).data("url");
    $.ajax({
        url: url,
        method:'POST',
        data:{ grade: grade_id},
        dataType:'html',
        success: function(result){
            //$("#classsearch").html(result);
            $("select[name='classsearch']").html(result);
        }
        });
    });

    // $(document).on('change',"select[name='class']",function() {
    // var class_id = $(this).val();
    // var url = $(this).data("url");
    // $.ajax({
    //     url: url,
    //     method:'POST',
    //     data:{ class: class_id},
    //     dataType:'html',
    //     success: function(result){
    //         $("#div1").html(result);
    //         $("select[name='student']").html(result);
    $("select[name='classsearch']").change(function (){
        var class_id = $(this).val();
        var url = $(this).data('url');
        //alert(class_id);
        $.ajax({
            url: url,
            method:'POST',
            data:{class_id:class_id}, 
            dataType: 'html',          
            success: function(result){          
                $('#asd').html(result);
               // $("select[name='asd']").html(result);
            }
        });
    });
});  