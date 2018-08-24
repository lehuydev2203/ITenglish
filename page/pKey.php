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
            <h5>Từ vựng Của bạn : {{keyword}}</h5>
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
                            <h6>//////ví dụ câu từ</h6><br>
                            <h6>//Các thể loại trạng thái (Noun , Verb,...)</h6>
                            <h6>////trường hợp sử dụng</h6>
                            <h6>//////ví dụ câu từ</h6>
                            <br>
                            <h6>//Các thể loại trạng thái (Noun , Verb,...)</h6>
                            <h6>////trường hợp sử dụng</h6>
                            <h6>//////ví dụ câu từ</h6><br>
                            <h6>//Các thể loại trạng thái (Noun , Verb,...)</h6>
                            <h6>////trường hợp sử dụng</h6>
                            <h6>//////ví dụ câu từ</h6>
                            <br>
                            <h6>//Các thể loại trạng thái (Noun , Verb,...)</h6>
                            <h6>////trường hợp sử dụng</h6>
                            <h6>//////ví dụ câu từ</h6><br>
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
            <h6>&copy;IT English - <a href="https://www.facebook.com/lehuy.roxyproduction">Lê Huy</a> Design</h6>
        </div>
    </div>
</div>

<script>
    window.load=from();//khi window load thì load hàm form
    document.addEventListener("resize",from);//bắt sự kiện resize cảu hàm from
    function from(){
        var y=window.innerHeight;
        var x=window.innerWidth;
        var height_h_f=60;

        if(x<y){
            //định dạng form
            ////chiều cao cho header & footer 60px
            document.getElementById("header").style.height=height_h_f+"px";
            document.getElementById("footer").style.height=height_h_f+"px";

            //định dạng hình ảnh #key_pic
            //// lấy #h_pic để gán cho bề ngang của image size
            var key=document.getElementById("key");
            var key_pic_width_380=(key.clientWidth)/100*95;
            document.getElementById("image").width=key_pic_width_380;
            document.getElementById("image").height=key_pic_width_380;
            //định dạng cho hình ảnh luôn nằm ở chính giữa
            document.getElementById("key_pic").align="center";
            document.getElementById("key_pic").style.paddingLeft="0px";
            document.getElementById("key_pic").style.paddingRight="0px";
            document.getElementById("key_pic").style.paddingTop="20px";

            //định dạng keyword
            //lấy chiều cao của phần nội dung trong #infor
            var info=document.getElementById("infor");
            var h_info=info.clientHeight;
            //gán chiều cao cho #keyword từ chiều cao của #infor
            document.getElementById("keyword").style.height=h_info+"px";
            var keyword=document.getElementById("keyword");
            var h_keyword=keyword.clientHeight;
            //gán chiều cao cho #form-keyword từ chiều cao của #keyword
            document.getElementById("form-keyword").style.height=h_keyword+"px";
            document.getElementById("form-keyword").style.width="100%";
            document.getElementById("keyword").style.margin="0px";
            document.getElementById("form-keyword").style.paddingTop="20px";

            //định dạng chiều cao của content
            var form_keyword=document.getElementById("form-keyword");
            var h_form_keyword=form_keyword.clientHeight;
            document.getElementById("content").style.height=h_form_keyword+key_pic_width_380+40+"px";

            //định dạng #bgkey
            var content=document.getElementById("content");
            var h_content=content.clientHeight;
            document.getElementById("bgkey").style.height=height_h_f*2+h_content+"px";
        }
        else if(x>=1024){
            var h=y/100*85;
            document.getElementById("key").style.height=h+"px";

            // lấy width của id key
            var key_w=document.getElementById("key");
            var bgkey_w=key_w.clientWidth;
            // lấy width và height của key gán cho chiều cao id bgkey để làm background
            document.getElementById("bgkey").style.height=h+"px";
            // document.getElementById("bgkey").style.width=bgkey_w+"px";

            // chiều cao của id header footer là 60px

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
    }else
        if(x<=480){
            //định dạng form
            ////chiều cao cho header & footer 60px
            document.getElementById("header").style.height=height_h_f+"px";
            document.getElementById("footer").style.height=height_h_f+"px";

            //định dạng hình ảnh #key_pic
            //// lấy #h_pic để gán cho bề ngang của image size
            var key=document.getElementById("key");
            var key_pic_width_380=(key.clientWidth)/100*95;
            document.getElementById("image").width=key_pic_width_380;
            document.getElementById("image").height=key_pic_width_380;
            //định dạng cho hình ảnh luôn nằm ở chính giữa
            document.getElementById("key_pic").align="center";
            document.getElementById("key_pic").style.paddingLeft="0px";
            document.getElementById("key_pic").style.paddingRight="0px";
            document.getElementById("key_pic").style.paddingTop="20px";

            //định dạng keyword
            //lấy chiều cao của phần nội dung trong #infor
            document.getElementById("infor").style.width="100%";
            var info=document.getElementById("infor");
            var h_info=info.clientHeight;
            //gán chiều cao cho #keyword từ chiều cao của #infor
            document.getElementById("keyword").style.height=h_info+"px";
            var keyword=document.getElementById("keyword");
            var h_keyword=keyword.clientHeight;
            //gán chiều cao cho #form-keyword từ chiều cao của #keyword
            document.getElementById("form-keyword").style.height=h_keyword+"px";
            document.getElementById("form-keyword").style.width="100%";
            document.getElementById("keyword").style.margin="0px";
            document.getElementById("form-keyword").style.paddingTop="20px";

            //định dạng chiều cao của content
            var form_keyword=document.getElementById("form-keyword");
            var h_form_keyword=form_keyword.clientHeight;
            document.getElementById("content").style.height=h_form_keyword+key_pic_width_380+60+"px";

            //định dạng #bgkey
            var content=document.getElementById("content");
            var h_content=content.clientHeight;
            document.getElementById("bgkey").style.height=height_h_f*2+h_content+"px";
    }else
        if(x<=568){
            //định dạng form
            ////chiều cao cho header & footer 60px
            document.getElementById("header").style.height=height_h_f+"px";
            document.getElementById("footer").style.height=height_h_f+"px";

            //định dạng hình ảnh #key_pic
            //// lấy #h_pic để gán cho bề ngang của image size
            var key=document.getElementById("key");
            var key_pic_width_380=(key.clientWidth)/100*95;
            document.getElementById("image").width=key_pic_width_380;
            document.getElementById("image").height=key_pic_width_380;
            //định dạng cho hình ảnh luôn nằm ở chính giữa
            document.getElementById("key_pic").align="center";
            document.getElementById("key_pic").style.paddingLeft="0px";
            document.getElementById("key_pic").style.paddingRight="0px";
            document.getElementById("key_pic").style.paddingTop="20px";

            //định dạng keyword
            //lấy chiều cao của phần nội dung trong #infor
            document.getElementById("infor").style.width="100%";
            var info=document.getElementById("infor");
            var h_info=info.clientHeight;
            //gán chiều cao cho #keyword từ chiều cao của #infor
            document.getElementById("keyword").style.height=h_info+"px";
            var keyword=document.getElementById("keyword");
            var h_keyword=keyword.clientHeight;
            //gán chiều cao cho #form-keyword từ chiều cao của #keyword
            document.getElementById("form-keyword").style.height=h_keyword+"px";
            document.getElementById("form-keyword").style.width="100%";
            document.getElementById("keyword").style.margin="0px";
            document.getElementById("form-keyword").style.paddingTop="20px";

            //định dạng chiều cao của content
            var form_keyword=document.getElementById("form-keyword");
            var h_form_keyword=form_keyword.clientHeight;
            document.getElementById("content").style.height=h_form_keyword+key_pic_width_380+60+"px";

            //định dạng #bgkey
            var content=document.getElementById("content");
            var h_content=content.clientHeight;
            document.getElementById("bgkey").style.height=height_h_f*2+h_content+"px";
    }else
        if(x<=690){
            //định dạng form
            ////chiều cao cho header & footer 60px
            document.getElementById("header").style.height=height_h_f+"px";
            document.getElementById("footer").style.height=height_h_f+"px";

            //định dạng hình ảnh #key_pic
            //// lấy #h_pic để gán cho bề ngang của image size
            var key=document.getElementById("key");
            var key_pic_width_380=(key.clientWidth)/100*95;
            document.getElementById("image").width=key_pic_width_380;
            document.getElementById("image").height=key_pic_width_380;
            //định dạng cho hình ảnh luôn nằm ở chính giữa
            document.getElementById("key_pic").align="center";
            document.getElementById("key_pic").style.paddingLeft="0px";
            document.getElementById("key_pic").style.paddingRight="0px";
            document.getElementById("key_pic").style.paddingTop="20px";

            //định dạng keyword
            //lấy chiều cao của phần nội dung trong #infor
            document.getElementById("infor").style.width="100%";
            var info=document.getElementById("infor");
            var h_info=info.clientHeight;
            //gán chiều cao cho #keyword từ chiều cao của #infor
            document.getElementById("keyword").style.height=h_info+"px";
            var keyword=document.getElementById("keyword");
            var h_keyword=keyword.clientHeight;
            //gán chiều cao cho #form-keyword từ chiều cao của #keyword
            document.getElementById("form-keyword").style.height=h_keyword+"px";
            document.getElementById("form-keyword").style.width="100%";
            document.getElementById("keyword").style.margin="0px";
            document.getElementById("form-keyword").style.paddingTop="20px";

            //định dạng chiều cao của content
            var form_keyword=document.getElementById("form-keyword");
            var h_form_keyword=form_keyword.clientHeight;
            document.getElementById("content").style.height=h_form_keyword+key_pic_width_380+60+"px";

            //định dạng #bgkey
            var content=document.getElementById("content");
            var h_content=content.clientHeight;
            document.getElementById("bgkey").style.height=height_h_f*2+h_content+"px";
    }else
        if(x<=768){
            //định dạng form
            ////chiều cao cho header & footer 60px
            document.getElementById("header").style.height=height_h_f+"px";
            document.getElementById("footer").style.height=height_h_f+"px";

            //định dạng hình ảnh #key_pic
            //// lấy #h_pic để gán cho bề ngang của image size
            var key=document.getElementById("key");
            var key_pic_width_380=(key.clientWidth)/100*95;
            document.getElementById("image").width=key_pic_width_380;
            document.getElementById("image").height=key_pic_width_380;
            //định dạng cho hình ảnh luôn nằm ở chính giữa
            document.getElementById("key_pic").align="center";
            document.getElementById("key_pic").style.paddingLeft="0px";
            document.getElementById("key_pic").style.paddingRight="0px";
            document.getElementById("key_pic").style.paddingTop="20px";

            //định dạng keyword
            //lấy chiều cao của phần nội dung trong #infor
            document.getElementById("infor").style.width="100%";
            var info=document.getElementById("infor");
            var h_info=info.clientHeight;
            //gán chiều cao cho #keyword từ chiều cao của #infor
            document.getElementById("keyword").style.height=h_info+"px";
            var keyword=document.getElementById("keyword");
            var h_keyword=keyword.clientHeight;
            //gán chiều cao cho #form-keyword từ chiều cao của #keyword
            document.getElementById("form-keyword").style.height=h_keyword+"px";
            document.getElementById("form-keyword").style.width="100%";
            document.getElementById("keyword").style.margin="0px";
            document.getElementById("form-keyword").style.paddingTop="20px";

            //định dạng chiều cao của content
            var form_keyword=document.getElementById("form-keyword");
            var h_form_keyword=form_keyword.clientHeight;
            document.getElementById("content").style.height=h_form_keyword+key_pic_width_380+60+"px";

            //định dạng #bgkey
            var content=document.getElementById("content");
            var h_content=content.clientHeight;
            document.getElementById("bgkey").style.height=height_h_f*2+h_content+"px";
    }else
        if(x<=853){
            //định dạng form
            ////chiều cao cho header & footer 60px
            document.getElementById("header").style.height=height_h_f+"px";
            document.getElementById("footer").style.height=height_h_f+"px";

            //định dạng hình ảnh #key_pic
            //// lấy #h_pic để gán cho bề ngang của image size
            var key=document.getElementById("key");
            var key_pic_width_380=(key.clientWidth)/100*95;
            document.getElementById("image").width=key_pic_width_380;
            document.getElementById("image").height=key_pic_width_380;
            //định dạng cho hình ảnh luôn nằm ở chính giữa
            document.getElementById("key_pic").align="center";
            document.getElementById("key_pic").style.paddingLeft="0px";
            document.getElementById("key_pic").style.paddingRight="0px";
            document.getElementById("key_pic").style.paddingTop="20px";

            //định dạng keyword
            //lấy chiều cao của phần nội dung trong #infor
            document.getElementById("infor").style.width="100%";
            var info=document.getElementById("infor");
            var h_info=info.clientHeight;
            //gán chiều cao cho #keyword từ chiều cao của #infor
            document.getElementById("keyword").style.height=h_info+"px";
            var keyword=document.getElementById("keyword");
            var h_keyword=keyword.clientHeight;
            //gán chiều cao cho #form-keyword từ chiều cao của #keyword
            document.getElementById("form-keyword").style.height=h_keyword+"px";
            document.getElementById("form-keyword").style.width="100%";
            document.getElementById("keyword").style.margin="0px";
            document.getElementById("form-keyword").style.paddingTop="20px";

            //định dạng chiều cao của content
            var form_keyword=document.getElementById("form-keyword");
            var h_form_keyword=form_keyword.clientHeight;
            document.getElementById("content").style.height=h_form_keyword+key_pic_width_380+60+"px";

            //định dạng #bgkey
            var content=document.getElementById("content");
            var h_content=content.clientHeight;
            document.getElementById("bgkey").style.height=height_h_f*2+h_content+"px";
    }else
        if(x<=966){
            //định dạng form
            ////chiều cao cho header & footer 60px
            document.getElementById("header").style.height=height_h_f+"px";
            document.getElementById("footer").style.height=height_h_f+"px";

            //định dạng hình ảnh #key_pic
            //// lấy #h_pic để gán cho bề ngang của image size
            var key=document.getElementById("key");
            var key_pic_width_380=(key.clientWidth)/100*95;
            document.getElementById("image").width=key_pic_width_380;
            document.getElementById("image").height=key_pic_width_380;
            //định dạng cho hình ảnh luôn nằm ở chính giữa
            document.getElementById("key_pic").align="center";
            document.getElementById("key_pic").style.paddingLeft="0px";
            document.getElementById("key_pic").style.paddingRight="0px";
            document.getElementById("key_pic").style.paddingTop="20px";

            //định dạng keyword
            //lấy chiều cao của phần nội dung trong #infor
            document.getElementById("infor").style.width="100%";
            var info=document.getElementById("infor");
            var h_info=info.clientHeight;
            //gán chiều cao cho #keyword từ chiều cao của #infor
            document.getElementById("keyword").style.height=h_info+"px";
            var keyword=document.getElementById("keyword");
            var h_keyword=keyword.clientHeight;
            //gán chiều cao cho #form-keyword từ chiều cao của #keyword
            document.getElementById("form-keyword").style.height=h_keyword+"px";
            document.getElementById("form-keyword").style.width="100%";
            document.getElementById("keyword").style.margin="0px";
            document.getElementById("form-keyword").style.paddingTop="20px";

            //định dạng chiều cao của content
            var form_keyword=document.getElementById("form-keyword");
            var h_form_keyword=form_keyword.clientHeight;
            document.getElementById("content").style.height=h_form_keyword+key_pic_width_380+60+"px";

            //định dạng #bgkey
            var content=document.getElementById("content");
            var h_content=content.clientHeight;
            document.getElementById("bgkey").style.height=height_h_f*2+h_content+"px";
    }
}
</script>