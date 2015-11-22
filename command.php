<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" lang="zh" >

<!-- <!DOCTYPE html>
<html> -->




<head>

<title>8. 终端命令行 - 在 openSUSE 上运行命令和使用命令行界面</title>

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

<div align="center" class="indholdoverskrift">openSUSE 12.1 coming soon:</div><br />

<center><a href="http://en.opensuse.org/Portal:12.1"><img src="http://counter.opensuse.org/12.1/small" border="0" alt="countdown" /></a></center><br />
-->

</div>
 
 


<div class="os1">8. 终端命令行</div>
在诸如 openSUSE 之类的现代 Linux 发行版中，基本上可以通过图形界面完成所有任务。
但是要真正成为自力更生的用户并真正发挥您的 GNU/Linux 操作系统的威力，
您应该至少学习一些终端的基本知识——学习它一点都不困难。
<br /><br />

您可以运行上千条命令，每一个拥有各自不同的选项。所以本章仅是浅显地描述最常用的命令。
<br /><br />


可以在 Kickoff 开始菜单里的Favorites（收藏夹）栏目里找到
<a href="video/konsole.ogv" target="_blank"> <i>Konsole</i>终端</a>。
<br /><br />

<center><video src="video/konsole.ogv" controls>  

<center><a href="images/screenshots/konsole.png" rel="thumbnail"><img src="images/screenshots/konsoleb.png" alt="konsole" class="pic" /></a></center><br />

<b>您的网页浏览器不支持 HTML5 视频元素和/或Ogg Theora格式。<br />
请使用 Firefox, Konqueror 或 Opera 浏览器。</b><br /><br />

<a href="video/konsole.ogv">下载视频录像到本地观看 (4.3 MB)</a>
</video></center>  <br /><br />


命令行其实非常简单。只需要输入命令即可，通常还需要若干个选项和参数，然后按下Enter回车键，比如： 

<div class="cl">ls -l /home/[username]/ </div><br />

 <i>ls</i> 是<b>命令</b>，作用是显示文件列表， <i>-l</i>  是<b>选项</b>  ，
 作用为使得“ls”命令以长列表的方式显示文件列表， <i>/home/[username]/</i>  是<b>参数</b>，是设置要显示其内部文件列表的目录。<br /><br />

<div class="os2">8.1 常用快捷键</div><br />

<div class="os3">Tab 键</div>
Tab 键是非常有用的。在通常情况下 按Tab 键会自动补全命令和参数，
使得敲命令更加方便快捷。<br /><br />

<div class="os3">Ctrl+Shift+V</div>
从剪贴板粘贴命令及选项参数。<br /><br />

<div class="os3">Ctrl+C</div>
停止当前终端所有已经开始执行的命令。<br /><br />


<div class="os2">8.2 基本命令使用示例</div>
这里演示一些基本的命令，以帮助您对终端有更深入的了解。<br /><br />


<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td><u>红色</u>标注的命令表示需要root权限</td>
</tr>
</tbody>
</table>
</div><br />


<div class="os3">8.2.1 文件管理</div>

改变目录<br />
<div class="cl">cd /home/user/directoryname/</div><br />

列出当前目录的所有文件和文件夹<br />
<div class="cl">ls</div><br />

复制一个文件<br />
<div class="cl">cp filename /home/user/directoryname/filename</div><br />

删除一个文件<br />
<div class="cl">rm filename</div><br />

删除一个文件夹及文件夹下的所有文件<br />
<div class="cl">rm -rf /home/user/directoryname</div><br />

移动或者重命名一个文件<br />
<div class="cl">mv /home/user/filename /home/user/newfilename</div><br /><br />


<div class="os3">8.2.2 系统监视</div>
查看进程及系统资源占用。 使用 'Q' 键退出<br />
<div class="cl">top </div><br />

查看磁盘空间使用状况<br />
<div class="cl">df</div><br />

查看内存使用情况<br />
<div class="cl">free</div><br /><br />


<div class="os3">8.2.3 网络</div>

查看IP地址<br />
<div class="cl">ip a</div><br />

查看网关(gateway)<br />
<div class="cl">ip route</div><br />

查看DNS服务器<br />
<div class="cl">cat /etc/resolv.conf</div><br /><br />


<div class="os3">8.2.4 Man页面（使用手册）和帮助</div>

几乎所有的命令都带有一个伴随的手册页面，描述如何使用该命令及可用的选项。例如输入：
<div class="cl">man cp</div><br />

