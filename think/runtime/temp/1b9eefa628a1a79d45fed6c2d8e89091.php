<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"F:\www\youme\think\public/../application/index\view\index\index.html";i:1509882145;s:68:"F:\www\youme\think\public/../application/index\view\common\head.html";i:1509531295;s:70:"F:\www\youme\think\public/../application/index\view\common\footer.html";i:1508655809;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="Content-Language" content="zh-CN" />
	<meta name="keywords" content="你我网,圈圈说,汉中,汉中圈圈,你我,如是观,心理,感情,youmew" />
	<meta name="description" content="你我网，缘自圈圈说，记载着圈圈的生活过往，只为留住那份曾经的感动；圈圈，又名小尤，前半生执著于感情，命途多舛，故孑然一身。" />
	<title>你我网</title>
	<link rel="stylesheet" rev="stylesheet" href="__PUBLIC__/style/style.css" type="text/css" media="screen" />
    <link rel="shortcut icon" href="/favicon.ico" />
	<script src="__PUBLIC__/style/common.js" type="text/javascript"></script>
	<script src="__PUBLIC__/style/c_html_js_add.js" type="text/javascript"></script>
	<script src="__PUBLIC__/style/custom.js" type="text/javascript"></script>
	<link rel="alternate" type="application/rss+xml" href="__PUBLIC__/style/feed.css" title="你我网 " />
</head>
<style type="text/css">
  .post pagebar ul li{
    float: left;
  }
</style>
<body class="multi default">
<div id="divAll">
	<div id="divPage">
	<div id="divMiddle">


		<div id="divTop">
			<h1 id="BlogTitle"><a href="http://www.youmew.com/"><img src="__PUBLIC__/images/LOGO.gif" alt="你我网" onMouseover="shake(this,'onmouseout')" /></a></h1>
			<!-- <h3 id="BlogSubTitle">www.Youmew.com</h3> -->
		</div>
		<div id="divNavBar">
