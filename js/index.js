
/**
 * Created by PhpStorm.
 * User: Lê Huy
 * Date: 8/17/2018
 * Time: 11:35 PM
 */
/************************************************/
//********  script resize image screen  ********//
/************************************************/
window.load=backgroundimages();
window.addEventListener("resize",backgroundimages);
function backgroundimages(){

    document.body.style.background = "url('img/church-background.jpg' ) no-repeat center fixed";
    document.body.style.backgroundSize ="cover";
    document.getElementById("sidebarMenu").style.display="none";//script hide menu
    console.log("Đây Là Sản Phẩm Của Lê Huy -  https://examhtmlcss.000webhostapp.com/contact - https://www.facebook.com/lehuy.roxyproduction ");
}

/************************************************/
//****************  script menu  ***************//
/************************************************/
document.addEventListener("input",menu);
function menu(){
    var check=document.getElementById('checkbox').checked;
    if( check == true){
        var widthmenu=window.innerWidth;

        if(widthmenu<=320){
            document.getElementById("sidebarMenu").style.marginLeft="5px";
        }else
        if(widthmenu<=375){
            document.getElementById("sidebarMenu").style.marginLeft="20px";
        }else
        if(widthmenu<=384){
            document.getElementById("sidebarMenu").style.marginLeft="30px";
        }else
        if(widthmenu<=414){
            document.getElementById("sidebarMenu").style.marginLeft="10px";
        }else
        if(widthmenu<=480){
            document.getElementById("sidebarMenu").style.marginLeft="40px";
        }else
        if(widthmenu<=533){
            document.getElementById("sidebarMenu").style.marginLeft=window.innerWidth-72-365+"px";
        }else
        if(widthmenu<=603){
            document.getElementById("sidebarMenu").style.marginLeft=window.innerWidth-72-365+"px";
        }else
        if(widthmenu>603){
            document.getElementById("sidebarMenu").style.marginLeft=window.innerWidth-72-365+"px";
        }
        // document.getElementById("sidebarMenu").style.marginLeft=window.innerWidth-450+"px";
        document.getElementById("sidebarMenu").style.display="block";
        document.getElementById("sidebarMenu").style.transition="width 5s";
    }else{
        document.getElementById("sidebarMenu").style.display="none";
    }
}

