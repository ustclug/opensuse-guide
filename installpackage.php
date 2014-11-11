<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" lang="zh" >

<!-- <!DOCTYPE html>
<html> -->




<head>

<title>10. 软件安装 - 使用软件包管理器安装软件程序</title>

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
<div class="indholdtekst">最后更新：2014年11月8日</div>
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
		&nbsp;<a href="http://www.freefind.com" class="indholdtekst">by FreeFind</a>
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
<td width="67%" align="center"><img src="images/pics/titel.png" alt="titel" />
</td>
<td width="33%" align="center"><img src="images/pics/desktop-titel.png" alt="?" class="pic" /></td> 
</tr>
</table>



<!-- titel slut -->
 
<div id="topLeft">

<div class="indholdoverskriftb">开始</div>
    <a href="index.php" class="indholdtekst">1. 简介</a><br />
    <a href="switching.php" class="indholdtekst">2. 改用 GNU/Linux</a><br />
    <a href="acquisition.php" class="indholdtekst">3. 获取 openSUSE</a><br />
    <a href="installation.php" class="indholdtekst">4. 安装</a><br />

<div class="indholdoverskrift">日常应用</div>
    <a href="kde.php" class="indholdtekst">5. KDE 桌面环境</a><br />
    <a href="apps.php" class="indholdtekst">6. 常用软件</a><br />
    <a href="security.php" class="indholdtekst">7. 安全设置</a><br />
    <a href="command.php" class="indholdtekst">8. 终端命令行</a><br />
    <a href="yast.php" class="indholdtekst">9. 管理员设置 (YaST)</a><br />
    <a href="installpackage.php" class="indholdtekst">10. 软件安装</a><br />
    <a href="repositories.php" class="indholdtekst">11. 软件源</a><br />
    <a href="windows.php" class="indholdtekst">12. 与Windows世界兼容</a><br />

<div class="indholdoverskrift">设置</div>
    <a href="codecs.php" class="indholdtekst">13. 多媒体编解码器</a><br />  
    <a href="browserplugins.php" class="indholdtekst">14. 浏览器插件</a><br />
    <a href="3d.php" class="indholdtekst">15. 显卡驱动</a><br />
    <a href="wlan.php" class="indholdtekst">16. 无线网</a><br />
    <a href="develop.php" class="indholdtekst">17. 开发环境</a><br />
    <a href="obs.php" class="indholdtekst">18. 软件打包服务OBS</a><br />
    <a href="srvlamp.php" class="indholdtekst">19. LAMP和LNMP</a><br />
    <a href="srvother.php" class="indholdtekst">20. 其他常见服务软件</a><br />

<div class="indholdoverskrift">附录</div>
    <a href="help.php" class="indholdtekst">A: 帮助和文档</a><br />
    <a href="games.php" class="indholdtekst">B: 游戏</a><br />
    <a href="under.php" class="indholdtekst">C. 深入了解</a><br />
    <a href="tweaks.php" class="indholdtekst">D. 提示和解决方法</a><br />
    <a href="history.php" class="indholdtekst">E. 历史和背景</a><br />
    <a href="contribute.php" class="indholdtekst">F: 重在参与</a><br />
    <a href="license.php" class="indholdtekst">GNU自由文档许可证</a>

<!--
 <hr align="center" width="99%" />


<center><script type="text/javascript" src="http://www.livewebstats.dk/counter.php?id=1959&amp;mark="></script></center><br />
 

<br /><br />

<div align="center" class="indholdoverskrift">openSUSE 12.1 coming soon:</div><br />

<center><a href="http://en.opensuse.org/Portal:12.1"><img src="http://counter.opensuse.org/12.1/small" border="0" alt="countdown" /></a></center><br />
-->

</div>
 
 


<div class="os1">10. 软件安装</div>
在 openSUSE 中安装软件是非常容易的。软件包管理器让添加和删除软件包都异常简单，这有点儿像 iPhone 上的 App Store，不同的是这些软件都是免费的！

<br /><br />


<div class="os2">10.1 使用软件包管理器</div>
打开 YaST 中的“软件管理”：<br />
<div class="sti">Kickoff menu（开始菜单） => Computer tab（计算机） => Install/Remove Software（软件安装/卸载）</div><br />


<center><video src="video/installpackage114.ogv" controls>  

<center><a href="images/screenshots/sw-single.png" rel="thumbnail"><img src="images/screenshots/sw-singleb.png" alt="sw-single" class="pic" /></a></center><br />

<b>您的网页浏览器不支持 HTML5 视频元素和/或Ogg Theora格式。<br />
请使用 Firefox, Konqueror 或 Opera 浏览器。</b><br /><br />

<a href="video/installpackage-full.ogv">下载视频演示  (3.0 MB)</a>
</video></center>  <br /><br />


在这里搜索需要的软件包，选中安装并单击确定。软件包管理器将会自动下载并安装所需的软件包，同时自动解决包之间的依赖关系。安装完成后，新装的软件会出现在 Kickoff 开始菜单中（命令行程序当然不会出现在开始菜单里）。<br />
<a href="http://v.youku.com/v_show/id_XNTI1ODk0MjEy.html" target="_blank">
视频: 使用 software.opensuse.org 搜索和安装软件
</a>

<br /><br />


<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>软件包管理器中能直接装的软件依赖于所配置的<b>软件源</b>。
之后的章节会对软件源进行介绍。</td>
</tr>
</tbody>
</table>
</div><br />


