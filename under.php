<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" lang="zh" >

<!-- <!DOCTYPE html>
<html> -->




<head>

<title>附录C：深入了解 - 粗略看看系统表面之下是什么状况</title>

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

<div align="center" class="content-title">openSUSE 12.3 coming soon:</div><br />

<center><a href="http://en.opensuse.org/Portal:12.3"><img src="http://counter.opensuse.org/12.3/small" border="0" alt="countdown" /></a></center><br />
-->

</div>
 
 


<div class="heading1">附录C：深入了解</div>

本章的目的是让读者快速扫一眼在openSUSE GNU/Linux操作系统的表面之下是怎么回事，
对系统内部运行有个基本概念。
<br /><br />


<div class="heading2">C.1 主要系统组件</div>

任何现代的电脑操作系统都是一个很大的、复杂的装置——GNU/Linux发行版也不例外。
Linux内核只是众多组件之一。下图展示了系统核心组件和他们各自的角色。
<br /><br />

<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><center><a href="images/pics/distro.png" rel="thumbnail"><img src="images/pics/distrob.png" alt="distro" class="pic" /></a></center><br /></td>
	
		
	</tr>

      	<tr>
		<td class="image-caption">
		本图展示了GNU/Linux操作系统的主要组件。
		</td>
				
	</tr>
</tbody>
</table>


<div class="heading2">C.2 文件树</div>

大多数用户几乎不需要在他们的主文件夹（home folder）之外工作，
但是对文件层次如何工作有个基本的概念仍是一个好主意。
<br /><br />

GNU/Linux里您只有 <i>一个</i> 文件树，不同于如微软Windows系统的每个
文件系统/分区都有一个不同的文件树的情况——GNU/Linux里单独的文件系统/分区被
 <i>装载</i> 到一个文件树内的文件夹里。这个文件树的根文件夹是  "<b>/</b>"  
并且路径都是用正斜杠（右斜杠）。
<br /><br />

所以GNU/Linux中的路径是像这样的：
<br />
<b>/home/<i>username</i>/Desktop/</b><br /><br />

微软Windows中对应的路径是像这样的：
<br />
<b>C:\Documents and Settings\<i>username</i>\Desktop</b><br /><br />

<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>
GNU/Linux中文件名和文件夹是<b>区分字母大小写</b>的。
</td>
</tr>
</tbody>
</table>
</div><br />

根文件夹 ("/") 默认包含这些文件夹：
<br /><br />


<table class="table">
<tbody>
  <tr>
      <td style="width: 95px;"><b>/bin/          </b></td>
      <td>
      基本工具和其他程序（或二进制文件）
      </td>
  </tr>
  <tr class="d1">
      <td style="width: 95px;"><b>/boot/</b></td>
      <td>
      内核本身、引导装载配置等。
      </td>
  </tr>
  <tr>
      <td style="width: 95px;"><b>/dev/</b></td>
      <td>
      设备文件代表的各种硬件。
      </td>
  </tr>
  <tr class="d1">
      <td style="width: 95px;"><b>/etc/</b></td>
      <td>
      系统配置文件
      </td>
  </tr>
  <tr>
      <td style="width: 95px;"><b>/home/</b></td>
      <td>普通用户的主文件夹</td>
  </tr>
  <tr class="d1">
      <td style="width: 95px;"><b>/lib/</b></td>
      <td>
      系统库文件
      </td>
  </tr>
  <tr>
      <td style="width: 95px;"><b>/media/</b></td>
      <td>
      可移动媒体的装载点
      </td>
  </tr>
  <tr class="d1">
      <td style="width: 95px;"><b>/mnt/</b></td>
      <td>
      用于临时装载点
      </td>
  </tr>
  <tr>
      <td style="width: 95px;"><b>/opt/</b></td>
      <td>
      附加应用程序文件
      </td>
  </tr>
  <tr class="d1">
      <td style="width: 95px;"><b>/proc/</b></td>
      <td>
      关于当前系统进程信息的文件
      </td>
  </tr>
  <tr>
      <td style="width: 95px;"><b>/root/</b></td>
      <td>
      超级用户的主目录
      </td>
  </tr>
  <tr class="d1">
      <td style="width: 95px;"><b>/sbin/</b></td>
      <td>
      基本的系统管理员工具，或系统二进制文件
      </td>
  </tr>
  <tr>
      <td style="width: 95px;"><b>/selinux/</b></td>
      <td>
      如果您使用SELinux才有关系，而您大概不会用到它
      </td>
  </tr>
  <tr class="d1">
      <td style="width: 95px;"><b>/srv/</b></td>
      <td>
      系统运行的服务器数据
      </td>
  </tr>
  <tr>
      <td style="width: 95px;"><b>/sys/</b></td>
      <td>
      虚拟文件系统
      </td>
  </tr>
  <tr class="d1">
      <td style="width: 95px;"><b>/tmp/</b></td>
      <td>
      临时文件
      </td>
  </tr>
  <tr>
      <td style="width: 95px;"><b>/usr/</b></td>
      <td>
      UNIX系统资源的简称，例如所有应用程序均安装在这里，
      还有库文件、头文件、源码、文档和帮助等
      </td>
  </tr>
  <tr class="d1">
      <td style="width: 95px;"><b>/var/</b></td>
      <td>
      变量数据
      </td>
  </tr>
  
    <tr>
      <td style="width: 160px;"><b>/usr/share/applications/<br>
      