要离开man使用手册页面，请按 <b>'Q'</b><br /><br />

如果一个命令没有带man手册页面，尝试 <i>--help</i> 选项，如：
<div class="cl">cp --help</div><br /><br />


<div class="os3">8.2.5 成为 Root</div>

一般系统管理员的命令只有 root 用户才可执行。这时可切换至 root 用户：
<br />
<div class="cl">su -</div>

然后敲入 root 密码。敲密码的时候上面什么都不会显示，请不要惊慌，您的键盘没问题。为防止偷窥密码位数专门设定的。<br /><br />

退出root用户模式并返回普通用户工作，请运行 <i>exit</i> 命令：
<div class="clroot">exit</div><br />

如果只需要对一句命令使用root权限执行：（sudo  command也行）
<div class="cl">su -c "[command]"</div><br />

<div class="obs">
<table>
<tbody>
<tr>
<td><img src="images/pics/obs.png" alt="obs" /></td>
<td>除非万不得已，否则不要进root用户。</td>
</tr>
</tbody>
</table>
</div><br />


<div class="os3">8.2.6 系统任务</div>
关机<br />
<div class="clroot">systemctl shutdown</div><br />

重启<br />
<div class="clroot">systemctl reboot</div><br />

开始、停止、重启系统服务或者查看系统服务的状态(start|stop|restart|status)，
示例：<br />
<div class="clroot">systemctl restart network</div>
<div class="clroot">systemctl stop SuSEfirewall2_init</div>
<div class="clroot">systemctl start apache2</div>
<div class="clroot">systemctl status smb</div><br />

设置开机启动时某项服务为开启或禁用，示例：
<div class="clroot">systemctl enable sshd</div>
<div class="clroot">systemctl disable cups</div><br /><br />


<div class="os3">8.2.7 系统内核</div>
查看您的内核版本和类型
<br />
<div class="cl">uname -r</div><br />


查看内核信息<br />
<div class="clroot">dmesg</div><br />

列出使用中（已加载）的内核模块<br />
<div class="clroot">lsmod</div><br />

装载一个内核模块<br />
<div class="clroot">modprobe [modulename]</div><br />

卸载一个内核模块<br />
<div class="clroot">rmmod [modulename]</div><br /><br />


<div class="os3">8.2.8 硬件信息</div>

hwinfo命令几乎可以查看所有硬件的信息，示例：
<br />
<div class="clroot">hwinfo --short --wlan</div>
<div class="clroot">hwinfo --short --gfxcard</div><br />

列出 PCI 设备：
<div class="clroot">lspci</div><br />

列出 USB 设备：
<div class="cl">lsusb</div><br /><br />


<div class="os2">8.3 编辑纯文本文件</div>
可以使用闻名于世的 vim 编辑器编辑配置文件或者其他纯文本文件。
<br /><br />

使用 <i>vim /path/to/file</i> 命令打开文件，比如： <br />
<div class="clroot">vim /boot/grub/menu.lst</div><br />


<div class="obs">
<table>
<tbody>
<tr>
<td><img src="images/pics/obs.png" alt="obs" /></td>
<td>
这个例子需要root权限，因为 <i>menu.lst</i> 是系统的配置文件，
不管用什么工具修改它都要root权限，而不是vim本身需要管理员权限。
</td>
</tr>
</tbody>
</table>
</div><br />


按 <i>i</i> 键进入 insert 模式，现在就可以编辑文件了。 完成编辑后按 <i>Esc</i> 键离开 insert 模式。然后输入 <i>:x</i> 保存并退出。若要退出而不保存任何更改，使用 <i>:q!</i> 
 <br /><br />


<div class="os2">8.4 更多的读物</div>

如果您想学更多的关于使用终端命令行的知识，互联网上有很多可用资源，
这有一些链接：（或者用谷歌百度搜索“Linux 命令”）
<br />
<a href="http://www.oreillynet.com/linux/cmd/" target="_blank">http://www.oreillynet.com/linux/cmd/</a><br />
<a href="http://www.tuxfiles.org/linuxhelp/cli.html" target="_blank">http://www.tuxfiles.org/linuxhelp/cli.html</a><br />
<a href="http://tldp.org/LDP/GNU-Linux-Tools-Summary/html/index.html" target="_blank">http://tldp.org/LDP/GNU-Linux-Tools-Summary/html/index.html</a><br /><br />


<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="security.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="yast.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
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
 
