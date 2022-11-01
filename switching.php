<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" lang="zh" >

<!-- <!DOCTYPE html>
<html> -->




<head>

<title>2. 改用 GNU/Linux - 迁移到 GNU/Linux 的优点和挑战</title>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="thumbnailviewer.css" type="text/css" />

<script src="thumbnailviewer.js" type="text/javascript">

/***********************************************
* Image Thumbnail Viewer Script- © Dynamic Drive (www.dynamicdrive.com)
* This notice must stay intact for legal use.
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>



</head>

<body style="background-color: rgb(185, 185, 185);">





<!-- titel start -->


<div id="frame" class="normal">


<table width="100%">
<tr>

<td valign="top" style="padding-top: 5px" width="50%">
<div class="content-text">最后更新：2022年11月1日</div>
</td>

<td align="center" width="50%" valign="top">
<!-- start of freefind search box html -->
<table cellpadding="0" cellspacing="0" border="0">

<tr>
	<td  style="font-family: Arial, Helvetica, sans-serif; font-size: 7.5pt;">
		<form style="margin:0px; margin-top:0px;" action="http://search.freefind.com/find.html" method="get" accept-charset="utf-8" target="_self">
		<input type="hidden" name="si" value="38829622" />
		<input type="hidden" name="pid" value="r" />
		<input type="hidden" name="n" value="0" />
		<input type="hidden" name="_charset_" value="" />
		<input type="hidden" name="bcd" value="&#247;" />
		<input type="text" name="query" size="16" />
		<input type="submit" value="search" />
		&nbsp;<a href="http://www.freefind.com" class="content-text">by FreeFind</a>
		</form>
</td>
</tr>
</table>
<!-- end of freefind search box html -->
</td>
<!--
<td align="right" width="25%" valign="top">
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'zh-CN',
    autoDisplay: false,
    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
  }, 'google_translate_element');
}
</script><script type="text/javascript" src="http://translate.google.com.hk/translate_a/element.js?cb=googleTranslateElementInit"></script>
</td>
-->
</tr>
</table>



<table width="99%">
<tr>
<td width="67%" align="center"><img src="images/pics/title.png" alt="title" />
</td>
<td width="33%" align="center"><img src="images/pics/desktop-title.png" alt="?" class="pic" /></td> 
</tr>
</table>



<!-- titel slut -->
 
<div id="topLeft">

<div class="content-title">开始</div>
    <a href="index.php" class="content-text">1. 简介</a><br />
    <a href="switching.php" class="content-text">2. 改用 GNU/Linux</a><br />
    <a href="acquisition.php" class="content-text">3. 获取 openSUSE</a><br />
    <a href="installation.php" class="content-text">4. 安装</a><br />

<div class="content-title">日常应用</div>
    <a href="kde.php" class="content-text">5. KDE 桌面环境</a><br />
    <a href="apps.php" class="content-text">6. 常用软件</a><br />
    <a href="security.php" class="content-text">7. 安全设置</a><br />
    <a href="command.php" class="content-text">8. 终端命令行</a><br />
    <a href="yast.php" class="content-text">9. 管理员设置 (YaST)</a><br />
    <a href="installpackage.php" class="content-text">10. 软件安装</a><br />
    <a href="repositories.php" class="content-text">11. 软件源</a><br />
    <a href="windows.php" class="content-text">12. 与Windows世界兼容</a><br />

<div class="content-title">设置</div>
    <a href="codecs.php" class="content-text">13. 多媒体编解码器</a><br />  
    <a href="browserplugins.php" class="content-text">14. 浏览器插件</a><br />
    <a href="3d.php" class="content-text">15. 显卡驱动</a><br />
    <a href="wlan.php" class="content-text">16. 无线网</a><br />
    <a href="develop.php" class="content-text">17. 开发环境</a><br />
    <a href="obs.php" class="content-text">18. 软件打包服务OBS</a><br />
    <a href="srvlamp.php" class="content-text">19. LAMP和LNMP</a><br />
    <a href="srvother.php" class="content-text">20. 其他常见服务软件</a><br />

<div class="content-title">附录</div>
    <a href="help.php" class="content-text">A: 帮助和文档</a><br />
    <a href="games.php" class="content-text">B: 游戏</a><br />
    <a href="under.php" class="content-text">C. 深入了解</a><br />
    <a href="tweaks.php" class="content-text">D. 提示和解决方法</a><br />
    <a href="history.php" class="content-text">E. 历史和背景</a><br />
    <a href="contribute.php" class="content-text">F: 重在参与</a><br />
    <a href="license.php" class="content-text">GNU自由文档许可证</a>

<!--
 <hr align="center" width="99%" />


<center><script type="text/javascript" src="http://www.livewebstats.dk/counter.php?id=1959&amp;mark="></script></center><br />
 

<br /><br />

<div align="center" class="content-title">openSUSE 12.3 coming soon:</div><br />

<center><a href="http://en.opensuse.org/Portal:12.3"><img src="http://counter.opensuse.org/12.3/small" border="0" alt="countdown" /></a></center><br />
-->

</div>
 
 


<div class="heading1">2. 改用 GNU/Linux</div>

转换到一个全新的、不同的操作系统需要很大的努力——当然您不用完全转过去，
您可以使用多个操作系统——甚至在同一台电脑上。这一章描述了一些在非凡的GNU/Linux之旅之前,您所应该了解的一些东西。
<br /><br />


<div class="heading2">2.1 为什么使用GNU/Linux?</div>

数百万人喜爱使用 GNU/Linux 是有很多原因的——或许是出于技术上、经济上的考虑，
或许是出于纯粹的伦理、哲学观上的选择，每个人都会有自己的一大通道理。
这里列出一些常见的选择GNU/Linux的借口（之所以说是借口，因为使用Linux并不需要理由）：
<br />

<ul>
	<li><span style="font-weight: bold;">安全</span> -        几乎不存在诸如病毒、间谍软件、流氓软件之类的问题。</li>
      	
	<li><span style="font-weight: bold;">易维护</span> - 请忘掉扫描病毒、磁盘碎片整理、清理注册表以及频繁的被要求重启等等诸如此类的问题。</li>
        
	<li><span style="font-weight: bold;">稳定</span> - 
GNU/Linux 是非常稳定的。 虽然个别应用程序可能会崩溃，
但操作系统本身的崩溃是非常罕见的。
（事实上一些非官方打包程序是较为不稳定的）</li>
        
	<li><span style="font-weight: bold;">软件自由/开源</span> - 
您可以随意的使用软件。如果您愿意的话，甚至可以自由地学习程序源代码，修改程序以及任意的分享程序，而不用受制于所谓的用户许可协议。（当然要在GPL或者其他开源许可协议的条件之下）</li> 
	
	<li><span style="font-weight: bold;">开放标准</span> -  
GNU/Linux 和运行在其上的应用程序，大多数都符合开放标准，
这使得与其他平台的无缝兼容成为可能，并帮助您避免受制于一些厂商的限制。</li>
        
	<li><span style="font-weight: bold;">社区</span> - 
GNU/Linux已经被形容为 "world wide team sport"，由全世界的优秀程序员提供支持。</li>
        
	<li><span style="font-weight: bold;">低成本</span> - 
大多数 GNU/Linux 发行版是可以免费下载的，并且拥有大量的免费程序支持。
此外，大多数 GNU/Linux 对硬件的要求较低，这意味着您并不需要频繁的对硬件进行升级。</li>
        
	<li><span style="font-weight: bold;">合法</span> - 人们可以合法并且免费的获取一些高质量的软件，这意味着我们并不必要去盗版或者使用盗版（当然这是非法的），也不会受制于一些利用垄断地位而滥用市场支配手段的企业。(是不是该特指下微软...)</li>
        
	<li><span style="font-weight: bold;">透明公开</span> - 
绝大多数 GNU/Linux 是开放开发的，使用公共邮件列表、公共IRC频道、
公共bug追踪、公共新特性追踪等等。
	</li>

	<li><span style="font-weight: bold;">多样选择</span> - 
在 Linux 的世界中，有很多不同的发行版本，有些由商业公司支持，
有些则由非商业组织维护。这些不同的发行版本可以运行在不同类型的计算机上，
比如手机、个人计算机甚至超级电脑。我们甚至可以根据自己的爱好和需要选择不同的桌面环境，以更好的完成我们的工作。</li>

	<li><span style="font-weight: bold;">保护隐私</span> - 
自由软件通常尊重您的隐私，并且公开可以访问的代码针对后门木马提供了防护，闭源软件植入后门难以发现，而开源软件通常不存在这些问题。</li>

	<li><span style="font-weight: bold;">尝新</span> - 
或许仅仅是为了不断的尝试一些新的或者不同的东西，成为很多人最原始的动机。</li>
	
	<li>并且……<span style="font-weight: bold;">它是充满很多乐趣的！</span></li>
	
	</ul>
<center><img src="images/pics/hardware.gif" alt="hardware" /></center>

<div class="heading2">2.2 改用GNU/Linux的一些挑战</div>
虽然使用 GNU/Linux 有很多优点，但是转换到新的、不同的、流行较少的
系统上是具有挑战性的。
<br />

<ul>
	<li><b>从头学起</b> - 
您将会学习一个全新的不同的操作系统、很多新的程序，以及很多全新的名词术语。
——并且您需要 <em>忘却</em> 在其他操作系统（如MS Windows）上学习的旧知识。
	</li>
	<li><b>缺失的应用软件和游戏</b> - 
您会失去一些熟知的应用程序，典型的如Microsoft Office、 Adobe Photoshop
和其他流行的大型主流游戏。双系统启动、WINE或虚拟机会提供这问题的
部分解决办法。当然有很多可选的高质量 GNU/Linux 原生软件值得用，
后面将介绍各种 GNU/Linux 下的应用软件。
</li>
	<li><b>缺少硬件支持</b> - 
绝大多数硬件是支持的，但不是全部——在购买新硬件组件前建议您研究一下兼容性
——越新的和分布越少的组件，出问题的风险越大。
</li>
	<li><b>寻求帮助更难</b> - 
通常朋友、家人、同事不能帮您解决 GNU/Linux 相关问题，所以您需要
在线获取帮助，这通常并不如您的朋友“现场”帮您解决那样高效。
</li>
</ul>

<div class="heading2">2.3 建议</div>
既然转到 Linux 平台并没有想象中的容易，那么这里有一些建议，希望能有所帮助：

<ul>
	<li><b>脚踏实地</b> - 
不要指望在一两周内掌握 GNU/Linux ，要知道您征服之前的操作系统是花了很多年的。
并且不能指望 GNU/Linux 是绝对完美的。
</li>
	<li><b>循序渐进</b> - 
从 将GNU/Linux安装到第二电脑或设置与您之前操作系统双启动或在虚拟机
运行GNU/Linux 开始。从学习基础知识开始，一个一个地解决您所遇到的问题。
千万不要被接踵而来的各种不知所措吓到。
	</li>
	<li><b>寻求帮助</b> - 可以在线或其他任何地方寻求帮助，
	您遇到的问题别人也会遇到，所以不要忘了向万能的Google求助。</li>
</ul>

<div class="heading3">2.3.1 GNU/Linux的日常软件（MS Windows和Mac OSX下也可用）</div>
不用担心您在 Windows 下的日常工作在 Linux 下无法完成。下面是一些常用的软件，在 Linux 平台下和 Windows 平台下均可免费使用。甚至其中的大多数同样能够很好地工作在苹果系统下。
您可以在其他操作系统先尝试这些软件，熟悉之后再转到GNU/Linux系统，
这样就会很方便。
<br /><br />

<table width="98%">
	<tr>
		<td class="lillebold">免费自由软件</td>
		<td class="lillebold"></td>
		<td class="lillebold">非自由软件</td>
	</tr>

	<tr>
		<td valign="top">
		<a href="http://www.mozilla.org/firefox/" target="_blank">Firefox</a> (网页浏览器)<br />
		<a href="http://www.mozilla.org/thunderbird/" target="_blank">Thunderbird</a> (邮件客户端)<br />
		<a href="http://www.seamonkey-project.org/" target="_blank">SeaMonkey</a> (互联网应用套件)<br />
		<a href="http://www.pidgin.im/" target="_blank">Pidgin</a> (即时消息)<br />
		<a href="http://filezilla-project.org/" target="_blank">FileZilla</a> (FTP客户端)<br />
		<a href="http://qbittorrent.sourceforge.net/" target="_blank">qBittorent</a> (BT客户端)<br />
		<a href="http://www.qutecom.org/" target="_blank">QuteCom</a> (VoIP)<br />
		<a href="http://www.linphone.org/" target="_blank">Linphone</a> (VoIP)<br />
		<a href="http://gpodder.org/" target="_blank">gPodder</a> (播客管理器)<br />
		<a href="http://bluegriffon.org/" target="_blank">BlueGriffon</a> (HTML编辑器)<br />
		<a href="http://gimp-win.sourceforge.net/" target="_blank">GIMP</a> (高级图片编辑)<br />
		<a href="http://www.inkscape.org" target="_blank">Inkscape</a> (矢量图形)<br />
		<a href="http://hugin.sourceforge.net/" target="_blank">Hugin</a> (全景照片缝合)<br />
		<a href="http://www.libreoffice.org/" target="_blank">LibreOffice</a> (办公套件)<br />
		<a href="http://www.scribus.net/" target="_blank">Scribus</a> (桌面排版)<br />
		<a href="http://gnucash.org/" target="_blank">GnuCash</a> (个人/小型财务软件)<br />
		<a href="http://docs.osgearth.org/" target="_blank">osgEarth</a>(地理空间SDK和地形引擎) <br />
		<a href="https://www.qgis.org/" target="_blank">QGIS</a>(开源地理信息系统) <br />
		<a href="http://www.openscenegraph.org/" target="_blank">OpenSceneGraph </a>(3D场景绘图仿真平台) <br />
		</td>
	
	<td valign="top">
		<a href="http://www.abisource.com/" target="_blank">Abiword</a> (文字处理)<br />
		<a href="http://sourceforge.net/projects/free-cad/" target="_blank">FreeCAD</a> (3D CAD)<br />
		<a href="http://librecad.org/" target="_blank">LibreCAD</a> (2D CAD)<br />
		<a href="http://www.blender.org" target="_blank">Blender</a> (3D 动画)<br />
		<a href="http://calibre-ebook.com/" target="_blank">Calibre</a> (电子书管理)<br />
		<a href="http://www.videolan.org/" target="_blank">VLC</a> (媒体播放器)<br />
		<a href="http://smplayer.sourceforge.net/" target="_blank">SMPlayer</a> (视频播放器)<br />
		<a href="http://www.umplayer.com/" target="_blank">UMPlayer</a> (视频播放器)<br />
		<a href="http://www.clementine-player.org/" target="_blank">Clementine</a> (音频播放器)<br />
		<a href="http://audacity.sourceforge.net/" target="_blank">Audacity</a> (音频编辑)<br />
		<a href="http://lmms.sourceforge.net/" target="_blank">LMMS</a> (音乐创作)<br />
		<a href="http://kid3.sourceforge.net" target="_blank">Kid3</a> (音乐标签器)<br />
		<a href="http://edu.kde.org/marble/download.php" target="_blank">Marble</a> (桌面地球仪)<br />
		<a href="http://gramps-project.org/" target="_blank">Gramps</a> (家谱研究/家族树图)<br />
		<a href="https://edu.kde.org/kstars/#download" target="_blank">KStars</a> (天文馆)<br />
		<a href="http://www.stellarium.org/" target=_blank">Stellarium</a> (天文馆)<br />
		<a href="http://qt.nokia.com/title-cn?set_language=zh&cl=zh" target="_blank">Qt Creator</a>(Qt编程)<br />
		<a href="http://www.eclipse.org/" target="_blank">Eclipse</a>(集成开发环境) <br />
		<a href="https://www.flightgear.org/" target="_blank">FlightGear</a>(飞行模拟器软件) <br />

	</td>
	<td valign="top">
		<a href="http://opera.com/" target="_blank">Opera</a> (网页浏览器)<br />
		<a href="https://www.google.com/chrome" target="_blank">Google Chrome</a> (网页浏览器)<br />
		<a href="http://www.skype.com" target="_blank">Skype</a> (VoIP)<br />
		<a href="http://earth.google.com/" target="_blank">Google Earth</a> (谷歌地图)<br />
		<a href="http://www.adobe.com" target="_blank">Adobe Reader</a> (PDF阅读器)<br />
		<a href="http://www.desura.com/" target="_blank">Desura</a> (游戏发布服务)<br />
		<a href="http://www.3ds.com/products/draftsight/free-cad-software/" target="_blank">Draftsight</a> (CAD)<br />
		<a href="http://www.real.com/realplayer" target="_blank">RealPlayer</a> (媒体播放)<br />
		<a href="http://www.flashget.com/cn/product_Linux.html" target="_blank">网际快车</a>(下载工具)<br />
        <a href="http://www.yozosoft.com/index.html" target="_blank">永中Office</a>(办公套件)<br />
        <a href="http://linux.wps.cn/" target="_blank">WPS Office</a>(办公套件)<br />        
	</td>
	</tr>
</table><br />

事实上，很多 KDE 下的程序（下面的章节将会介绍到），同样可以用于 MS Windows 和 Mac OSX 系统——在这两个平台它们现在只是早期版本。详情可参考：<br />
<a href="http://windows.kde.org" target="_blank">http://windows.kde.org</a><br />
<a href="http://mac.kde.org" target="_blank">http://mac.kde.org</a><br /><br />


在 Mac OSX 系统，您可以另外通过
<a href="http://www.macports.org/" target="_blank">MacPorts 项目</a> 或 <a href="http://www.finkproject.org/" target="_blank">Fink 项目</a> ，
安装 KDE 应用程序和很多很多其他自由软件。
<br /><br />



<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="index.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="acquisition.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
	</tr>
</tbody>
</table>




<!-- stats start -->
<!--
<hr align="center" width="99%" />

<center><script type="text/javascript" src="http://www.livewebstats.dk/counter.php?id=1959&amp;mark="></script></center><br />
-->
<!-- stats slut --> 
<!-- sponsor start -->
<!--
<div style="text-align: center;">Hosting sponseret af:<br />
<a href="http://www.enavn.dk/"><img style="border: 0px" alt="liga" src="images/pics/enavn.gif" /></a></div><br />  
-->

<!-- sponsor slut -->
<!-- <div class="lille" align="center">Send feedback to <a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;admin&#64;opensuse-guide&#46;org">admin [at] opensuse-guide.org</a></div> -->

<div class="small" align="center">
本文档翻译自 <a href="http://opensuse-guide.org/" target="_blank">http://opensuse-guide.org/</a> 不当之处，还望指正<br />
使用e-mail发送您的英文评论给 admin [at] opensuse-guide.org <br />
或发送意见和建议给中文译者：Libitum (hello[at]libitum.org);
Winland (winland0704[at]126.com) 
</div>

</div>
</body>
</html>
 
