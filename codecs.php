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
<div class="content-text">最后更新：2018年1月18日</div>
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

<div align="center" class="content-title">openSUSE 13.2 coming soon:</div><br />

<center><a href="http://en.opensuse.org/Portal:13.2"><img src="http://counter.opensuse.org/13.2/small" border="0" alt="countdown" /></a></center><br />
-->

</div>
 
 


<div class="heading1">13. 多媒体编解码器</div>

本章介绍三种不同的多媒体格式播放包的安装方法，支持格式如MP3, DVD等，支持 Dragon 视频播放器和 Amarok 音频播放器。您可以使用一键安装、手动安装或使用命令行安装，随您喜好使用哪种。这些安装方式对 GNOME 和 KDE 桌面都通用。命令行安装需要root管理员权限，输入su，按提示输入密码，然后以管理员身份安装软件。其他安装方式也要按提示输入密码。
<br /><br />

由于法律原因（美国软件专利和数字千年版权法案，DMCA），如果未安装下文提及的编解码器，那么默认只支持自由的、开放的、非专利保护格式，如 Ogg Theora，Ogg Vorbis 和 Flac格式。如果按下文来安装各种编解码器，那么就可以支持几乎所有的主流多媒体格式，与Windows系统的暴风影音相当。
<br /><br />


<div class="heading2">13.1 一键安装编解码器</div>
1）点击下面按钮，即可一键安装多媒体编解码器。
<br /><br />

<center><a href="http://opensuse-community.org/codecs-kde.ymp"><img src="images/oneclick/codec-kde.png" alt="ymp" class="pic" />
</a></center><br />

<center><a href="http://opensuse-community.org/codecs-gnome.ymp"><img src="images/oneclick/codec-gnome.png" alt="ymp" class="pic" />
</a></center><br />

<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>如果出现软件包冲突（conflict）对话框，选择最上面的选项，切换软件源为 packman （<i>with</i> Vendor Change）以解决冲突，继续安装。</td>
</tr>
</tbody>
</table>
</div><br />
2）之后确保您的多媒体软件包都是来自 Packman 软件源：
<div class="path">启动 YaST 软件管理 => 点击 View（视图）下拉菜单=> 点击 Repositories（软件源）=> 选择 Packman 软件源 => 点击 "Switch system packages"（切换系统软件包） => 点击 "Accept"（接受）</div><br />

<center><a href="images/screenshots/packman-vendorchange.png" rel="thumbnail"><img src="images/screenshots/packman-vendorchangeb.png" alt="packman_vendor_change" class="pic" /></a></center><br /><br />

另外说明一下，Packman源上还有经典的音频视频播放器，如 Audacious、MPlayer、SMPlayer等，还有XVID、VLC、w32codec等很多很好的编解码器，可以一起安装。还有些游戏等，资源很丰富，建议多看看。
<br />
另外推荐Videolan官方源：<br />
<a href="http://download.videolan.org/pub/vlc/SuSE/Leap_42.3/" target="_blank">
    http://download.videolan.org/pub/vlc/SuSE/Leap_42.3/
</a>

<br/><br/>


<div class="heading2">13.2 终端命令行安装编解码器</div>
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
<div class="clroot">zypper addrepo -f http://packman.inode.at/suse/openSUSE_Leap_42.3/ packman</div>
<div class="clroot">zypper addrepo -f http://opensuse-guide.org/repo/openSUSE_Leap_42.3/ dvd</div>
<br />

2) 然后安装必需的软件包：（如果您不播放DVD，可跳过libdvdcss2的包）
<div class="clroot">zypper install ffmpeg lame gstreamer-plugins-bad gstreamer-plugins-ugly gstreamer-plugins-ugly-orig-addon gstreamer-plugins-libav libdvdcss2</div>
<br />

命令行里可能提示需要切换软件源到 packman （<i>with</i> Vendor Change），请允许切换并继续安装。
<br /><br />

3) 执行如下命令确保您的多媒体软件包都是来自 Packman 软件源：
<div class="clroot">zypper dup --from http://packman.inode.at/suse/openSUSE_Leap_42.3/</div><br /><br />

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

<div class="small" align="center">
本文档翻译自 <a href="http://opensuse-guide.org/" target="_blank">http://opensuse-guide.org/</a> 不当之处，还望指正<br />
使用e-mail发送您的英文评论给 admin [at] opensuse-guide.org <br />
或发送意见和建议给中文译者：Libitum (hello[at]libitum.org);
Winland (winland0704[at]126.com) 
</div>


</div>
</body>
</html>
 
