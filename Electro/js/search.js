function giudangnhap() {
    var ten = localStorage.getItem("username");
    var mk = localStorage.getItem("pw");
    var flag = localStorage.getItem("flag");
    if (typeof(Storage) !== "undefined" && ten != null && flag == 1) {
        $("#dk").hide();
        $("#dn").hide();
        $("#tk").show();
        $("#t").show();
        $("#cart").show();
    } else if (typeof(Storage) !== "undefined" && ten != null && flag == 2) {
        $("#dk").hide();
        $("#dn").hide();
        $("#tk").hide();
        $("#t").show();
        $("#admin").show();
    }
}

function account() {
    if (document.getElementById('tk').style.display != "none")
        window.open('user.html', '_self');
    else if (document.getElementById('admin').style.display != "none")
        window.open('admin.html', '_self');
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

function search() {
    var save = document.getElementById("otimkiem").value;
    localStorage.setItem("search", save);
    window.open("Search.html?1&0", "_self");
}

function thoat() {
    localStorage.setItem("flag", 0);
    $(this).hide();
    $("#tk").hide();
    $("#dk").show();
    $("#dn").show();
    $("#cart").hide();
    $("#t").hide();
    window.open("index.html", "_self");
}

function test() {
    var test = document.getElementById('price-min').value;
    test = test.split('.');
    test = test[0];
    alert(test);
}

function changeSearch() {
    //   document.getElementById('search').value = localStorage.getItem("search");
    window.open("Search.html?1&0", "_self");
    var temp = document.getElementById('search').value;
    localStorage.setItem("search", temp);
    getitem();
    all();
}

////////////////// CHECKBOX //////////////////////

function c1() {
    if (document.getElementById('category-1').checked == true)
        localStorage.setItem('c1', '1');
    else
        localStorage.setItem('c1', '0');
}

function c2() {
    if (document.getElementById('category-2').checked == true)
        localStorage.setItem('c2', '1');
    else
        localStorage.setItem('c2', '0');
}

function c3() {
    if (document.getElementById('category-3').checked == true)
        localStorage.setItem('c3', '1');
    else
        localStorage.setItem('c3', '0');
}

function c4() {
    if (document.getElementById('category-4').checked == true)
        localStorage.setItem('c4', '1');
    else
        localStorage.setItem('c4', '0');
}


////////////////// NO FILTER /////////////////////
function all() {
    var url = window.location.href;
    var tem = url.split("?");
    tem = tem[1].split("&");
    var vitri = parseInt(tem[1]);

    var sotrang = 0;
    var dem = 0;
    var lienket = "";
    var s = "";
    var src = "";
    var x = "";

    //        var test = "Qw T   Y dasds sada sads";
    //        test = test.split(' ').join('').toLowerCase();

    var temp_sp = new Array("iPhone 11 Pro Max 512GB", "iPhone 11 Pro Max 256GB", "iPhone 11 64GB", "iPhone 6s Plus 32GB", "iPhone 7 Plus 32GB", "iPhone 8 Plus 64GB", "iPhone Xs 64GB", "iPhone 11 Pro 64GB", "iPhone Xr 128GB", "Samsung Galaxy S10+ 512GB", "Samsung Galaxy Note 10+", "Samsung Galaxy A70", "Samsung Galaxy A10", "Samsung Galaxy A30 32GB", "Samsung Galaxy A30s", "Samsung Galaxy A20", "Samsung Galaxy A50s", "Samsung Galaxy A80", "Xiaomi Mi 9", "Xiaomi Redmi 8A", "Xiaomi Redmi Note 8", "Xiaomi Redmi Note 8 Pro", "Xiaomi Mi 9T", "Xiaomi Pocophone F1", "Xiaomi A3 64GB", "Xiaomi Redmi Go", "Xiaomi Redmi 7", "OPPO Reno 10x", "OPPO A5 (2020) 64GB", "OPPO A1K", "OPPO A7", "OPPO A9", "OPPO Reno", "OPPO A5 (2020) 128GB", "OPPO A5s", "OPPO F11 Pro");
    var temp_gia = new Array("43.990.000₫", "37.990.000₫", "18.179.000₫", "8.990.000₫", "12.990.000₫", "15.990.000₫", "24.990.000₫", "30.990.000₫", "18.990.000₫", "28.990.000₫", "24.990.000₫", "8.790.000₫", "3.090.000₫", "4.290.000₫", "6.290.000₫", "3.590.000₫", "6.990.000₫", "12.990.000₫", "9.990.000₫", "2.590.000₫", "4.990.000₫", "5.990.000₫", "7.990.000₫", "7.999.000₫", "4.490.000₫", "1.990.000₫", "3.290.000₫", "16.990.000₫", "4.290.000₫", "3.190.000₫", "4.390.000₫", "6.490.000₫", "9.990.000₫", "5.290.000₫", "3.690.000₫", "7.490.000₫");
    var temp_j = new Array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31", "32", "33", "34", "35");
    var temp_link = new Array("1&0", "1&1", "1&2", "1&3", "1&4", "1&5", "1&6", "1&7", "1&8", "2&0", "2&1", "2&2", "2&3", "2&4", "2&5", "2&6", "2&7", "2&8", "3&0", "3&1", "3&2", "3&3", "3&4", "3&5", "3&6", "3&7", "3&8", "4&0", "4&1", "4&2", "4&3", "4&4", "4&5", "4&6", "4&7", "4&8");

    var sp = new Array;
    var gia = new Array;
    var j = new Array;
    var link = new Array;
    src += 'img/All/';

    // TÌM KIẾM //
    for (var i = 0; i < temp_sp.length; i++) {
        var result = document.getElementById('search').value;
        if (temp_sp[i].split(' ').join('').toLowerCase().includes(result.split(' ').join('').toLowerCase())) {
            sp.push(temp_sp[i]);
            gia.push(temp_gia[i]);
            j.push(temp_j[i]);
            link.push(temp_link[i]);
        }
    }

    // HÃNG //
    /*
    for (var i = 0; i < sp.length; i++) {
        if (sp[i].split(' ').join('').toLowerCase().includes("iphone"))
            document.getElementById('iphone').style.display = "block";
        if (sp[i].split(' ').join('').toLowerCase().includes("samsung"))
            document.getElementById('samsung').style.display = "block";
        if (sp[i].split(' ').join('').toLowerCase().includes("xiaomi"))
            document.getElementById('xiaomi').style.display = "block";
        if (sp[i].split(' ').join('').toLowerCase().includes("oppo"))
            document.getElementById('oppo').style.display = "block";
        if (document.getElementById('iphone').style.display == "block" && document.getElementById('samsung').style.display == "block" && document.getElementById('xiaomi').style.display == "block" && document.getElementById('oppo').style.display == "block") {
            break;
        }
    }
    */


    /*
        if (localStorage.getItem('c1') == 1) document.getElementById('category-1').checked = true;
        if (localStorage.getItem('c2') == 1) document.getElementById('category-2').checked = true;
        if (localStorage.getItem('c3') == 1) document.getElementById('category-3').checked = true;
        if (localStorage.getItem('c4') == 1) document.getElementById('category-3').checked = true;

        var temp_ch = new Array;
        if (document.getElementById('category-1').checked == true)
            temp_ch.push('iphone');
        if (document.getElementById('category-2').checked == true)
            temp_ch.push('samsung');
        if (document.getElementById('category-3').checked == true)
            temp_ch.push('xiaomi');
        if (document.getElementById('category-4').checked == true)
            temp_ch.push('oppo');
    */

    var m1 = 0;
    for (i = vitri; i < sp.length; i++) {
        dem++;
        s = s + "<div style='display: block' class='col-md-4 col-xs-6' > <div class='product'> <div class='product-img'> <img src='" + src + j[i] + ".jpg' alt = ''> <div class='product-body'> <h3 class='product-name'> <a href='Products/Product.html?" + link[i] + "'>" + sp[i] + "</a>" + "<h4 class='product-price'>" + gia[i] + "</h4>" + "<div class='product-rating'></div> </div> <div class='add-to-cart'> <button onclick='checkdangnhap();' class='add-to-cart-btn'><i class='fa fa-shopping-cart'></i>add to cart</button></div></div></div></div>"
        m1++;
        if (dem == 9) break; // so san pham trong 1 trang
    }
    sotrang = Math.ceil(sp.length / 9); // chia so trang

    var k = 1;
    var m0 = 1; // tem[0]
    for (i = 1; i <= sotrang; i++) {
        vitri = (i - 1) * 9;
        lienket = lienket + " <li id='page" + vitri + "' ><a href='Search.html?" + m0 + "&" + vitri + "'>" + i + " </a></li> ";
        k += 1;
        m0++;
    }
    document.getElementById('store-pages').innerHTML = s;
    document.getElementById('page').innerHTML = lienket;

    var active = "page" + tem[1];
    document.getElementById(active).classList.add("active");

    // DELETE TEMP_CH //
    temp_ch.splice(0, temp_ch.length);
}

////////////////// getSEARCH /////////////////////

function getitem() {
    var kq = "Kết quả tìm kiếm cho: ";
    document.getElementById("searchRS").innerHTML = kq + localStorage.getItem('search');
    document.getElementById("search").value = localStorage.getItem('search');
}

//////////////////////////////////////////////////
window.onload = function() {
    giudangnhap();
    this.getitem();
    this.all();


    $(document).ready(function() {
        $("#nutdangky").click(function() {
            localStorage.setItem("username", $("#tendangnhap").val());
            localStorage.setItem("flag", 1);
            localStorage.setItem("pw", document.getElementById('matkhau').value);
        });

        $('#otimkiem').keypress(function(e) {
            if (e.keyCode == 13)
                $('#nuttimkiem').click();
        });

        $("#nutdangnhap").click(function() {
            var id = document.getElementById('iddangnhap');
            var mk = document.getElementById('pwdangnhap');
            if (id.value == "admin" && mk.value == "admin") {
                window.location = "admin.html";
            } else if (id.value == localStorage.getItem("username") && mk.value == localStorage.getItem("pw")) {
                $("#dk").hide();
                $("#dn").hide();
                $("#tk").show();
                $("#t").show();
                window.open("index.html", "_self");
                localStorage.setItem("flag", 1);
            } else {
                $("#sailogin").show();
                $("#sailogin").delay(1000).fadeOut();
            }
        });

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