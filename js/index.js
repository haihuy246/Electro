function dangky() {
    alert("Đăng ký thành công");
}

function account() {
    if (document.getElementById('tk').style.display != "none")
        alert("Bạn cần đăng nhập");
    else if (document.getElementById('tk').style.display != "none")
        window.open('user.php', '_self');
    else if (document.getElementById('admin').style.display != "none")
        window.open('admin.php', '_self');
}

function checkmua(){
    if (document.getElementById("terms").checked == true) {
        return true;
    } else {
        alert("Bạn phải chấp nhận điều khoản và dịch vụ trước khi đặt mua");
        return false;
    }
}

function giudangnhap() {
    var flag = localStorage.getItem("flag");
    if (typeof(Storage) !== "undefined" && flag == 1) {
        $("#dk").hide();
        $("#dn").hide();
        $("#tk").show();
        $("#t").show();
        $("#cart").show();
        document.getElementById("cart1").href = "cart.html";
        document.getElementById("cart2").href = "cart.html";
    } else if (typeof(Storage) !== "undefined" && flag == 2) {
        $("#dk").hide();
        $("#dn").hide();
        $("#tk").hide();
        $("#t").show();
        $("#admin").show();
    }
}

function thoat() {
    localStorage.setItem("flag", 0);
    $(this).hide();
    $("#tk").hide();
    $("#dk").show();
    $("#dn").show();
    $("#cart").hide();
    $("#t").hide();
    window.open("index.php", "_self");
}

function checkdangnhap() {
    var a = "";
    a = document.getElementById("dk").style.display;

    if (a != "none") {
        alert("Bạn phải đăng nhập để mua hàng");
        return false;
    } else {
       // document.getElementById("form_mua").submit();
        return true;
    }
}

function deletecart1() {
    document.getElementById("wg1").style.display = "none";
}

function deletecart2() {
    document.getElementById("wg2").style.display = "none";
}

////////////////// BACK ON TOP ///////////////////

window.onscroll = function() {
    scroll();
}

function scroll() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById('backtotop').style.display = "block";
    } else document.getElementById('backtotop').style.display = "none";
}

function backtotop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}


///////////////////// USER ///////////////////////

function list1() {
    document.getElementById("list1").classList.add = "active";
    document.getElementById("info").style.display = "block";
    document.getElementById("info2").style.display = "none";
}

function list2() {
    document.getElementById("list1").classList.add = "active";
    document.getElementById("info").style.display = "none";
    document.getElementById("info2").style.display = "block";
}

function search() {
    var save = document.getElementById("otimkiem").value;
    localStorage.setItem("search", save);
    window.open("Search.html?1&0", "_self");
}

//////////////////// VALIDATION /////////////////
function kiemtraEmail1(idTag) {
    var inputTag = document.getElementById(idTag);

    var email = /^([\w\.])+@([a-zA-Z0-9\-])+\.([a-zA-Z]{2,4})(\.[a-zA-Z]{2,4})?$/;
    if (inputTag.value.match(email)) {
        return true;
    } else
        return false;
    aa
}

function kiemtraEmail(idTag) {
    var inputTag = document.getElementById(idTag);
    var thongbao = document.getElementById("saisignup");

    var email = /^([\w\.])+@([a-zA-Z0-9\-])+\.([a-zA-Z]{2,4})(\.[a-zA-Z]{2,4})?$/;
    if (inputTag.value.match(email)) {
        return true;
    } else {
        thongbao.innerHTML = "Địa chỉ email không hợp lệ";
        $("#saisignup").show();
        $("#saisignup").delay(1000).fadeOut();
        return false;
    }

}

function kiemtraSDT(idTag) {
    var inputTag = document.getElementById(idTag);
    var numbers = /^[0-9]+$/;
    var thongbao = document.getElementById("saisignup");

    if (inputTag.value.match(numbers)) {
        if (inputTag.value.length < 10) {
            thongbao.innerHTML = "Số điện thoại không hợp lệ";
            $("#saisignup").show();
            $("#saisignup").delay(1000).fadeOut();
            return false;
        } else
            return true;
    } else {
        thongbao.innerHTML = "Số điện thoại không hợp lệ";
        $("#saisignup").show();
        $("#saisignup").delay(1000).fadeOut();
        return false;
    }
}

function kiemtraSIZE(idText, minlength) {
    var inputText = document.getElementById(idText);
    var field = inputText.value;
    var thongbao = document.getElementById("saisignup");

    var dem = 0;
    for (var i = 0; i < field.length; i++)
        if (field[i] == " ") dem++;

    if (field == "") {
        thongbao.innerHTML = idText + " phải chứa ít nhất 1 từ";
        $("#saisignup").show();
        $("#saisignup").delay(1000).fadeOut();
        return false;
    } else {
        return true;
    }
}


function validation() {
    if (kiemtraSIZE('Họ', 0) && kiemtraSIZE('Tên', 0) && (kiemtraEmail('email')) && (kiemtraSDT('SDT'))) {
        alert("Tạo tài khoản thành công");
        return true;
    }
}

/////////////////////////////////////////////////
window.onload = function() {
    giudangnhap();

    $(document).ready(function() {
        $("#nutdangky").click(function() {
            localStorage.setItem("username", $("#tendangnhap").val());
            localStorage.setItem("flag", 0);
            localStorage.setItem("pw", document.getElementById('matkhau').value);
        });

        $('#pwdangnhap').keypress(function(e) {
            if (e.keyCode == 13)
                $('#nutdangnhap').click();
        });

        $('#otimkiem').keypress(function(e) {
            if (e.keyCode == 13)
                $('#nuttimkiem').click();
        });

        // $("#nutdangnhap").click(function() {
        //     var id = document.getElementById('iddangnhap');
        //     var mk = document.getElementById('pwdangnhap');
        //     if (id.value == "admin" && mk.value == "admin") {
        //         window.open("admin.php", "_self");
        //         localStorage.setItem("flag", 2);
        //     } else if (id.value == localStorage.getItem("username") && mk.value == localStorage.getItem("pw")) {
        //         $("#dk").hide();
        //         $("#dn").hide();
        //         $("#tk").show();
        //         $("#t").show();
        //         window.open("index.php", "_self");
        //         localStorage.setItem("flag", 1);
        //     } else {
        //         $("#sailogin").show();
        //         $("#sailogin").delay(1000).fadeOut();
        //     }
        // });

        $("#t").click(function() {
            localStorage.setItem("flag", 0);
            $(this).hide();
            $("#tk").hide();
            $("#dk").show();
            $("#dn").show();
            $("#cart").hide();
        });
    });
}