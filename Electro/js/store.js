function giudangnhap() {
  var flag = localStorage.getItem("flag");
  if (typeof Storage !== "undefined" && flag == 1) {
    $("#dk").hide();
    $("#dn").hide();
    $("#tk").show();
    $("#t").show();
    $("#cart").show();
  } else if (typeof Storage !== "undefined" && flag == 2) {
    $("#dk").hide();
    $("#dn").hide();
    $("#tk").hide();
    $("#t").show();
    $("#admin").show();
  }
}



jQuery(function($) {
  $('#price_in').autoNumeric('init',{vMin: '0', vMax: '999999999' });    
  $('#price_ax').autoNumeric('init',{vMin: '0', vMax: '999999999' }); 
  giudangnhap();   
});

function sapxep() {
  // window.open("store.html?1&0", "_self");
  x = document.getElementById('sap_xep').value;
  alert(x);

}

function search() {
  var save = document.getElementById("otimkiem").value;
  localStorage.setItem("search", save);
  window.open("../Search.html?1&0", "_self");
}

function account() {
  if (document.getElementById("tk").style.display != "none")
    window.open("../user.html", "_self");
  else if (document.getElementById("admin").style.display != "none")
    window.open("../admin.html", "_self");
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

function test() {
  var test = document.getElementById("price-min").value;
  test = test.split(".");
  test = test[0];
  alert(test);
}

////////////////// BACK ON TOP ///////////////////

window.onscroll = function () {
  scroll();
};

function scroll() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("backtotop").style.display = "block";
  } else document.getElementById("backtotop").style.display = "none";
}

function backtotop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

////////////////// DECIMAL POINT ////////////////

function sapxepOall() {
  if (document.getElementById("sapxep").value == "0") {
    window.open("storeo.html?1&0", "_self");
  }

  if (document.getElementById("sapxep").value == "1") {
    window.open("storeo1.html?1&0", "_self");
  }

  if (document.getElementById("sapxep").value == "2") {
    window.open("storeo2.html?1&0", "_self");
  }
}

function sapxepOMintomax() {
  if (document.getElementById("sapxep").value == "0") {
    window.open("storeo1.html?1&0", "_self");
  }

  if (document.getElementById("sapxep").value == "1") {
    window.open("storeo.html?1&0", "_self");
  }

  if (document.getElementById("sapxep").value == "2") {
    window.open("storeo2.html?1&0", "_self");
  }
}

function sapxepOMaxtomin() {
  if (document.getElementById("sapxep").value == "0") {
    window.open("storeo2.html?1&0", "_self");
  }

  if (document.getElementById("sapxep").value == "1") {
    window.open("storeo.html?1&0", "_self");
  }

  if (document.getElementById("sapxep").value == "2") {
    window.open("storeo1.html?1&0", "_self");
  }
}

// !OPPO //
