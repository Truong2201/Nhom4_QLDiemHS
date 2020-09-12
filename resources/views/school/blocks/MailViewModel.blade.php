<script type="text/javascript">
    function MailViewModel(mails)
    {
        this.standardMails = function(mails){
            for(var i=0; i<mails.length; i++){
                mails[i].title = mails[i].shortContent.substring(0, 30) + " ...";
            }
            return mails;
        }

        var seft = this;
        mails = this.standardMails(mails);
        this.mails = ko.observableArray(mails);
    }
    var mailViewModel = null;
    $(function () {
        mailViewModel = new MailViewModel(mails);
        ko.applyBindings(mailViewModel, document.getElementById('list-mail'));
    });

    var ViewModelStructure = function () {
        var self = this;
        this.viewDetailMail = function (data) {
            $("#sender").html(data.senderName);
            $("#createDate").html(data.stringCreateDate);
            $("#content").html(data.content);
            $("#list-mail").hide();
            $("#detail-mail").show();
            if(data.image != '')
            {
                $('#has-img').show();
                $('#has-img').attr('src', 'data:image/png;base64,' + data.image);
                $('#not-img').hide();
            }
            else{
                $('#has-img').hide();
                $('#not-img').show();
            }
        };
        this.backListMail = function()
        {
            $("#list-mail").show();
            $("#detail-mail").hide();
        }
        this.openMail = function()
        {
            var mailOpen = $('#open-mail').val();
            var detailMailOpen = $('#open-mail-detail').val();
            if(mailOpen == 0 && detailMailOpen == 0)
            {
                
                $('#open-mail').val(1);
                $('#open-mail-detail').val(1);
                $('#detail-mail').addClass("portlet-fullscreen");
                $('#btn-open-mail-detail').addClass("on");
            }
            else
            {
                $('#open-mail').val(0);
                $('#open-mail-detail').val(0);
                $('#detail-mail').removeClass("portlet-fullscreen");
                $('#btn-open-mail-detail').removeClass("on");
            }
        }
        this.openMailDetail = function()
        {
            var mailOpen = $('#open-mail').val();
            var detailMailOpen = $('#open-mail-detail').val();
            if(mailOpen == 0 && detailMailOpen == 0)
            {
                $('#open-mail').val(1);
                $('#open-mail-detail').val(1);
                $('#list-mail').addClass("portlet-fullscreen");
                $('#btn-open-mail').addClass("on");
            }
            else
            {
                $('#open-mail').val(0);
                $('#open-mail-detail').val(0);
                $('#list-mail').removeClass("portlet-fullscreen");
                $('#btn-open-mail').removeClass("on");
            }
        }
    }();
</script>