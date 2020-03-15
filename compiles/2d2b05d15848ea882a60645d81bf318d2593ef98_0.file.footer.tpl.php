<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-31 13:57:13
  from 'C:\Users\admin\Desktop\timework\layabox\views\home\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e33c1b97d25f3_81263010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d2b05d15848ea882a60645d81bf318d2593ef98' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\timework\\layabox\\views\\home\\footer.tpl',
      1 => 1580450231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e33c1b97d25f3_81263010 (Smarty_Internal_Template $_smarty_tpl) {
?><footer>
    <div class="container" style="overflow: visible">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="contact">
                    <ul>
                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['aboinfo']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['val']->value['abo_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['abo_name'];?>
</a></li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
                <div class="copyright">
                    <p><?php echo $_smarty_tpl->tpl_vars['confinfo']->value['conf_copy'];?>

                       
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="footerWrap">
                    <div class="footerWrap1">
                        <a href="javascript:void(0);" class="yinqing" target="_top"></a>
                        <div class="email-01"> <img src="./static/home/images/email.png" alt="" height="150" width="142"> </div>
                        <a href="javascript:void(0);" class="weixin"></a>
                        <div class="wxpop"> <img src="./static/home/images/weixin.png" alt="" height="150" width="142"> </div>
                        <a href="javascript:void(0);" class="qq"></a>
                        <div class="qqpop"> <img src="./static/home/images/qqpop.png" alt="" height="150" width="142"> </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
<!-- jQuery -->
<?php echo '<script'; ?>
 src="./static/home/js/jquery.min.js"><?php echo '</script'; ?>
>

<!-- Bootstrap Core JavaScript -->
<?php echo '<script'; ?>
 src="./static/home/js/bootstrap.js"><?php echo '</script'; ?>
>

<!-- Script to Activate the Carousel -->
<?php echo '<script'; ?>
>
    // 导航选中高亮
    var urlstr = location.href;
    var urlstatus = false;
    $("#bs-example-navbar-collapse-1 a").each(function() {
        if (urlstr.indexOf($(this).attr('href')) > -1 && $(this).attr('href') != '') {
            $(this).parent().addClass('active');
            urlstatus = true;
        } else {
            $(this).parent().removeClass('active');
        }
    });
    if (!urlstatus) {
        $("#bs-example-navbar-collapse-1 a").eq(0).parent().addClass('active');
    }
    //banner轮换
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });
    //弹出层
    function popCeil() {
        $(".yinqing").mouseover(function() {
            $(".email-01").show();
        });
        $(".yinqing").mouseout(function() {
            $(".email-01").hide();
        });
        $(".weixin").mouseover(function() {
            $(".wxpop").show();
        });
        $(".weixin").mouseout(function() {
            $(".wxpop").hide();
        });
        $(".qq").mouseover(function() {
            $(".qqpop").show();
        });
        $(".qq").mouseout(function() {
            $(".qqpop").hide();
        });
        $(".top2").mouseover(function() {
            $(".returnsl").show();
        });
        $(".top2").mouseout(function() {
            $(".returnsl").hide();
        });
    }
    $(document).ready(function() {
        popCeil();
    });
    //    //
    //    var screenHeight;
    //    screenHeight = $(window).height();
    //    $(document).ready(function(){
    //        if(screenHeight > 1300){
    //            $("footer").css("position","absolute");
    //        }
    //    });

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="./static/home/js/video.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    //			var laya_yf;
    //			laya_zh = document.getElementById("laya_zh");
    //			laya_yf = document.getElementById("laya_yf");
    //
    //			function splay(objId) {
    //				if (objId == "laya_zh") {
    //					laya_zh.play();
    //				} else {
    //					laya_yf.play();
    //				}
    //			}
    //
    var videoDom = document.getElementById("laya_yf_html5_api");

    function stopVideo() {
        videoDom.currentTime = 0;
        videoDom.pause();
    }

<?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
