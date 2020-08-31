$(function () {
    $(".form-horizontal").validate({
        rules:{
            username:{
                required:true,
                minlength:5,
                remote:{
                    url:"/study/mvc/index.php/admin/reg/checkName",
                    type:"post",
                    data:{
                        username: function () {
                            return $("input[name=username]").val()
                        }
                    }
                }
            },
            pass:{
                required:true,
                rangelength:[5,10],
                equalTo:"#pass1",
            },
            pass1:{
                required:true,
                rangelength:[5,10],
                equalTo: "#pass"
            }
        },
        messages:{
            username: {
                required: "用户名没有填写",
                minlength: "要符合用户名规则",
                remote: "用户名已存在"
            },
            pass:{
                required:"密码没有填写",
                rangelength:"密码再5-10之间",
                equalTo:"两次密码要保持一致"
            },
            pass1:{
                required:"请再次填写密码",
                rangelength:"密码再5-10之间",
                equalTo:"两次密码要保持一致"

            }
        }
    })
})