<?php
/**
 * Created by PhpStorm.
 * User: nhoxk
 * Date: 8/15/2018
 * Time: 11:31 AM
 */

?>
<div id="contact" class="row">
    <div id="mail" class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
        <div id="form-mail">
            <form id="form" action="">
                    <div class="row">
                    <div class="offset-xl-2 offset-lg-1 "></div>
                    <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                        <h1>Lời Nhắn</h1>

                        <h5>Tên :</h5>
                        <div class="style-input">
                            <input type="text" required>
                        </div>

                        <h5>Email :</h5>
                        <div class="style-input">
                            <input type="email" required>
                        </div>

                        <h5>Lời Nhắn :</h5>
                        <div id="style-textarea" style="width: 100%;border-radius: 10px;background-color: white">
                            <textarea name="" id="note"></textarea>
                        </div>

                        <div class="style-button">
                            <button type="reset" class="send">Xóa</button>
                            <button type="submit" class="send">Gửi</button>
                        </div>
                    </div>
                    <div class="offset-xl-2 offset-lg-1"></div>
                </div>
            </form>
        </div>
    </div>
    <div id="comment" class="col-xl-6 col-lg-12 col-md-12 col-sm-12" align="center">
        <div id="form-comment">
            <div id="border">
                <div id="commentbg"></div>
                <div id="content-comment">
                    <form id="form-comment-customer" action="">
                        <div id="border-form">
                            <h5>Tên : </h5>
                            <input type="text" class="form-control" style="outline:none" required>
                            <h5 style="padding-top:5px">Comment : </h5>
                            <textarea name="" id="box-comment" ></textarea>
                            <button type="submit" class="btn btn-light btn-outline-light">Bình Luận</button>
                        </div>
                    </form>

                    <div id="result">
                        <div id="outborder">
                            <div id="inborder">
                                <div class="customer-comment">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-3" style="padding:0"><img class="pic-comment" src="img/logoMonster&taurus.png"
                                                                                      width="100px" height="100px"
                                                                                      alt=""></div>
                                            <div class="col-9" style=" text-align: left">
                                                <div class="title" style=""><h4><strong>{{Tên}}</strong> : <span>{{time}}</span>
                                                    </h4></div>
                                                <div class="comment">
                                                    {{bình luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình
                                                    luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình
                                                    luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình
                                                    luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình
                                                    luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình
                                                    luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình
                                                    luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình
                                                    luận}}{{bình luận}}{{bình luận}}{{bình luận}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="customer-comment"
                                     style="border: 1px solid white;border-radius: 10px ;padding: 10px 0;margin-bottom: 10px;">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-3" style="padding:0"><img class="pic-comment" src="img/logoMonster&taurus.png"
                                                                                      width="100px" height="100px"
                                                                                      alt=""></div>
                                            <div class="col-9" style=" text-align: left">
                                                <div class="title" style="margin-bottom: 20px"><h4>
                                                        <strong>{{Tên}}</strong> : <span>{{time}}</span></h4></div>
                                                <div class="comment">
                                                    {{bình luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình
                                                    luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình
                                                    luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình
                                                    luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình
                                                    luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình
                                                    luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình
                                                    luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình
                                                    luận}}{{bình luận}}{{bình luận}}{{bình luận}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="customer-comment"
                                     style="border: 1px solid white;border-radius: 10px ;padding: 10px 0;margin-bottom: 10px;">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-3" style="padding:0"><img class="pic-comment" src="img/logoMonster&taurus.png"
                                                                                      width="100px" height="100px"
                                                                                      alt=""></div>
                                            <div class="col-9" style=" text-align: left">
                                                <div class="title" style="margin-bottom: 20px"><h4>
                                                        <strong>{{Tên}}</strong> : <span>{{time}}</span></h4></div>
                                                <div class="comment">
                                                    {{bình luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình
                                                    luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình
                                                    luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình
                                                    luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình
                                                    luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình
                                                    luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình
                                                    luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình luận}}{{bình
                                                    luận}}{{bình luận}}{{bình luận}}{{bình luận}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    window.load=contact();
    document.addEventListener("resize",contact);
    function contact(){
    var full = "100%";
    var w_90 = "90%";
    var w_80 = "80%";
    var height = (window.innerHeight) - 80 * 2;
    var x = window.innerWidth;
    var y = window.innerHeight;
    if (x < y) {
        //định dang form lời nhắn
       var mail=document.getElementById("mail");
       var w_mail=mail.clientWidth;
       document.getElementById("form").style.width= w_mail/100*90+"px";
       document.getElementById("form").style.margin="auto";
       document.getElementById("form").style.padding="10px";

       //định dạng form bình luận
        document.getElementById("content-comment").style.width=full;
        var border_form=document.getElementById("border-form");
        var h_border_form=border_form.clientHeight;
        document.getElementById("form-comment-customer").style.height=h_border_form+(h_border_form/100*45)+"px";
        document.getElementById("outborder").style.height=height+"px";
        ////định dạng background
        var content_comment=document.getElementById("content-comment");
        var h_content_comment=content_comment.clientHeight;
        document.getElementById("commentbg").style.height=h_content_comment+"px";
        document.getElementById("commentbg").style.width=full;

    }else
    if(x<=480){
        //định dang form lời nhắn
        var form=document.getElementById("form");
        var h_form=form.clientHeight;
        var mail=document.getElementById("form-mail");
        var w_mail=mail.clientWidth;
        document.getElementById("form-mail").style.height=h_form+40+"px";
        document.getElementById("form-mail").style.width=(w_mail/100*90)+"px";
        document.getElementById("form").style.width=(w_mail/100*80)+"px";
        document.getElementById("form").style.margin="auto";
        document.getElementById("form").style.padding="20px";
        var form_mail=document.getElementById("form-mail");
        var h_form_mail=form_mail.clientHeight;
        document.getElementById("mail").style.height=h_form_mail+20+"px";

        //định dạng form bình luận
        document.getElementById("content-comment").style.width=full;
        var border_form=document.getElementById("border-form");
        var h_border_form=border_form.clientHeight;
        document.getElementById("form-comment-customer").style.height=h_border_form+(h_border_form/100*45)+"px";
        document.getElementById("form-comment").style.width=(w_mail/100*90)+"px";
        document.getElementById("outborder").style.height=height*2+"px";

        //định dạng background
        var content_comment=document.getElementById("content-comment");
        var h_content_comment=content_comment.clientHeight;
        document.getElementById("commentbg").style.height=h_content_comment+"px";
        document.getElementById("commentbg").style.width=full;

    } else
    if(x<=568){
        //định dang form lời nhắn
        var form=document.getElementById("form");
        var h_form=form.clientHeight;
        var mail=document.getElementById("form-mail");
        var w_mail=mail.clientWidth;
        document.getElementById("form-mail").style.height=h_form+40+"px";
        document.getElementById("form-mail").style.width=(w_mail/100*90)+"px";
        document.getElementById("form").style.width=(w_mail/100*80)+"px";
        document.getElementById("form").style.margin="auto";
        document.getElementById("form").style.padding="20px";
        var form_mail=document.getElementById("form-mail");
        var h_form_mail=form_mail.clientHeight;
        document.getElementById("mail").style.height=h_form_mail+20+"px";

        //định dạng form bình luận
        document.getElementById("content-comment").style.width=full;
        var border_form=document.getElementById("border-form");
        var h_border_form=border_form.clientHeight;
        document.getElementById("form-comment-customer").style.height=h_border_form+(h_border_form/100*45)+"px";
        document.getElementById("form-comment").style.width=(w_mail/100*90)+"px";
        document.getElementById("outborder").style.height=height*2+"px";

        //định dạng background
        var content_comment=document.getElementById("content-comment");
        var h_content_comment=content_comment.clientHeight;
        document.getElementById("commentbg").style.height=h_content_comment+"px";
        document.getElementById("commentbg").style.width=full;

    } else
    if(x<=640){
        //định dang form lời nhắn
        var form=document.getElementById("form");
        var h_form=form.clientHeight;
        var mail=document.getElementById("form-mail");
        var w_mail=mail.clientWidth;
        document.getElementById("form-mail").style.height=h_form+40+"px";
        document.getElementById("form-mail").style.width=(w_mail/100*90)+"px";
        document.getElementById("form").style.width=(w_mail/100*80)+"px";
        document.getElementById("form").style.margin="auto";
        document.getElementById("form").style.padding="20px";
        var form_mail=document.getElementById("form-mail");
        var h_form_mail=form_mail.clientHeight;
        document.getElementById("mail").style.height=h_form_mail+20+"px";

        //định dạng form bình luận
        document.getElementById("content-comment").style.width=full;
        var border_form=document.getElementById("border-form");
        var h_border_form=border_form.clientHeight;
        document.getElementById("form-comment-customer").style.height=h_border_form+(h_border_form/100*45)+"px";
        document.getElementById("form-comment").style.width=(w_mail/100*90)+"px";
        document.getElementById("outborder").style.height=height*2+"px";

        //định dạng background
        var content_comment=document.getElementById("content-comment");
        var h_content_comment=content_comment.clientHeight;
        document.getElementById("commentbg").style.height=h_content_comment+"px";
        document.getElementById("commentbg").style.width=full;

    } else
    if(x<=667){
        //định dang form lời nhắn
        var form=document.getElementById("form");
        var h_form=form.clientHeight;
        var mail=document.getElementById("form-mail");
        var w_mail=mail.clientWidth;
        document.getElementById("form-mail").style.height=h_form+40+"px";
        document.getElementById("form-mail").style.width=(w_mail/100*90)+"px";
        document.getElementById("form").style.width=(w_mail/100*80)+"px";
        document.getElementById("form").style.margin="auto";
        document.getElementById("form").style.padding="20px";
        var form_mail=document.getElementById("form-mail");
        var h_form_mail=form_mail.clientHeight;
        document.getElementById("mail").style.height=h_form_mail+20+"px";

        //định dạng form bình luận
        document.getElementById("content-comment").style.width=full;
        var border_form=document.getElementById("border-form");
        var h_border_form=border_form.clientHeight;
        document.getElementById("form-comment-customer").style.height=h_border_form+(h_border_form/100*45)+"px";
        document.getElementById("form-comment").style.width=(w_mail/100*90)+"px";
        document.getElementById("outborder").style.height=height*2+"px";

        //định dạng background
        var content_comment=document.getElementById("content-comment");
        var h_content_comment=content_comment.clientHeight;
        document.getElementById("commentbg").style.height=h_content_comment+"px";
        document.getElementById("commentbg").style.width=full;

    } else
    if(x<=690){
        //định dang form lời nhắn
        var form=document.getElementById("form");
        var h_form=form.clientHeight;
        var mail=document.getElementById("form-mail");
        var w_mail=mail.clientWidth;
        document.getElementById("form-mail").style.height=h_form+40+"px";
        document.getElementById("form-mail").style.width=(w_mail/100*90)+"px";
        document.getElementById("form").style.width=(w_mail/100*80)+"px";
        document.getElementById("form").style.margin="auto";
        document.getElementById("form").style.padding="20px";
        var form_mail=document.getElementById("form-mail");
        var h_form_mail=form_mail.clientHeight;
        document.getElementById("mail").style.height=h_form_mail+20+"px";

        //định dạng form bình luận
        document.getElementById("content-comment").style.width=full;
        var border_form=document.getElementById("border-form");
        var h_border_form=border_form.clientHeight;
        document.getElementById("form-comment-customer").style.height=h_border_form+(h_border_form/100*45)+"px";
        document.getElementById("form-comment").style.width=(w_mail/100*90)+"px";
        document.getElementById("outborder").style.height=height*2+"px";

        //định dạng background
        var content_comment=document.getElementById("content-comment");
        var h_content_comment=content_comment.clientHeight;
        document.getElementById("commentbg").style.height=h_content_comment+"px";
        document.getElementById("commentbg").style.width=full;

    } else
    if(x<=736){
        //định dang form lời nhắn
        var form=document.getElementById("form");
        var h_form=form.clientHeight;
        var mail=document.getElementById("form-mail");
        var w_mail=mail.clientWidth;
        document.getElementById("form-mail").style.height=h_form+40+"px";
        document.getElementById("form-mail").style.width=(w_mail/100*90)+"px";
        document.getElementById("form").style.width=(w_mail/100*80)+"px";
        document.getElementById("form").style.margin="auto";
        document.getElementById("form").style.padding="20px";
        var form_mail=document.getElementById("form-mail");
        var h_form_mail=form_mail.clientHeight;
        document.getElementById("mail").style.height=h_form_mail+20+"px";

        //định dạng form bình luận
        document.getElementById("content-comment").style.width=full;
        var border_form=document.getElementById("border-form");
        var h_border_form=border_form.clientHeight;
        document.getElementById("form-comment-customer").style.height=h_border_form+(h_border_form/100*45)+"px";
        document.getElementById("form-comment").style.width=(w_mail/100*90)+"px";
        document.getElementById("outborder").style.height=height*2+"px";

        //định dạng background
        var content_comment=document.getElementById("content-comment");
        var h_content_comment=content_comment.clientHeight;
        document.getElementById("commentbg").style.height=h_content_comment+"px";
        document.getElementById("commentbg").style.width=full;

    } else
    if(x<=768){
        //định dang form lời nhắn
        var form=document.getElementById("form");
        var h_form=form.clientHeight;
        var mail=document.getElementById("form-mail");
        var w_mail=mail.clientWidth;
        document.getElementById("form-mail").style.height=h_form+40+"px";
        document.getElementById("form-mail").style.width=(w_mail/100*90)+"px";
        document.getElementById("form").style.width=(w_mail/100*80)+"px";
        document.getElementById("form").style.margin="auto";
        document.getElementById("form").style.padding="20px";
        var form_mail=document.getElementById("form-mail");
        var h_form_mail=form_mail.clientHeight;
        document.getElementById("mail").style.height=h_form_mail+20+"px";

        //định dạng form bình luận
        document.getElementById("content-comment").style.width=full;
        var border_form=document.getElementById("border-form");
        var h_border_form=border_form.clientHeight;
        document.getElementById("form-comment-customer").style.height=h_border_form+(h_border_form/100*45)+"px";
        document.getElementById("form-comment").style.width=(w_mail/100*90)+"px";
        document.getElementById("outborder").style.height=height*2+"px";

        //định dạng background
        var content_comment=document.getElementById("content-comment");
        var h_content_comment=content_comment.clientHeight;
        document.getElementById("commentbg").style.height=h_content_comment+"px";
        document.getElementById("commentbg").style.width=full;

    } else
    if(x<=853){
        //định dang form lời nhắn
        var form=document.getElementById("form");
        var h_form=form.clientHeight;
        var mail=document.getElementById("form-mail");
        var w_mail=mail.clientWidth;
        document.getElementById("form-mail").style.height=h_form+40+"px";
        document.getElementById("form-mail").style.width=(w_mail/100*90)+"px";
        document.getElementById("form").style.width=(w_mail/100*80)+"px";
        document.getElementById("form").style.margin="auto";
        document.getElementById("form").style.padding="20px";
        var form_mail=document.getElementById("form-mail");
        var h_form_mail=form_mail.clientHeight;
        document.getElementById("mail").style.height=h_form_mail+20+"px";

        //định dạng form bình luận
        document.getElementById("content-comment").style.width=full;
        var border_form=document.getElementById("border-form");
        var h_border_form=border_form.clientHeight;
        document.getElementById("form-comment-customer").style.height=h_border_form+(h_border_form/100*45)+"px";
        document.getElementById("form-comment").style.width=(w_mail/100*90)+"px";
        document.getElementById("outborder").style.height=height*2+"px";

        //định dạng background
        var content_comment=document.getElementById("content-comment");
        var h_content_comment=content_comment.clientHeight;
        document.getElementById("commentbg").style.height=h_content_comment+"px";
        document.getElementById("commentbg").style.width=full;

    } else
    if(x<=900){
        //định dang form lời nhắn
        var form=document.getElementById("form");
        var h_form=form.clientHeight;
        var mail=document.getElementById("form-mail");
        var w_mail=mail.clientWidth;
        document.getElementById("form-mail").style.height=h_form+40+"px";
        document.getElementById("form-mail").style.width=(w_mail/100*90)+"px";
        document.getElementById("form").style.width=(w_mail/100*80)+"px";
        document.getElementById("form").style.margin="auto";
        document.getElementById("form").style.padding="20px";
        var form_mail=document.getElementById("form-mail");
        var h_form_mail=form_mail.clientHeight;
        document.getElementById("mail").style.height=h_form_mail+20+"px";

        //định dạng form bình luận
        document.getElementById("content-comment").style.width=full;
        var border_form=document.getElementById("border-form");
        var h_border_form=border_form.clientHeight;
        document.getElementById("form-comment-customer").style.height=h_border_form+(h_border_form/100*45)+"px";
        document.getElementById("form-comment").style.width=(w_mail/100*90)+"px";
        document.getElementById("outborder").style.height=height*2+"px";

        //định dạng background
        var content_comment=document.getElementById("content-comment");
        var h_content_comment=content_comment.clientHeight;
        document.getElementById("commentbg").style.height=h_content_comment+"px";
        document.getElementById("commentbg").style.width=full;

    } else
    if(x<=966){
        //định dang form lời nhắn
        var form=document.getElementById("form");
        var h_form=form.clientHeight;
        var mail=document.getElementById("form-mail");
        var w_mail=mail.clientWidth;
        document.getElementById("form-mail").style.height=h_form+40+"px";
        document.getElementById("form-mail").style.width=(w_mail/100*90)+"px";
        document.getElementById("form").style.width=(w_mail/100*80)+"px";
        document.getElementById("form").style.margin="auto";
        document.getElementById("form").style.padding="20px";
        var form_mail=document.getElementById("form-mail");
        var h_form_mail=form_mail.clientHeight;
        document.getElementById("mail").style.height=h_form_mail+20+"px";

        //định dạng form bình luận
        document.getElementById("content-comment").style.width=full;
        var border_form=document.getElementById("border-form");
        var h_border_form=border_form.clientHeight;
        document.getElementById("form-comment-customer").style.height=h_border_form+(h_border_form/100*45)+"px";
        document.getElementById("form-comment").style.width=(w_mail/100*90)+"px";
        document.getElementById("outborder").style.height=height*2+"px";

        //định dạng background
        var content_comment=document.getElementById("content-comment");
        var h_content_comment=content_comment.clientHeight;
        document.getElementById("commentbg").style.height=h_content_comment+"px";
        document.getElementById("commentbg").style.width=full;

    } else
    if (x <= 1024) {
        document.getElementById("mail").style.height = height + "px";
        document.getElementById("mail").style.width = full;
        document.getElementById("comment").style.height = height + "px";
        document.getElementById("comment").style.width = full;
        document.getElementById("form-mail").style.height = height - 40 + "px";
        document.getElementById("form-mail").style.width = w_90;
        document.getElementById("form-comment").style.height = height - 40 + "px";
        document.getElementById("form-comment").style.width = w_90;
        document.getElementById("style-textarea").style.height = height/4-30 + "px";
        document.getElementById("note").style.height = height/4-50 + "px";
        var from_mail = document.getElementById("form-mail");
        var h_form_mail = from_mail.clientHeight;
        var from = document.getElementById("form");
        var h_form = from.clientHeight;
        document.getElementById("form-mail").style.paddingTop = (h_form_mail - h_form) / 2 + "px";
        //định dạng form comment
        document.getElementById("border").style.width = full;
        document.getElementById("border").style.height = full;
        ////lấy bề ngang của #border
        var border = document.getElementById("border");
        document.getElementById("commentbg").style.width = full;
        document.getElementById("form-comment-customer").style.padding = "10px";
        document.getElementById("box-comment").style.height = (height/2)/4+"px";
        var borderform=document.getElementById("border-form");
        var h_borderform=borderform.clientHeight;
        document.getElementById("form-comment-customer").style.height =h_borderform+60+"px";
        var h_border = border.clientHeight;
        var form_comment_customer = document.getElementById("form-comment-customer");
        var h_form_comment_customer = form_comment_customer.clientHeight;
        document.getElementById("outborder").style.height = h_border - h_form_comment_customer - 20 + "px";
        document.getElementById("content-comment").style.width = full;
        var outborder = document.getElementById("outborder");
        var inborder = document.getElementById("inborder");
        var h_outborder = outborder.clientHeight;
        var h_inborber = inborder.clientHeight;
        if (h_outborder < h_inborber) {
            document.getElementById("outborder").style.overflowY = "scroll";
        } else {
            document.getElementById("outborder").style.overflowY = "hidden";
        }
    } else
    if (x <= 1280) {
        document.getElementById("mail").style.height = height + "px";
        document.getElementById("mail").style.width = full;
        document.getElementById("comment").style.height = height + "px";
        document.getElementById("comment").style.width = full;
        document.getElementById("form-mail").style.height = height - 40 + "px";
        document.getElementById("form-mail").style.width = w_90;
        document.getElementById("form-comment").style.height = height - 40 + "px";
        document.getElementById("form-comment").style.width = w_90;
        document.getElementById("style-textarea").style.height = height / 4 + 20 + "px";
        document.getElementById("note").style.height = height / 4 + "px";
        var from_mail = document.getElementById("form-mail");
        var h_form_mail = from_mail.clientHeight;
        var from = document.getElementById("form");
        var h_form = from.clientHeight;
        document.getElementById("form-mail").style.paddingTop = (h_form_mail - h_form) / 2 + "px";
        //định dạng form comment
        document.getElementById("border").style.width = full;
        document.getElementById("border").style.height = full;
        document.getElementById("commentbg").style.width = w_80;
        ////lấy bề ngang của #border
        var border = document.getElementById("border");
        var w_border = border.clientWidth;
        var commentbg = document.getElementById("commentbg");
        var w_commentbg = commentbg.clientWidth;
        document.getElementById("commentbg").style.marginLeft = (w_border - w_commentbg) / 2 + "px";
        document.getElementById("form-comment-customer").style.height = "45%";
        document.getElementById("form-comment-customer").style.padding = "10px";
        document.getElementById("box-comment").style.height = "30%";
        var h_border = border.clientHeight;
        var form_comment_customer = document.getElementById("form-comment-customer");
        var h_form_comment_customer = form_comment_customer.clientHeight;
        document.getElementById("outborder").style.height = h_border - h_form_comment_customer - 20 + "px";
        var outborder = document.getElementById("outborder");
        var inborder = document.getElementById("inborder");
        var h_outborder = outborder.clientHeight;
        var h_inborber = inborder.clientHeight;
        if (h_outborder < h_inborber) {
            document.getElementById("outborder").style.overflowY = "scroll";
        } else {
            document.getElementById("outborder").style.overflowY = "hidden";
        }
    } else
    if (x > 1280) {
        document.getElementById("mail").style.height = height + "px";
        document.getElementById("mail").style.width = full;
        document.getElementById("comment").style.height = height + "px";
        document.getElementById("comment").style.width = full;
        document.getElementById("form-mail").style.height = height - 40 + "px";
        document.getElementById("form-mail").style.width = w_90;
        document.getElementById("form-comment").style.height = height - 40 + "px";
        document.getElementById("form-comment").style.width = w_90;
        document.getElementById("style-textarea").style.height = height / 4 + 20 + "px";
        document.getElementById("note").style.height = height / 4 + "px";
        var from_mail = document.getElementById("form-mail");
        var h_form_mail = from_mail.clientHeight;
        var from = document.getElementById("form");
        var h_form = from.clientHeight;
        document.getElementById("form-mail").style.paddingTop = (h_form_mail - h_form) / 2 + "px";
        //định dạng form comment
        document.getElementById("border").style.width = w_80;
        document.getElementById("border").style.height = full;
        document.getElementById("commentbg").style.width = w_80;
        ////lấy bề ngang của #border
        var border = document.getElementById("border");
        var w_border = border.clientWidth;
        var commentbg = document.getElementById("commentbg");
        var w_commentbg = commentbg.clientWidth;
        document.getElementById("commentbg").style.marginLeft = (w_border - w_commentbg) / 2 + "px";
        document.getElementById("form-comment-customer").style.height = "35%";
        document.getElementById("form-comment-customer").style.padding = "20px";
        document.getElementById("form-comment-customer").style.padding = "20px";
        var h_border = border.clientHeight;
        var form_comment_customer = document.getElementById("form-comment-customer");
        var h_form_comment_customer = form_comment_customer.clientHeight;
        document.getElementById("outborder").style.height = h_border - h_form_comment_customer - 20 + "px";

        var outborder = document.getElementById("outborder");
        var inborder = document.getElementById("inborder");
        var h_outborder = outborder.clientHeight;
        var h_inborber = inborder.clientHeight;
        if (h_outborder < h_inborber) {
            document.getElementById("outborder").style.overflowY = "scroll";
        } else {
            document.getElementById("outborder").style.overflowY = "hidden";
        }
    }

    }
</script>