function getURL() {
    var b = window.location.href;
    var tem = b.split("?");
    tem = tem[1].split("&");
    alert(tem[0]);
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



function giudangnhap() {
    var flag = localStorage.getItem("flag");
    if (typeof(Storage) !== "undefined" && flag == 1) {
        $("#dk").hide();
        $("#dn").hide();
        $("#tk").show();
        $("#t").show();
        $("#cart").show();
    } else if (typeof(Storage) !== "undefined" && flag == 2) {
        $("#dk").hide();
        $("#dn").hide();
        $("#tk").hide();
        $("#t").show();
        $("#admin").show();
    }
}

function account() {
    if (document.getElementById('tk').style.display != "none")
        window.open('../user.html', '_self');
    else if (document.getElementById('admin').style.display != "none")
        window.open('../admin.html', '_self');
}

function thoat() {
    localStorage.setItem("flag", 0);
    $(this).hide();
    $("#tk").hide();
    $("#dk").show();
    $("#dn").show();
    $("#cart").hide();
    $("#t").hide();
    window.open("../index.php", "_self");
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
    window.open("../Search.html?1&0", "_self");
}

function product() {
    var url = window.location.href;
    var tem = url.split("?");
    tem = tem[1].split("&");
    var x = parseInt(tem[1]);
    var gia;
    var src = "";
    var s = "";

    giudangnhap();

    $("#t").click(function() {
        localStorage.setItem("flag", 0);
        $(this).hide();
        $("#tk").hide();
        $("#dk").show();
        $("#dn").show();
    });

    // switch (tem[0]) {

    //     // IPHONE
    //     case '1':
    //         {
    //             gia = new Array("43.990.000₫", "37.990.000₫", "18.179.000₫", "8.990.000₫", "12.990.000₫", "15.990.000₫", "24.990.000₫", "30.990.000₫", "18.990.000₫");
    //             breadcrumb1 = new Array("iPhone");
    //             breadcrumb2 = new Array("iPhone 11 Pro Max 512GB", "iPhone 11 Pro Max 256GB", "iPhone 11 64GB", "iPhone 6s Plus 32GB", "iPhone 7 Plus 32GB", "iPhone 8 Plus 64GB", "iPhone Xs 64GB", "iPhone 11 Pro 64GB", "iPhone Xr 128GB");
    //             mota = new Array(
    //                 "iPhone 11 Pro Max là sản phẩm dành cho những ai đang kiếm tìm sự hoàn hảo trong quá trình trải nghiệm điện thoại. Với chiếc iPhone này, Apple đã vươn tới đỉnh cao khi tinh chỉnh tối ưu mọi yếu tố bên trong như hiệu năng, camera, pin và thiết kế một cách tốt nhất. Hiểu được nhu cầu chụp ảnh cao của người dùng hiện nay, Apple đã nâng tầm iPhone 11 Pro Max bằng cụm 3 camera xuất sắc trên mặt lưng máy. Nhờ hệ thống 3 camera này, sản phẩm có thể chụp ảnh trong môi trường thiếu sáng rất tốt, mở rộng góc chụp tới 4 lần và bổ sung tính năng quay video 4K tốc độ 60 fps. Chưa dừng lại ở đó, chiếc điện thoại iPhone 11 Pro Max còn sở hữu nhiều công cụ phần mềm hậu kỳ hiệu quả để bạn chỉnh sửa và cho ra đời bức ảnh thành phẩm thực sự ưng ý.</br></br>Cụm 3 camera ưu việt trên mặt lưng sản phẩm gồm camera tele, camera góc rộng và camera góc siêu rộng cho phép người dùng có thể lưu lại những phút giây ấn tượng của mọi khoảnh khắc trong đời, dù là phong cảnh núi non hùng vĩ hay những chi tiết nhỏ bé tinh tế. Tính năng zoom quang 4x cùng góc chụp mở rộng 4 lần đem tới sự hỗ trợ chuyên nghiệp trong quá trình chụp ảnh của người dùng.</br></br>Nhờ sử dụng cảm biến camera thế hệ mới kết hợp với tính năng hỗ trợ chụp đêm Night Mode, iPhone 11 Pro Max 256GB có thể dễ dàng chụp được những bức ảnh đẹp lung linh trong điều kiện môi trường thiếu sáng. Thông qua hệ thống cảm biến ánh sáng môi trường, thiết bị sẽ tự kích hoạt chế độ Night Mode để đảm bảo những khuôn hình chụp được luôn đẹp mà không cần người dùng phải thao tác nhiều.</br></br>Năm ngoái, iPhone XS Max từng làm hài lòng hàng triệu người dùng trên thế giới nhờ thời lượng pin xuất sắc. Để giúp iPhone 11 Pro Max vượt qua cái bóng của người tiền nhiệm, đội ngũ kĩ sư Apple đã có những cải tiến hiệu quả trên mọi phương diện như màn hình, chip, pin và nền tảng phần mềm nhằm tối ưu hóa thời gian sử dụng pin của người dùng. Kết quả cho thấy iPhone 11 Pro Max có pin lâu hơn iPhone XS Max tới 5 giờ đồng hồ, không chỉ vậy, bộ sạc nhanh đi kèm ngay trong hộp đựng còn cho phép bạn nạp cấp tốc 50% điện năng cho máy chỉ trong 30 phút – những thông số hết sức ấn tượng.",
    //                 "Camera là một trong những điểm nâng cấp mạnh mẽ nhất năm nay Apple mang đến cho chiếc iPhone 11 Pro Max. Đó là lần đầu tiên một chiếc iPhone sở hữu tới 3 camera ở mặt sau với 3 tiêu cự khác nhau mà người ta vẫn gọi là 'từ nhà tới trường' đáp ứng mọi nhu cầu nhiếp ảnh của người dùng. Ngoài một camera góc rộng và một camera tele vốn dĩ đã xuất hiện từ thời iPhone 7 Plus thì năm nay iPhone 11 Pro Max được trang bị thêm một ống kính góc siêu rộng nữa.</br></br>Ống kính này sẽ thực sự hữu ích khi bạn muốn lấy được nhiều chi tiết hơn khi đứng cùng một vị trí chụp mà không cần phải di chuyển ra xa chủ thể. Không chỉ nâng cấp về mặt phần cứng mà phần mềm bên trong máy cũng được bổ sung thêm nhiều tính năng đáng giá khác. Đó là chế độ chụp đêm giúp máy khắc phục hoàn toàn 'yếu điểm' chụp đêm không tốt vốn bị phàn nàn khá nhiều tới từ người dùng. </br></br>iPhone năm nay thực sự là một sự 'lột xác' của Apple về camera chụp đêm khi những bức ảnh cho ra có độ sáng và chi tiết cao hơn hẳn nếu đem so với chiếc iPhone Xs Max năm ngoái. Apple cũng mang lại một trải nghiệm rất thông minh khi tất cả máy sẽ tự động quyết định khi nào chụp đêm khi nào không và việc của bạn chỉ là đưa lên và chụp thôi. Chế độ chân dung không chỉ tốt hơn trong việc lấy nét vào đối tượng muốn chụp, mà còn hoạt động được ở khoảng cách 'bình thường' nhờ sự trợ giúp của cảm biến độ sâu. </br></br>Không chỉ có camera sau được nâng cấp mà camera selfie trên iPhone 11 Pro Max cũng được nâng lên độ phân giải 12 MP thay vì 7 MP như trước. Camera trước năm nay còn có thêm tính năng selfie góc rộng rất thích hợp cho các bạn đi chơi và chụp hình một nhóm đông người. Theo đó thì khi bạn xoay ngang chiếc điện thoại thì iPhone sẽ lập tức chuyển qua chế độ selfie góc rộng để bạn có thể chụp mà không cần tới gậy tự sướng. ",
    //                 "iPhone 11 64GB vẫn nhắm đến thiết kế sang trọng như các thiết bị khác của Apple. Vì vậy, viền nhôm kèm theo 2 mặt kính được thửa lại từ những thế hệ iPhone toàn màn hình trước. Thêm vào đó, ở các viền, máy được gia công kĩ lưỡng hơn do Apple đã có kinh nghiệm từ trước. Vậy nên, chất liệu kính gần như hòa chung với viền nhôm, tạo nên một sự mượt mà, tinh tế đáng có trên những mẫu flagship siêu cao cấp.</br></br>Ở mặt trước vẫn là thiết kế tai thỏ tràn viền thời thượng. Nhưng mặt sau đã được Apple trau chuốt hơn với mặt lưng được làm nhám nhằm giảm bám vây tay và bám bụi. Điều này giúp mặt kính sau của iPhone 11 luôn sạch sẽ và sang trọng dù trong bất kì điều kiện sử dụng nào.</br></br>Cụm vuông chứa hệ thống 3 camera hiện đại giúp mang lại nhiều tính năng tuyệt vời trên iPhone 11 64GB. Phần kính bảo vệ cụm camera cũng được làm liền mạch với mặt lưng vừa bảo vệ cụm camera tốt hơn mà lại còn tăng tính thẩm mỹ.</br></br>Tấm nền Liquid Retina được trang bị trên iPhone 11 được đánh giá là một trong những màn hình LCD hiển thị tốt nhất thế giới. Vậy nên, nó mang lại chất lượng hiển thị hoàn hảo, màu sắc được tái hiện hoàn toàn chân thực. Kèm theo đó, độ tương phản cực cao cho phép máy thể hiện màu sắc tốt trong bất kì trường hợp nào, đều không xảy ra hiện tượng biến màu.",
    //                 "iPhone 6s Plus sử dụng lớp vỏ hợp kim nhôm series 7000 mới, chất liệu đang được sử dụng trong ngành công nghiệp hàng không vũ trụ, cho độ bền hơn hẳn so với các thế hệ cũ. Vẫn là một thiết kế kiểu dáng mỏng, thanh lịch đầy sang trọng nhưng giờ iPhone 6s Plus đã mạnh mẽ và cứng cáp hơn. Một màu mới đem lại sự sang trọng cho người dùng. </br></br>Chip A9 là bộ vi xử lý 64bit thế hệ thứ 3 của Apple, có khả năng cung cấp hiệu suất tương đương với các máy tính để bàn mạnh mẽ. Bạn sẽ được trải nghiệm một chiếc iPhone nhanh hơn 70%, xử lý GPU đồ họa tốt hơn 90% trên mọi ứng dụng và các game 3D đồ họa cao. </br></br>Máy được trang bị màn hình Rentina chất lượng cao, kích thước lớn 5,5 inches cùng độ phân giải 1920 x 1080 pixels mang đến cho bạn trải nghiệm hình ảnh hoàn hảo. Dù bạn xem phim, đọc báo hay làm bất cứ việc gì, một màn hình lớn vẫn luôn tiện dụng hơn. </br></br>iPhone 6s Plus sở hữu hệ thống camera sắc nét với độ phân giải của camera sau giờ đây được nâng lên từ 8MP lên 12MP kết hợp thêm tính năng ổn định hình ảnh quang học OIS, camera iPhone 6s Plus cho khả năng chụp ảnh rất chuyên nghiệp, sắc nét, hình ảnh chi tiết. Không chỉ chụp ảnh xuất sắc, giờ đây iPhone 6s Plus còn có thể quay được video 4K, gấp 4 lần độ phân giải của video Full HD 1080p trước đây. Cả chụp ảnh và quay phim đều tuyệt vời, bạn sẽ làm được rất nhiều điều trên camera iPhone 6s Plus.",
    //                 "iPhone 7 Plus là chiếc iPhone đầu tiên được trang bị camera kép có cùng độ phân giải 12 MP, đem lại khả năng chụp ảnh ở hai tiêu cự khác nhau. Camera chính chụp hình góc rộng, còn camera phụ có tiêu cự phù hợp để chụp chân dung, có tính năng chụp chân dung xóa phông (làm mờ hậu cảnh). </br></br>Ngoài trái tim Apple A10 Fusion 4 nhân với hiệu năng cực kì mạnh mẽ và ấn tượng thì iPhone 7 Plus còn được cập nhật hệ điều hành mới nhất với nhiều tính năng bất ngờ, và thú vị. “Táo khuyết” cũng không quên nhấn mạnh iPhone 7 Plus sẽ nhanh hơn iPhone đời đầu tới… 140 lần. Những ai mê chơi game trên di động cũng sẽ “phải lòng” iPhone mới khi có chip xử lý đồ họa được nâng tầm đúng chất “máy chơi game”. </br></br>Màn hình Retina trên 7 Plus hỗ trợ DCI-P3 gam màu rộng, nghĩa là chúng có khả năng tái tạo màu sắc trong phạm vi của sRGB. Nói đơn giản, chúng có thể hiển thị sống động hơn, sắc thái hình ảnh tốt hơn trước đó. Độ phân giải, mật độ điểm ảnh và kích thước màn hình vẫn giữ nguyên so với iPhone 6s Plus. </br></br>Điểm nhấn ấn tượng nhất nằm ở mặt lưng của sản phẩm với hiệu ứng phản chiếu ánh sáng khi thay đổi góc nhìn rất đặc biệt. Hiệu ứng này cũng được áp dụng cho toàn bộ khung máy, từ cạnh trên, cạnh dưới cho đến các nút bấm nên cho cảm giác một thiết bị cực kỳ hoàn thiện, gần như không có bất kỳ một chi tiết thừa nào cả.",
    //                 "Smartphone iPhone 8 Plus giữ nguyên hoàn toàn những đường nét thiết kế đã hoàn thiện từ thế hệ trước nhưng sử dụng phong cách 2 mặt kính cường lực kết hợp bộ khung kim loại. Mặt lưng kính bo cong 2.5D thời thượng, khung kim loại được gia cố cứng cáp, bền bỉ hơn với 7 lớp xử lý màu sơn, hạn chế bong tróc. Thay đổi này đồng thời loại bỏ chi tiết đường anten thừa ở mặt lưng như các thế hệ trước, mang đến vẻ đẹp hoàn hảo hơn. </br></br>Không có sự thay đổi trong thông số camera (vẫn là cụm camera kép cùng độ phân giải 12 MP so với chiếc điện thoại IPhone 7 Plus), chiếc điện thoại iPhone này chủ yếu được tập trung nâng cấp về ống kính, cảm biến, vi xử lý hình ảnh để nâng cao chất lượng ảnh chụp. </br></br>Khả năng zoom quang 2X không thay đổi chất lượng cũng như xóa phông chân dung vẫn được tích hợp trên iPhone 8 Plus cùng với Portrait Lighting, tính năng chụp ảnh sân khấu hoàn toàn mới. Camera trước vẫn là độ phân giải 7 MP cùng tính năng chụp chân dung ánh sáng sân khấu đặc biệt. </br></br>Một trong những điểm nhất quan trọng nhất ở thế hệ iPhone 8 Plus chính là sức mạnh phần cứng, con chip Apple A11 như trên iPhone X cho hiệu năng vượt trội hơn rất nhiều so với trước đây. Vi xử lý Apple A11 còn đặc biệt tối ưu cho 3D và thực tế ảo tăng cường AR, một trải nghiệm hoàn toàn mới mẻ trên smartphone.",
    //                 "Apple A12 Bionic được xây dựng trên tiến trình 7nm đầu tiên của hãng với 6 nhân giúp iPhone Xs có được một hiệu năng “vô đối” cùng khả năng tiết kiệm năng lượng tối ưu. Bên cạnh đó, bộ xử lý đồ họa của máy cũng được Apple thiết kế lại giúp việc chơi game hay dựng hình mượt mà và nhanh chóng hơn gấp nhiều lần. Chưa dừng lại ở đó, iPhone Xs còn được tích hợp thêm trí thông minh nhân tạo giúp tối ưu phần cứng để bạn có thể xử lý các tác vụ một cách đơn giản nhất. </br></br>So với đàn anh iPhone X thì iPhone XS được chăm chút hơn về khả năng hiển thị khi được trang bị hàng loạt các công nghệ cao cấp. Trên kích thước 5.8 inch kết hợp tấm nền OLED đem lại cho bạn một trải nghiệm tuyệt vời khi xem phim hay lướt web với dải màu rộng và độ chi tiết cực kì cao. Hơn nữa, màn hình của máy còn hỗ trợ công nghệ HDR10 cùng tần số quét 120 Hz giúp hình ảnh sống động cũng chuyển động mượt mà hơn. </br></br>iPhone XS sở hữu hệ thống âm thanh 2 chiều cực kì tuyệt vời được Apple tinh chỉnh mang lại dải âm rộng và chi tiết hơn. Nhờ thế mà bạn có thể thưởng thức những bộ phim trở nên thú vị và sống động hơn mà không cần dùng đến một chiếc tai nghe để có một chất âm tốt. </br></br>Hệ thống nhận diện khuôn mặt 3D trên iPhone Xs đã được Apple cải tiến cũng như hỗ trợ trí thông minh nhân tạo. Bạn chỉ cần nhìn vào iPhone Xs thì máy sẽ tự động mở khóa và hiển thị tất cả các thông tin trên màn hình nhờ vào một thuật toán mới của Apple. Chưa hết, với hệ thống camera này bạn còn có thể tạo ra những bức ảnh thực tế ảo AR vô cùng đáng yêu.",
    //                 "Chưa bao giờ trong thế giới smartphone lại có một model nhận được nhiều ý kiến trái chiều về thiết kế như iPhone 11 Pro 64GB. Trước khi được chính thức ra mắt, mọi ngóc ngách trên internet đều tràn ngập rất nhiều hình ảnh “hàng tạm bợ” của iPhone 11 Pro 64GB với sự thay đổi đập ngay vào mắt là cụm 3 camera sau được bao trọn trong một hình vuông mà nhiều người còn đùa là trông chẳng khác gì bếp điện từ. Và thực tế thì sao? Chắc hẳn ai trong chúng ta cũng tự nhận thấy được phiên bản thật cũng không có gì khác biệt. Tuy vậy, vẫn có nhiều người hoàn toàn hài lòng và thích thú với sự thay đổi này, họ cho rằng đây là thiết kế đậm chất rất “Apple” từ xưa đến giờ. </br></br>Ra mắt cùng với máy sẽ là hệ điều hành iOS 13 được cải tiến nhiều về mặt giao diện nhằm mang lại trải nghiệm người dùng tốt hơn. Giật lag và độ trễ là những thứ gần như bạn sẽ ít khi phải gặp phải khi sử dụng chiếc iPhone 11 Pro trên tay. </br></br>iPhone 11 Pro là chiếc iPhone đầu tiên có tới 3 camera, sở hữu tính năng chụp đêm hay chụp ảnh với góc siêu rộng, ... Nếu như trước đây iPhone thường bị chê là chụp ảnh trong điều kiện khá tệ thì năm nay Apple đã mang tới một cái nhìn hoàn toàn khác. Tính năng mới này được Apple gọi là chế độ Night Mode mang lại những bức ảnh 'vượt xa mong đợi' với độ sáng cao và chi tiết được giữ lại khá nhiều. </br></br>Không chỉ có camera sau mà camera selfie trên iPhone 11 Pro giờ đây cũng đã được nâng cấp lên độ phân giải 12 MP thay vì 7 MP như trước. Và giờ đây bạn đã có thể quay video độ phân giải 4K với camera trước, một nâng cấp rất đáng giá dành cho người người thường xuyên quay video. Một tính năng khác cũng được rất nhiều người dùng yêu thích đó chính là khả năng tự động điều chỉnh góc chụp để bạn có thể selfie nhóm dễ dàng hơn.",
    //                 "Với mỗi lần ra mắt, Apple lại giới thiệu một con chip mới và Apple A12 Bionic là con chip đầu tiên sản xuất với tiến trình 7nm được tích hợp trên iPhone Xr. Apple A12 được tích hợp trí tuệ thông minh nhân tạo, mọi phản hồi trên máy đều nhanh chóng và gần như là ngay lập tức, kể cả khi bạn chơi game hay thao tác bình thường. Hơn nữa với AI trên Apple A12, iPhone Xr có thể ghi nhớ được thao tác hằng ngày của bạn để hoàn thiện và hỗ trợ người dùng tốt hơn. </br></br>Trước đây để trải nghiệm tối đa âm thanh thì tai nghe là thiết bị không thể thiếu. Nhưng với iPhone thế hệ mới, công nghệ âm thanh đa chiều từ loa sẽ giúp bạn hoà vào âm nhạc cũng như các bộ phim thú vị hay chơi game hào hứng nhất. </br></br>Nếu ai đó khẳng định chỉ camera kép mới xoá phông thì đó là một sai lầm. iPhone Xr có khả năng tạo hiệu ứng bokeh tuyệt đỉnh, làm nổi bật chân dung người chụp mà hình ảnh vẫn rất sắc nét, chi tiết. iPhone Xr hỗ trợ người chụp ảnh từ cơ bản đến cả nâng cao chuyên nghiệp, đem lại sự hài lòng tối đa. Máy còn có tính năng Smart HDR: Dù bạn chụp ảnh có độ sáng tối khác biệt nhiều nhưng vẫn giữ đc chủ thể. </br></br>Như thường lệ, các dòng siêu phẩm mới sau này đều được hỗ trợ chống nước chống bụi và iPhone Xr cũng thế. Ngoài ra bảo mật khuôn mặt Face ID càng ngày càng hoàn thiện giúp bạn mở máy nhanh chóng trong mọi điều kiện sử dụng."
    //             );

    //             TSKT1 = new Array("OLED", "IPS LCD", "LED-backlit IPS LCD", "LED-backlit IPS LCD", "LED-backlit IPS LCD", "OLED", "OLED", "IPS LCD", "IPS LCD");
    //             TSKT2 = new Array("1242 x 2688 Pixels", "828 x 1792 Pixels", "Full HD (1080 x 1920 Pixels)", "Full HD (1080 x 1920 Pixels)", "Full HD (1080 x 1920 Pixels)", "1125 x 2436 Pixels", "1125 x 2436 Pixels", "828 x 1792 Pixels", "828 x 1792 Pixels");
    //             TSKT3 = new Array("6.5'", "6.1'", "5.5'", "5.5'", "5.5'", "5.8'", "5.8'", "6.1'", "6.1'");
    //             TSKT4 = new Array("12 MP", "12 MP", "5 MP", "7 MP", "7 MP", "7 MP", "12 MP", "7 MP", "7 MP");
    //             TSKT5 = new Array("Chế độ Slow Motion", "Chế độ Slow Motion", "Selfie ngược sáng HDR", "Selfie ngược sáng HDR", "Nhận diện khuôn mặt", "Selfie ngược sáng HDR", "Chế độ Slow Motion", "Selfie ngược sáng HDR", "Chống rung quang học (OSI)");
    //             TSKT6 = new Array("3 camera 12 MP", "12 MP", "12 MP", "12 MP", "Chính 12 MP & Phụ 12 MP", "Chính 12 MP & Phụ 12 MP", "3 camera 12 MP", "12 MP", "12 MP");
    //             TSKT7 = new Array("Quay phim 4K 2160p@60fps", "Quay phim 4K 2160p@60fps", "Quay phim 4K 2160p@30fps", "Quay phim 4K 2160p@30fps", "Quay phim 4K 2160p@60fps", "Quay phim 4K 2160p@60fps", "Quay phim 4K 2160p@60fps", "Quay phim 4K 2160p@60fps", "Quay phim 4K 2160p@60fps");
    //             TSKT8 = new Array("6", "6", "2", "4", "6", "6", "6", "6", "6");
    //             TSKT9 = new Array("Apple A13 Bionic 6 nhân", "Apple A13 Bionic", "Apple A9 2 nhân", "Apple A10 Fusion", "Apple A11 Bionic", "Apple A12 Bionic", "Apple A13 Bionic", "Apple A12 Bionic", "Apple A12 Bionic");
    //             TSKT10 = new Array("4 GB", "4 GB", "2 GB", "3 GB", "3 GB", "4 GB", "4 GB", "3 GB", "3 GB");
    //             TSKT11 = new Array("Apple GPU 4 nhân", "Apple GPU 4 nhân", "PowerVR GT7600", "Chip đồ họa 6 nhân", "Apple GPU 3 nhân", "Apple GPU 4 nhân", "Apple GPU 4 nhân", "Apple GPU 4 nhân", "Apple GPU 4 nhân");
    //             TSKT12 = new Array("512 GB", "256 GB", "32 GB", "32 GB", "64 GB", "64 GB", "64 GB", "128 GB", "128 GB");
    //             TSKT13 = new Array("Dài 158 mm - Ngang 77.8 mm - Dày 8.1 mm", "Dài 150.9 mm - Ngang 75.7 mm - Dày 8.3 mm", "Dài 158.2 mm - Ngang 77.9 mm - Dày 7.3 mm", "Dài 158.2 mm - Ngang 77.9 mm - Dày 7.3 mm", "Dài 158.4 mm - Ngang 78.1 mm - Dày 7.5 mm", "Dài 143.6 mm - Ngang 70.9 mm - Dày 7.7 mm", "Dài 144 mm - Ngang 71.4 mm - Dày 8.1 mm", "Dài 150.9 mm - Ngang 75.7 mm - Dày 8.3 mm", "Dài 150.9 mm - Ngang 75.7 mm - Dày 8.3 mm");
    //             TSKT14 = new Array("226 g", "194 g", "192 g", "188 g", "202 g", "177 g", "188 g", "194 g", "194 g");
    //             TSKT15 = new Array("Pin chuẩn Li-Ion", "Pin chuẩn Li-Ion", "Pin chuẩn Li-Ion", "Pin chuẩn Li-Ion", "Pin chuẩn Li-Ion", "Pin chuẩn Li-Ion", "Pin chuẩn Li-Ion", "Pin chuẩn Li-Ion", "Pin chuẩn Li-Ion");
    //             TSKT16 = new Array("3969 mAh", "3110 mAh", "2750 mAh", "2900 mAh", "2691 mAh", "2658 mAh", "3046 mAh", "2942 mAh", "2942 mAh");
    //             TSKT17 = new Array("Có", "Có", "", "", "Có", "Có", "Có", "Có", "Có");
    //             TSKT18 = new Array("Nano SIM & eSIM", "Nano SIM & eSIM", "1 Nano SIM", "1 Nano SIM", "1 Nano SIM", "Nano SIM & eSIM", "Nano SIM & eSIM", "Nano SIM & eSIM", "Nano SIM & eSIM");
    //             TSKT19 = new Array("Wi-Fi 802.11 a/b/g/n/ac/ax", "Wi-Fi 802.11 a/b/g/n/ac/ax", "Wi-Fi 802.11 a/b/g/n/ac", "Wi-Fi 802.11 a/b/g/n/ac", "Wi-Fi 802.11 a/b/g/n/ac", "Wi-Fi 802.11 a/b/g/n/ac", "Wi-Fi 802.11 a/b/g/n/ac/ax", "Wi-Fi 802.11 a/b/g/n/ac", "Wi-Fi 802.11 a/b/g/n/ac");
    //             TSKT20 = new Array("LE, A2DP, v5.0", "LE, A2DP, v5.0", "A2DP, v4.1", "LE, A2DP, v4.2", "EDR, LE, A2DP, v5.0", "LE, A2DP, v5.0", "LE, A2DP, v5.0", "LE, A2DP, v5.0", "LE, A2DP, v5.0");
    //             TSKT21 = new Array("Lightning", "Lightning", "Lightning", "Lightning", "Lightning", "Lightning", "Lightning", "Lightning", "Lightning");
    //             TSKT22 = new Array("12 tháng", "12 tháng", "12 tháng", "12 tháng", "12 tháng", "12 tháng", "12 tháng", "12 tháng", "12 tháng");

    //             src += "../STORE/storei.html?1&0";
    //             break;
    //         }

    //         // SAMSUNG
    //     case '2':
    //         {
    //             gia = new Array("28.990.000₫", "24.990.000₫", "8.790.000₫", "3.090.000₫", "4.290.000₫", "6.290.000₫", "3.590.000₫", "6.990.000₫", "12.990.000₫");
    //             breadcrumb1 = new Array("SAMSUNG");
    //             breadcrumb2 = new Array("Samsung Galaxy S10+ 512GB", "Samsung Galaxy Note 10+", "Samsung Galaxy A70", "Samsung Galaxy A10", "Samsung Galaxy A30 32GB", "Samsung Galaxy A30s", "Samsung Galaxy A20", "Samsung Galaxy A50s", "Samsung Galaxy A80");

    //             mota = new Array(
    //                 "Samsung S10+ 512GB là phiên bản có bộ nhớ cực lớn, tương đương cả một mẫu PC thông thường, cho phép bạn lưu trữ mọi thứ và mang trên mình những công nghệ hàng đầu của smartphone hiện nay.</br></br>Không chỉ là chụp ảnh, mỗi lần bạn mở camera trên Galaxy S10+ 512GB là một tác phẩm nghệ thuật được tạo ra. 3 camera với 3 vai trò khác nhau bao gồm camera chụp thông thường; camera tele để chụp gần và camera góc siêu rộng để chụp được khung hình nhiều hơn. Dù là hoàn cảnh nào đi nữa thì Samsung Galaxy S10+ cũng xử lý xuất sắc theo cách riêng biệt. .</br></br>Samsung S10+ 512GB hứa hẹn là chiếc smartphone cao cấp có thời lượng pin tốt bậc nhất thị trường nhờ viên pin dung lượng lên tới 4100 mAh. Ngoài ra, chế độ tiết kiệm năng lượng linh hoạt dựa theo thói quen sử dụng của chính người dùng giúp cho thời lượng pin còn được kéo dài hơn nữa. Với Galaxy S10+, bạn có thể dùng nhiều hơn, sạc ít hơn. .</br></br>Samsung Galaxy S10+ 512GB tích hợp trình cải tiến hiệu năng thông minh, có thể nhận ra thói quen sử dụng điện thoại của bạn, sau đó tối ưu hóa cách bạn tương tác với điện thoại. Thậm chí máy có thể dự đoán những ứng dụng bạn hay sử dụng để tải trước, cho tốc độ mở ứng dụng nhanh hơn. Mọi thứ đều diễn ra rất mượt mà, tự nhiên, không làm bạn phải khó chịu vì chờ đợi hay những hiện tượng lag giật không mong muốn.",
    //                 "Trông ngoại hình khá giống nhau, tuy nhiên Samsung Galaxy Note 10+ sở hữu khá nhiều điểm khác biệt so với Galaxy Note 10 và đây được xem là một trong những chiếc máy đáng mua nhất trong năm 2019, đặc biệt dành cho những người thích một chiếc máy màn hình lớn, camera chất lượng hàng đầu. .</br></br>Galaxy Note 10+ có camera chính 12 MP với khẩu độ có thể thay đổi từ F/1.5 – F/2.4, hỗ trợ chống rung quang học OIS và tự động lấy nét dual-pixel. Tiếp theo là cảm biến camera góc siêu rộng 16 MP khẩu độ F/2.2 cùng ống kính tele 12 MP khẩu độ F/2.1 và nó cũng có thêm 1 cảm biến 3D ToF, điều mà Samsung Galaxy Note 10 không được trang bị. .</br></br>Samsung Galaxy Note 10+ chính là smartphone duy nhất tại thời điểm hiện tại hỗ trợ sạc nhanh lên tới 45W của Samsung. Công nghệ sạc nhanh Superfast Charge mới này cung cấp nhiều năng lượng hơn so với chuẩn sạc xuất hiện trên các flagship Samsung trước đây. Nhanh gấp ba lần Adaptive Fast Charge và nhanh hơn 6 lần so với sạc qua cổng USB tiêu chuẩn. Công nghệ sạc siêu nhanh này giúp bạn có thể sạc đầy viên pin có dung lượng 4300 mAh của máy chỉ trong chưa đầy một giờ đồng hồ. .</br></br>S Pen chính là một trong những yếu tố cốt lõi khiến dòng Galaxy Note trở nên đặc biệt và hấp dẫn. Bút S Pen có nhiều tính năng hơn bút cảm ứng stylus thông thường, từ ghi chú nhanh bằng cách viết trên màn hình khóa, đến chụp ảnh từ xa với S Pen. Giờ đây bút S Pen trên Note 10+ đã được nâng cấp, và hiện tại đã hỗ trợ điều khiển bằng cử chỉ. Tính năng này cho phép người dùng điều khiển một số ứng dụng của Samsung như camera,… từ xa mà không cần chạm vào điện thoại.",
    //                 "Màn hình của chiếc Galaxy A70 có kích thước khá lớn lên đến 6.7 inch độ phân giải Full HD+ trên tấm nền Super AMOLED. Các cạnh viền bezel được tinh chỉnh mỏng hơn, điều này giúp máy trông gọn gàng và cân xứng hơn rất nhiều. Samsung vẫn trang bị cho Galaxy A70 một mặt lưng vẫn bằng nhựa, nhưng sử dụng chất liệu cao cấp hơn mà Samsung gọi là “3D Graffitistic”. .</br></br>Tương tự như người anh em Galaxy A50 thì Galaxy A70 vẫn sở hữu cho mình công nghệ cảm biến vân tay dưới màn hình đang rất hot hiện nay. Tốc độ nhận diện và mở khóa máy khá nhanh giúp bạn tiết kiệm được thời gian so với việc nhập mật khẩu thông thường. .</br></br>Cụm 3 camera trên Galaxy A70 đã được nâng cấp rõ rệt với camera chính độ phân giải 32 MP cùng ống kính thứ 2 vẫn là 8 MP chụp ảnh góc siêu rộng và ống kính 5 MP dùng để chụp ảnh chân dung xóa phông. Bên cạnh đó với công nghệ AI Camera đi kèm giúp máy có thể nhận diện được 20 vật thể khác nhau để có thể điều chỉnh màu sắc, độ tương phản và độ sáng sao cho phù hợp. .</br></br>Máy được trang bị vi xử lý Snapdragon 675 mạnh mẽ, đi kèm đó là dung lượng RAM 6 GB, bộ nhớ trong 128 GB. Đặc biệt dung lượng pin lên tới 4500 mAh giúp bạn sử dụng cả ngày mà không phải lo lắng về việc sạc pin cho thiết bị.",
    //                 "Galaxy A10 - chiếc smartphone rẻ nhất ở dòng A của Samsung vừa được trình làng nhưng sở hữu nhiều đặc điểm ưu việt về thiết kế màn hình và hiệu năng với chip Exynos 7884. Nó có thiết kế bo tròn với màn hình tràn viền kiểu 'giọt nước' kiểu mới mà Samsung gọi đó là Infinity-V. Kiểu thiết kế này trông khá dễ thương và cho tỉ lệ hiển thị màn hình được đạt tối đa. Màn hình của máy khá lớn 6.2 inch với tấm nền IPS LCD có độ phân giải HD+ mang đến cho bạn những trải nghiệm hình ảnh sắc nét và sinh động nhất là khi xem phim chất lượng cao. .</br></br>Viên pin của Samsung Galaxy A10 có dung lượng khá tốt 3400 mAh đủ để kéo dài thời gian trải nghiệm của bạn đến hết ngày. Chiếc điện thoại Samsung này sử dụng cổng sạc Micro USB dễ tìm thấy ở bất cứ nơi đâu hiện nay, rất thuận tiện trong việc lắp năng lượng lại cho thiết bị. .</br></br>'Cậu út' trong dòng A của Samsung sử dụng ống kính đơn ở mặt sau có độ phân giải 13 MP chụp hình đẹp mắt với chế độ làm đẹp huyền thoại và có khả năng quay video Full HD 1080p. Ở mặt trước sử dụng ống kính 5 MP cũng được tích hợp chế độ làm đẹp, bạn có thể thoải mái chụp ảnh để khoe với mọi người mà không cần tải thêm một ứng dụng chụp hình thứ ba nào khác để hỗ trợ. .</br></br>Galaxy A10 được trang bị con chip Exynos 7884 'cây nhà lá vườn' của Samsung đủ cho máy có độ ổn định tốt trong các tác vụ hằng ngày của bạn như lướt web, chơi game nhẹ, xem phim,.. Dung lượng của máy có phần hơi hạn chế với 2 GB RAM và 32 GB bộ nhớ trong, tuy nhiên có thể mở rộng dung lượng bằng thẻ nhớ MicroSD lên đến 512 GB đáp ứng nhu cầu lưu trữ dữ liệu cá nhân của bạn. ",
    //                 "Samsung Galaxy A30 3GB/32GB là một trong 2 chiếc smartphone thuộc dòng Galaxy A đầu tiên được Samsung giới thiệu trong năm 2019, máy mang nhiều tính năng cao cấp nhưng mức giá rất phải chăng. Chiếc điện thoại Samsung mới thể hiện sự chau truốt trong từng chi tiết và nó đã thực sự mang lại một trải nghiệm tốt hơn nhiều so với thế hệ cũ. .</br></br>Samsung Galaxy A30 sở hữu màn hình Infinity-U hoàn toàn mới, có kích thước lên tới 6.4 inch trên tấm nền Super AMOLED với độ phân giải Full HD+ hứa hẹn sẽ cho bạn sự trải nghiệm tuyệt vời nhất. Màn hình của máy cũng sở hữu tính năng Always On Display giúp bạn có thể xem nhanh các thông báo mà không cần bật sáng màn hình. Samsung Galaxy A30 cho độ sáng màn hình khá cao, góc nhìn rộng giúp việc sử dụng dưới điều kiện ánh nắng ngoài trời không gặp phải bất cứ khó khăn gì. .</br></br>Samsung Galaxy A30 được trang bị camera kép ở phía sau bao gồm camera chính 16 MP, khẩu độ f/1.7 và cảm biến góc rộng với độ phân giải 5 MP và khẩu độ f/2.2. Galaxy A30 cho ra những bức ảnh với màu sắc hài hòa, dễ chịu, các chi tiết khá rõ, đặc biệt là ở chế độ chụp phong cảnh hoặc cận cảnh. Camera selfie với độ phân giải lên tới 16 MP cũng sẽ là 'công cụ đắc lực' cho các bạn 'sống ảo' trên mạng xã hội.</br></br>Viên pin 4.000 mAh cung cấp năng lượng cho Galaxy A30 quá đủ cho 1 ngày dài làm việc. Điện thoại cũng hỗ trợ sạc nhanh 15W, vì vậy nếu pin hết, nó sẽ dễ dàng sạc đầy pin lại. Ngoài ra máy hỗ trợ cảm biến vân tay ở phía sau lưng, với thiết kế vừa tầm, giúp bạn thao tác mở máy hay bảo mật đều thuận tiện và nhanh chóng.",
    //                 "Samsung Galaxy A30s, chiếc smartphone mới ra mắt sở hữu nhiều ưu điểm nổi bật trong phân khúc, nổi bật nhất phải kể đến là dung lượng pin lên tới 4000 mAh,bộ 3 camera cùng vi xử lý đủ mạnh, ổn định. </br></br>Thay vì sử dụng camera kép như trên người anh em Samsung Galaxy A30 thì Samsung đã nâng cấp cho chiếc Galaxy A30s bộ 3 camera chất lượng ở mặt lưng. Máy sở hữu ống kính chính sẽ có độ phân giải 25 MP, ống kính thứ 2 là ống kính góc siêu rộng có độ phân giải 8 MP và một ống kính 5 MP hỗ trợ đo độ sâu trường ảnh. </br></br>Samsung Galaxy A30s được trang bị viên pin lên tới 4000 mAh, một con số khá ấn tượng trên smartphone tầm trung ở thời điểm hiện tại. Bạn hoàn toàn có thể sử dụng Samsung Galaxy A30s khá thoải mái trong hơn một ngày là điều hết sức bình thường. </br></br>Có thể bạn sẽ bất ngờ bởi chiếc Galaxy A30s mới sở hữu cho mình màn hình có kích thước lên tới 6.4 inch, còn lớn hơn cả chiếc Samsung Galaxy Note 10. Với tỷ lệ màn hình 19:9 đảm bảo cho bạn có một không gian trải nghiệm rộng rãi trên kích thước 6 inch nhưng vẫn tối ưu được diện tích tổng thể thân máy.",
    //                 "Samsung Galaxy A20 là chiếc máy rẻ nhất trong dòng Galaxy A của Samsung mang lại cho người dùng những trải nghiệm cao cấp của những chiếc máy tới từ Samsung nhưng vẫn không phải bỏ ra số tiền quá lớn. </br></br>Chiếc điện thoại Samsung dòng A mới mang trong mình màn hình có kích thước lên tới 6.4 inch mang lại một không gian rất thoải mái để các bạn chơi game hay xem phim. Nhờ tỉ lệ màn hình 19:9 cùng thiết kế Infinity-V thì bạn sẽ có một trải nghiệm khá mới mẻ và thích thú khi so với các màn hình 18:9 thông thường. </br></br>Pin luôn là vấn đề của những chiếc smartphone hiện nay, tuy nhiên với Galaxy A20 thì bạn hoàn toàn có thể yên tâm phần nào. Sở hữu viên pin có dung lượng 4000 mAh giúp bạn có thể sử dụng thoải mái cả ngày và thậm chí qua tới ngày thứ 2. Bên cạnh đó người dùng vẫn có tính năng tiết kiệm pin giúp máy có thể duy trì để sử dụng các tác vụ cơ bản trong nhiều giờ khi pin sắp cạn. </br></br>Samsung Galaxy A20 sở hữu cho mình cụm camera kép ở mặt lưng có độ phân giải lần lượt là chính 13 MP và phụ 5 MP có khả năng lấy góc siêu rộng. Điểm mạnh của máy chính là khả năng chụp và lưu ảnh rất nhanh, cùng khả năng chụp góc rộng và siêu rộng giúp bạn không bị bỏ lỡ bất cứ khoảnh khắc đẹp nào trong cuộc sống.",
    //                 "Nằm trong sứ mệnh nâng cao khả năng cạnh tranh với các smartphone đến từ nhiều nhà sản xuất Trung Quốc, mới đây Samsung tiếp tục giới thiệu phiên bản Samsung Galaxy A50s với nhiều tính năng mà trước đây chỉ xuất hiện trên dòng cao cấp.</br></br>Không nhiều chiếc smartphone trên thị trường sở hữu cụm camera chất lượng như Galaxy A50s. Cảm biến chính được nâng lên độ phân giải 48 MP giúp những hình ảnh bạn chụp có nhiều chi tiết hơn. Chúng ta cũng có thể chụp lại những bức ảnh góc rộng khi thấy một phong cảnh nào đó ấn tượng với camera thứ hai - góc siêu rộng 8 MP. </br></br>Mặt lưng đổi màu gradient không chỉ có mặt trên những thiết bị cao cấp mà còn dần được phổ cập nhiều hơn xuống những smartphone phân khúc dưới và điển hình là Galaxy A50s. Samsung đã sử dụng thiết kế 3D Glasstic trên chiếc smartphone này giúp mặt lưng tạo ra nhiều hiệu ứng màu sắc khác nhau khi ánh sáng chiếu vào và làm tăng thêm vẻ cao cấp. </br></br>Vân tay tích hợp bên trong màn hình đang là công nghệ của tương lai và hiện tại không nhiều smartphone được trang bị công nghệ này. Viên pin dung lượng lên tới 4000 mAh cũng sẽ cung cấp đủ thời gian sử dụng một cách thoải mái nhất trong vòng một ngày cho người dùng. Bên cạnh đó máy cũng hỗ trợ công nghệ sạc nhanh 15W giúp bạn rút ngắn được đáng kể thời gian chờ nạp đầy năng lượng cho máy.",
    //                 "Samsung Galaxy A80 là chiếc smartphone mang trong mình rất nhiều đột phá của Samsung và hứa hẹn sẽ là 'ngọn cờ đầu' cho những chiếc smartphone sở hữu một màn hình tràn viền thật sự. </br></br>Camera vừa trượt vừa xoay đầu tiên trên thế giới. Thực tế thì xu hướng màn hình tràn viền đã bắt đầu cách đây khá lâu nhưng có rất ít các hãng có thể mang một màn hình tràn viền đúng nghĩa lên chiếc smartphone của mình. </br></br>Và Samsung Galaxy A80 là một hướng đi mới của Samsung về việc làm smartphone tràn viền khi hãng bố trí cụm camera chính (cũng chính là camera selfie) có thể vừa xoay vừa trượt. </br></br>Samsung Galaxy A80 được cung cấp năng lượng bởi viên pin 3.700 mAh với hỗ trợ sạc siêu nhanh 25W, hỗ trợ chế độ tiết kiệm năng lượng cAdaptive Power Saving. Cảm biến vân tay dưới màn hình cũng xuất hiện trên Samsung Galaxy A80 giúp người dùng được trải nghiệm những công nghệ bảo mật tiên tiến nhất hiện nay. </br></br>Samsung Galaxy A80 là chiếc smartphone đầu tiên sử dụng con chip mới của Qualcomm được sản xuất dựa trên tiến trình 8nm giúp tiết kiệm điện năng đáng kể. Đặc biệt con chip này được tối ưu hóa cho việc chơi game nên chắc chắn sẽ làm hài lòng các game thủ game mobile. Nó cũng được hỗ trợ bởi trí tuệ nhân tạo (AI), cho phép điều chỉnh pin, CPU và RAM của dựa trên hành vi sử dụng của người dùng từ đó giúp máy khởi động ứng dụng nhanh và mượt mà hơn."
    //             );

    //             TSKT1 = new Array("Dynamic AMOLED", "Dynamic AMOLED", "Super AMOLED", "IPS LCD", "Super AMOLED", "Super AMOLED", "Super AMOLED", "Super AMOLED", "Super AMOLED");
    //             TSKT2 = new Array("2K+ (1440 x 3040 Pixels)", "2K+ (1440 x 3040 Pixels)", "Full HD+ (1080 x 2400 Pixels)", "HD+ (720 x 1520 Pixels)", "Full HD+ (1080 x 2340 Pixels)", "HD+ (720 x 1560 Pixels)", "HD+ (720 x 1560 Pixels)", "Full HD+ (1080 x 2340 Pixels)", "Full HD+ (1080 x 2400 Pixels)");
    //             TSKT3 = new Array("6.4'", "6.8'", "6.7'", "6.2'", "6.4'", "6.4'", "6.4'", "6.4'", "6.7'");
    //             TSKT4 = new Array("Chính 10 MP & Phụ 8 MP", "10 MP", "32 MP", "5 MP", "16 MP", "16 MP", "8 MP", "32 MP", "Chính 48 MP & Phụ 8 MP, TOF 3D");
    //             TSKT5 = new Array("Nhận diện khuôn mặt", "Tự động lấy nét", "Sticker AR (biểu tượng thực tế ảo)", "Nhận diện khuôn mặt", "Quay video HD", "Tự động lấy nét", "Tự động lấy nét", "Selfie ngược sáng HDR", "Selfie ngược sáng HDR");
    //             TSKT6 = new Array("Chính 12 MP & Phụ 12 MP, 16 MP", "Chính 12 MP & Phụ 12 MP, 16 MP, TOF 3D", "Chính 32 MP & Phụ 8 MP, 5 MP", "13 MP", "Chính 16 MP & Phụ 5 MP", "Chính 25 MP & Phụ 8 MP, 5 MP", "Chính 13 MP & Phụ 5 MP", "Chính 48 MP & Phụ 8 MP, 5 MP", "Chính 48 MP & Phụ 8 MP, TOF 3D");
    //             TSKT7 = new Array("4K 2160p@60fps", "4K 2160p@60fps", "4K 2160p@30fps", "FullHD 1080p@30fps", "FullHD 1080p@30fps", "FullHD 1080p@30fps", "FullHD 1080p@30fps", "Quay phim 4K 2160p@30fps", "Quay phim 4K 2160p@30fps");
    //             TSKT8 = new Array("8", "8", "8", "8", "8", "8", "8", "8", "8");
    //             TSKT9 = new Array("Exynos 9820", "Exynos 9825", "Snapdragon 675", "Exynos 7884", "Exynos 7904", "Exynos 7904", "Exynos 7884", "Exynos 9610", "Snapdragon 730");
    //             TSKT10 = new Array("8 GB", "12 GB", "6 GB", "2 GB", "3 GB", "4 GB", "3 GB", "4 GB", "8 GB");
    //             TSKT11 = new Array("Mali-G76 MP12", "Mali-G76 MP12", "Adreno 612", "Mali-G71 MP2", "Mali-G71 MP2", "Mali-G71", "Mali-G71", "Mali-G72 MP3", "Adreno 618");
    //             TSKT12 = new Array("512 GB", "256 GB", "128 GB", "32 GB", "32 GB", "64 GB", "32 GB", "64 GB", "128 GB");
    //             TSKT13 = new Array("Dài 157.6 mm - Ngang 74.1 mm - Dày 7.8 mm", "Dài 162.3 mm - Ngang 77.2 mm - Dày 7.9 mm", "Dài 164.3 mm - Ngang 76.7 mm - Dày 7.9 mm", "Dài 155.6 mm - Ngang 75.6 mm - Dày 7.94 mm", "Dài 158.5 mm - Ngang 74.5 mm - Dày 7.7 mm", "Dài 158.5 mm - Ngang 74.7 mm - Dày 7.8 mm", "Dài 158.4 mm - Ngang 74.7 mm - Dày 7.8 mm", "Dài 158.5 mm - Ngang 74.5 mm - Dày 7.7 mm", "Dài 165.2 mm - Ngang 76.5 mm - Dày 9.3 mm");
    //             TSKT14 = new Array("175 g", "196 g", "183 g", "168 g", "165 g", "166 g", "169 g", "169 g", "220 g");
    //             TSKT15 = new Array("Pin chuẩn Li-Ion", "Pin chuẩn Li-Ion", "Pin chuẩn Li-Ion", "Pin chuẩn Li-Ion", "Pin chuẩn Li-Ion", "Pin chuẩn Li-Po", "Pin chuẩn Li-Ion", "Pin chuẩn Li-Po", "Pin chuẩn Li-Ion");
    //             TSKT16 = new Array("4100 mAh", "4300 mAh", "4500 mAh", "3400 mAh", "4000 mAh", "4000 mAh", "4000 mAh", "4000 mAh", "3700 mAh");
    //             TSKT17 = new Array("Có", "Có", "Có", "Không", "Có", "Có", "Có", "Có", "Có");
    //             TSKT18 = new Array("2 SIM Nano (SIM 2 chung khe thẻ nhớ)", "2 SIM Nano (SIM 2 chung khe thẻ nhớ)", "2 Nano SIM", "2 Nano SIM", "2 Nano SIM", "2 Nano SIM", "2 Nano SIM", "2 Nano SIM", "2 Nano SIM");
    //             TSKT19 = new Array("Wi-Fi 802.11 a/b/g/n/ac/ax", "Wi-Fi 802.11 a/b/g/n/ac/ax", "Wi-Fi 802.11 a/b/g/n/ac", "Wi-Fi 802.11 b/g/n", "Wi-Fi 802.11 b/g/n", "Wi-Fi 802.11 a/b/g/n/ac", "Wi-Fi 802.11 b/g/n", "Wi-Fi 802.11 a/b/g/n/ac", "Wi-Fi 802.11 a/b/g/n/ac");
    //             TSKT20 = new Array("A2DP, LE, apt-X, v5.0", "LE, A2DP, apt-X, v5.0", "A2DP, LE, v5.0", "LE, A2DP, v4.2", "Có", "A2DP, LE, v5.0", "LE, A2DP, v4.2", "LE, A2DP, v5.0", "A2DP, LE, v5.0");
    //             TSKT21 = new Array("USB Type-C", "2 đầu Type-C", "2 đầu Type-C", "Micro USB", "USB Type-C", "USB Type-C", "USB Type-C", "USB Type-C", "2 đầu Type-C");
    //             TSKT22 = new Array("12 tháng", "12 tháng", "12 tháng", "12 tháng", "12 tháng", "12 tháng", "12 tháng", "12 tháng", "12 tháng");

    //             src += "../STORE/stores.html?1&0";
    //             break;
    //         }

    //         // XIAOMI
    //     case '3':
    //         {
    //             gia = new Array("9.990.000₫", "2.590.000₫", "4.990.000₫", "5.990.000₫", "7.990.000₫", "7.999.000₫", "4.490.000₫", "1.990.000₫", "3.290.000₫");
    //             breadcrumb1 = new Array("XIAOMI");
    //             breadcrumb2 = new Array("Xiaomi Mi 9", "Xiaomi Redmi 8A", "Xiaomi Redmi Note 8", "Xiaomi Redmi Note 8 Pro", "Xiaomi Mi 9T", "Xiaomi Pocophone F1", "Xiaomi A3 64GB", "Xiaomi Redmi Go", "Xiaomi Redmi 7");

    //             mota = new Array(
    //                 "Xiaomi Mi 9 đưa bạn đến những trải nghiệm đột phá nhờ bộ vi xử lý mạnh nhất thế giới Android mang tên Snapdragon 855. Con chip được sản xuất trên tiến trình 7nm, tiết kiệm năng lượng và hiệu năng đáng kinh ngạc. Phần cứng mạnh mẽ kết hợp với phần mềm thông minh giúp cho Xiaomi Mi 9 luôn mượt mà kể cả sau khi sử dụng trong thời gian dài. </br></br>Tốc độ sạc của Xiaomi Mi 9 được nâng tầm ở cả sạc có dây lẫn sạc không dây. Sạc có dây của Mi 9 có công suất lên đến 27W, trong khi đó sạc không dây công suất là 20W. So với chuẩn sạc thông thường thì Mi 9 sạc có dây nhanh hơn 34% và sạc không dây nhanh hơn 37%. </br></br>Xiaomi Mi 9 sở hữu 3 camera sau AI, trong đó camera chính có độ phân giải lên đến 48MP, cao gấp 4 lần so với 12MP của smartphone thông thường. Bạn có thể chụp ảnh và phóng to để xem rõ hơn từng chi tiết mà mọi thứ vẫn rất sắc nét. </br></br>Chụp ảnh chưa bao giờ chuyên nghiệp đến thế! 3 ống kính trên Xiaomi Mi 9 cho phép bạn chụp góc rộng, cận cảnh và góc siêu rộng. Ống kính góc siêu rộng giúp bạn thu tất cả cảnh quan rộng lớn vào một khung hình. ",
    //                 "Xiaomi Redmi 8A được trang bị viên pin có dung lượng cực lớn, lên tới 5000 mAh, cho bạn thỏa sức trải nghiệm cả ngày, chẳng cần bận tâm quá nhiều đến thời lượng pin. Còn nếu lỡ bạn chủ quan dẫn đến hết pin, thì yên tâm, sẽ chỉ mất ít giờ để sạc đầy Redmi 8A, nhờ việc nó hỗ trợ sạc nhanh 18W thông qua USB Type-C đời mới. </br></br>Redmi 8A sở hữu RAM 3GB (hoặc 2GB tùy phiên bản), vi xử lý Qualcomm Snapdragon 439 tám nhân 64-bit chạy trên giao diện MIUI 10 nổi tiếng của Xiaomi (trên nền tảng Android 9 Pie). Các thao tác thường ngày như lướt Facebook, xem phim,.. máy phản hồi khá nhanh. </br></br>Điểm số đo được trên Antutu đạt khoảng 85.000 điểm. Các tựa game nhẹ, trung bình như Zombie Tsunami, Subway Surfers,... máy đều đáp ứng tốt. Những game nặng hơn như Free Fire, Liên Quân Mobile, Asphalt 8 bạn hãy nhớ chỉnh mức cấu hình xuống thấp nhất để máy đỡ “quá tải” nhé. </br></br>Xiaomi Redmi 8A có mặt trước bắt mắt với màn hình giọt nước thời thượng, kích thước lớn 6.2 inch, được bảo vệ bằng lớp kính Gorilla Glass 5 cao cấp. Mặt lưng đi cùng thiết kế Aura Wave Grip hiện đại với những gợn sóng mịn màng, cho cảm giác cầm nắm tốt hơn, chống bám vân tay. ",
    //                 "Không chỉ có 2 hay 3 camera mà với chiếc smartphone mới Xiaomi Redmi Note 8 thì người dùng sẽ có tới 4 camera để thỏa mãn nhu cầu chụp ảnh của mình. Xiaomi Redmi Note 8 sở hữu cho mình camera chính với độ phân giải khủng 'khủng' với 'số chấm' lên tới 48 MP. </br></br>Đi kèm là một camera góc rộng 8 MP, một cảm biến 2 MP hỗ trợ đo độ sâu trường ảnh phục vụ cho việc xóa phông và cuối cùng là một cảm biến 2 MP cho chụp ảnh macro.Chiếc máy này sử dụng công nghệ pixel-binning để kết hợp dữ liệu ánh sáng từ 4 pixels liền kề nhằm tạo ra hình ảnh có độ chi tiết cao. </br></br>Cấu hình vốn là thế mạnh của các thiết bị Xiaomi nên sẽ không quá ngạc nhiên khi Xiaomi Redmi Note 8 được cung cấp thông số kỹ thuật mạnh mẽ cùng mức giá rẻ.Thiết bị này sử dụng bộ vi xử lý Qualcomm Snapdragon 665 8 nhân, với các phiên bản bộ nhớ 4 GB RAM, 64 GB bộ nhớ trong. </br></br>Xiaomi Redmi Note 8 sở hữu cho mình viên pin có dung lượng lên tới 4000 mAh cho bạn sử dụng khá thoải mái cả ngày dài.Bên cạnh đó là khả năng sạc nhanh lên tới 18W giúp bạn rút ngắn được đáng kể thời gian chờ sạc pin cho thiết bị.",
    //                 "Xiaomi Redmi Note 8 Pro là smartphone đầu tiên được trang bị bộ xử lý Helio G90T của MediaTek, 8 nhân tốc độ 2.0 Ghz.Để phục vụ tốt nhất cho việc chơi game thì chiếc máy này có một công cụ dự đoán mạng thông minh giúp đường truyền luôn có kết nối tốt nhất. </br></br>Bên cạnh đó là khả năng kết nối đồng thời tới hai mạng WiFi - nếu một đường truyền Wifi bất ngờ yếu đi thì thiết bị sẽ tự động sử dụng kết nối Wifi tốt hơn hoặc LTE thay thế để dự phòng. </br></br>Máy sẽ có 6 GB RAM và 64 GB bộ nhớ trong cho bạn thoải mái lưu trữ dữ liệu cá nhân.Xiaomi Redmi Note 8 Pro là một trong những smartphone đầu tiên trên thế giới sở hữu camera với độ phân giải lên tới 64 MP. </br></br>Hệ thống camera này hỗ trợ công nghệ ghép điểm ảnh, quay video 4K, chống rung điện tử, phát hiện phong cảnh và chân dung với sự hỗ trợ của AI để tăng hiệu suất chụp ảnh.Máy còn hỗ trợ zoom tới 10X giúp người dùng có thể chụp được cả những vật thể ở xa.",
    //                 "Sau xu thế màn hình tai thỏ hay màn hình giọt nước thì giờ đây các hãng lại chạy đua nhau để mang lại một trải nghiệm màn hình thực thụ và Mi 9T là một chiếc máy như vậy.Máy có màn hình kích thước lên đến 6.39 inch độ phân giải Full HD+, sử dụng tấm nền AMOLED cho trải nghiệm hình ảnh và màu sắc rực rỡ, phù hợp với nhu cầu giải trí cá nhân. </br></br>Màn hình này cũng sở hữu độ sáng khá cao giúp bạn không gặp bất cứ khó khăn nào khi sử dụng ngoài trời.Trên chiếc điện thoại Xiaomi này người dùng sẽ không phải hi sinh bất cứ bộ phận nào để đặt cảm biến vân tay khi bạn có thể sử dụng vân tay trong màn hình để mở khóa máy. </br></br>Đây là một công nghệ rất được người dùng yêu thích khi nó mang lại sự liền mạch cho thiết bị mà vẫn có thể sử dụng cảm biến vân tay ở mặt trước như truyền thống.Tốc độ mở khóa của cảm biến này khá nhanh, không hề thua kém các loại cảm biến vân tay truyền thống khác. </br></br>Bên cạnh đó bạn cũng có thể sử dụng tính năng mở khóa khuôn mặt bằng camera trước của máy.Xiaomi Mi 9T sở hữu cụm camera 'thò thụt' ở mặt trước với độ phân giải khủng lên tới 20 MP.",
    //                 "Poco F1 mang trên mình bộ vi xử lý Snapdragon 845, con chip di động mạnh mẽ nhất thế giới Android hiện nay. Snapdragon 845 được sản xuất trên tiến trình 10nm tiên tiến, nền tảng trí tuệ nhân tạo AI thông minh, có 8 lõi Kryo cực mạnh và GPU đồ họa Adreno 630 xử lý nhẹ nhàng mọi game 3D. Kết hợp với 6GB RAM, 64GB bộ nhớ trong thì bạn sẽ có một con “quái vật cấu hình” thực sự. Tất cả ứng dụng và các game nặng nhất đều không thể làm khó được Pocophone F1. </br></br>Hiệu năng dù có mạnh đến mấy cũng sẽ bị giảm nếu điện thoại của bạn bị quá nhiệt. Pocophone F1 sở hữu công nghệ tản nhiệt chất lỏng LiquidCool, tối ưu cho hoạt động chơi game. Kể cả khi bạn chơi những game nặng trong thời gian dài thì Poco F1 vẫn đảm bảo hiệu suất cao nhất với nhiệt độ luôn được đảm bảo. Mọi thao tác luôn luôn mượt mà nhờ ống tản nhiệt chất lỏng đặt bên trong máy. </br></br>Pocophone F1 là chiếc điện thoại có thể hoạt động với cường độ cao liên tục nhờ viên pin dung lượng lên tới 4000 mAh. Viên pin này đủ để bạn gọi điện trong 30 giờ hoặc nghe nhạc trong 146 giờ chỉ sau một lần sạc. Bạn có thể chơi game, quay video, xem phim thoải mái trong cả ngày dài mà không hề lo hết pin. Đồng thời dung lượng 4000 mAh này cũng nhanh chóng được sạc đầy nhở công nghệ sạc nhanh Quick Charge 3.0, cho bạn hoàn toàn yên tâm sử dụng điện thoại. </br></br>Không chỉ tập trung về hiệu năng mà khả năng nhiếp ảnh của Poco F1 cũng hết sức chuyên nghiệp khi được trang bị hệ thống camera kép 12MP + 5MP AI và đặc biệt là tính năng lấy nét kép dual pixel. Tính năng lấy nét kép dual pixel kết hợp cùng điểm ảnh rộng 1,4 um giúp cho Poco F1 luôn thu được đủ sáng, mang lại khả năng chụp đêm xuất sắc. Chế độ chụp ảnh chân dung xóa phông sẽ dành cho bạn những bất ngờ bằng các bức ảnh nghệ thuật đầy chuyên nghiệp.",
    //                 "Sử dụng tới 3 camera sau, trong đó cảm biến camera chính đến từ Sony có độ phân giải lên tới 48MP, Xiaomi Mi A3 có khả năng chụp ảnh tương đương những smartphone cao cấp đắt tiền. Hình ảnh sắc nét đến từng chi tiết kể cả trong đêm tối. Camera góc siêu rộng mang đến những góc nhìn thực sự khác biệt, thu gọn khung cảnh rộng lớn vào trong một khung hình duy nhất. </br></br>Cùng đến với camera trước xuất sắc nhất từ trước đến nay của Xiaomi, Mi A3 mang trên mình camera selfie độ phân giải lên tới 32MP hỗ trợ làm đẹp bằng trí tuệ nhân tạo AI. Bạn sẽ có những bức ảnh hoàn hảo về cả độ nét, độ chi tiết lẫn khả năng xóa khuyết điểm và làm đẹp đầy tinh tế. Giờ đây cả những bức ảnh “tự sướng” của bạn cũng đầy tính nghệ thuật. </br></br>Sức mạnh của Xiaomi Mi A3 đến từ bộ vi xử lý Snapdragon 665 sản xuất trên tiến trình mới 11nm, mạnh mẽ hơn nhưng cũng tiết kiệm điện năng hơn. Với 8 nhân Kryo 260 CPU cùng GPU Adreno 610, Xiaomi Mi A3 đủ sức chạy mượt mà mọi ứng dụng và chơi tốt tất cả những tựa game bạn yêu thích. </br></br>Bên cạnh bộ vi xử lý mạnh mẽ, Xiaomi Mi A3 còn đảm bảo bộ nhớ đầy đủ cho người dùng nhờ 4GB RAM và 64GB bộ nhớ trong. Bạn sẽ có không gian lưu trữ rộng lớn và lượng bộ nhớ đệm đủ để chạy đa nhiệm thoải mái.",
    //                 "Thông thường với các smartphone giá rẻ, dung lượng pin chỉ khoảng 2000 mAh, nhưng với Redmi Go, máy được ưu ái có viên pin lên tới 3000 mAh.Với chế độ tiết kiệm pin tích hợp, máy đảm bảo được thời gian sử dụng lâu dài lên tới 2 ngày với mức độ bình thường. </br></br>Redmi Go hỗ trợ 2 SIM 2 sóng và hỗ trợ cả mạng 4G. Bạn hoàn toàn có thể sử dụng kết nối mạng nhanh chóng để thoả mãn được nhu cầu lướt web hằng ngày.Kích thước nhỏ gọn với phần viền được bo cong mềm mại tạo cảm giác cầm nắm chắc chắn trong lòng bàn tay. </br></br>Redmi Go có thiết kế nguyên khối đơn giản cùng 2 màu sắc thời trang là xanh dương hoặc đen.Cùng với chip Snapdragon 425, máy có thể đáp ứng tốt các nhu cầu cơ bản như xem phim nhẹ nhàng, lướt web, đọc báo hoặc Facebook. </br></br>Android Go là phiên bản rút gọn của Android One - dự án phần mềm mới của Google dành cho các smartphone cấu hình giới hạn hoặc RAM 1 GB trở xuống.Xiaomi Redmi Go chạy trên hệ điều hành này được tối ưu hoá và tinh chỉnh lại các ứng dụng, để phù hợp và chạy mượt mà hơn.",
    //                 "Cấu hình là điểm đáng tiền nhất trên Xiaomi Redmi 7 khi máy sở hữu con chip Snapdragon 632 cho sức mạnh vượt trội trong tầm giá.Máy dễ dàng đáp ứng tốt các nhu cầu cơ bản và đủ sức chơi các tựa game đang hot hiện tại như: Liên Quân Mobile, PUBG Mobile.... </br></br>Thật khó để bạn có thể tìm ra một chiếc máy nào có hiệu năng tốt hơn chiếc điện thoại Xiaomi này trong cùng tầm giá.Máy dễ dàng đáp ứng tốt các nhu cầu cơ bản và đủ sức chơi các tựa game đang hot hiện tại như: Liên Quân Mobile, PUBG Mobile.... </br></br>Thật khó để bạn có thể tìm ra một chiếc máy nào có hiệu năng tốt hơn chiếc điện thoại Xiaomi này trong cùng tầm giá.Bên cạnh đó máy còn được ưu ái sử dụng giao diện MIUI 10 dựa trên Android 9.0 (Pie) mang lại sự tối ưu mượt mà hơn. </br></br>Nếu như cấu hình vẫn chưa đủ làm bạn hài lòng thì Redmi 7 còn sở hữu cho mình cụm camera kép ở mặt lưng với khả năng chụp ảnh xóa phông khá ảo diệu.Kích thước màn hình lớn lên tới 6.26 inch độ phân giải HD+ cũng sẽ giúp bạn có những giây phút thư giãn thoải mái với những thước phim hấp dẫn"
    //             );

    //             TSKT1 = new Array("Super AMOLED", "IPS LCD", "IPS LCD", "IPS LCD", "AMOLED", "IPS LCD", "AMOLED", "IPS LCD", "IPS LCD");
    //             TSKT2 = new Array("Full HD+ (1080 x 2340 Pixels)", "HD+ (720 x 1520 Pixels)", "Full HD+ (1080 x 2340 Pixels)", "Full HD+ (1080 x 2340 Pixels)", "Full HD+ (1080 x 2340 Pixels)", "Full HD+ (1080 x 2248 Pixels)", "HD+ (720 x 1560 Pixels)", "HD (720 x 1280 Pixels)", "HD+ (720 x 1520 Pixels)");
    //             TSKT3 = new Array("5.97'", "6.22'", "6.53'", "6.53'", "6.39'", "6.18'", "6.01'", "5'", "6.26'");
    //             TSKT4 = new Array("20 MP", "8 MP", "20 MP", "20 MP", "20 MP", "20 MP", "32 MP", "5 MP", "8 MP");
    //             TSKT5 = new Array("Tự động lấy nét", "Flash màn hình", "Chụp ảnh xoá phông", "Chụp ảnh xoá phông", "Selfie ngược sáng HDR", "Tự động lấy nét", "Selfie ngược sáng HDR", "Quay video HD", "Quay video HD");
    //             TSKT6 = new Array("Chính 48 MP & Phụ 13 MP, 8 MP", "12 MP", "Chính 64 MP & Phụ 8 MP, 2 MP, 2 MP", "Chính 64 MP & Phụ 8 MP, 2 MP, 2 MP", "Chính 48 MP & Phụ 13 MP, 8 MP", "Chính 12 MP & Phụ 5 MP", "Chính 48 MP & Phụ 8 MP, 2 MP", "8 MP", "Chính 12 MP & Phụ 2 MP");
    //             TSKT7 = new Array("4K 2160p@30fps", "FullHD 1080p@30fps", "4K 2160p@30fps", "4K 2160p@30fps", "4K 2160p@30fps", "4K 2160p@30fps", "4K 2160p@30fps", "HD 720p@30fps", "FullHD 1080p@60fps");
    //             TSKT8 = new Array("8", "8", "8", "8", "8", "8", "8", "4", "8");
    //             TSKT9 = new Array("Snapdragon 712", "Snapdragon 439", "Mediatek Helio G90T ", "Mediatek Helio G90T", "Snapdragon 730", "Snapdragon 845", "Snapdragon 665", "Snapdragon 425", "Snapdragon 632");
    //             TSKT10 = new Array("6 GB", "2 GB", "6 GB", "6 GB", "6 GB", "6 GB", "4 GB", "1 GB", "2 GB");
    //             TSKT11 = new Array("Adreno 616", "Adreno 505", "Mali-G76 MC4", "Mali-G76 MC4", "Adreno 618", "Adreno 630", "Adreno 610", "Adreno 308", "Adreno 506");
    //             TSKT12 = new Array("64 GB", "32 GB", "128 GB", "64 GB", "64 GB", "64 GB", "64 GB", "16 GB", "16 GB");
    //             TSKT13 = new Array("Dài 147.5 mm - Ngang 70.5 mm - Dày 7.5 mm", "Dài 156.5 mm - Ngang 75.41 mm - Dày 9.4 m", "Dài 161.3 mm - Ngang 76.4 mm - Dày 8.8 mm", "Dài 161.3 mm - Ngang 76.4 mm - Dày 8.8 mm", "Dài 156.7 mm - Ngang 74.3 mm - Dày 8.8 mm", "Dài 156 mm - Ngang 75.5 - Dày 9 mm", "Dài 153.5 mm - Ngang 71.9 mm - Dày 8.5 mm", "Dài 140.4 mm - Ngang 70.1 mm - Dày 8.35 mm", "Dài 158.7 mm - Ngang 75.6 mm - Dày 8.5 mm");
    //             TSKT14 = new Array("155 g", "188 g", "199 g", "199 g", "191 g", "186.5 g", "173.8 g", "137 g", "180 g");
    //             TSKT15 = new Array("Pin chuẩn Li-Po", "Pin chuẩn Li-Po", "Pin chuẩn Li-Po", "Pin chuẩn Li-Po", "Pin chuẩn Li-Po", "Pin chuẩn Li-Po", "Pin chuẩn Li-Po", "Pin chuẩn Li-Po", "Pin chuẩn Li-Po");
    //             TSKT16 = new Array("3070 mAh", "5000 mAh", "4500 mAh", "4500 mAh", "4000 mAh", "4000 mAh", "4030 mAh", "3000 mAh", "4000 mAh");
    //             TSKT17 = new Array("Có", "Có", "Có", "Có", "Có", "Có", "Có", "Có", "Có");
    //             TSKT18 = new Array("2 Nano SIM", "2 Nano SIM", "2 Nano SIM", "2 Nano SIM", "2 Nano SIM", "2 Nano SIM", "2 Nano SIM", "2 Nano SIM", "2 Nano SIM");
    //             TSKT19 = new Array("Wi-Fi 802.11 a/b/g/n/ac", "Wi-Fi 802.11 a/b/g/n/ac", "Wi-Fi 802.11 a/b/g/n/ac", "Wi-Fi 802.11 a/b/g/n/ac", "Wi-Fi 802.11 a/b/g/n/ac", "Wi-Fi 802.11 a/b/g/n/ac", "Wi-Fi 802.11 a/b/g/n/ac", "Wi-Fi 802.11 a/b/g/n/ac", "Wi-Fi 802.11 a/b/g/n/ac");
    //             TSKT20 = new Array("A2DP, LE, apt-X, v5.0", "A2DP, LE, apt-X, v5.0", "A2DP, LE, apt-X, v5.0", "A2DP, LE, apt-X, v5.0", "A2DP, LE, apt-X, v5.0", "A2DP, LE, apt-X, v5.0", "A2DP, LE, apt-X, v5.0", "A2DP, LE, apt-X, v5.0", "A2DP, LE, apt-X, v5.0");
    //             TSKT21 = new Array("USB Type-C", "USB Type-C", "USB Type-C", "USB Type-C", "USB Type-C", "USB Type-C", "USB Type-C", "USB Type-C", "USB Type-C");
    //             TSKT22 = new Array("12 tháng", "12 tháng", "12 tháng", "12 tháng", "12 tháng", "12 tháng", "12 tháng", "12 tháng", "12 tháng");

    //             src += "../STORE/storex.html?1&0";
    //             break;
    //         }

    //         // OPPO    
    //     case '4':
    //         {
    //             gia = new Array("16.990.000₫", "4.290.000₫", "3.190.000₫", "4.390.000₫", "6.490.000₫", "9.990.000₫", "5.290.000₫", "3.690.000₫", "7.490.000₫");
    //             breadcrumb1 = new Array("OPPO");
    //             breadcrumb2 = new Array("OPPO Reno 10x", "OPPO A5 (2020) 64GB", "OPPO A1K", "OPPO A7", "OPPO A9", "OPPO Reno", "OPPO A5 (2020) 128GB", "OPPO A5s", "OPPO F11 Pro");

    //             mota = new Array(
    //                 "Bên cạnh cuộc chạy đua về cấu hình thì camera là điểm nóng của các hãng khi liên tục có những cải tiến mạnh mẽ về camera phone. Sau khi chiếc Huawei P30 Pro ra mắt không lâu với khả năng zoom lên tới 10X hay 50X thì thậm chí chiếc OPPO Reno 10x Zoom Edition còn làm tốt hơn thế. </br></br>Máy sở hữu cụm 3 camera với độ phân giải camera chính là 48 MP, một camera góc rộng 8 MP F/2.2 và một ống kính tiềm vọng 13 MP khẩu độ F/3.0 với khả năng zoom hybrid 10X. Với OPPO Reno 10x Zoom Edition thì bạn có thể sử dụng máy như một chiếc 'kính viễn vọng' khi có thể quan sát được những vật ở rất xa mà mắt thường cũng khó có thể thấy được. </br></br>Không chỉ có camera sau mà camera trước trên máy cũng là một bước sáng tạo của OPPO so với những chiếc máy khác đang có trên thị trường. OPPO Reno 10x Zoom Edition sở hữu camera selfie ẩn trong khung và mở lên bằng cơ chế pop-up sử dụng động cơ để nâng lên. </br></br>Chiếc điện thoại OPPO này sở hữu cấu hình mạnh mẽ nhất thế giới Android trong năm 2019 với con chip Snapdragon 855 8 nhân 64-bit kết hợp với 8 GB RAM và 256 GB bộ nhớ trong.Đầu tiên phải kể đến thiết kế khung viền kim loại cùng 2 mặt kính cường lực Corning Gorilla Glass 6 mới nhất cho bạn một cái nhìn rất hào nhoáng và sang trọng.",
    //                 "Việc sở hữu cho mình một ngoại hình rất thu hút sẽ khiến người dùng có nhiều cảm tình hơn và dẫn tới quyết định mua một chiếc smartphone.OPPO A5 (2020) thỏa mãn được tiêu chí này với họa tiết ấn tương tự dòng OPPO Reno cao cấp ra mắt trước đó. </br></br>Máy có những phiên bản màu sắc rất trẻ trung, phù hợp với giới trẻ và kèm theo hiệu ứng chuyển màu dưới ánh sáng đẹp mắt, tinh tế.Mặt trước là màn hình 'giọt nước' kích thước 6.5 inch, với diện tích màn hình chiếm toàn mặt trước là 89.3%, bảo vệ bằng kính Gorilla Glass 3+.</br></br>Ngày nay, người dùng chúng ta rất ngại phải sạc pin nhiều lần cho smartphone và cường độ sử dụng lại ngày một cao hơn.Để hạn chế việc sạc pin mà vẫn đáp ứng được cả ngày dài thì các nhà sản xuất phải tích hợp viên pin dung lượng lớn cho chiếc máy của mình. </br></br>Chiếc smartphone OPPO này được cung cấp năng lượng bởi viên pin dung lượng lên đến 5.000 mAh, kết hợp với hệ điều hành ColorOS 6.1 và phần cứng mới giúp sản phẩm tối ưu hơn trong việc sử dụng.Với cường độ trung bình thì người dùng có thể trải nghiệm máy khá thoải mái cả ngày hay tới ngày thứ hai nếu nhu cầu ít hơn.",
    //                 "Những mặt lưng đơn sắc đã quá quen thuộc, thì thiết kế mới của chiếc smartphone OPPO này như một sự phá cách trong phân khúc giá với mức giá hấp dẫn. Thân hình mảnh mai, quyến rũ với các đường cong nhẹ nhàng bao quanh thân máy tạo cho bạn cảm giác cầm nắm thoải mái và chắc chắn hơn. +.</br></br>Màn hình giọt nước ở mặt trước sẽ gây ấn tượng cho người dùng ngay từ cái nhìn đầu tiên với kích thước 6.1 inch.Diện tích trải nghiệm toàn màn hình rộng hơn, xem phim hay chơi game đều cảm thấy thoải mái và không còn cảm giác mỏi mắt. +.</br></br>Trong tầm giá của OPPO A1K thì thực sự rất khó để bạn có thể tìm kiếm một chiếc máy nào có camera trước tốt như chiếc smartphone tới từ OPPO. Việc của bạn chỉ cần đưa máy lên và chụp cùng bạn bè còn lại việc làm đẹp thế nào cho tự nhiên, phù hợp với khung cảnh cứ để máy lo. Camera chính cũng làm khá tốt nhiệm vụ của mình tới độ phân giải 8 MP hỗ trợ công nghệ chống rung đa khung giúp ảnh chụp sắc nét hơn. +.</br></br>OPPO A1K cũng được tích hợp khả năng nhận diện khuôn mặt mở máy hiện đại và cao cấp giúp bạn có thể sử dụng một cách dễ dàng.Điểm Antutu của OPPO A1k ở mức khoảng 75000 điểm, không quá cao nhưng hỗ trợ tốt các ứng dụng lướt web, cơ bản hằng ngày. OPPO A1K sở hữu viên pin 4000 mAh và được tích hợp chế độ quản lý pin thông minh, hứa hẹn sẽ cho bạn một thời gian trải nghiệm thoải mái cũng như tự động tiết kiệm pin mỗi khi cần thiết.",
    //                 "OPPO A7 được tạo nên nhờ với một ngôn ngữ thiết kế mới lạ, bắt mắt khi có phần mặt lưng phản chiếu 3D vân lưới ánh sáng cực đẹp và thu hút. Thân hình mảnh mai, quyến rũ với các đường cong nhẹ nhàng bao quanh thân máy tạo cho bạn cảm giác cầm nắm thoải mái và chắc chắn hơn. </br></br>Đập vào mắt bạn sẽ là không gian hiển thị rộng rãi trên kích thước 6.2 inch được cách điệu bởi chiếc tai thỏ hình giọt nước trông vô cùng tinh tế. Được trang bị màn hình có độ phân giải HD+ nên OPPO A7 khiến bạn cảm thấy hài lòng với những khung hình sống động, rực rỡ mỗi khi trải nghiệm. </br></br>Sức mạnh cung cấp cho OPPO A7 đến từ con chip Qualcomm Snapdragon 450 có hiệu năng ổn định trong việc xử lý các tác vụ cơ bản thường ngày. Nhờ được trang bị 4 GB RAM cùng 64 GB bộ nhớ trong giúp máy chạy đa nhiệm mượt mà hơn cũng như lưu trữ thoải mái các ứng dụng hay và các tựa game hot. </br></br>Điểm mạnh trên OPPO A7 không thể không kể đến khả năng chụp ảnh selfie tuyệt đẹp với nhiều chế độ chụp ảnh chuyên nghiệp đi kèm. Cụ thể hơn, cụm camera trước có độ phân giải 16 MP hỗ trợ công nghệ Selfie A.I Beauty, Sticker AR hứa hẹn sẽ cho ra những bức ảnh tự sướng đẹp tự nhiên mà không cần chỉnh sửa.",
    //                 "OPPO A9 2020 tập trung tối đa vào trải nghiệm người dùng với hiệu năng và thời lượng pin cực đỉnh. Chắc chắn bạn sẽ phải bất ngờ vì những gì OPPO A9 mang lại Với hy vọng mang đến trải nghiệm mượt mà nhất cho người dùng, OPPO A9 2020 trang bị cấu hình khó tin trong tầm giá.  </br></br>Bên trong thiết kế thời trang của OPPO A9 2020 là viên pin có dung lượng lên tới 5000 mAh. Bạn có thể sử dụng điện thoại để xem video liên tục trong 16 tiếng. Ở nhu cầu sử dụng bình thường, 2 ngày bạn mới cần phải sạc OPPO A9 một lần. </br></br>Lấy cảm hứng từ thiên nhiên, OPPO A9 2020 có thiết kế dải màu gradient độc đáo, mang đến nhiều cảm hứng. Cả hai phiên bản màu là Xanh và Tím đều có hiệu ứng thay đổi màu 3D đẹp mắt, bạn có thể ngắm cả ngày mà không chán. Kiểu dáng thanh mảnh, gọn nhẹ, bo cong khéo léo ở các góc cạnh giúp OPPO A9 dễ dàng cầm nắm và thao tác. </br></br>OPPO A9 2020 sử dụng màn hình viền siêu mỏng dạng “giọt nước” đang là xu hướng hiện nay. Màn hình có kích thước lớn tới 6,5 inch, tha hồ để bạn tận hưởng những nội dung sống động. Việc thiết kế viền mỏng giúp tỉ lệ màn hình trên mặt trước lên đến 89%, cho hiệu ứng hình ảnh như nổi lên khỏi màn hình. ",
    //                 "Với OPPO Find X thì OPPO đã đánh dấu cách tiếp cận mới cho một chiếc máy tràn viền và trên OPPO Reno thì OPPO lại một lần nữa khiến nhiều người không khỏi ngạc nhiên. áy vẫn sở hữu camera trước có khả năng thò ra thụt vào nhưng giờ đây không phải là nguyên cụm mà chỉ là cơ chế nâng một bên và một bên cố định.Việc sử dụng thiết kế module camera trước mới giúp độ bền cơ học của OPPO Reno trở nên đảm bảo hơn so với cơ chế trượt của Find X trước đây. </br></br>Nhờ có camera trước được dấu bên trong mà OPPO Reno sẽ được trang bị một màn hình tràn viền thật sự, không bị đục bất cứ phần nào trên màn hình. Kích thước lên tới 6.4 inch cùng tấm nền AMOLED chất lượng cao giúp bạn có một thiết bị hiển thị rất đẹp và ấn tượng.Tỉ lệ màn hình chiếm tới hơn 93% mặt trước giúp tổng thể máy không quá lớn và có thể sử dụng được bằng một tay. </br></br>Ở mặt trước và mặt sau của OPPO Reno đều được nhà sản xuất bảo vệ bằng kính cường lực Gorilla Class thế hệ thứ 6, chống xước và chống va đập tốt hơn. Bên cạnh đó, mặt kính sau cũng được làm dạng mờ để hạn chế việc bám vân tay trong quá trình sử dụng. </br></br>OPPO Reno sở hữu cho mình camera chính với độ phân giải lên tới 48 MP cùng camera phụ 5 MP hỗ trợ chụp ảnh xóa phông khá ảo diệu. Máy được cài sẵn Android 9 Pie khi xuất xưởng với nhiều tùy biến hấp dẫn hứa hẹn sẽ giúp bạn khai thác tối đa công dụng của máy.",
    //                 "Khi chọn mua một chiếc smartphone thì điều đầu tiên mà người dùng chúng ta quan tâm đó chính là phần ngoại hình có đẹp mắt, sang trọng hay không. Dù không phải bằng kính nhưng khi nghiêng các góc nhìn khác nhau vẫn tạo ra rất nhiều màu sắc lung linh huyền ảo. </br></br>OPPO A5 (2020) được trang bị bộ vi xử lý Qualcomm Snapdragon 665 8 nhân, RAM 4 GB  đảm bảo các tác vụ cơ bản hàng ngày diễn ra mượt mà, 'chiến' game ổn định và lưu trữ được nhiều dữ liệu. </br></br>Bên cạnh đó, máy được chạy Android 9 với giao diện Color OS 6 mới cùng các phần mềm hỗ trợ như Hyperboost 2.0, giúp tăng tốc các ứng dụng hay tựa game nặng.Bộ nhớ trong “khủng”, một yếu tố đặc biệt quan trọng với những bạn có nhu cầu lưu trữ nhiều dữ liệu cá nhân hoặc có sở thích quay video, chụp ảnh. </br></br>Đây là điểm ấn tượng nhất trên OPPO A5 (2020), sản phẩm này trang bị tới 4 camera gồm: camera chính 12 MP, camera góc rộng 8 MP 119 độ, camera đơn sắc 2 MP và camera hỗ trợ đo độ sâu 2 MP. Camera chính mang lại độ chi tiết cao trong bức ảnh, camera góc rộng giúp thu nhiều cảnh vật, hỗ trợ xóa phông 'ảo diệu' và ảnh đen trắng cho ai yêu thích vẻ hoài cổ.",
    //                 "Nhắc đến OPPO thì không thể không nhắc đến camera selfie và mình chắc chắn chiếc OPPO A5s sẽ không làm bạn phải thất vọng. Camera trước của máy có độ phân giải 8 MP và vẫn sở hữu chế độ làm đẹp 'trứ danh' tới từ OPPO. </br></br>Việc của bạn chỉ cần đưa máy lên và chụp cùng bạn bè còn lại việc làm đẹp thế nào cho tự nhiên, phù hợp với khung cảnh cứ để OPPO A5s lo.Không chỉ có camera selfie, máy cũng sở hữu camera chính chất lượng khá tốt với độ phân giải chính 13 MP + cảm biến phụ 2 MP. </br></br>Lâu lâu bạn cũng có thể tự chụp cho mình những bức ảnh chân dung với phần hậu cảnh được tách bạch khá tốt từ chế độ chụp xóa phông của OPPO A5s.OPPO A5s chạy ColorOS 5.1 khá đơn giản, không cồng kềnh và khá trơn tru, ổn định trong quá trình sử dụng hàng ngày. </br></br>Smartphone này cũng có các tính năng nổi bật như cảm biến vân tay mặt lưng hay hỗ trợ giọng nói tích hợp, ứng dụng AI, có ít ứng dụng được cài đặt sẵn hơn, không có quảng cáo trong hệ thống...",
    //                 "Không “tai thỏ”, không “nốt ruồi” giúp cho OPPO F11 Pro 128GB khác biệt hoàn toàn với nhiều smartphone trên thị trường hiện nay. Camera selfie nằm ẩn bên trong cơ chế trượt, từ đó chúng ta có một màn hình tràn viền cực kỳ ấn tượng giúp người dùng có một diện tích trải nghiệm tuyệt vời. </br></br>F11 Pro 128GB là máy sở hữu camera selfie 16 MP có cơ chế “ thò thụt” khá độc đáo và tiện lợi cho người dùng. OPPO gọi đây là cơ chế pop-up (bật lên), lúc nào cần thì camera sẽ tự động được bật lên và sẽ ẩn đi khi không sử dụng. </br></br>Không chỉ có camera trước mà OPPO F11 Pro 128 GB còn sở hữu camera chính với độ phân giải lên đến 48 MP và nhiều tính năng chụp hình thú vị khác. Bên cạnh đó F11 Pro còn được trang bị cảm biến độ sâu 5 MP với khẩu độ f/2.4, sử dụng cảm biến của Sony giúp camera nhận được nhiều ánh sáng hơn và thu được nhiều chi tiết hơn. </br></br>OPPO F11 Pro được nâng cấp công nghệ sạc nhanh VOOC 3.0 giúp máy có thể được sạc đầy chỉ trong vòng 80 phút. Viên pin dung lượng lên tới 4000 mAh hứa hẹn cũng sẽ cho bạn thoải mái sử dụng cả ngày mà không cần lo lắng về việc phải sạc pin.Ngoài ra máy còn được trang bị chip MediaTek Helio P70 8 nhân giúp máy có thể xử lý các tác vụ cơ bản hằng ngày một cách mượt mà."
    //             );

    //             TSKT1 = new Array("AMOLED", "TFT", "IPS LCD", "IPS LCD", "TFT", "AMOLED", "TFT", "IPS LCD", "LTPS LCD");
    //             TSKT2 = new Array("Full HD+ (1080 x 2340 Pixels)", "HD+ (720 x 1600 Pixels)", "HD+ (720 x 1560 Pixels)", "HD+ (720 x 1520 Pixels)", "HD+ (720 x 1600 Pixels)", "Full HD+ (1080 x 2340 Pixels)", "HD+ (720 x 1600 Pixels)", "HD+ (720 x 1520 Pixels)", "Full HD+ (1080 x 2340 Pixels)");
    //             TSKT3 = new Array("6.6'", "6.5'", "6.1'", "6.2'", "6.5'", "6.4'", "6.5'", "6.2'", "6.5'");
    //             TSKT4 = new Array("16 MP", "8 MP", "5 MP", "16 MP", "16 MP", "16 MP", "8 MP", "8 MP", "16 MP");
    //             TSKT5 = new Array("Nhận diện khuôn mặt", "Selfie ngược sáng HDR", "Tự động lấy nét", "Công nghệ Selfie A.I Beauty", "Nhận diện khuôn mặt", "Selfie ngược sáng HDR", "Selfie ngược sáng HDR", "Chế độ làm đẹp", "Quay video Full HD");
    //             TSKT6 = new Array("Chính 48 MP & Phụ 13 MP, 8 MP", "Chính 12 MP & Phụ 8 MP, 2 MP, 2 MP", "8 MP", "Chính 13 MP & Phụ 2 MP", "Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP", "Chính 48 MP & Phụ 5 MP", "Chính 12 MP & Phụ 8 MP, 2 MP, 2 MP", "Chính 13 MP & Phụ 2 MP", "Chính 48 MP & Phụ 5 MP");
    //             TSKT7 = new Array("Quay phim 4K 2160p@60fps", "Quay phim 4K 2160p@30fps", "FullHD 1080p@30fps", "FullHD 1080p@30fps", "Quay phim 4K 2160p@30fps", "4K 2160p@30fps", "Quay phim 4K 2160p@30fps", "FullHD 1080p@30fps", "FullHD 1080p@30fps");
    //             TSKT8 = new Array("8", "8", "8", "8", "8", "8", "8", "8", "8");
    //             TSKT9 = new Array("Snapdragon 855", "Snapdragon 665", "MediaTek MT6762R", "Snapdragon 450", "Snapdragon 665", "Snapdragon 710", "Snapdragon 665", "MediaTek Helio P35", "MediaTek Helio P70");
    //             TSKT10 = new Array("8 GB", "3 GB", "2 GB", "4 GB", "8 GB", "6 GB", "3 GB", "3 GB", "6 GB");
    //             TSKT11 = new Array("Adreno 640", "Adreno 610", "PowerVR GE8320", "Adreno 506", "Adreno 610", "Adreno 616", "Adreno 610", "PowerVR GE8320", "Mali-G72 MP3");
    //             TSKT12 = new Array("256 GB", "64 GB", "32 GB", "64 GB", "128 GB", "256 GB", "64 GB", "32 GB", "128 GB");
    //             TSKT13 = new Array("Dài 162 mm - Ngang 77.2 mm - Dày 9.3 mm", "Dài 163.6 mm - Ngang 75.6 mm - Dày 9.1 mm", "Dài 154.5 mm - Ngang 73.8 mm - Dày 8.4 mm", "Dài 155.9 mm - Ngang 75.4 mm - Dày 8.1 mm", "Dài 163.6 mm - Ngang 75.6 mm - Dày 9.1 mm", "Dài 156.6 mm - Ngang 74.3 mm - Dày 9 mm", "Dài 163.6 mm - Ngang 75.6 mm - Dày 9.1 mm", "Dài 155.9 mm - Ngang 75.4 mm - Dày 8.2 mm", "Dài 161.3 mm - Ngang 76.1 mm - Dày 8.8 mm");
    //             TSKT14 = new Array("210 g", "195 g", "170 g", "158 g", "195 g", "185 g", "195 g", "170 g", "190 g");
    //             TSKT15 = new Array("Pin chuẩn Li-Ion", "Pin chuẩn Li-Po", "Pin chuẩn Li-Po", "Pin chuẩn Li-Ion", "Pin chuẩn Li-Po", "Pin chuẩn Li-Ion", "Pin chuẩn Li-Po", "Pin chuẩn Li-Ion", "Pin chuẩn Li-Ion");
    //             TSKT16 = new Array("4065 mAh", "5000 mAh", "4000 mAh", "4230 mAh", "5000 mAh", "3765 mAh", "5000 mAh", "4230 mAh", "4000 mAh");
    //             TSKT17 = new Array("Có", "Có", "Có", "Có", "Có", "Có", "Có", "Có", "Có");
    //             TSKT18 = new Array("2 Nano SIM", "2 Nano SIM", "2 Nano SIM", "2 Nano SIM", "2 Nano SIM", "2 Nano SIM", "2 Nano SIM", "2 Nano SIM", "2 Nano SIM");
    //             TSKT19 = new Array("Wi-Fi 802.11 a/b/g/n/ac", "Wi-Fi 802.11 a/b/g/n/ac", "Wi-Fi 802.11 a/b/g/n/ac", "Wi-Fi 802.11 a/b/g/n/ac", "Wi-Fi 802.11 a/b/g/n/ac", "Wi-Fi 802.11 a/b/g/n/ac", "Wi-Fi 802.11 a/b/g/n/ac", "Wi-Fi 802.11 a/b/g/n/ac", "Wi-Fi 802.11 a/b/g/n/ac");
    //             TSKT20 = new Array("A2DP, LE, apt-X, v5.0", "A2DP, LE, apt-X, v5.0", "A2DP, LE, apt-X, v5.0", "A2DP, LE, apt-X, v5.0", "A2DP, LE, apt-X, v5.0", "A2DP, LE, apt-X, v5.0", "A2DP, LE, apt-X, v5.0", "A2DP, LE, apt-X, v5.0", "A2DP, LE, apt-X, v5.0");
    //             TSKT21 = new Array("USB Type-C", "USB Type-C", "USB Type-C", "USB Type-C", "USB Type-C", "USB Type-C", "USB Type-C", "USB Type-C", "USB Type-C");
    //             TSKT22 = new Array("12 tháng", "12 tháng", "12 tháng", "12 tháng", "12 tháng", "12 tháng", "12 tháng", "12 tháng", "12 tháng");

    //             src += "../STORE/storeo.html?1&0";
    //             break;
    //         }
    // }

    // // breadcrumb tree //
    // document.getElementById('breadcrumbtree').href = "../index.html";
    // // BREADCRUMB TREE //
    // // breadcrumb1 //
    // var b1 = breadcrumb1[0];
    // document.getElementById('breadcrumb1').innerHTML = b1;
    // document.getElementById('breadcrumb1').href = src;
    // // BREADCRUMB1 //

    // // breadcrumb2 //
    // var b2 = breadcrumb2[x];
    // document.getElementById("breadcrumb2").innerHTML = b2;
    // // BREADCRUMB2 //

    // // name //
    // name = breadcrumb2[x];
    // document.getElementById("product-name").innerHTML = name;
    // // NAME //

    // // gia //
    // var price = gia[x];
    // document.getElementById("gia").innerHTML = price;
    // // GIA //

    // // mota //
    // var Cmota = mota[x];
    // document.getElementById("mota").innerHTML = Cmota;
    // // MOTA //

    // // table //
    // document.getElementById("TSKT1").innerHTML = TSKT1[x];
    // document.getElementById("TSKT2").innerHTML = TSKT2[x];
    // document.getElementById("TSKT3").innerHTML = TSKT3[x];
    // document.getElementById("TSKT4").innerHTML = TSKT4[x];
    // document.getElementById("TSKT5").innerHTML = TSKT5[x];
    // document.getElementById("TSKT6").innerHTML = TSKT6[x];
    // document.getElementById("TSKT7").innerHTML = TSKT7[x];
    // document.getElementById("TSKT8").innerHTML = TSKT8[x];
    // document.getElementById("TSKT9").innerHTML = TSKT9[x];
    // document.getElementById("TSKT10").innerHTML = TSKT10[x];
    // document.getElementById("TSKT11").innerHTML = TSKT11[x];
    // document.getElementById("TSKT12").innerHTML = TSKT12[x];
    // document.getElementById("TSKT13").innerHTML = TSKT13[x];
    // document.getElementById("TSKT14").innerHTML = TSKT14[x];
    // document.getElementById("TSKT15").innerHTML = TSKT15[x];
    // document.getElementById("TSKT16").innerHTML = TSKT16[x];
    // document.getElementById("TSKT17").innerHTML = TSKT17[x];
    // document.getElementById("TSKT18").innerHTML = TSKT18[x];
    // document.getElementById("TSKT19").innerHTML = TSKT19[x];
    // document.getElementById("TSKT20").innerHTML = TSKT20[x];
    // document.getElementById("TSKT21").innerHTML = TSKT21[x];
    // document.getElementById("TSKT22").innerHTML = TSKT22[x];
    // // TABLE //

    // // img //

    // var i = 0;
    // document.getElementById("img-main").src = "img/" + b1 + "/" + (b1 + x) + "/main.jpg";
    // document.getElementById("img-main1").src = "img/" + b1 + "/" + (b1 + x) + "/main.jpg";
    // document.getElementById("img1").src = "img/" + b1 + "/" + (b1 + x) + "/" + i + ".jpg";
    // document.getElementById("img2").src = "img/" + b1 + "/" + (b1 + x) + "/" + (i + 1) + ".jpg";
    // document.getElementById("img3").src = "img/" + b1 + "/" + (b1 + x) + "/" + (i + 2) + ".jpg";

    // IMG //
}

window.onload = function() {
    this.giudangnhap();
    this.product();
    $('#pwdangnhap').keypress(function(e) {
        if (e.keyCode == 13)
            $('#nutdangnhap').click();
    });

    $('#otimkiem').keypress(function(e) {
        if (e.keyCode == 13)
            $('#nuttimkiem').click();
    });
}



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////




//////// SWITCH IMAGES ////////
function getSRC1() {
    return document.getElementById("img1").src;
}

function getSRC2() {
    return document.getElementById("img2").src;
}

function getSRC3() {
    return document.getElementById("img3").src;
}

function getSRCmain() {
    return document.getElementById("img-main1").src;
}

function changeIMG1() {
    document.getElementById("img-main").src = getSRC1();
    document.getElementById("c1").checked = true;
}

function changeIMG2() {
    document.getElementById("img-main").src = getSRC2();
    document.getElementById("c2").checked = true;
}

function changeIMG3() {
    document.getElementById("img-main").src = getSRC3();
    document.getElementById("c3").checked = true;
}

function circle1() {
    document.getElementById("img-main").src = getSRCmain();
}