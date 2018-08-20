<?php
/**
 * Created by PhpStorm.
 * User: nhoxk
 * Date: 8/15/2018
 * Time: 11:31 AM
 */?>
<div id="key">
    <div id="exampleModalCenter" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: block; background-color: inherit; padding:0 20px">
        <div class="modal-dialog modal-dialog-centered" role="document" style="background-color: inherit;">

            <div id="Content_key" class="modal-content" style="background-color: inherit; width: 100%;position:relative;z-index:0;border:0">
<!--key background-->
                <div id="key-background" style="background-color:white;opacity:0.3;width:100%;border-radius:.3rem;margin:0px:padding:0px;position:absolute;z-index:-1 "></div>
<!--/key background-->
<!--keyheader-->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle" style="color:white" >Từ vựng của bạn : {{keyword}}</h5>
                    <a href="index.php?page=home" class="close">
                        <span aria-hidden="true">×</span>
                    </a>
                </div>
<!--/keyheader-->
<!--key body-->
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 " style="border-right:1px solid #00ffba">
                                <div class="container">
                                    <div style="width:90%;height:769.406px;background-color:white;margin:auto;padding:385px 10px;text-align: center">hình ảnh ví dụ</div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div  style="border:1px solid darkgray;border-radius:20px;margin:auto;padding:20px 40px;color:white">
                                    <div id="keyword">
                                        <div id="infor">
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
                                            <h6>//Các thể loại trạng thái (Noun , Verb,...)</h6>
                                            <h6>////trường hợp sử dụng</h6>
                                            <h6>//////ví dụ câu từ</h6>
                                            <br>
                                            <h3>{{phiên âm}}/từ vựng</h3><br><br>
                                            <h6>//Các thể loại trạng thái (Noun , Verb,...)</h6>
                                            <h6>////trường hợp sử dụng</h6>
                                            <h6>//////ví dụ câu từ</h6>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!--/key body-->
<!--key footer-->
                <div class="modal-footer">
                    <h6 style="color:white"><i>Thank you for choosing our website - Lê Huy</i></h6>
                </div>
<!--/key footer-->
            </div>
        </div>
    </div>
    <div></div>
</div>
<script>
    /************************************************/
    //**************  script background ************//
    /************************************************/
    var key_bg=document.getElementById("Content_key");
    var h_key_bg=key_bg.clientHeight;
    document.getElementById("key-background").style.height=h_key_bg+"px";


    /************************************************/
    //***************  script keyword **************//
    /************************************************/
    document.getElementById("keyword").style.width="90%";
    document.getElementById("keyword").style.margin="auto";

    var keyword_w=document.getElementById("keyword");
    var hei=keyword_w.clientWidth;
    document.getElementById("keyword").style.height=hei+"px";
    var x=document.getElementById("infor");
    var h=x.clientHeight;
        if (h>hei){
        document.getElementById("keyword").style.overflowY="scroll";
    }else{document.getElementById("keyword").style.overflowY="hidden";}


</script>