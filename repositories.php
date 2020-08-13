<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" lang="zh" >

<!-- <!DOCTYPE html>
<html> -->




<head>

<title>11. 软件源 - 添加和管理软件包的安装源</title>

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
<div class="content-text">最后更新：2020年8月13日</div>
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
 
 


<div class="heading1">11. 软件源</div>
如前面章节提到的，通过软件包管理器安装软件本质上是从软件源搜索并下载安装程序。因此所能安装的软件的以及下载的速度都取决于您的软件源。
<br /><br /> 

软件源可以理解为一系列 RPM 包（专为openSUSE打包的）和可用包的列表数据的集合。
通常情况下的软件源都是一些在线的服务器供软件搜索与安装，不过 CD/DVD 或者其他一些介质也可以当作静态的软件源使用。<br /><br />

<div class="heading2">11.1 管理软件源</div>
通过 YaST 可以添加、删除和管理软件源。<br />
<div class="path">开始菜单 => 系统 => YaST ，在 Yast 里点击 "软件源"</div><br />


<center><a href="images/screenshots/yast-repos.png" rel="thumbnail"><img src="images/screenshots/yast-reposb.png" alt="repos" class="pic" /></a></center><br />


<div class="heading3">11.1.1 添加软件源</div>
默认已经加入了官方的软件源，不过我们自己也可以根据需要添加很多非官方软件源。<br /><br /> 

<div class="note">
<table>
<tbody>
<tr>
<td><img src="images/pics/obs.png" alt="obs" /></td>
<td>	添加软件源时要注意： 
<ul>
<li>非官方源可能包含一些试验中的不稳定的软件包</li>
<li>不同的软件源之间并不一定是兼容的</li>
<li>一个非官方软件源并不是永久稳定且可信的</li>
<li>过多的软件源将会降低软件包管理器的速度</li>
</ul>
</td>
</tr>
</tbody>
</table>
</div><br />


最简单且最安全的添加软件软件源的方法是让 YaST 自动寻找并添加社区软件源。它会列出一些常用的并且安全的软件源供您选择：
<div class="path">YaST => Software（软件） => Software Repositories（软件源） => Click on "Add"（单击“添加”） => Select "Community Repositories" and click "Next"（选择“社区软件源”并点击“下一步”）</div><br />

<center><video src="video/repos114.ogv" controls>  

<center><a href="images/screenshots/community-repos.png" rel="thumbnail"><img src="images/screenshots/community-reposb.png" alt="repos" class="pic" /></a></center><br />

<b>您的网页浏览器不支持 HTML5 视频元素和/或Ogg Theora格式。<br />
请使用 Firefox, Konqueror 或 Opera 浏览器。</b><br /><br />

<a href="video/repos-full.ogv">下载视频演示 (4.3 MB)</a>
</video></center>  <br /><br />


需要注意的是，<b>openSUSE BuildService</b> 是为社区提供的软件打包与分享服务。
<i>openSUSE BuildService软件源是非官方的，并且不受官方支持。</i>所以使用的时候要小心。<br /><br />



<div class="heading3">11.1.2 推荐的软件源</div>
您必须一直要保持有这四个 <b>官方</b> 软件源(当然是默认配置好的)。<br/>

<ul>
	<li><b>Main Repository (OSS)</b>（开源的软件）</li>
	<li><b>Main Repository (NON-OSS)</b>（非开源软件）</li>
	<li><b>Main Update Repository</b>（开源软件安全更新）</li>
	<li><b>Main Update Repository (NON-OSS)</b>（非开源软件安全更新）</li>
</ul>

此外本站推荐如下社区的软件源，以及时获得更稳定的软件更新，
对绝大多数用户是很好用的。
<br />


<ul>
	<li><b>
	<a href="http://packman.links2linux.de/" target="_blank">
	Packman Repository
	</a>
	</b>(多媒体编解码器-播放器、Broadcom无线网卡驱动、游戏等)</li>
	<li><b>openSUSE BuildService - KDE:Extra</b>（KDE 桌面环境软件）</li>
	<li><b>
	<a href="http://www.videolan.org/" target="_blank">
	Videolan</a></b> 多媒体软件源</li>
</ul>
对于国内用户而言，用官方的软件源还是相当慢的，国内有些厂商或者组织提供了免费的源镜像，速度不错，建议使用：<br />

<ul>
	<li><a href="http://mirrors.163.com/openSUSE/" target="_blank">网易163</a>（<a href="http://mirrors.163.com/.help/opensuse.html" target="_blank">使用帮助</a>）</li>

	<li><a href="http://mirrors.tuna.tsinghua.edu.cn/opensuse/" target="_blank">清华TUNA</a>（使用帮助同上）</li>	
		
	<li><a href="http://ftp.twaren.net/Linux/OpenSuSE/" target="_blank">
	台湾openSUSE源
	</a>（使用帮助同上）
	</li>
	
	<li><a href="http://mirrors.ustc.edu.cn/opensuse/" target="_blank">中国科学技术大学</a>
	（<a href="https://lug.ustc.edu.cn/wiki/mirrors/help/opensuse" target="_blank">使用帮助</a>）
	</li>
	
	<li><a href="http://mirrors.hust.edu.cn/opensuse/" target="_blank">华中科技大学</a>（使用帮助同上）</li>
	
	<li><a href="http://mirrors.opensuse.org/list/all.html" target="_blank">世界上的其他软件源镜像列表</a></li>