<ul>
<li><a href="<?php echo url('index/index'); ?>">首页</a></li><li>
	<?php if(is_array($tags) || $tags instanceof \think\Collection || $tags instanceof \think\Paginator): $i = 0; $__LIST__ = $tags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<a href="" title="<?php echo $vo['tagname']; ?>"><?php echo $vo['tagname']; ?></a></li><li>
	<?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
		</div>



		<div id="divMain">

			<?php if(is_array($articleres) || $articleres instanceof \think\Collection || $articleres instanceof \think\Paginator): $i = 0; $__LIST__ = $articleres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<div class="post multi-post cate4 auth1">
				<h4 class="post-date"><?php echo date("Y-m-d",$vo['time']); ?></h4>
				<h2 class="post-title">
					<a href="<?php echo url('article/article',array('arid' => $vo['id'])); ?>"><?php echo $vo['title']; ?></a>
				</h2>
				<div class="post-body">
					<p><?php echo $vo['desc']; ?></p>
				</div>
				<h5 class="post-tags">Tags:
					 <span class="tags">

						 <a href=""><?php echo $vo['tagname']; ?></a>&nbsp;&nbsp;

					</span></h5>
				<h6 class="post-footer">发布:<?php echo $vo['author']; ?>  浏览:<?php echo $vo['click']; ?><span id="spn77"></span>
					<script type="text/javascript">LoadViewCount(77)</script> | <a href="<?php echo url('article/article',array('arid' => $vo['id'])); ?>">阅读全文 > </a>
				</h6>
			</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>


		<div class="post pagebar">
		<?php echo $articleres -> render(); ?>
		</div>
		</div>
		<div id="divSidebar">
		<dl class="function" id="divSearchPanel">
		<dt class="function_t">搜索</dt>
		<dd class="function_c">
		<div>
			<div style="padding:0.5em 0 0.5em 1em;">
				<form method="post" action="">
					<input type="text" name="edtSearch" id="edtSearch" size="12" />
					<input type="submit" value="提交" name="btnPost" id="btnPost" />
				</form>
 			</div>
 		</div>
		</dd>
		</dl>
		<dl class="function" id="divTags">
			<dt class="function_t">按标签浏览</dt>
			<dd class="function_c">
			<ul>
				<li class="tag-name tag-name-size-2">
					<?php if(is_array($tags) || $tags instanceof \think\Collection || $tags instanceof \think\Paginator): $i = 0; $__LIST__ = $tags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<a href="">
							<?php echo $vo['tagname']; ?>
						<span class="tag-count">
					 			(18)
				 		</span>
							<?php endforeach; endif; else: echo "" ;endif; ?>
					</a>
				</li>
			</dd>


		</dl>
		<!-- <dl class="function" id="divComments">
		<dt class="function_t">最新留言</dt>
		<dd class="function_c">
		<ul><li style="text-overflow:ellipsis;"><a href="http://www.youmew.com/post/76.html#cmt1492" title="2016-7-14 20:22:16 post by 卢松松博客">说的很不错呢！</a></li><li style="text-overflow:ellipsis;"><a href="http://www.youmew.com/post/68.html#cmt1491" title="2016-7-12 16:21:06 post by 52微商网">一个很好的微商货源平台，非常适合做微商推</a></li><li style="text-overflow:ellipsis;"><a href="http://www.youmew.com/post/77.html#cmt1490" title="2016-7-10 9:48:23 post by 巴力迅猛龙">谢谢博主分享 支持</a></li><li style="text-overflow:ellipsis;"><a href="http://www.youmew.com/guestbook.html#cmt1488" title="2016-7-8 17:20:43 post by 个人博客">第一次过来看看</a></li><li style="text-overflow:ellipsis;"><a href="http://www.youmew.com/post/76.html#cmt1487" title="2016-7-6 17:08:25 post by 免费小说在线阅读">懂得取舍吧，最好留有后路、</a></li><li style="text-overflow:ellipsis;"><a href="http://www.youmew.com/post/77.html#cmt1486" title="2016-7-5 13:12:38 post by 免费小说在线阅读">靠自己丰衣足食！</a></li><li style="text-overflow:ellipsis;"><a href="http://www.youmew.com/post/77.html#cmt1485" title="2016-7-3 10:53:55 post by 贝蒂斯橄榄油总代理">第一次来，写的不错，关注下</a></li><li style="text-overflow:ellipsis;"><a href="http://www.youmew.com/post/77.html#cmt1484" title="2016-7-2 16:18:16 post by 卢松松博客">当初看这个并没有觉得什么，现在看来里面和</a></li><li style="text-overflow:ellipsis;"><a href="http://www.youmew.com/post/76.html#cmt1483" title="2016-7-2 12:04:12 post by 青岛礼品公司">人生确实就是个赌局，就看赌注和勇气大小了</a></li><li style="text-overflow:ellipsis;"><a href="http://www.youmew.com/post/74.html#cmt1482" title="2016-6-29 15:50:16 post by 青岛小礼品">长大了，烦恼也就多了</a></li></ul>
		</dd>
		</dl><dl class="function" id="divLinkage">
		<dt class="function_t">友情链接</dt>
		<dd class="function_c">
		<ul><li><a href="http://www.nszbk.com" target="_blank">逆时针博客</a>　<a href="http://www.mybiketimes.com/" target="_blank">单车岁月</a>　<a href="http://www.lopwon.com/" target="_blank">立云图志</a></li><li><a href="http://qingchun.org/"target="_blank">青春</a>　<a href="http://www.gaohaipeng.com" target="_blank">高海鹏博客</a>　<a href="http://www.ccaipu.com/" target="_blank">程晨爱蒲</a>　</li></li><li><a href="http://lusongsong.com/daohang" rel="external nofollow" target="_blank">博客大全</a>　<a href="http://bestcherish.com/" target="_blank">灰常记忆</a>　<a href="http://www.swdsblog.com" target="_blank">随望淡思</a></li><li><a href="http://www.wangzhijun.com.cn" target="_blank">王志军博客</a>　<a href="http://duonuli.com/" target="_blank">多努力网</a></li><li></li><li><a href="http://www.panoramio.com/user/youmew" target="_blank">谷歌地球相册</a></li><li><a href="http://www.youmew.com/t/post-18.html" target="_blank" title="申请链接"><span style="color:#006000;">交换友情链接</span></a></li></ul>
		</dd>
		</dl><dl class="function" id="divMisc">
		<dt class="function_t">分享到：</dt>
		<dd class="function_c">
		<ul><li><img src="__PUBLIC__/images/weixin.jpg" height="110" width="110" border="0" alt="你我网微信公众平台" title="微信扫一扫，关注圈圈的最新消息。" /></li><li>
			<div class="bdsharebuttonbox">
				<a href="#" class="bds_more" data-cmd="more"></a><a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a>
				<a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a>
				<a title="分享到百度贴吧" href="#" class="bds_tieba" data-cmd="tieba"></a>
				<a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a>
			</div><script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":["sqq","weixin","qzone","tsina","tieba","douban"],"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
			</script></li>
			<li>
				<a href="http://www.youmew.com/feed.asp" target="_blank"><img src="__PUBLIC__/images/rss.png" height="31" width="88" border="0" alt="订阅本站的 RSS 2.0 新闻聚合" /></a></li></ul>
		</dd>
		</dl> -->

		</div>
		
<div id="divBottom">
      <h3 id="BlogCopyRight"><script src="http://s20.cnzz.com/stat.php?id=681872&web_id=681872&show=pic" language="JavaScript"></script>　陕ICP备11002139号-1</h3>
  <h4 id="BlogPowerBy">Powered By <a href="http://www.rainbowsoft.org/" title="RainbowSoft Studio Z-Blog" target="_blank">Z-Blog</a>　本站遵循<a rel="license" target="_blank" title="署名-非商业性使用-禁止演绎 3.0 中国大陆许可协议" href="http://creativecommons.org/licenses/by-nc-nd/3.0/cn/"> CC BY-NC-ND 3.0 CN协议 </a>。</h4>
</div>

<div class="clear"></div>
</div><div class="clear"></div>
</div><div class="clear"></div>

</div>
<!-- dd BEGIN -->
<script language="JavaScript1.2">
var typ=["marginTop","marginLeft"],rangeN=10,timeout=0;
function shake(o,end){
var range=Math.floor(Math.random()*rangeN);
var typN=Math.floor(Math.random()*typ.length);
o["style"][typ[typN]]=""+range+"px";
var shakeTimer=setTimeout(function(){shake(o,end)},timeout);
o[end]=function(){clearTimeout(shakeTimer)};
}
  </script>
<!-- dd END -->
</body>
</html><!-- 16ms -->
