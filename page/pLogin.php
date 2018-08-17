<?php
/**
 * Created by PhpStorm.
 * User: Lê Huy
 * Date: 8/15/2018
 * Time: 11:32 AM
 */
session_start();
unset($_SESSION);
session_destroy();
?>
<div class="container" id="signin">
<div class="row">
    <div class="col-xl-3 col-lg-3 col-md-1 col-sm-1 "></div>
    <div class="col-xl-6 col-lg-6 col-md-10 col-sm-10" style="margin: 10px 0px ; padding: 5px 10px;">

        <!--show sản phẩm cần xác nhận để xóa-->
        <form action="" method="post"  enctype = "multipart/form-data">
            <div>
                <h2>Đăng Nhập</h2>
            </div>
            <div>
                <h5>Tài Khoản :</h5>
                <input type="text" required class="form-log">

            </div>
            <br>
            <div>
                <h5>Mật Khẩu:</h5>
                <input type="password" required class="form-log">
            </div>
            <br>
            <div style="margin-bottom: 20px">
                <a href="#" style="text-decoration: none;list-style-type: none ;color:red;margin:5%;"><i>* Quên mật khẩu. </i></a><br>
            </div>
            <!--Submit-->
            <button type="submit" class="btn btn-light btn-outline-light sign-submit" >Đăng Nhập</button>
            <!--/Submit-->
            <a href="" class="btn btn-light btn-outline-light sign-submit sign-submit2" style="" >Đăng Ký</a>
        </form>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-1 col-sm-1 "></div>
</div>
</div>

<script>
    document.getElementById("signin").style.paddingTop=((window.innerHeight)-400)/2+"px";
</script>