</ul>

本中文站推荐如下几个软件源，国人常用的软件都在这里面，输入法、网络电视、音乐播放器、桌面歌词、下载工具等等：
<ul>

    <li>
        <b><a href="http://download.opensuse.org/repositories/home:/opensuse_zh/openSUSE_Leap_15.2/" target="_blank">
        http://download.opensuse.org/repositories/home:/opensuse_zh/openSUSE_Leap_15.2/
        </a></b>
    </li>

<!--
    <li>
        <a href="http://download.opensuse.org/repositories/home:/MargueriteSu/openSUSE_13.2/" target="_blank">
        http://download.opensuse.org/repositories/home:/MargueriteSu/openSUSE_13.2/
        </a>
    </li>

    <li>
        <a href="http://download.opensuse.org/repositories/home:/hillwood/openSUSE_Leap_15.2/" target="_blank">
        http://download.opensuse.org/repositories/home:/hillwood/openSUSE_Leap_15.2/
        </a>
    </li>
--> 
<!--
    <li>
        <a href="http://download.opensuse.org/repositories/home:/stecue/openSUSE_15.2/" target="_blank">
        http://download.opensuse.org/repositories/home:/stecue/openSUSE_15.2/
        </a>
    </li>
-->


    
    <li>
        <a href="http://mirrors.hust.edu.cn/packman/suse/openSUSE_Leap_15.2/" target="_blank">
        http://mirrors.hust.edu.cn/packman/suse/openSUSE_Leap_15.2/
        </a>（华中科技大学Packman源）
    </li>
    <li>
        <a href="http://download.videolan.org/pub/vlc/SuSE/Leap_15.2/" target="_blank">
        http://download.videolan.org/pub/vlc/SuSE/Leap_15.2/
        </a>（Videolan 官方源）
    </li>
</ul>



<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>还有软件找不到么？您可以搜索openSUSE Build Service上的软件包/源<br />
    <a href="http://software.opensuse.org/search" target="_blank"> 
     http://software.opensuse.org/search
     </a><br />
    <a href="https://build.opensuse.org/search" target="_blank">
    https://build.opensuse.org/search
    </a> <br />
    
    openSUSE Build Service（OBS）软件源的使用见：<br />
    <a href="http://www.linuxidc.com/Linux/2011-12/48450.htm" target="_blank">
    openSUSE Build Service更名为Open Build Service
    </a><br /><br />
    这个搜索引擎也包含了 Packman 源:<br /><a href="http://webpinstant.com" target="_blank">http://webpinstant.com</a><br /><br />记住添加非官方源一定要小心！    
    
</td>
</tr>
</tbody>
</table>
</div><br />

<div class="heading3">11.1.3 改变软件更新源</div>

从一个软件源安装软件后，若要从另一个不同的软件<b>供应方(vendor)</b>来更新这些软件版本，有一丁点复杂，请看这里：
<br />
<a href="http://en.opensuse.org/SDB:Vendor_change_update" target="_blank">http://en.opensuse.org/SDB:Vendor_change_update</a><br /><br />

<div class="heading2">11.2 在终端中管理软件源</div>
如果您愿意，您也可以从终端来管理您的软件源。
<br /><br />

使用命令 <i>zypper addrepo -f [URL] [Alias]</i> （Alias是自己给这个源随便定义的英文名）添加软件源并开启自动刷新，如：
<div class="clroot">zypper addrepo -f http://packman.inode.at/suse/openSUSE_Leap_15.2/  packman</div><br />

使用命令 <i>zypper modifyrepo -d [URL或者Alias]</i> 禁用一个软件源，如：
<div class="clroot">zypper modifyrepo -d Packman</div><br />

使用命令 <i>zypper removerepo [URL或者Alias]</i> 删除一个软件源： 
<div class="clroot">zypper removerepo http://packman.inode.at/suse/openSUSE_Leap_15.2/ </div><br />

列出配置的软件源，显示详情（优先级、网址等等）：
<div class="cl">zypper repos -d</div><br />

用 <i>man zypper</i> 查看更多信息：
<div class="cl">man zypper</div><br />

或者查看单独命令选项的帮助信息： 
<div class="cl">zypper addrepo --help</div><br />

更多关于 zypper 命令使用说明请参考：<br />
<a href="https://en.opensuse.org/SDB%3aZypper_usage" target="_blank">
https://en.opensuse.org/SDB%3aZypper_usage
</a>
<br />
<br />


<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="installpackage.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="windows.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
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
 
