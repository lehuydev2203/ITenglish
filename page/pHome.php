<?php
/**
 * Created by PhpStorm.
 * User: Lê Huy
 * Date: 8/15/2018
 * Time: 11:32 AM
 */

//include("page/pKey.php");
?>

<section class="container" id="main">
    <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" id="header-title">
                <h1><span style="color: #00ffba">IT</span> English</h1>
            </div>
            </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <form action="index.php?page=key" method="post">
                <div class="container">
                    <input type="text" class="search"  placeholder="Search">
                    <button type="submit" data-toggle="modal" onclick="showresulf(this.input)" data-target="#exampleModalCenter"><span class="fa fa-search"></span></button>
                </div>
            </form>
        </div>
    </div>
    <!--div id="txtHint"></div-->

</section>

<script>
//form search
window.load=formsearch();
function formsearch(){
var height=window.innerHeight;
var pro_height=(height-251)/2;
document.getElementById("main").style.paddingTop =pro_height+"px";

}

//dùng ajax để truyền tham số
//str là giá trị đã lấy từ value trong thẻ option
function showresulf(str) {
    // if (str.length == 0) {
    //     //nếu độ dài str = 0 thì trả về id txtHint
    //     document.getElementById("txtHint").innerHTML = "";
    //     return;
    // }
    // else
    //ngược lại thì thực hiện ajax để gọi giá trị
    {
        //khai báo giá trị ajax xmlhttp
        var xmlhttp = new XMLHttpRequest();
        //hàm onreadystatechange là mộtvent Handler lắng nghe và xử lý một sự kiện khi có thay đổi về trạng thái nào diễn ra.
        xmlhttp.onreadystatechange = function () {
            //readyState định nghĩa trạng thái hiện tai của đối tượng XMLHttpRequest
            // 4 tương dồng với việc kết thúc request
            // status là trả về trang thái hiện tại bằng số , ở đây status = 200 là OK
            if (this.readyState == 4 && this.status == 200) {
                //trả giá trị về txtHint
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        }
        //truền tham số qua phương thức get , vào trang mGetHint
        xmlhttp.open("GET", "page/pKey.php" + str, true);
        xmlhttp.send();
    }
}

</script>