</b></td>
      <td>
      全局的开始菜单的应用程序快捷方式（用户的： ~/.local/share/applications/）
      </td>
  </tr>
  <tr class="d1">
      <td style="width: 95px;"><b>~/桌面/</b></td>
      <td>
       桌面文件夹位置，包含桌面上应用程序快捷方式
      </td>
  </tr>
  
</tbody>
</table><br />

普通用户只拥有他们的 <b>/home/</b> 文件夹的写权限，并且很少需要在该目录之外工作。
如果您电脑里存在微软Windows系统，那么Windows分区一般默认装载到
 <b>/windows/</b> 目录。
<br /><br />


<div class="heading2">C.3 装载和可移动媒体</div>

如上面简要地提到文件系统/分区被装载到一个文件树内的文件夹里，
这意味着例如 "<b>/</b>" 可能在一个分区或物理磁盘上，并且 <b>/var/</b> 
可能在另一个不同的上面，而 <b>/home/<i>username</i>/data/</b> 完全可能在第三个上——但是在文件层次导航时他们都呈现在一个同样的文件树里。


<br /><br />

使用 YaST 分区工具（Partitioner）或手动编辑配置文件 /etc/fstab ，
您可以指定内部分区/文件系统的装载点，并让它们在系统引导时装载。
<br /><br />


当可移动媒体如CD或USB密钥插入时，会出现一个通知，并且设备会出现在Dolphin
文件管理器的左边面板里。媒体将被装载到 <b>/var/run/media/</b> 目录。
<br /><br />


<div class="heading2">C.4 隐藏文件</div>

以 '.' (点) 开头的文件和文件夹是隐藏的。在Dolphin文件管理器里，
您可以通过键盘快捷键 <b>Alt+.</b> 或菜单里
的 <b>View -&gt; Show Hidden Files</b> （视图 -&gt; 显示隐藏文件）
让隐藏文件显形。
<br /><br />


应用程序将用户设置和数据存储在用户主文件夹内的隐藏文件夹里，例如
<b>/home/<i>username</i>/.mozilla/</b>, <b>/home/<i>username</i>/.config/vlc/</b>, <b>/home/<i>username</i>/.kde4/share/config/</b> 等。
如果您卸载了一个应用程序，其设置和数据还会保留在主文件夹里。要“重新设置”
一个应用程序，您重命名或移动、删除其在您主文件夹里隐藏的设置和/或数据即可。
<br /><br />





<div class="heading2">C.5 重要的配置文件</div>

GNU/Linux 里的配置和设置通常存储在人类可读的普通文本文件中。几乎所有的配置
都可通过Yast图形界面或其他各种图形界面程序来完成，但是了解一些关键配置文件
的位置仍然是有益的。
<br /><br />


系统范围的配置主要存储在 <b>/etc/</b> ，对单个用户，用户设置存储在其主文件夹的
隐藏文件里。
<br /><br />


