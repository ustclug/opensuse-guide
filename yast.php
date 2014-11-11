<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" lang="zh" >

<!-- <!DOCTYPE html>
<html> -->




<head>

<title>9. 管理员设置 (YaST) - YaST 设置工具介绍</title>

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

<div align="center" class="indholdoverskrift">openSUSE 12.3 coming soon:</div><br />

<center><a href="http://en.opensuse.org/Portal:12.3"><img src="http://counter.opensuse.org/12.3/small" border="0" alt="countdown" /></a></center><br />
-->

</div>
 
 

<div class="os1"><a name="yast" class="os1">9. 管理员设置 (YaST)</a></div>
YaST (Yet another Setup Tool，SUSE特制的强大设置工具) 是系统管理配置的核心工具。打开Yast：<br />
<div class="sti">Kickoff menu（开始菜单） =&gt; Computer tab（计算机） =&gt; YaST</div><br /> 





<center><a href="images/screenshots/yast-controlcenter.png" rel="thumbnail"><img src="images/screenshots/yast-controlcenterb.png" alt="yast" class="pic" /></a></center><br />

<b>默认YaST模块</b><br />

使用图形界面的各种强大的配置模块，Yast几乎可完成所有的系统任务，比如：
<ul>
<li>安装和卸载软件（下章介绍）</li>
<li>设置您的打印机</li>
<li>配置防火墙</li>
<li>开启和禁用系统服务</li>
<li>设置网络共享(Windows域成员资格，Samba服务器)</li>
<li>磁盘分区管理（给硬盘/优盘分区和格式化，可以挂载Windows分区）</li>
<li>启用NTP（网络时间同步协议）服务</li>
<li>引导装载程序（多操作系统引导，设置默认启动的系统）</li>
<li>软件安装源（添加、修改或禁用软件源）</li>
<li>硬件信息</li>
<li>网络设置</li>
<li>用户和组管理（设置用户权限、添加删除用户）</li>
<li>在线更新</li>
<li>还有很多很多……</li>
</ul>


<b>附加YaST模块</b><br />

除了默认安装的模块，还有很多其他的可用Yast模块（需要自己装，请阅读后面软件安装的章节）。默认未安装的一些著名的模块：（这些多是服务器用的）
<ul>
<li>Apache网页服务器(包名：yast2-http-server)</li>
<li>SSH远程安全登录服务 (包名：yast2-sshd)</li>
<li>FTP服务器(包名：yast2-ftp-server)</li>
<li>NFS网络文件系统服务器 (包名：yast2-nfs-server)</li>
<li>还有很多……</li>
</ul>

<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>
如果您不想的话，您可以不必用Yast。您可以用命令行并手动编辑配置文件来完成相同的任务。
</td>
</tr>
</tbody>
</table>
</div><br />


<div class="os2">9.1 终端中的 YaST</div>

在终端中同样也可以使用 YaST（ncurses终端模式）——
这对没有图形界面环境运行的服务很有用，比如用SSH远程登录或您的图形界面
环境坏掉了或压根没装图形界面。
<br /><br />

在终端以root用户模式运行 <i>yast</i> 命令即可：
<br />

<div class="clroot">yast</div><br />


<center><a href="images/screenshots/yast-ncurses.png" rel="thumbnail"><img src="images/screenshots/yast-ncursesb.png" alt="yast-ncurses" class="pic" /></a></center><br />


通过方向键移动，Enter 键选择，Alt+[高亮字母] 为快捷键 (比如 Alt+Q 退出)。<br /><br />

<div class="os2">9.2 WebYaST</div>
甚至还有个WebYaST界面，使您能够通过网页浏览器远程管理您安装的openSUSE系统。
您可以在这获悉关于WebYaST更多的知识：<br />
<a href="http://en.opensuse.org/Portal:WebYaST" target="_blank">http://en.opensuse.org/Portal:WebYaST</a><br /><br />



<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="command.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="installpackage.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
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
 
