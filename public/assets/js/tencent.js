window.callback = function (res) {
    console.log(res)
    // res（未通过验证）= {ret: 1, ticket: null}
    // res（验证成功） = {ret: 0, ticket: "String", randstr: "String"}
    if (res.ret === 0) {
        // alert(res.ticket)   // 票据
        var ticket = res.ticket;
        $("input[name='ticket']").val(ticket);


    } else {
        tencent_error();
    }
}

function tencent_error() {
    swal("验证信息发送失败", "请检查防水墙设置", "error");

}