<table class="table">
<tbody>
  <tr>
      <td style="width: 230px;"><b>/etc/fstab</b></td>
      <td>
      文件系统列表，系统引导时装载的文件系统/分区。
      </td>
  </tr>
  <tr class="d1">
      <td style="width: 230px;"><b>/etc/sysconfig/yast2</b></td>
      <td>
      YaST的配置。
      </td>
  </tr>
  <tr>
      <td style="width: 230px;"><b>/etc/zypp/zypp.conf</b></td>
      <td>
      软件管理器zypper的配置。
      </td>
  </tr>
  <tr class="d1">
      <td style="width: 230px;"><b>/etc/samba/smb.conf</b></td>
      <td>
      Samba配置（Windows网上邻居）。
      </td>
  </tr>
  <tr>
      <td style="width: 230px;"><b>/etc/HOSTNAME</b></td>

      <td> 机器的主机名。</td>
  </tr>  
  <tr class="d1">
      <td style="width: 230px;"><b>/etc/X11/xorg.conf.d/</b></td>
      <td>
      X服务器配置。默认使用自动检测，如果您必须配置X服务器，那么才编辑这些文件。
      </td>
  </tr>
  <tr>
      <td style="width: 230px;"><b>/etc/sysconfig/kernel</b></td>
      <td>
      内核。比如系统引导时额外装载的模块。
      </td>
  </tr>
  <tr class="d1">
      <td style="width: 230px;"><b>/etc/modprobe.d/50-blacklist.conf</b></td>
      <td>
      内核模块黑名单。
      </td>
  </tr>  
  
  </tbody>
</table><br />


<div class="heading2">C.6 日志</div>

为防备出问题，了解主要日志文件的位置是有益的，绝大多数存在
 <b>/var/log/</b> 目录。
<br /><br />



<table class="table">
<tbody>
  <tr>
      <td style="width: 230px;"><b>/var/log/Xorg.0.log</b></td>
      <td>
      X服务器日志。
      </td>
  </tr>
  <tr class="d1">
      <td style="width: 230px;"><b>/home/<i>username</i>/.xsession-errors</b></td>
      <td>
      对普通用户运行的应用程序的故障排除有用。
      </td>
  </tr>
  <tr>
      <td style="width: 230px;"><b>/var/log/NetworkManager</b></td>
      <td>
      网络管理器系统的日志（通常只有笔记本电脑用到）。
      </td>
  </tr>
  <tr class="d1">
      <td style="width: 230px;"><b>/var/log/boot.msg</b></td>
      <td>
      引导日志。
      </td>
  </tr>
  <tr>
      <td style="width: 230px;"><b>/var/log/messages</b></td>
      <td>
      常规系统日志。
      </td>
  </tr>
  <tr class="d1">
      <td style="width: 230px;"><b>/var/log/YaST2/</b></td>
      <td>
      各种Yast模块和组件的日志文件。
      </td>
  </tr>
  </tbody>
</table><br />

主要的系统日志可以用 Yast 的 <i>systemd-journal</i> 模块显示，或者用 journalctl 命令：
<div class="clroot">journalctl</div><br />

在 journalctl 上阅读日志以更有效地运用这些信息。<br /><br />


<div class="heading2">C.7 故障排除</div>

如果一个应用程序崩溃或无法启动，这里是一些 GNU/Linux 的基本故障排除技巧。
<ul>
<li>
如果一个应用程序运行失败，尝试在终端里运行它，获取更多/更好的输出信息
</li>
<li>
尝试移除/重命名在用户主文件夹里的该应用程序的隐藏文件夹。
</li>
<li>
尝试创建一个新用户，看看问题是否仍存在。如果该问题对新用户是不存在的，
问题的原因在出问题用户的主文件夹内的设置/数据里大概可以找到。
</li>
<li>
检查相关的日志文件。
</li>
</ul>

<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>
重新安装软件包几乎从来不能解决任何事，因为旧的设置和数据仍然存在
主文件夹内的隐藏文件夹里。
</td>
</tr>
</tbody>
</table>
</div><br />


<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="games.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="tweaks.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
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
 
