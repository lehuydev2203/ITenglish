<?php
/**
 * Created by PhpStorm.
 * User: nhoxk
 * Date: 8/15/2018
 * Time: 11:31 AM
 */
/*
<div class="pKey">
    <div>
        <div id="form" >
            <div id="bgkey"></div>
            <div class="header">
<!--                <!--keyheader-->-->
<!--                <div >-->
<!--                    <h5  style="color:white" >Từ vựng của bạn : {{keyword}}</h5>-->
<!--                    <a href="index.php?page=home" class="close">-->
<!--                        <span aria-hidden="true">×</span>-->
<!--                    </a>-->
<!--                </div>-->
<!--                <!--/keyheader-->-->
            </div>
            <div class="content">
<!--                <div class="container-fluid">-->
<!--                    <div class="row">-->
<!--                        <!--key picture-->-->
<!--                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 border_right" style="">-->
<!--                            <div class="container ">-->
<!--                                <div id="key_pic" style="background-color:white;text-align: center">hình ảnh ví dụ</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <!--/key picture-->-->
<!--                        <!--key word-->-->
<!--                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">-->
<!--                            <div class="keyword" style="">-->
<!--                                <div id="keyword">-->
<!--                                    <div id="infor">-->
<!--                                        <h1>{{keyword}}/ từ vựng</h1>-->
<!--                                        <br><br>-->
<!--                                        <h3>{{phiên âm}}/từ vựng</h3><br><br>-->
<!--                                        <h6>//Các thể loại trạng thái (Noun , Verb,...)</h6>-->
<!--                                        <h6>////trường hợp sử dụng</h6>-->
<!--                                        <h6>//////ví dụ câu từ</h6>-->
<!--                                        <br>-->
<!--                                        <h6>//Các thể loại trạng thái (Noun , Verb,...)</h6>-->
<!--                                        <h6>////trường hợp sử dụng</h6>-->
<!--<!--                                        <h6>//////ví dụ câu từ</h6>-->-->
<!--<!--                                        <h6>//Các thể loại trạng thái (Noun , Verb,...)</h6>-->-->
<!--<!--                                        <h6>////trường hợp sử dụng</h6>-->-->
<!--<!--                                        <h6>//////ví dụ câu từ</h6>-->-->
<!--<!--                                        <h3>{{phiên âm}}/từ vựng</h3>-->-->
<!--<!--                                        <br><br>-->-->
<!--<!--                                        <h6>//Các thể loại trạng thái (Noun , Verb,...)</h6>-->-->
<!--<!--                                        <h6>////trường hợp sử dụng</h6>-->-->
<!--<!--                                        <br>-->-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <!--/key word-->-->
<!--                    </div>-->
<!--                </div>-->
            </div>
            <div class="footer">
<!--                <!--key footer-->
<!--                <div class="modal-footer">-->
<!--                    <h6><i>Thank you for choosing our website - Lê Huy</i></h6>-->
<!--                </div>-->
<!--                <!--/key footer-->
            </div>
        </div>
    </div>
</div>
<script>
    // window.load=pkey;
    var x=window.innerWidth;
    var y=window.innerHeight;
    // var w=x/100*90;
    // var h=(y/100*90)+100;
    alert(x);
    alert(y);
    document.addEventListener("resize",form);
    function form(){
        var w=(window.innerWidth)/100*90;
        var h=(window.innerHeight)/100*90;
        // document.getElementById("form").style.width=w+"px";
        document.getElementById("form").style.width ="300px";
        document.getElementById("form").style.height=800+"px";
    }



    /************************************************/
    //**************  script background ************//
    /************************************************/
    // var get_form=document.getElementById("form");
    // var get_x_form=get_form.clientWidth;
    // var get_y_form=get_form.clientHeight;
    // document.getElementById("bgkey").style.height=get_y_form+"px";
    // document.getElementById("bgkey").style.width=get_x_form+"px";
    //
    // document.getElementById("key_background").style.height=935+"px";
    // var key_y=document.getElementById("key").clientHeight;
    // if(x<=540 && key_y>y){
    //     var key_bg=document.getElementById("content_key");
    //     var content_height=key_bg.clientHeight;
    //     document.getElementById("key_background").style.height=content_height+"px";
    //     document.getElementById("key").style.overflowY="scroll";
    // }

    /************************************************/
    //***************  script picture **************//
    /************************************************/
    // document.getElementById("key_pic").style.width="90%";
    // document.getElementById("key_pic").style.margin="auto";
    // var h_pic=document.getElementById("key_pic");
    // var key_h_pic=h_pic.clientWidth;
    // document.getElementById("key_pic").style.height=key_h_pic+"px";


    /************************************************/
    //***************  script keyword **************//
    /************************************************/
    // document.getElementById("keyword").style.width="90%";
    // document.getElementById("keyword").style.margin="auto";
    // //ley61 giá trị width của keyword
    // var keyword_w=document.getElementById("keyword");
    // var hei=keyword_w.clientWidth;
    // //gán bề ngang width cho height
    // document.getElementById("keyword").style.height=hei+"px";
    // var z=document.getElementById("infor");
    // var h=z.clientHeight;
    //     if (h>hei){
    //     document.getElementById("keyword").style.overflowY="scroll";
    // }else{document.getElementById("keyword").style.overflowY="hidden";}
    // if(h>y){
    //     document.getElementById("keyword").style.height=h+"px";
    // }
//</script>

?>

<div id="pKey" style="width: 100%;margin: 0 auto;padding:70px 20px 70px 20px;">
    <div id="key" style="width: 100%; margin:0;padding: 0;border: 1px solid white; border-radius: 10px;">
        <div id="bgkey" style="width: 100%;margin:0;padding:0;background-color: white;opacity: 0.2;border-radius: 10px"></div>
        <div id="header" style="width: 100%;margin:0;padding:20px 0;border-bottom: 1px solid white"></div>
        <div id="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6"></div>
                </div>
            </div>
        </div>
        <div id="footer" style="width: 100%;margin:0;padding:20px 0;border-top: 1px solid white;"></div>
    </div>
</div>

<script>
    window.load=from();//khi window load thì load hàm form
    document.addEventListener("resize",from);//bắt sự kiện resize cảu hàm from
    function from(){
    var y=window.innerHeight;
    var h=y/100*85;
    document.getElementById("key").style.height=h+"px";
    // lấy width của id key
    var key_w=document.getElementById("key");
    var bgkey_w=key_w.clientWidth;
    // lấy width và height của key gán cho chiều cao id bgkey để làm background
    document.getElementById("bgkey").style.height=h+"px";
    document.getElementById("bgkey").style.width=bgkey_w+"px";
    // chiều cao của id header footer là 60px
    var height_h_f=60;
    document.getElementById("header").style.height=height_h_f+"px";
    document.getElementById("footer").style.height=height_h_f+"px";
    //chiều cao id content bằng chiều cao id key - chiều cao của id header footer
    document.getElementById("content").style.height=h-height_h_f*2+"px";
    }
</script>