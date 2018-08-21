<?php
/**
 * Created by PhpStorm.
 * User: nhoxk
 * Date: 8/15/2018
 * Time: 11:31 AM
 */


?>

<div id="pKey">
    <div id="key">
        <div id="bgkey"></div>
        <div id="header">
            <h5 style="float: left;line-height: 35px;padding-left: 20px">Từ vựng Của bạn : {{keyword}}</h5>
            <a href="index.php?page=home"><span aria-hidden="true">×</span></a>
        </div>
        <div id="content">
            <div class="row" style="margin:0;padding:0">
                <div id="key_pic" class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                    <img id="image" class="rounded mx-auto d-block" src="img/logoMonster&taurus.png" alt="">
                </div>
                <div id="form-keyword" class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                       <div id="keyword" style="margin:20px;position: relative;z-index: 3;">
                    <div id="infor" style="width:90%;position: absolute;z-index: 3;" >
                            <h1>{{keyword}}/ từ vựng</h1>
                            <br><br>
                            <h3>{{phiên âm}}/từ vựng</h3><br><br>
                            <h6>//Các thể loại trạng thái (Noun , Verb,...)</h6>
                            <h6>////trường hợp sử dụng</h6>
                            <h6>//////ví dụ câu từ</h6>
                            <br>
                            <h6>//Các thể loại trạng thái (Noun , Verb,...)</h6>
                            <h6>////trường hợp sử dụng</h6>
                            <h6>//////ví dụ câu từ</h6>
                            <br>
                            <h6>//Các thể loại trạng thái (Noun , Verb,...)</h6>
                            <h6>////trường hợp sử dụng</h6>
                            <h6>//////ví dụ câu từ</h6>
                        </div>
                       </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <h6 style="">&copy;IT English - <a href="https://www.facebook.com/lehuy.roxyproduction">Lê Huy</a> Design</h6>
        </div>
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
        // document.getElementById("bgkey").style.width=bgkey_w+"px";

        // chiều cao của id header footer là 60px
        var height_h_f=60;
        document.getElementById("header").style.height=height_h_f+"px";
        document.getElementById("footer").style.height=height_h_f+"px";
        //chiều cao id content bằng chiều cao id key - chiều cao của id header footer
        document.getElementById("content").style.height=h-height_h_f*2+"px";

        // lấy #h_pic để gán cho bề ngang của image size
        var key_pic=document.getElementById("key_pic");
        var pic_width=(key_pic.clientWidth)/100*95;
        document.getElementById("image").width=pic_width;
        document.getElementById("image").height=pic_width;

        //định dạng cho hình ảnh luôn nằm ở chính giữa
        document.getElementById("key_pic").align="center";

        /************************************************/
        //***************  script keyword **************//
        /************************************************/
        var content=document.getElementById("content");
        var h_content=content.clientHeight;
        document.getElementById("form-keyword").style.height=h_content+"px";
        var from_keyword=document.getElementById("form-keyword");
        var h_from=from_keyword.clientHeight;
        document.getElementById("keyword").style.height=h_from-40+"px";

        var infor=document.getElementById("infor");
        var h_infor=infor.clientHeight;
        // kiểm tra chiều cao của #infor có dài hơn chiều cao của #keyword không
        if(h_infor>h_content){
            //nếu cao hơn thì sử dụng overflowY scroll
            document.getElementById("keyword").style.overflowY="scroll";
        }else{
            //ngược lại thì ẩn thanh scroll đi
            document.getElementById("keyword").style.overflowY="hidden";}

    }
</script>