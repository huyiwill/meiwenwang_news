<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_meiwen_enewstempvar`;");
E_C("CREATE TABLE `www_92game_net_meiwen_enewstempvar` (
  `varid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `myvar` varchar(60) NOT NULL DEFAULT '',
  `varname` varchar(60) NOT NULL DEFAULT '',
  `varvalue` mediumtext NOT NULL,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `isclose` tinyint(1) NOT NULL DEFAULT '0',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`varid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_meiwen_enewstempvar` values('1','header','页面头部','<link rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" href=\\\\\"[!--news.url--]skin/css/style.css\\\\\" />\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]skin/js/jquery-1.7.1.min.js\\\\\"></script>\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]skin/js/global.js\\\\\"></script>\r\n</head>\r\n<body>\r\n<div id=\\\\\"header\\\\\">\r\n<div id=\\\\\"toolbar\\\\\"><div class=\\\\\"tool\\\\\">\r\n     <div class=\\\\\"left fl\\\\\"><a href=\\\\\"<?=\$public_r[\\\\''add_www_92game_net_phone\\\\'']?>\\\\\" target=\\\\\"_blank\\\\\">手机访问</a><a href=\\\\\"[!--news.url--]new\\\\\" target=\\\\\"_blank\\\\\">最新100</a><a href=\\\\\"[!--news.url--]pic\\\\\" target=\\\\\"_blank\\\\\">美图心语</a><a href=\\\\\"[!--news.url--]sitemap.html\\\\\" target=\\\\\"_blank\\\\\">MAP</a><a href=\\\\\"[!--news.url--]tag.html\\\\\" target=\\\\\"_blank\\\\\">TAG</a></div>\r\n	 <div class=\\\\\"right fr\\\\\"><script>hello()</script>\r\n	 欢迎访问<?=\$public_r[\\\\''add_www_92game_net_name\\\\'']?>！\r\n	 <a class=\\\\\"ico-25 fr\\\\\" href=\\\\\"[!--news.url--]zm.php\\\\\">保存到桌面</a></div>\r\n</div></div>\r\n<div class=\\\\\"head\\\\\">\r\n	 <div class=\\\\\"logo fl\\\\\"><a href=\\\\\"[!--news.url--]\\\\\"><img src=\\\\\"[!--news.url--]skin/img/logo.png\\\\\" width=\\\\\"280\\\\\" height=\\\\\"60\\\\\" alt=\\\\\"[!--pagetitle--]\\\\\"/></a></div>\r\n	 <div class=\\\\\"left fr\\\\\">\r\n	 <div class=\\\\\"serach fl\\\\\">\r\n	 <form class=\\\\\"search-form\\\\\" id=\\\\\"search_form\\\\\" action=\\\\\"[!--news.url--]e/search/\\\\\" method=\\\\\"post\\\\\" name=\\\\\"searchform\\\\\" onsubmit=\\\\\"if(document.getElementById(\\\\''searchword\\\\'').value==\\\\''请输入搜索内容\\\\'')return false;\\\\\">\r\n	 <input type=\\\\\"hidden\\\\\" name=\\\\\"show\\\\\" value=\\\\\"title,keyboard\\\\\" />\r\n	 <input type=\\\\\"hidden\\\\\" name=\\\\\"tempid\\\\\" value=\\\\\"1\\\\\" />\r\n	 <input type=\\\\\"text\\\\\" name=\\\\\"keyboard\\\\\" id=\\\\\"q\\\\\" value=\\\\\"\\\\\" style=\\\\\"color: rgb(153, 153, 153);\\\\\" onwebkitspeechchange=\\\\\"jQuery(this).closest(\\\\''form\\\\'').submit();\\\\\" x-webkit-speech=\\\\\"\\\\\"   onclick=\\\\\"clearCname()\\\\\" class=\\\\\"search_k fl\\\\\">\r\n	 <button type=\\\\\"submit\\\\\" onClick=\\\\\"return dosearch(\$(\\\\''#q\\\\'').val());\\\\\" class=\\\\\"search_s fl\\\\\">搜索</button>\r\n	 </form>\r\n	 </div>\r\n	 <div class=\\\\\"right fr\\\\\">\r\n	 <a class=\\\\\"s-weibo\\\\\" href=\\\\\"<?=\$public_r[\\\\''add_www_92game_net_xlwb\\\\'']?>\\\\\" title=\\\\\"关注新浪微博\\\\\" target=\\\\\"_blank\\\\\"></a>\r\n	 <a class=\\\\\"t-weibo\\\\\" href=\\\\\"<?=\$public_r[\\\\''add_www_92game_net_txwb\\\\'']?>\\\\\" title=\\\\\"关注腾讯微博\\\\\" target=\\\\\"_blank\\\\\"></a>\r\n	 <a class=\\\\\"i-qzone\\\\\" href=\\\\\"<?=\$public_r[\\\\''add_www_92game_net_qqkj\\\\'']?>\\\\\" title=\\\\\"关注认证空间\\\\\" target=\\\\\"_blank\\\\\"></a>\r\n	 <a class=\\\\\"i-marks\\\\\"  href=\\\\\"javascript:vod(0);\\\\\" title=\\\\\"加入收藏夹\\\\\" onclick=\\\\\"favorites(\\\\''<?=\$public_r[\\\\''add_www_92game_net_name\\\\'']?>\\\\'',\\\\''[!--news.url--]\\\\'')\\\\\" ></a>\r\n	 <a class=\\\\\"tougao_btn fr i-write\\\\\" href=\\\\\"[!--news.url--]e/DoInfo/ChangeClass.php?mid=1\\\\\" title=\\\\\"在线投稿\\\\\" target=\\\\\"_blank\\\\\">在线投稿</a>\r\n	 </div>\r\n	 </div><div class=\\\\\"cl\\\\\"></div>\r\n</div>\r\n</div>\r\n<div class=\\\\\"nav\\\\\"><ul>\r\n     <li><a class=\\\\\"ico-01\\\\\" href=\\\\\"[!--news.url--]\\\\\" target=\\\\\"_self\\\\\">首页</a></li>\r\n	 	[e:loop={\\\\\"select classpath,classname,classid,bclassid from [!db.pre!]enewsclass where bclassid=\\\\''0\\\\'' order by myorder ASC limit 0,9\\\\\",100,24,0}]\r\n      <li><a href=\\\\''<?=\$public_r[\\\\''newsurl\\\\''].\$bqr[\\\\''classpath\\\\'']?>\\\\''><?=\$bqsr[classname]?></a></li>\r\n	   [/e:loop]\r\n	 <li><a class=\\\\\"iconew\\\\\" href=\\\\\"[!--news.url--]new\\\\\">最近更新</a></li></ul>\r\n</div>\r\n<div class=\\\\\"subnav\\\\\"><ul>\r\n    	[e:loop={\\\\\"select classpath,classname,classid,bclassid from [!db.pre!]enewsclass where bclassid!=\\\\''0\\\\'' order by onclick DESC limit 0,22\\\\\",100,24,0}]\r\n      <li><a href=\\\\''<?=\$public_r[\\\\''newsurl\\\\''].\$bqr[\\\\''classpath\\\\'']?>\\\\''><?=\$bqsr[classname]?></a></li>\r\n	   [/e:loop]\r\n	 </ul>\r\n</div>','0','0','1');");
