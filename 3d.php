<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" lang="zh" >

<!-- <!DOCTYPE html>
<html> -->




<head>

<title>15. 显卡驱动 - 安装 Nvidia 或 ATI/AMD 3D 驱动程序</title>

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
<div class="content-text">最后更新：2016年11月27日</div>
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

<div align="center" class="content-title">openSUSE 12.1 coming soon:</div><br />

<center><a href="http://en.opensuse.org/Portal:12.1"><img src="http://counter.opensuse.org/12.1/small" border="0" alt="countdown" /></a></center><br />
-->

</div>
 
 


<div class="heading1">15. 显卡驱动</div>
请注意：如果系统默认的开源驱动软件满足您的使用需求，就没必要安装下面的闭源显卡驱动软件。这些驱动软件安装方法对 GNOME 和 KDE 桌面都通用。 命令行安装需要root管理员权限，输入su，按提示输入密码，然后以管理员身份安装软件。其他安装方式也要按提示输入密码。 
<br /><br />

<div class="note">
<table>
<tbody>
<tr>
<td><img src="images/pics/obs.png" alt="obs" /></td>
<td>开始之前请确认您的系统已经完全更新了。</td>
</tr>
</tbody>
</table>
</div><br />


<!-- nvidia KMPs start -->





<div class="heading2">15.1 Nvidia</div>

请根据您的 Nvidia 显卡型号选择适合的按钮，点击它一键安装英伟达官方显卡驱动。
<br /><br />

<font color="red"> <b>
请注意：所有采用 Nvidia Optimus 技术的显卡都不要按下面方式装官方驱动，因为 Nvidia 官方的 Linux 驱动目前不支持 Optimus 技术，虽然有计划支持，但需要时间。Optimus技术非官方支持见15.1.3节。</b>
</font>
<br /><br />
<div class="heading3">15.1.1 一键安装 Nvidia 显卡驱动</div>
<br />
 Geforce 400 系列以及之后的新显卡：
<center><a href="http://opensuse-community.org/nvidia.ymp"><img src="images/oneclick/nvidia_gf400.png" alt="ymp" class="pic" /></a></center><br />

Geforce 8 系列以及之后的显卡，大约2008年之后，包括 GeForce 8, GeForce 100-, 200- and 300-系列：<br /><br />
<center><a href="http://opensuse-community.org/nvidia_gf8.ymp"><img src="images/oneclick/nvidia-gf8.png" alt="ymp" class="pic" /></a></center><br />

Geforce 6 和 7 系列、以及更老的显卡，大约2007年和之前的系列：<br /><br />
<center><a href="http://opensuse-community.org/nvidia-gf6_gf7.ymp"><img src="images/oneclick/nvidia-gf6.png" alt="ymp" class="pic" /></a></center><br />

之后重启您的电脑。<br /><br />

openSUSE官方的Nvidia显卡详细安装指南：<br />
<a href="http://en.opensuse.org/SDB:NVIDIA_drivers" target="_blank">
http://en.opensuse.org/SDB:NVIDIA_drivers
</a>
<br /><br />

<div class="heading3">15.1.2 终端命令行安装 Nvidia 驱动</div>

如果您喜欢的话，您可以在终端里安装 Nvidia 驱动。<u>通过这种方式，您就无需知道自己是什么系列的 NVIDIA 显卡，
该安装命令会自动识别显卡型号并挑选合适的驱动。</u>
<br /><br />

首先添加如下软件源：
<div class="clroot">zypper addrepo -f http://download.nvidia.com/opensuse/leap/42.2 nvidia</div><br />

然后执行如下智能安装命令：
<div class="clroot">zypper install-new-recommends</div><br />

安装完之后重启。<br /><br />

