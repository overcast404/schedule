//登录接口
function login() {
    console.log("ajax  login")
    //接口测试成功
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "db.json",
        //传送参数
        data: JSON.stringify({
            "userId": this.name,
            "userPwd": this.pass
        }),
        success: function (result) {
            console.log(result);
            //打印服务端返回的数据(调试用)
            if (result.state == 200) {
                console.log('23333')
            } else {
                console.log('fail')
            }
        },
        error: function () {
            alert("异常！");
        }
    });
}



