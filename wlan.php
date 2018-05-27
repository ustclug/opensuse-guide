<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" lang="zh" >

<!-- <!DOCTYPE html>
<html> -->




<head>

<title>16. 无线网卡驱动安装 - 使您的 Broadcom, Ralink 等 Wifi/Wlan 网卡正常工作</title>

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
<div class="content-text">最后更新：2018年5月27日</div>
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
 
 


<div class="heading1">16. 无线网卡驱动安装</div>

大多数无线网卡（WiFi）都会自动正常工作。这时候您可以使用NetworkManagement（网络管理工具）配置您的无线网卡，该工具自动启动，在您桌面系统右下角系统托盘里。使用NetworkManagement工具还可以配置其他网络，如VPN、3G上网卡、ADSL等，可以单击网络管理工具=>管理连接，打开各种网络配置的对话框，根据需要设置网络。这种网络配置方式不需要root管理员权限，普通用户就可以自由配置。
<br /><br />

openSUSE兼容无线网卡列表及安装支持：<br />
<a href="http://en.opensuse.org/HCL:Network_(Wireless)" target="_blank">
http://en.opensuse.org/HCL:Network_(Wireless)
</a>
<br /><br />


<center><a href="images/screenshots/pnm.png" rel="thumbnail"><img src="images/screenshots/pnmb.png" alt="Plasmoid NetworkManagement" class="pic" /></a></center><br />


<div class="heading2">16.1 查出无线网卡芯片型号</div>

如果您的无线网卡不被支持，不能自动正常工作，通过安装所需驱动，您很可能让它简单正常地工作。安装驱动软件需要root管理员权限，在命令行下输入su，按提示输入密码，然后以管理员身份来安装驱动。安装好驱动重启后，使用命令： <i>sudo ifconfig -a</i>  可以查看所有网络接口，无线网卡名一般是 wlan0，开启网卡接口命令：<i>sudo ifconfig 网卡名 up</i> 。
<br /><br />

第一步，运行下面命令查出您无线网卡的芯片型号。芯片型号是关键，而该设备的制造商和模型外壳基本上是无关紧要的。
<div class="clroot">hwinfo --wlan --short</div><br />


<center><a href="images/screenshots/hwinfo.png" rel="thumbnail"><img src="images/screenshots/hwinfob.png" alt="lspci" class="pic" /></a></center><br />

现在您知道该无线网卡的芯片型号，您就可以弄清楚需要什么来使芯片在 openSUSE 里正常工作——通常只需安装一个驱动（driver）和/或一些固件（firmware）。
<br /><br />


<div class="heading2">16.2 近期的 Broadcom 芯片</div>
Linux 内核默认自带<a href="http://linuxwireless.org/en/users/Drivers/brcm80211" target="_blank"> brcm80211 驱动</a> 。该驱动支持这些芯片：
<b> bcm4313, bcm43224, bcm43224, bcm43225, bcm4329, bcm4330, bcm4334, bcm43241, bcm43235 (>= rev 3), bcm43236 (>= rev 3), bcm43238 (>= rev 3), bcm43143, bcm43242
</b> 。<br /><br />

如果您使用上述默认驱动遇到问题，并且您的无线网卡芯片是
下列芯片之一： <b>bcm4312, bcm4313, bcm4321, bcm4322, bcm43224, bcm43225, bcm43227, bcm43228</b> ，您可以尝试安装
<a href="http://www.broadcom.com/support/802.11/linux_sta.php" target="_blank">broadcom-wl 专有驱动</a> ，添加 Packman 软件源，安装软件包 broadcom-wl 即可。
<br /><br />



<!--
Historically Broadcom were highly uncooperative with the Linux-kernel developers in terms of wireless drivers. However recently Broadcom have changed their approach and are now cooperating well with the Linux kernel developers. Therefore some recent Broadcom chips (<b>bcm4313, bcm43224 and bcm43225</b>) <a href="http://linuxwireless.org/en/users/Drivers/brcm80211#Supported_Chips" target="_blank">should now be supported</a> out of the box, but this driver is still immature. If you have one of these cards, and it isn't working well, install the above driver, and blacklist the kernel module .<br /><br />  -->