<div class="os3">10.1.1 使用一键安装</div>
当您浏览openSUSE相关网站时，您很可能会碰到类似这样的按钮：<br /><br />


<center><img class="pic" alt="oneclick" src="images/pics/oneclick.png" /></center><br />


所谓的一键安装，将添加所需软件源和安装软件包集成在一起完成，非常的方便。因此在安装一些比较复杂的软件时会省下很多麻烦。当然，正因为如此，一定要选择值得信任的“一键安装”，因为这里往往是非官方的源（下章介绍软件源）。<br/><br />

<div class="os2">10.2 其他的软件安装方法</div>
对于绝大多数用户而言，软件包管理器已经可以满足大部分的软件安装需求。其他已经常用软件也可以通过添加第三方源来安装（下一章节将会介绍）。但并不是所有的软件都通过源进行打包，特别是一些非自由软件是不允许第三方打包的，这就需要自己手动安装。<br /><br /> 

这种情况下，您需要去该软件的开发者/商家主页去下载并手动安装软件——
但是<b>始终</b>要先在 openSUSE 自带的软件源里找找有没有该软件（有就省事了）
——并且确保您只在可以信任的源下载和安装软件。
<br /><br />

<div class="os3">10.2.1 通过 RPM 文件安装</div>
如果运气不错，软件的网站已经提供了为 openSUSE 准备的 RPM 文件下载（为 Fedora 准备的通常也可以），下载后直接点开安装即可： 
<div class="sti">打开 Dolphin 文件管理器 =&gt; 找到下载的 RPM 文件 =&gt; 点击打开并根据提示安装</div><br />

或者在终端中安装： 
<div class="clroot">zypper install /path/to/manually/downloaded.rpm</div><br />

<div class="obs">
<table>
<tbody>
<tr>
<td><img src="images/pics/obs.png" alt="obs" /></td>
<td>请注意您的 openSUSE 版本，下载专为这个版本打包的 RPM 文件，否则可能会出现各种莫名其妙的错误。</td>
</tr>
</tbody>
</table>
</div><br />

<div class="os3">10.2.2 tar压缩包</div>
如果软件的官方网站没有提供专为 openSUSE 打包的 RPM 文件，通常情况下会提供一个压缩文件（通常是*.tar.gz，*.tar.bz2），和常见的 *.zip 与 *.rar 文件是一个性质的。可以通过这种方式解压缩：
<div class="sti">打开 Dolphin 文件管理器 =&gt; 找到压缩文件 =&gt; 右击该文件 =&gt; Extract Archive（解压缩）</div><br />


压缩文件中可能包含可执行的二进制文件，也可能包含需要您自己编译安装的源码。
编译安装的话比较复杂，需要您先安装好各种开发工具（gcc, g++, make, cmake等以及用于开发的dev版本的库文件）。不过通常情况下您会在压缩包里找到一个叫做 INSTALL 或者 README 之类的纯文本文件，或在其网站上，
这些文件会告诉您该怎么做。
<br /><br />

<div class="os2">10.3 终端中的软件包管理</div>

如果您愿意的话，您可以在终端中使用命令行安装和卸载软件。
<br /><br />

使用命令 <i>zypper search [软件名或关键字]</i> 搜索软件， 比如：
<div class="cl">zypper search thunder</div><br />

使用命令 <i>zypper install [软件包名]</i> 安装软件包，比如： 
<div class="clroot">zypper install MozillaThunderbird</div><br />

使用命令 <i>zypper remove [软件包名]</i> 删除软件包，比如： 
<div class="clroot">zypper remove PackageKit</div><br />

使用命令 <i>man zypper</i> 查看帮助信息： 
<div class="cl">man zypper</div><br />

或者查看zypper命令内嵌的帮助：
<div class="cl">zypper install --help</div><br />


<div class="os3">10.3.1 在终端中使用一键安装</div>
在终端中使用命令 <i>OCICLI [URL]</i> 进行一键安装，比如：
<div class="clroot">OCICLI http://opensuse-community.org/nvidia.ymp</div><br />

<div class="os3">10.3.2 手动下载的 RPM 文件</div>

要安装一个手动下载的 RPM 文件，执行：
<div class="clroot">zypper install /路径……/手动下载的包.rpm</div><br />


<div class="os3">10.3.3 RPM 查询</div>
您可以从 RPM 数据库轻松获得关于已安装包的很多有用信息。
<br /><br />

检查安装的是哪个版本，例如：
<div class="cl">rpm -q MozillaFirefox</div><br />

列出软件包所安装的文件列表及安装的位置，例如：
<div class="cl">rpm -ql amarok</div><br />

查出某个文件是属于哪个软件包，例如：
<div class="cl">rpm -qf /usr/bin/firefox</div><br />

获取关于软件包的各种信息，包括改动日志，例如：
<div class="cl">rpm -qi --changelog MozillaFirefox</div><br />



<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="yast.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="repositories.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
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

<div class="lille" align="center">
本文档翻译自 <a href="http://opensuse-guide.org/" target="_blank">http://opensuse-guide.org/</a> 不当之处，还望指正<br />
使用e-mail发送您的英文评论给 admin [at] opensuse-guide.org <br />
或发送意见和建议给中文译者：Libitum (hello[at]libitum.org);
Winland (winland0704[at]126.com) 
</div>


</div>
</body>
</html>
 
