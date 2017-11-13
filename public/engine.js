$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
var cat = "all";
function swAlert($title,$msg,$type){
    return swal($title, $msg, $type,{
        button: "ตกลง",
        content:true
    });
}
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
function redirect(url, s) {
    setTimeout(function () {
        window.location.href = url;
    }, s * 1000);
}
function loadBook(){
    $(".book-list").html('กำลังโหลดข้อมูล... <i class="fa fa-spinner fa-spin"></i>');
    $.get($base_url + "/api/book",{},function (data) {
        $(".book-list").html(data.html);
    },'json');

}
function getAllBook() {
    $.post($get_url, { "cat": "all","search": null},function(data){
        $(".book-list").html(data);
    });
}
function getBook(text){
    $.post($get_url, { "cat": cat,"search": text},function(data){
        $(".book-list").html(data);
    });
}
$(document).ready(function(){

    $(".btn-select-cat").click(function (event) {
        event.preventDefault();
        $(".btn-select-cat").removeClass("active");
        $(this).addClass("active");
        var $input = $(".search-value").val();
        cat = $(this).attr("data-id");
        $(".book-list").html('<h3>กำลังโหลดข้อมูล... <i class="fa fa-spinner fa-spin"></i></h3>');
        getBook($input);
    });
    $(".xkamail").click(function (event) {
        event.preventDefault();
        var $input = $(".search-value").val();
        $(".book-list").html('<h3>กำลังโหลดข้อมูล... <i class="fa fa-spinner fa-spin"></i></h3>');
        getBook($input);
    });
    $("form.ajax").submit(function(event){
        event.preventDefault();
        var $this = $(this);
        var $url = $this.attr('action');
        var $input = $("input");
        $this.find('button[type="submit"]').attr('disabled', true);
        $text = $this.find('button[type="submit"]').html();
        $this.find('button[type="submit"]').html('Loading... <i class="fa fa-spinner fa-spin"></i>');
        $input.attr('readonly',true);
        $.ajax({
            method: 'POST',
            url: $url,
            dataType: 'JSON',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data){
                console.log(data);
                if(data){
                    switch (data.status){
                        case true:
                            if(data.array.rdr){
                                window.location.href = data.array.rdr;
                            }
                            if(data.message == "checktruemoney"){
                                swAlert("ระบบกำลังตรวจสอบ","","success");
                                checktruemoney(data.array.txid,data.array.url,$text,$this);
                                return true;
                            }else{
                                swAlert(data.message,"","success");
                            }
                            break;
                        case false:
                            swAlert(data.message,"","error");
                            break;
                    }
                }
                $input.attr('readonly',false);
                $this.find('button[type="submit"]').attr('disabled', false);
                $this.find('button[type="submit"]').html($text);
            },
            error: function (data) {
                console.log("Error Ajax Status:" + data.status);
                $msg = "";
                if(data.status == 422){
                    var errors = data.responseJSON;
                    $.each(errors.errors, function (key, value) {

                        $.each(value, function (k,v) {
                            $msg = $msg + " " + v + " ";
                        })
                    });
                }
                if(data.status == 500){
                    $msg = "Error: " + data.responseJSON.message;
                }
                swAlert("เกิดข้อผิดพลาด",$msg,"error");
                $input.attr('readonly',false);
                $this.find('button[type="submit"]').attr('disabled', false);
                $this.find('button[type="submit"]').html($text);
            }
        });
    });
});