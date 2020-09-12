var utils = {
    /**
   * Thuc active
   **/
    addActive: function (classActive) {
        $(('.' + classActive)).on('click', function () {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
        });
    },

    ajaxPost: function (tocken, url, success, failed) {
         $.ajax({
            headers: { "Authorization": tocken },
            type: "POST",
            contentType: "application/json",
            dataType: "json",
            url: url,
            success: function (data) {
                success(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                failed(xhr.responseText);
                //removeToken();
            }
        });
    }
}