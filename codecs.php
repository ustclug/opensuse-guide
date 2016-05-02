<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" lang="zh" >

<!-- <!DOCTYPE html>
<html> -->




<head>

<title>13. 多媒体编解码器 - 安装 MP3, DVD, WMA, WMV, MOV 等多媒体格式支持</title>

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
<div class="indholdtekst">最后更新：2016年5月2日</div>
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

<div align="center" class="indholdoverskrift">openSUSE 13.2 coming soon:</div><br />

<center><a href="http://en.opensuse.org/Portal:13.2"><img src="http://counter.opensuse.org/13.2/small" border="0" alt="countdown" /></a></center><br />
-->

</div>
 
 


<div class="os1">13. 多媒体编解码器</div>

本章介绍三种不同的多媒体格式播放包的安装方法，支持格式如MP3, DVD等，支持 Dragon 视频播放器和 Amarok 音频播放器。您可以使用一键安装、手动安装或使用命令行安装，随您喜好使用哪种。这些安装方式对 GNOME 和 KDE 桌面都通用。命令行安装需要root管理员权限，输入su，按提示输入密码，然后以管理员身份安装软件。其他安装方式也要按提示输入密码。
<br /><br />

由于法律原因（美国软件专利和数字千年版权法案，DMCA），如果未安装下文提及的编解码器，那么默认只支持自由的、开放的、非专利保护格式，如 Ogg Theora，Ogg Vorbis 和 Flac格式。如果按下文来安装各种编解码器，那么就可以支持几乎所有的主流多媒体格式，与Windows系统的暴风影音相当。
<br /><br />

<!--

<div class="os2">13.1 一键安装编解码器</div>
点击下面按钮，即可一键安装多媒体编解码器。
<br /><br />

<center><a href="http://opensuse-community.org/codecs-kde.ymp"><img src="images/oneclick/codec-kde.png" alt="ymp" class="pic" />
</a></center><br />

<center><a href="http://opensuse-community.org/codecs-gnome.ymp"><img src="images/oneclick/codec-gnome.png" alt="ymp" class="pic" />
</a></center><br />

提醒：如果您得到下面这样的警告对话框，请不要惊慌！简单选择最上面的选项，允许从 <i>openSUSE</i> 源改到 <i>Packman</i> 源，然后点击 <i>OK -- Try Again</i> （确定--重试）按钮。
<br /><br />


<center><a href="images/screenshots/conflict.png" rel="thumbnail"><img src="images/screenshots/conflictb.png" alt="conflict" class="pic" /></a></center><br />

-->

<div class="os2">13.1 使用Yast软件管理器安装编解码包</div>

1) 首先使用Yast软件源工具添加下面的软件源： 
<br />

<ul>
<li><b>Packman 软件源</b>
（华中科技大学：<a href="http://mirrors.hust.edu.cn/packman/suse/openSUSE_Leap_42.1/" target="_blank">http://mirrors.hust.edu.cn/packman/suse/openSUSE_Leap_42.1/</a> ）</li>
<li><b>libdvdcss 软件源</b>（如果您不播放DVD可以跳过这条）</li>
</ul>

<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>如果您对 <i>package manager</i> 软件包管理器和 <i>repositories</i> 软件源的概念陌生，请重新访问这些章节 <a href="installpackage.php">软件安装</a> and <a href="repositories.php">软件源</a>.</td>
</tr>
</tbody>
</table>
</div><br />

2) 然后使用Yast软件管理器安装如下软件包：
<br />

<ul>
<li><b>k3b-codecs</b>（K3b的MP3支持）</li>
<li><b>ffmpeg</b>（有名的音视频编解码器，支持众多格式）</li>
<li><b>lame</b>（MP3格式支持）</li>
<li><b>phonon-backend-vlc</b></li>
<li><b>phonon4qt5-backend-vlc</b></li>
<li><b>vlc-codecs</b>（这三个是VLC多媒体解码器和后台支持）</li>

<li><b>flash-player</b>（网页视频播放器）</li>
<li><b>libdvdcss2</b>（如果您不播放DVD可以跳过这条）</li>
</ul>

3) 最后使用 Yast 软件管理器删除或卸载下面的软件包：<br />
<ul>
<li><b>phonon-backend-gstreamer</b></li>
<li><b>phonon4qt5-backend-gstreamer</b></li>
</ul>

<br />
另外说明一下，Packman源上还有经典的音频视频播放器，如 Audacious、MPlayer、SMPlayer等，还有XVID、VLC、w32codec等很多很好的编解码器，可以一起安装。还有些游戏等，资源很丰富，建议多看看。
<br />
另外推荐Videolan官方源：<br />
<a href="http://download.videolan.org/pub/vlc/SuSE/" target="_blank">
    http://download.videolan.org/pub/vlc/SuSE/
</a>

<br/><br/>


<div class="os2">13.2 终端命令行安装编解码器</div>
如果在终端命令行安装编解码器，请按如下步骤：
<br /><br />
<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>使用复制/粘贴避免打字：在Konsole命令行实现粘贴，右击鼠标 => Paste（粘贴） - 或 使用快捷键 <b>Ctrl+Shift+V</b>.</td>
</tr>
</tbody>
</table>
</div><br />

1) 添加必需的软件源：（如果您不播放DVD，可跳过第二个DVD软件源）
<div class="clroot">zypper addrepo -f http://packman.inode.at/suse/openSUSE_Leap_42.1/ packman</div>
<div class="clroot">zypper addrepo -f http://opensuse-guide.org/repo/openSUSE_Leap_42.1/ dvd</div>
<br />

2) 然后安装必需的软件包：（如果您不播放DVD，可跳过libdvdcss2的包）
<div class="clroot">zypper install k3b-codecs ffmpeg lame phonon-backend-vlc phonon4qt5-backend-vlc vlc-codecs flash-player libdvdcss2</div>
<br />

3) 最后执行命令删除下面的软件包：
<div class="clroot">zypper remove phonon-backend-gstreamer phonon4qt5-backend-gstreamer</div>
<br />


openSUSE社区的关于支持多媒体格式和常用一键安装的指南：<br />
<a href="http://opensuse-community.org/" target="_blank">
http://opensuse-community.org/
</a>
<br /><br />





<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="windows.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="browserplugins.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
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
 