<div class="heading2">16.3 更老的 Broadcom 芯片</div>
如果您的是更老的 Broadcom 芯片，<a href="http://linuxwireless.org/en/users/Drivers/b43#Supported_chip_types" target="_blank">是开源的逆向工程 b43 驱动支持的</a>，如： <b>bcm4303, bcm4306, bcm4309, bcm4311, bcm4318</b>，您只需安装固件（firmware）。
这可以通过简单运行如下命令来自动安装，之后重启系统：（确保软件包 b43-fwcutter 安装好，并且运行该命令时您 <i>必须</i> 保持联网状态，如有线网连上互联网）
<div class="clroot">install_bcm43xx_firmware</div><br />


<div class="heading2">16.4 Atheros 芯片</div>
Atheros 和 Linux内核 开发人员合作，通过 <a href="http://linuxwireless.org/en/users/Drivers/ath5k#supported_chips" target="_blank">ath5k</a> 和 <a href="http://linuxwireless.org/en/users/Drivers/ath9k#supported_chipsets" target="_blank">ath9k</a> 驱动，在主流 Linux内核 中对其所有无线网卡芯片提供支持。所以绝大多数 Atheros 网卡能直接正常工作。
<br /><br />


<div class="heading2">16.5 Intel 芯片</div>
Intel 和 Linux内核 开发人员合作非常好，所有 Intel 无线网卡芯片能直接正常工作。
<br /><br />


<div class="heading2">16.6 其他芯片</div>
如果您的芯片厂商以上均未提及，搜索网页 <i>opensuse [您的芯片型号]</i> ，您很可能找到如何让该芯片工作的信息。
<br /><br />
其他建议：有些厂商懒得提供Linux驱动，可以通过 <b>ndiswrapper</b> 项目获得无线网卡驱动支持。ndiswrapper 与 ntfs-3g 类似，在 Linux 下通过加载给Windows系统开发的网卡驱动，来使无线网卡工作：<br />
<a href="https://sourceforge.net/projects/ndiswrapper/" target="_blank">
ndiswrapper主页
</a><br />
<a href="http://en.opensuse.org/SDB:Ndiswrapper" target="_blank">
openSUSE官方的 Ndiswrapper 安装和使用说明书
</a><br />
ndiswrapper安装示例：<br />
<a href="http://os.51cto.com/art/201006/205048.htm" target="_blank">
openSUSE 无线网卡安装的具体实现
</a><br />
<a href="http://cn.opensuse.org/%E6%97%A0%E7%BA%BF%E7%BD%91%E5%8D%A1%E5%AE%89%E8%A3%85" target="_blank">
OpenSUSE 无线网卡安装
</a>
<br /><br />

华为数据卡(3G上网卡)驱动及其安装参考：<br/>
<a href="http://wenzhang.baidu.com/page/view?key=c5890dc0b8fd2b69-1427034931" target="_blank">华为ET302/ET302s在Linux下连网——原生简单的方法
</a>
<br /><br />



<div class="heading2">16.7 连接无线局域网（WiFi连接和WiFi共享）</div>
配置好驱动以后，就可以使用网络管理器连接到无线网。
连接无线网和配置Ad Hoc网的逐步图文教程可以参考：<br />
<a href="http://wenzhang.baidu.com/page/view?key=cf1a6d550778ba6f-1426982496" target="_blank">
openSUSE Linux连接无线局域网
</a>
<br />
<a href="http://forum.suse.org.cn/viewtopic.php?f=5&t=408" target="_blank">
openSUSE新建配置AdHoc无线局域网
</a>
<br />
建议用 Firefox 浏览器打开网页链接，有些网页链接 Chrome 不支持。
<br /><br />



<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="3d.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="develop.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
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
 
