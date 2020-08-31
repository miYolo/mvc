$(".add").click(function () {
    var cid = $(this).attr("attr");
    $("input[type=hidden]").val(cid)
    $('<div class="mask"></div>').appendTo("body").css({
        width: "100%",
        height: "100%",
        opacity: 0.3,
        background: "#000",
        position: "fixed",
        left: 0,
        top: 0,
    })
    $(".addPanel").css("display", "block");
})
$(".close").click(function () {
    $(".addPanel").css({
        display: "none"
    });
    $(".mask").css({
        display: "none"
    })
})

$(".edit").click(function () {
    var cid = $(this).attr("attr");
    var pid = $(this).attr("pid");
    $('<div class="mask"></div>').appendTo("body").css({
        width: "100%",
        height: "100%",
        opacity: 0.3,
        background: "#000",
        position: "fixed",
        left: 0,
        top: 0,
    })
    $(".editPanel").css("display", "block");
    // var EDITURL = $(".ENTRY_ADD").html() + "/admin/category/show";
    // var EDITURL1 = $(".ENTRY_ADD1").html() + "/admin/category/getOption";
    $(".cidEdit").val(cid);
    $.ajax({
        url: "http://localhost/mvc/index.php/admin/category/show",
        data: {
            cid
        },
        dataType: "json",
        success: function (e) {
            $(".editPanel input[name=cname]").val(e["cname"]);
            if (e["isshow"] == 1) {
                $("#isshow option:eq(0)").prop("selected", true)
            } else {
                $("#isshow option:eq(1)").prop("selected", true)
            }
            $(".editPanel input[name=tpl_name]").val(e["tpl_name"]);
            $(".editPanel textarea").val(e["info"]);
        }
    })
    $.ajax({
        url: "http://localhost/mvc/index.php/admin/category/getOption",
        dataType: "json",
        success: function (e) {
            tree(e, 1, cid, pid);
            $("#opts").html(str);
            str = "<option value='0'>一级</option>";
        }
    })
})


$(".change").click(function () {
       var data = ($(".editPanel form").serialize() + "&cid" + cid);
    $.ajax({
        url: "http://localhost/mvc/index.php/admin/category/editcon",
        data: data,
        success: function (e) {
            if ($.trim(e) == "ok") { //去掉空格
                location.reload();
            }
        }
    })
})


var str = "<option value='0'>一级</option>";

function str_repeat(str, num) {
    var result = "";
    for (var i = 0; i < num; i++) {
        result += str;
    }
    return result;
}

function tree(data, $i, cid, pid) {
    for (var i = 0; i < data.length; i++) {
        if (data[i].child) {
            if (data[i].cid != cid) {
                if (data[i].cid == pid) {
                    str += "<option value='" + data[i].cid + "'selected>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                } else {
                    str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                }
            }
            tree(data[i].child, $i + 1, cid, pid);
        } else {
            if (data[i].cid != cid) {
                if (data[i].cid == pid) {
                    str += "<option value='" + data[i].cid + "'selected>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                } else {
                    str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                }
            }
        }
    }
}

$(".close").click(function () {
    $(".editPanel").css({
        display: "none"
    });
    $(".mask").css({
        display: "none"
    })
})


