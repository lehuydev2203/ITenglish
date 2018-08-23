<?php
/**
 * Created by PhpStorm.
 * User: nhoxk
 * Date: 8/15/2018
 * Time: 11:31 AM
 */

?>
<div id="contact" class="row">
    <div id="mail" class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
        <div id="form-mail" >
            <form id="form" action="">
                <div class="row">
                    <div class="offset-xl-2"></div>
                    <div class="col-xl-8">
                        <h1 style="text-align: center;font-size: 70px;margin-bottom: 30px">Lời Nhắn</h1>

                        <h5>Tên :</h5>
                        <div class="style-input" >
                            <input type="text" required>
                        </div>
                        <br>
                        <h5>Email :</h5>
                        <div class="style-input">
                            <input type="email" required>
                        </div>
                        <br>
                        <h5>Lời Nhắn :</h5>
                        <textarea name="" id="note"></textarea>
                        <br>
                        <div class="style-button">
                            <button type="reset" class="send" >Xóa</button> <button type="submit" class="send" >Gửi</button>
                        </div></div>
                    <div class="offset-xl-2"></div>
                </div>
            </form>
        </div>
    </div>
    <div id="comment" class="col-xl-6 col-lg-6 col-md-12 col-sm-12" style="padding: 20px 20px 20px 10px;" align="center">
        <div id="form-comment" style="border: 1px solid white;border-radius: 10px;padding: 30px;">

        </div>
    </div>
</div>



<script>
    var full="100%";
    var w_90="90%";
    var height=(window.innerHeight)-80*2;
    document.getElementById("mail").style.height=height+"px";
    document.getElementById("mail").style.width=full;
    document.getElementById("comment").style.height=height+"px";
    document.getElementById("comment").style.width=full;
    document.getElementById("form-mail").style.height=height-40+"px";
    document.getElementById("form-mail").style.width=w_90;
    document.getElementById("form-comment").style.height=height-40+"px";
    document.getElementById("form-comment").style.width=w_90;
    document.getElementById("note").style.height="400px";
    var from_mail=document.getElementById("form-mail");
    var h_form_mail=from_mail.clientHeight;
    var from=document.getElementById("form");
    var h_form=from.clientHeight;
    document.getElementById("form-mail").style.paddingTop=(h_form_mail-h_form)/2+"px";


</script>