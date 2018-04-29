<?php
session_start();
error_reporting(E_ALL);
date_default_timezone_set("PRC");
header("Content-Type: text/html; charset=UTF-8");
include "ini.php";
//版权：风沙娱乐
//作者：风沙
//网址：www.fengshayun.top

?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title><?php echo $ini['title']?></title>
  <meta name="keywords" content="<?php echo $ini['keywords']?>" />
  <meta name="description" content="<?php echo $ini['description']?>" />
  <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="public/js/jquery-1.7.2.min.js"></script>
  <script type="text/javascript">eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('b a(){0 6=1.2("9").4;0 5=1.2("3");0 3=1.2("3").c;0 8=5.e[3].4;0 7=1.2("f");7.d=8+6}',16,16,'var|document|getElementById|jk|value|jkurl|diz|cljurl|jkv|url|dihejk|function|selectedIndex|src|options|player'.split('|'),0,{}))</script>
</head>
<body background="./img/bj.png">
  <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 center-block" style="float: none;">
  <h3 class="text-muted" align="center"><?php echo $ini['title']?></h3>
  <center>
   <span style="color:red"><marquee behavior="scroll">
   公告：1.爱奇艺可用3号接口解析；2.使用前请先看接口可用情况；3.若接口有失效或者您有新接口，可联系我
   </marquee></span>
  </center>
<hr>
 <thead>
	<tr>
	    <a target="_blank" href="http://www.bilibili.com/video/av8588155" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-thumbs-up"></span>本站使用方法</a>
		<a target="_blank" href="/ff.html" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-thumbs-up"></span>磁力链使用方法</a>
		<a target="_blank" href="http://www.adtchrome.com" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-thumbs-up"></span>去视频广告（电脑）</a>
	</tr>
 </thead>
 <table class="table table-bordered">
 <tbody>
	<div class="col-md-14 column">
    <div class="panel panel-default">
     <div id="kj" class="panel-body">
      <iframe src="./public/vip_js/index.htm" id="player" width="100%" height="400px" allowtransparency="true" frameborder="0" scrolling="no"></iframe>
     </div>
    </div>
   </div>
   <tr>
   <div class="col-md-14 column">
    <form method="get" id="1233911832">
     <div class="input-group" style="width: 100%;">
      <span class="input-group-addon input-lg" style="width: 80px; ">选择接口</span>
      <select class="form-control input-lg" id="jk">
<option value="http://api.47ks.com/webcloud/?v=">1号通用接口（推荐）</option>
<option value="http://v.72du.com/api/?url=">2号通用接口（推荐）</option>
<option value="http://qtzr.net/s/?qt=">3号通用接口（手机版无广告）</option>
<option value="http://000o.cc/jx/ty.php?url=">4号通用接口</option>
<option value="http://yyygwz.com/index.php?url=">5号通用接口</option>
<option value="http://www.wmxz.wang/video.php?url=">6号通用接口</option> 
<option value="http://yun.zihu.tv/play.html?url=">7号通用接口</option>
<option value="http://www.vipjiexi.com/yun.php?url=">8号通用接口</option>
<option value="https://jxapi.nepian.com/ckparse/?url=">9号通用接口</option>
<option value="http://www.yydy8.com/Common/?url=">10号通用接口</option>
<option value="http://2gty.com/apiurl/yun.php?url=">11号通用接口</option>
<option value="https://aikan-tv.com/tong.php?url=">12号通用接口</option>
<option value="https://ckplaer.duapp.com/hai.php?url=">13号通用接口</option>
<option value="https://apiv.ga/magnet/">万能磁力链接解析</option>
<option value="http:// ">更多接口待添加...</option> </select>
     </div>
     <br>
     <div class="input-group" style="width: 100%;">
             <span class="input-group-addon input-lg" style="width: 80px;">视频地址</span>
             <input class="form-control input-lg" type="search" placeholder="输入需要会员的视频播放地址" id="url">
     </div>
        <br>
         <div>
             <button id="bf" type="button" class="btn btn-success btn-lg btn-block" onclick="dihejk()">播放</button>
         </div>
        </form>
       </div>
	  </tr>
     </tbody>
    </table>
    <table class="table table-bordered">
	<thead>
		<tr>
		<a title="本站的广告只放有用的" target="_blank">小广告：</a>
		<a target="_blank" href="http://www.52pojie.cn" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-thumbs-up"></span>（推荐）吾爱破解</a>
	    </tr>
	</thead>
	<tbody>
	    <tr>
			<th>↓↓↓接口可用情况↓↓↓ <button type="button" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-user"></span>  <a href="http://wpa.qq.com/msgrd?v=3&uin=1726640128&site=qq&menu=yes">站长风沙（接口失效联系我）</a></th>
		</tr>
	</thead>
	<tbody>
		<tr>
            <td><b>
               <ol><h5><b>
<li>1号通用接口：优酷、乐视、腾讯、芒果、PPTV、土豆、华数</li><br>
<li>2号通用接口：优酷、乐视、腾讯、搜狐、PPTV、土豆</li><br>
<li>3号通用接口：爱奇艺、乐视、PPTV、华数</li><br>
<li>4号通用接口：优酷、乐视、腾讯、芒果、搜狐、PPTV、土豆、华数</li><br>
<li>5号通用接口：优酷、搜狐、PPTV、土豆、华数</li><br>
<li>6号通用接口：优酷、乐视、腾讯、搜狐、PPTV、土豆、华数</li><br>
<li>7号通用接口：乐视、搜狐、PPTV、土豆、华数</li><br>
<li>8号通用接口：优酷、乐视、腾讯、芒果、搜狐、PPTV、土豆</li><br>
<li>9号通用接口：优酷、乐视、芒果、土豆</li><br>
<li>10号通用接口：优酷、乐视、腾讯、芒果、PPTV、土豆、华数</li><br>
<li>11号通用接口：优酷、乐视、腾讯、芒果、PPTV、土豆、华数</li><br>
<li>12号通用接口：优酷、乐视、腾讯、芒果、搜狐、PPTV、土豆</li><br>
<li>13号通用接口：优酷、乐视、腾讯、芒果、搜狐、PPTV</li><br>
<li>磁力引擎：老司机专用通道，你的懂的.....</li><br>
<li>网站更新日志：仅供技术人员参考<a target="_blank" href="/rizhi.html" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-thumbs-up"></span>日志</a></li><br>
<li>接口是免费的，但免费的条件是放广告，各位请理解一下</li><br></b></h5>
 </ol>
</b></ol>
      </td>
	 </tr>
    </tbody>
   </table>
<?php include "foot.php";?>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1261247377'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/z_stat.php%3Fid%3D1261247377%26online%3D1%26show%3Dline' type='text/javascript'%3E%3C/script%3E"));</script>
</body>
</html>