E_D("replace into `www_92game_net_meiwen_enewstempvar` values('2','footer','页面尾部','<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]skin/js/gotop.js\\\\\"></script>\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]d/js/acmsd/thea8.js\\\\\"></script>\r\n<div class=\\\\\"footer\\\\\">\r\n    <p class=\\\\\"p_1\\\\\">\r\n	<a href=\\\\\"[!--news.url--]about/aboutus.html\\\\\" target=\\\\\"_blank\\\\\">关于我们</a>|\r\n	<a href=\\\\\"[!--news.url--]about/service.html\\\\\" target=\\\\\"_blank\\\\\">服务条款</a>|\r\n	<a href=\\\\\"[!--news.url--]about/contact.html\\\\\" target=\\\\\"_blank\\\\\">联系我们</a>|\r\n	<a href=\\\\\"[!--news.url--]about/link.html\\\\\" target=\\\\\"_blank\\\\\">友情链接</a>|\r\n	<a href=\\\\\"[!--news.url--]baidunews.xml\\\\\" target=\\\\\"_blank\\\\\">RSS订阅</a>|\r\n	<a href=\\\\\"[!--news.url--]sitemap.html\\\\\" target=\\\\\"_blank\\\\\">网站地图</a>|\r\n	<a href=\\\\\"[!--news.url--]about/paiban.html\\\\\" target=\\\\\"_blank\\\\\"><b>排版工具</b></a>\r\n</p>\r\n<p class=\\\\''p_2\\\\''>\r\n<?=\$public_r[\\\\''add_www_92game_net_by\\\\'']?>\r\n</p>\r\n<div class=\\\\\"footer_service\\\\\">\r\n<p class=\\\\\"p_2\\\\\">本站所收录作品、热点评论等信息部分来源互联网，目的只是为了系统归纳学习和传递资讯</p>\r\n<p class=\\\\\"p_2\\\\\">所有作品版权归原创作者所有，与本站立场无关，如不慎侵犯了你的权益，请联系我们告知，我们将做删除处理！</p>\r\n</div>\r\n</div>\r\n<div style=\\\\\"display:none;\\\\\">\r\n [!--temp.tj--]\r\n</div>','0','0','0');");
E_D("replace into `www_92game_net_meiwen_enewstempvar` values('3','a.header','单页头部','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\" />\r\n<meta name=\\\\\"renderer\\\\\" content=\\\\\"webkit\\\\\">\r\n<meta http-equiv=\\\\\"X-UA-Compatible\\\\\" content=\\\\\"IE=Edge,chrome=1\\\\\" >\r\n<meta http-equiv=\\\\\"Cache-Control\\\\\" content=\\\\\"no-transform \\\\\" />\r\n<title>[!--pagetitle--]-<?=\$public_r[\\\\''add_www_92game_net_name\\\\'']?></title>\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]skin/js/jquery-1.7.1.min.js\\\\\"></script>\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"[!--news.url--]skin/css/about.css\\\\\" type=\\\\\"text/css\\\\\" />\r\n</head>\r\n<body>\r\n<div class=\\\\\"page\\\\\">\r\n<div class=\\\\\"header\\\\\">\r\n<div class=\\\\\"logo\\\\\"><a href=\\\\\"[!--news.url--]\\\\\"><img src=\\\\\"[!--news.url--]skin/img/alogo.png\\\\\"></a></div>\r\n<ul class=\\\\\"link\\\\\">\r\n<li><a href=\\\\\"[!--news.url--]\\\\\">首页</a></li>\r\n<li id=\\\\\"about\\\\\"><a href=\\\\\"[!--news.url--]about/aboutus.html\\\\\">了解我们</a></li>\r\n<li id=\\\\\"sitemap\\\\\"><a href=\\\\\"[!--news.url--]sitemap.html\\\\\">网站地图</a></li>\r\n<li id=\\\\\"tougao\\\\\"><a href=\\\\\"[!--news.url--]about/tougao.html\\\\\">投稿帮助</a></li>\r\n<li id=\\\\\"paiban\\\\\"><a href=\\\\\"[!--news.url--]about/paiban.html\\\\\">排版工具</a></li>\r\n<li><a href=\\\\\"javascript:vod(0);\\\\\" rel=\\\\\"nofollow\\\\\" onclick=\\\\\"qqemail();\\\\\" style=\\\\\"text-decoration:none;\\\\\">问题反馈</a></li></ul>\r\n</div>\r\n<div class=\\\\\"box clearfix\\\\\">','0','0','0');");
E_D("replace into `www_92game_net_meiwen_enewstempvar` values('4','a.footer','单页底部','<div class=\\\\\"clearfix\\\\\"></div>\r\n<div class=\\\\\"copyright\\\\\">\r\n<?=\$public_r[\\\\''add_www_92game_net_by\\\\'']?>\r\n</div>\r\n</div>\r\n</div>\r\n<script type=\\\\\"text/javascript\\\\\">\r\nfunction qqemail(){  childWindow =window.open(\\\\''http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=<?=\$public_r[\\\\''email\\\\'']?>\\\\'',\\\\''newwindow\\\\'',\\\\''height=450,width=800,top=150,left=280,toolbar=no,menubar=no,scrollbars=no, resizable=no,location=no, status=no\\\\'');}\r\n</script>\r\n<div style=\\\\\"display:none;\\\\\">\r\n [!--temp.tj--]\r\n</div>\r\n</body>\r\n</html>','0','0','0');");
E_D("replace into `www_92game_net_meiwen_enewstempvar` values('5','tj','第三方添加代码','#第三方统计代码(模版变量)','0','0','0');");
E_D("replace into `www_92game_net_meiwen_enewstempvar` values('7','m.header','手机版头部','<div id=\\\\\"tipswindows\\\\\"></div>\r\n<div id=\\\\\"pubilc-menu\\\\\">\r\n[e:loop={\\\\\"select classname,classid from [!db.pre!]enewsclass where bclassid=\\\\''0\\\\'' and showclass=\\\\''0\\\\'' order by myorder ASC\\\\\",100,24,0}]\r\n<dl>\r\n<dt><a href=\\\\\"/list/<?=\$bqr[classid]?>.html\\\\\"><?=\$bqr[classname]?></a></dt>\r\n    <dd>\r\n	<?php\r\n    \$dh=\$empire->query(\\\\\"select classname,classid from  {\$dbtbpre}enewsclass where bclassid=\\\\''\\\\\".\$bqr[\\\\''classid\\\\''].\\\\\"\\\\'' and showclass=\\\\''0\\\\'' order by myorder ASC\\\\\");   \r\n    while(\$dhr=\$empire->fetch(\$dh)) \r\n	{\r\n	echo \\\\''<a href=\\\\\"/list/\\\\''.\$dhr[classid].\\\\''.html\\\\\">\\\\''.\$dhr[classname].\\\\''</a>\\\\'';\r\n	}\r\n	?> \r\n</dd>\r\n</dl>\r\n [/e:loop]\r\n<div class=\\\\\"public-menu-go-top\\\\\"><a href=\\\\\"javascript:;\\\\\"></a></div>\r\n</div>\r\n<header>\r\n    <a href=\\\\\"/\\\\\" class=\\\\\"logo\\\\\"><img width=\\\\\"200px\\\\\" src=\\\\\"/skin/logo.png\\\\\"></a>\r\n    <a href=\\\\\"#\\\\\" id=\\\\\"icon-menu\\\\\"></a>\r\n</header>\r\n<nav>\r\n<a href=\\\\''/\\\\''>首页</a>\r\n[e:loop={\\\\\"select classname,classid from [!db.pre!]enewsclass where bclassid=\\\\''0\\\\'' and showclass=\\\\''0\\\\'' order by myorder ASC  limit 9\\\\\",100,24,0}]\r\n<a href=\\\\\"/list/<?=\$bqr[classid]?>.html\\\\\"><?=esub(\$bqr[classname],4)?></a>\r\n<?if(\$bqno==4){echo \\\\''</nav><nav>\\\\'';}?>\r\n[/e:loop]\r\n</nav>','0','0','0');");
E_D("replace into `www_92game_net_meiwen_enewstempvar` values('8','m.footer','手机版底部','<footer>\r\n    <div class=\\\\\"meiwen\\\\\">\r\n        <a href=\\\\\"http://<?=\$public_r[\\\\''add_www_92game_net_domain\\\\'']?>/?url=m\\\\\">电脑版</a>\r\n		<a href=\\\\\"/#one1\\\\\" onclick=\\\\\"setTab(\\\\''one\\\\'',1)\\\\\">最近更新</a>\r\n        <a href=\\\\\"/#one2\\\\\" onclick=\\\\\"setTab(\\\\''one\\\\'',2)\\\\\">推荐阅读</a>\r\n        <a href=\\\\\"#\\\\\">返回头部</a>\r\n    </div>\r\n    <div class=\\\\\"copyright\\\\\">\r\n	<?=\$public_r[\\\\''add_www_92game_net_by\\\\'']?>\r\n    </div>\r\n</footer>\r\n<span style=\\\\''display:none;\\\\''>#第三方统计代码</span>\r\n</body>\r\n</html>','0','0','0');");

@include("../../inc/footer.php");
?>