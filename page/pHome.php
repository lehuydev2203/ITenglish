<?php
/**
 * Created by PhpStorm.
 * User: Lê Huy
 * Date: 8/15/2018
 * Time: 11:32 AM
 */
?>
<section class="container" id="main">
    <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" id="header-title">
                <h1><span style="color: #00ffba">IT</span> English</h1>
            </div>
            </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <form action="">
                <div class="container">
                    <input type="text" class="search"  placeholder="Search">
                    <button type="submit"><span class="fa fa-search"></span></button>
                </div>
            </form>
        </div>
    </div>
</section>
<script>
//form search
window.load=formsearch();
function formsearch(){
var height=window.innerHeight;
var pro_height=(height-251)/2;
document.getElementById("main").style.paddingTop =pro_height+"px";

}</script>