<div class="heading3">15.1.3 Optimus 与 Bumblebee</div>
NVIDIA Optimus 是NVIDIA 公司2010年发布的独立显卡和集成显卡热切换技术，通常用于笔记本电脑，在游戏时双显卡同时工作，而平时图形计算负担轻时只使用Intel集成显卡，达到省电的效果。<br />
在Optimus技术发布之初，Nvidia宣布Optimus技术不支持Linux平台。2012年Nvidia公司被Linus竖中指后，洗心革面，随后改口称将Optimus技术将会支持Linux平台，但是目前还未发布相应驱动包。<br />
在当初Nvidia称Optimus技术不支持Linux平台之后，2011年开源项目“Bumblebee”启动，在Linux支持Optimus技术。当然，这是非官方的，也是不受Nvidia官方支持的。<br />
如今 Bumblebee 项目已经比较成熟，最新版3.2.1，可以较好地支持Optimus技术。Bumblebee的官网：<br />
<a href="http://bumblebee-project.org/" target="_blank">
http://bumblebee-project.org/
</a>
<br />
Bumblebee的维基页面：<br />
<a href="https://github.com/Bumblebee-Project/Bumblebee/wiki" target="_blank">
https://github.com/Bumblebee-Project/Bumblebee/wiki
</a>
<br />
在OpenSUSE上的安装包和安装方法见：<br />
<a href="http://software.opensuse.org/package/bumblebee" target="_blank">
http://software.opensuse.org/package/bumblebee
</a>
<br />
<a href="https://zh.opensuse.org/SDB:Bumblebee" target="_blank">
https://zh.opensuse.org/SDB:Bumblebee
</a>
<br />
<br />

<!-- nvidia KMP slut -->
<!-- ati KMP start -->



<div class="heading2">15.2 ATI(AMD)</div>
操作系统自带的开源驱动能够很好地支持 AMD 显卡硬件，不需要安装闭源专有驱动。
AMD 官方虽然有闭源专有驱动，但是已经停止开发了，不再受支持。目前 AMD 官方与开源社区协作，提升开源显卡驱动的性能，所以不需要闭源专有驱动了。
详情请见：<br/>

<a href="https://lizards.opensuse.org/2016/10/15/proprietary-amdati-catalyst-fglrx-15-12-rpms-released-for-leap-42-2/" target="_blank">https://lizards.opensuse.org/2016/10/15/proprietary-amdati-catalyst-fglrx-15-12-rpms-released-for-leap-42-2/</a>

<br /><br />

openSUSE官方的ATI(AMD)显卡详细安装指南：<br />
<a href="http://en.opensuse.org/SDB:ATI_drivers" target="_blank">
http://en.opensuse.org/SDB:ATI_drivers
</a>
<br /><br />

<!--
点击下面按钮，一键安装 ATI(AMD) 专有显卡驱动，适用于Radeon HD 5000系列和之后的显卡。（老版本显卡的驱动 ATI/AMD 没提供，只能使用系统默认的开源驱动，而且 openSUSE 自带的开源驱动性能比旧的AMD官方驱动性能好。）
<br /><br />
对于HD5000系列及之后的A卡：
<br /><br />

<center><a href="http://geeko.ioda.net/mirror/amd-fglrx/ymp/amd-ati-fglrx64.ymp">
    <img src="images/oneclick/ati.png" alt="ymp" class="pic" />
</a></center><br />

之后重启您的电脑。<br /><br />

openSUSE官方的ATI(AMD)显卡详细安装指南：<br />
<a href="http://en.opensuse.org/SDB:ATI_drivers" target="_blank">
http://en.opensuse.org/SDB:ATI_drivers
</a>
<br /><br />



<div class="heading3">15.2.1 终端命令行安装 ATI 驱动</div>

如果您喜欢的话，您可以在终端里安装 ATI 驱动。
<br /><br />

首先添加如下软件源：
<div class="clroot">zypper addrepo -f http://geeko.ioda.net/mirror/amd-fglrx/openSUSE_13.2/  ati</div><br />

然后安装驱动，HD5000系列及之后的A卡：<br />
32位系统执行：
<div class="clroot">zypper in  fglrx_xpic_SUSE131 </div>
64位系统执行：
<div class="clroot">zypper in fglrx64_xpic_SUSE131 </div>
最后重启。<br /><br />

<b>
由于fglx-legacy不会支持xorg 1.13 ，openSUSE 13.2无法安装fglrx-legacy，凡是HD4000系列和之前的显卡都只能用默认的开源驱动。
</b><br /><br />

-->

<!-- ati KMP slut -->

<div class="heading2">15.3 Intel</div>
Intel 显卡的 3D 驱动是开源软件，所以 openSUSE 自带该驱动，默认就支持其 3D 驱动。不需要额外的安装或配置。
<br /><br />


<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="browserplugins.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="wlan.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
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
 
