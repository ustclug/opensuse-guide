<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" lang="zh" >

<!-- <!DOCTYPE html>
<html> -->




<head>

<title>7. 安全设置 - 基本的安全设置和使用 root 用户</title>

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
<div class="indholdtekst">最后更新：2015年11月22日</div>
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

<div align="center" class="indholdoverskrift">openSUSE 12.3 coming soon:</div><br />

<center><a href="http://en.opensuse.org/Portal:12.3"><img src="http://counter.opensuse.org/12.3/small" border="0" alt="countdown" /></a></center><br />
-->

</div>
 
 


<div class="os1">7. 安全设置</div>
openSUSE 和其他的 GNU/Linux 都是相当安全的，不过面对的是深不可测的互联网，一些必要的安全措施还是必要的。<br /><br />

<div class="os2">7.1 Root 用户（拥有管理员权限）</div>
之所以称 GNU/Linux 是非常安全的，原因之一便是系统默认并不是管理员权限。只有root用户才有完整的管理员权限。<br /><br />

因此在安装软件或者执行其他一些需要管理员权限的任务时，会弹出一个窗口询问root密码。在默认情况下root密码与您的用户密码相同，除非在安装系统的时候另作设置。<br /><br />

<div class="obs">
<table>
<tbody>
<tr>
<td><img src="images/pics/obs.png" alt="obs" /></td>
<td>安全起见，在不必要的时候还是不要用root的好。</td>
</tr>
</tbody>
</table>
</div><br />

<div class="os3">7.1.1 文件管理器（超级用户模式）</div>

当您要用图形界面处理需要管理员权限的系统文件（修改/home/目录之外的东西基本都要）时，您可以启动超级用户
模式Dolphin文件管理器。

<div class="sti">开始菜单 => 系统 => File Manager - Super User Mode（文件管理器-超级用户模式）</div><br />


<center><a href="images/screenshots/super-dolph.png" rel="thumbnail"><img src="images/screenshots/super-dolphb.png" alt="super user dolphin" class="pic" /></a></center><br />


<div class="os3">7.1.2 在终端中切换为root用户</div>
在终端中，执行如下命令可切换至 root 用户： 
<div class="cl">su -</div><br />

<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>在输入密码的时候屏幕上什么都不会显示，请不要惊慌，您的键盘没问题。为防止偷窥密码位数专门设定的。</td>
</tr>
</tbody>
</table>
</div><br />

要离开root用户模式，输入如下命令：
<div class="clroot">exit</div><br />

如果只需要对一个命令使用 root 权限，则可以： （或者 sudo command）
<div class="cl">su -c "[command]"</div><br />



关于终端使用的更多信息，在下个章节中将有详细介绍。<br /><br />

<div class="os2">7.2 安全更新</div>
openSUSE Leap 大版本计划是 3-4 年更新，所以补丁支持期很长。当有新的安全更新时，
任务栏托盘中的护盾形状图标将会提示您。<br /><br />


<center><a href="images/screenshots/pk-updater.png" rel="thumbnail"><img src="images/screenshots/pk-updaterb.png" alt="pk-updater" class="pic" /></a></center><br />


<div class="os3">7.2.1 在终端中安装更新</div>

在终端中进行官方安全补丁更新，可执行如下的命令： 
<div class="clroot">zypper patch</div><br />

要安装官方补丁并且从第三方软件源更新软件，运行：
<div class="clroot">zypper update</div><br />


<div class="os2">7.3 防火墙</div>
Linux内核内置了防火墙，而 openSUSE 为其提供了图形界面。默认情况下防火墙将放行所有外出的请求，并阻止所有对内的请求。因此如果需要对外提供服务（http，ftp等服务）的话，需要手动调整下防火墙的配置。可在 YaST 中配置防火墙，而关于 YaST 将在后面的章节中介绍。<br /><br />

<div class="os2">7.4 病毒与间谍程序</div>
在 openSUSE 中并没有必要单独再安装查杀病毒木马的软件或者其他安全软件。 
恶意软件通过互联网传播和感染普通用户系统的情况对GNU/Linux是不存在的。
有种说法是在 Linux 下中病毒的概率与彩票中奖的概率相当。当然前提是不要主动去尝试一些恶意软件或者从不信任的源中安装软件。只要保证您自己不从不可信任的软件源安装软件或脚本，您将会很安全。
<br /><br />


<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="apps.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="command.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
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
 
