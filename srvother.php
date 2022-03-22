<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" lang="zh" >

<!-- <!DOCTYPE html>
<html> -->




<head>

<title>20. Linux其他常见服务器部署 - 安装和配置其他常见服务器软件，如FTP/SSH/DNS/VNC Server/Mail Server等</title>

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

<div align="center" class="content-title">openSUSE 12.3 coming soon:</div><br />

<center><a href="http://en.opensuse.org/Portal:12.3"><img src="http://counter.opensuse.org/12.3/small" border="0" alt="countdown" /></a></center><br />
-->

</div>
 
 


<div class="heading1">20. Linux其他常见服务器部署</div>
除了著名的LAMP和LNMP平台，在Linux上还可以搭建很多其他的常见服务器。
本章简单介绍在openSUSE上搭建如FTP、SSH、DNS、VNC Server、Mail Server等服务器。
<br /><br />

<div class="heading2">20.1 FTP服务器</div>
FTP（File Transfer Protocol）就是文件传输协议，在互联网上和局域网上都是经常用到的文件分享服务。
FTP使用TCP 20和21端口，21用于传输控制命令，20端口传输实际的大量数据。
<br />
Linux下流行的FTP服务器软件主要是vsftpd、pure-ftpd、tftp、proftpd。
Yast有配置FTP服务器的模块，yast2-ftp-server是配置 pure-ftpd 和 vsftpd 的模块，
yast2-tftp-server是配置TFTP服务的模块。 proftpd软件文件是这几个里面最大的。
功能也必须是很强大的。Yast没有管理proftpd模块，但proftpd有第三方的Web图形界面来操作：<br />
<a href="http://www.debianhelp.co.uk/proftpweb.htm" target="_blank">
http://www.debianhelp.co.uk/proftpweb.htm
</a><br />
这里以vsftpd安装配置为例，搭建一个FTP服务器，其他的FTP软件安装配置也类似的。<br /><br />
（1）安装vsftpd软件<br />
执行命令：<br />
<div class="clroot">
zypper   in   vsftpd
</div><br />
（2）安装Yast配置模块<br />
执行命令：<br />
<div class="clroot">
zypper   in   yast2-ftp-server
</div><br />
然后就可以打开：Yast----》网络服务----》FTP服务器，进行配置。<br />
<center><a href="picsrv/ftp01.png" rel="thumbnail"><img src="picsrv/ftp01s.png" alt="ftp01" class="pic" /></a></center><br />

上面“启动”配置意思很明了，“启动服务”选择“引导时”，
然后点击“立即启动FTP”就能开启FTP服务了。
默认匿名用户就能查看的根目录是 /srv/ftp/  。<br />
openSUSE系统用户默认能登录到自己的主文件夹，
比如suse123用户会登录到/home/suse123/ 。
<br /><br />

在该配置界面的“常规”配置里，可以设置匿名用户的ftp根目录和认证用户的根目录，
配置比较简单，不赘述了。
默认都是只读的，开启登录用户的写权限是用root权限编辑 /etc/vsftpd.conf 文件，找到
write_enable=NO    改成   write_enable=YES

<br /><br />
（3）开放防火墙端口<br />
打开Yast----》安全和用户----》防火墙。<br />
左边点击“允许的服务”，添加“vsftpd服务器”到允许的服务即可。
这样简易的FTP服务器就能用了。

<br /><br />
附上FTP服务器配置参考文档：<br />
<a href="https://doc.opensuse.org/documentation/leap/reference/html/book-reference/cha-ftp.html">
https://doc.opensuse.org/documentation/leap/reference/html/book-reference/cha-ftp.html
</a>
<br /><br />
<div class="heading2">20.2 SSH服务器</div>
SSH是Secure Shell（缩写为SSH），由IETF的网络工作小组（Network Working Group）所制定；SSH为一项创建在应用层和传输层基础上的安全协议，为计算机上的Shell（壳层）提供安全的传输和使用环境。通过命令行远程登录管理计算机通常都使用SSH服务。SSH服务器默认使用TCP 22 端口监听。
openSUSE默认安装了openssh，包括SSH服务器和客户端都有。Yast有一个配置SSH的模块yast2-sshd ，可以自己装着试试，但不是必要的。
<br /><br />

（1）在本地开启SSH 服务器命令：<br />
<div class="clroot">
systemctl   enable  sshd.service
</div>
<div class="clroot">
systemctl   start   sshd.service
</div><br />

（2）开放防火墙端口<br />
打开Yast----》安全和用户----》防火墙。<br />
左边点击“允许的服务”，添加“安全壳层服务器”到允许的服务即可。
<br /><br />
（3）客户端登录测试<br />
Linux下执行：<br />
<div class="cl">
ssh     服务器IP地址
</div><br />
Windows下可以用putty登录。<br />
<center><a href="picsrv/ssh01.png" rel="thumbnail"><img src="picsrv/ssh01s.png" alt="ssh01" class="pic" /></a></center><br />

<br />

<div class="heading2">20.3 DNS服务器</div>
DNS是Domain Name System缩写，即域名解析系统。
互联网上计算机都是以IP地址作为自身标识的，但是人总不能去记一堆数字的IP来找服务，
尤其是IPv6时代，就更难记IP了。所以域名系统就是为了将对人来说比较好记住的名字，
如 www.opensuse.org解析成服务器IP地址，如130.57.66.6 。
<br /><br />

如果在本地局域网自己搭建DNS服务器测试，或者给公司各个对外服务器主机配置域名，
那就需要自己来配置DNS服务器了。下面以局域网为例子搭建DNS服务器。
Linux下的DNS服务器软件当然首推BIND了，还有其他的如PowerDNS。
Yast也有DNS服务器配置模块。
<br /><br />

（1）BIND和Yast配置模块安装<br />
<div class="clroot">
zypper  in    bind   yast2-dns-server
</div><br />

（2）使用Yast初次配置DNS服务器<br />
打开Yast----》网络服务----》DNS服务器，首先看到：<br />
<center><a href="picsrv/dns01.png" rel="thumbnail"><img src="picsrv/dns01s.png" alt="dns01" class="pic" /></a></center><br />

转发对象的意思是，自己解析不了的域名解析请求转发给谁，去请求外面别的服务器解析。
通常就设置自己本省市或上级的DNS服务器地址。
可以找本地联通电信服务商询问他们的DNS。
<br />

这里以202.38.64.1为例子添加，当然还可以添加多个转发DNS服务器。
添加了转发服务器之后，点击“下一步”。<br />
<center><a href="picsrv/dns02.png" rel="thumbnail"><img src="picsrv/dns02s.png" alt="dns02" class="pic" /></a></center><br />

如上图界面添加新的域名解析域 iloveliuqing.cn 。进入下一步，<br />
<center><a href="picsrv/dns03.png" rel="thumbnail"><img src="picsrv/dns03s.png" alt="dns03" class="pic" /></a></center><br />

将启动行为设置成“打开：立即启动和在引导时”，点击“完成”。<br />
“完成”这步要求/etc/resolv.conf 文件之前没修改过。如果报错提示“You have modified /etc/resolv.conf”，
那么将/etc/resolv.conf 改名，
并把/etc/resolv.conf.netconfig复制成新的/etc/resolv.conf 。
比如执行：<br />
<div class="clroot">
mv   /etc/resolv.conf   /etc/resolv.conf.old 
</div>
<div class="clroot">
cp    /etc/resolv.conf.netconfig    /etc/resolv.conf
</div><br />
这样就不会出错了。<br /><br />

（3）配置实际的DNS解析<br />
再次启动Yast的DNS域名服务器配置。这次界面就成正式的配置界面了。
前面输入了如   iloveliuqing.cn  的主域名（这个是我们自己需要解析的主域名），
但是没输入IP，显然没有配置完成。<br /><br />

①进入Yast的DNS服务器管理主对话框，
左边选“<b>DNS区域</b>”，右边在已配置的DNS区域内选“<b> iloveliuqing.cn </b>”，
再点击“编辑”，进入如下区域编辑器：<br />
<center><a href="picsrv/dns04.png" rel="thumbnail"><img src="picsrv/dns04s.png" alt="dns04" class="pic" /></a></center><br />

②先选上面的“NS记录”，<br />
<center><a href="picsrv/dns05.png" rel="thumbnail"><img src="picsrv/dns05s.png" alt="dns05" class="pic" /></a></center><br />

在要添加的名称服务器里输入: <br />
<b>localhost. </b><br />
点击“添加”。localhost后面要接一个点号，否则会被追加成localhost.iloveliuqing.cn，就不是本机了。<br /><br />

③在选上面的“记录”，进入解析记录页面：<br />
<center><a href="picsrv/dns06.png" rel="thumbnail"><img src="picsrv/dns06s.png" alt="dns06" class="pic" /></a></center><br />

一般“类型”选 “A: IPv4域名转换”，记录键有两种写法，<br />
相对域名写法：<br />
<b>www </b><br />
不加点号，最后会自动解析成  www.iloveliuqing.cn 。<br />
绝对域名写法：<br />
<b>iloveliuqing.cn. </b><br />
末尾加点号，会被直接解析成 iloveliuqing.cn 。<br />
右边的值这里是www服务器IP地址，如192.168.0.254 <br />
设置好 记录键、类型、值三个之后，点击“添加”。<br />
添加了自己需要解析的域名之后点击下面的“确定”。
<br /><br />

④然后会回到DNS服务器配置主界面，选左边的“启动”，<br />
再点击“保存配置并立即重新装载DNS服务器”。<br />
完成后就可以查看自己刚才配的域名：<br />

<div class="code">
suse123@linux-9ppl:~&gt; nslookup  iloveliuqing.cn<br />
Server:&nbsp;         127.0.0.1<br />
Address:        127.0.0.1#53<br />
Name:   iloveliuqing.cn<br />
Address: 192.168.0.254<br />
suse123@linux-9ppl:~&gt; nslookup  www.iloveliuqing.cn<br />
Server:&nbsp;         127.0.0.1<br />
Address:        127.0.0.1#53<br />
Name:   www.iloveliuqing.cn<br />
Address: 192.168.0.254<br />
</div><br />

（4）配置域名反向解析服务（邮件服务器必备）<br />
有了前面的正向解析，把域名解成IP，反向解析就是IP解析成域名。
注意一个IP可以有多个域名的。反向查询结果可能有差异的。
针对前面的 iloveliuqing.cn 主域名，主要管理的是 192.168.0.0/24 子网的服务器主机。下面配置反向解析。<br /><br />

①打开Yast的DNS服务器管理模块，选左边的“DNS区域”，
名称里输入:<br />
<b>
0.168.192.in-addr.arpa<br />
</b>
再点击添加。IP段本来是 192.168.0，倒过来，再加上  .in-addr.arpa  结尾，
就是反向解析的记录。<br />
<center><a href="picsrv/dns08.png" rel="thumbnail"><img src="picsrv/dns08s.png" alt="dns08" class="pic" /></a></center><br />

②选中该反向解析记录，点击编辑，首先编辑“NS记录页面”：<br />
<center><a href="picsrv/dns09.png" rel="thumbnail"><img src="picsrv/dns09s.png" alt="dns09" class="pic" /></a></center><br />

添加一个名称服务器：<br />
<b>
localhost.
</b><br />
要以点号结尾，表示添加本机为解析服务器。
<br /><br />

③再选上图界面的“记录”，进入解析记录页面：<br />
<center><a href="picsrv/dns10.png" rel="thumbnail"><img src="picsrv/dns10s.png" alt="dns10" class="pic" /></a></center><br />
类似的，相对域名不加点号结尾，绝对域名以点号结尾。<br />
<b>
记录键： 254<br />
类型： PTR: 反向转换<br />
值：www.iloveliuqing.cn.<br />
</b>
添加该记录，就代表将 IP: 192.168.0.254 反向解析成 www.iloveliuqing.cn 。
<br /><br />

④然后会回到DNS服务器配置主界面，选左边的“启动”，<br />
再点击“保存配置并立即重新装载DNS服务器”。<br />
测试反向解析：<br />
<div class="code">
suse123@linux-9ppl:~&gt; nslookup  192.168.0.254<br />
Server:&nbsp;         127.0.0.1<br />
Address:        127.0.0.1#53<br />
254.0.168.192.in-addr.arpa&nbsp;&nbsp;  name = www.iloveliuqing.cn.<br />
</div><br />

（5）开启防火墙端口<br />
打开Yast----》安全和用户----》防火墙。<br />
左边点击“允许的服务”，添加“bind DNS server”到允许的服务即可。
<br /><br />

最后在局域网里就可以把其他机器的DNS地址改成这个DNS服务器的IP，那么其他机器就可以使用我们自己配置的DNS服务器了。<br />
附上DNS服务器配置参考文档：<br />
<a href="https://doc.opensuse.org/documentation/leap/reference/html/book-reference/cha-dns.html" target="_blank">
https://doc.opensuse.org/documentation/leap/reference/html/book-reference/cha-dns.html
</a><br />

<br /><br />

<div class="heading2">20.4 VNC服务器</div>
依据百度百科介绍，VNC (Virtual Network Computing)是虚拟网络计算机的缩写。VNC 是一款优秀的远程控制工具软件，由著名的 AT&T 的欧洲研究实验室开发的。VNC 是在基于 UNIX 和 Linux 操作系统的免费的开源软件，远程控制能力强大，高效实用，其性能可以和 Windows 和 MAC 中的任何远程控制软件媲美。openSUSE默认装了tightvnc（13.2用的是其衍生版 tigervnc）软件，里面包含了服务器和客户端，要用的都有。<br /><br />

（1）启动vncserver服务（普通用户权限即可，不要用root）<br />
<div class="cl">
vncserver  -geometry  1024x768  -depth 16
</div><br />
这就是以分辨率1024x768,色深16位启动VNC服务器。<br />
初次运行vncserver的时候需要配置一个完全访问权限的密码和一个只读权限的密码，都设置得复杂点好。
<br /><br />

（2）开启防火墙端口<br />
打开Yast----》安全和用户----》防火墙。<br />
左边点击“允许的服务”，把VNC开头的三个服务添加到允许的服务即可。
<br /><br />

（3）客户端连接<br />
可以用Linux或Windows下vncviewer连接 <br />
<div class="cl">
vncviewer     服务器IP:1
</div><br />
例如<br />

<center><img src="picsrv/vnc01.png" alt="vnc01" class="pic" /></center><br />

连接时要输入刚才设置的密码，密码正确后就可以连上：<br />
<center><img src="picsrv/vnc02.png" alt="vnc02" class="pic" /></center><br />

VNC服务器默认启动xterm和twm窗口管理器，如上图。可以修改<br />
$HOME/.vnc/xstartup<br />
即主文件夹下的vnc配置文件，把twm打头的行换成下面之一：<br />
/usr/bin/gnome     # 默认启动GNOME桌面<br />
/usr/bin/startkde  # 默认启动KDE桌面<br />
<br />

（4）关闭vncserver<br />
因为vnc服务器启动后，远程可以完全以启动vncserver的用户身份远程操作，
所以vncserver不能一直开着，这是危险的事。<br />
用完了一定要关：<br />
<div class="cl">
vncserver   -kill   :1
</div><br />
如果前面重复执行了<br />
vncserver  -geometry  1024x768  -depth 16<br />
那么会有多个vncserver服务进程，<br />
必须逐一关掉：<br />
vncserver   -kill   :1<br />
vncserver   -kill   :2<br />
vncserver   -kill   :3<br />
……<br />
<br />
附上VNC服务器配置参考：<br />
<a href="https://doc.opensuse.org/documentation/leap/reference/html/book-reference/cha-vnc.html" target="_blank">
https://doc.opensuse.org/documentation/leap/reference/html/book-reference/cha-vnc.html
</a>
<br /><br />

<div class="heading2">20.5 Mail服务器</div>
<div class="heading3">20.5.1 Mail服务器简介</div>
电子邮件相信是无人不知无人不晓的。但Mail服务器的搭建较为麻烦。
介绍几个电子邮件服务器必备的东西 ：<br /><br />
（1）SMTP协议（发信）<br />
SMTP(Simple Mail Transfer Protocol)：即简单邮件传输协议。它是一组用于从源地址到目的地址传输邮件的规范，通过它来控制邮件的中转方式。 这是邮件服务器必须支持的。<br />
MTA即Mail Transfer Agent，邮件传输代理，用于在各个邮件服务器间转发邮件，遵循SMTP和ESMTP协议。常见的MTA软件有：sendmail、postfix 、 exim 、courier、xmail。<br />
MTA通常集成MDA（Mail Delivery Agent），MDA主要是分析由 MTA 所收到的信件表头或內容等资料， 來決定这份邮件的去向，是自己服务器的就存到自家邮箱里，不是自己的就发出去。<br /><br />
（2）POP3和IMAP协议（用户收信）<br />
POP3(Post Office Protocol 3)：邮局协议的第3个版本,它规定怎样将个人计算机连接到Internet的邮件服务器和下载电子邮件的电子协议。POP3允许用户从服务器上把邮件存储到本地主机（即自己的计算机）上,同时删除保存在邮件服务器上的邮件。IMAP(Internet Mail Access Protocol)：即交互式邮件存取协议，它是跟POP3类似邮件访问标准协议之一。不同的是，开启了IMAP后，您在电子邮件客户端收取的邮件仍然保留在服务器上，同时在客户端上的操作都会反馈到服务器上，如：删除邮件，标记已读等，服务器上的邮件也会做相应的动作。邮件服务器至少得支持POP3和IMAP中的一个或全部支持。
<br />
MRA 即Mail Retrieval Agent，邮件收取代理，使得客户可以利用POP3或IMAP协议从服务器收取邮件，并进行相关邮件操作。常用MRA 软件有dovecot、UW IMAP、 courier、xmail。
<br />
还有个概念，MUA（Mail User Agent ），邮件用户代理，就是客户端收发邮件的软件，比如Windows的Outlook，跨平台的Thunderbird等。<br /><br />
（3）Web邮件界面
相信这是大家接触最多的，Web界面的操作最直观，也不需要配置，直接用浏览器访问即可。
<br /><br />

<div class="heading3">20.5.2 简单邮件服务器搭建流程</div>
最简单的邮件服务器搭建流程是：<br />
首先进行Postfix安装配置，启动SMTP协议的服务器。<br />
其次是进行Dovecot安装配置，启动POP3和IMAP协议的服务。<br />
再次是Web邮件服务界面的安装配置，需要LAMP或LNMP平台，常见的Web邮件服务界面如 Extmail，Squirrelmail，OpenWebmail，SqWebMail，Igenus ，Horde WebMail，RoundCube 等。<br />
具体的搭建和测试过程见pdf文档：<br />
<a href="./20.PostfixSimple.pdf" target="_blank">
Postfix+Dovecot+ SquireMail配置简单邮件服务器（openSUSE）
</a>
<br /><br />

<div class="heading3">20.5.3 稍复杂的邮件服务器搭建</div>
上一小节的认证方式比较简单，只是用本地系统的真实用户作为邮件帐户的，如果要用邮箱的人多，这种方式就得新建许多系统真实用户，显然比较麻烦。真实的邮箱通常除了真实系统用户，还能支持虚拟用户的，这些虚拟用户只用于邮箱帐户，虚拟帐户的用户名和密码通常存在数据库里。这里仿照网上的教程，写了一个openSUSE版本搭建方法，使用 Postfix+Dovecot+MariaDB+PostfixAdmin+Roundcube 
搭建一个支持虚拟用户的服务器。见pdf文档：<br />
<a href="./20.PostfixNormal.pdf" target="_blank">
Postfix+Dovecot+MariaDB+PostfixAdmin+Roundcube搭建邮件服务器（openSUSE）
</a>
<br /><br />

<div class="heading3">20.5.4 较完善的邮件服务器搭建</div>
除了用MySQL/MariaDB、Postgre等数据库存储虚拟邮箱帐户，还有使用OpenLDAP存储邮箱帐户的方法，这也是Yast邮箱服务器高级配置模式使用的，安装参考：<br />
<a href="http://www.novell.com/coolsolutions/feature/16264.html" target="_blank">
http://www.novell.com/coolsolutions/feature/16264.html 
</a><br /><br />

让邮件系统支持虚拟用户注册登录，只是搭建邮件服务器的开始而已。实用的邮件服务器还有更多的东西需要安装配置，比如SSL/TLS安全登录、反垃圾邮件、反病毒等。这些太复杂了，给出链接，喜欢折腾的去试试吧：<br />
TLS/SSL + Anti-spam<br />
<a href="https://johnny.chadda.se/mail-server-howto-postfix-and-dovecot-with-mysql-and-tlsssl-postgrey-and-dspam/" target="_blank">
https://johnny.chadda.se/mail-server-howto-postfix-and-dovecot-with-mysql-and-tlsssl-postgrey-and-dspam/ 
</a><br />
<a href="http://wiki.dovecot.org/HowTo/DovecotLDAPostfixAdminMySQL?action=show&redirect=DovecotLDAPostfixAdminMySQL" target="_blank">
http://wiki.dovecot.org/HowTo/DovecotLDAPostfixAdminMySQL?action=show&amp;redirect=DovecotLDAPostfixAdminMySQL 
</a><br />
TLS/SSL + AntiSPAM + AntiVirus<br />
<a href="http://serion.co.nz/howto/howto-setup-mailserver-using-postfix-mysql-dovecot-postfixadmin-amavis-new" target="_blank">
http://serion.co.nz/howto/howto-setup-mailserver-using-postfix-mysql-dovecot-postfixadmin-amavis-new 
</a><br /><br />

<div class="heading3">20.5.5 邮件服务器安装配置神器iRedMail</div>
正是由于邮件服务器复杂，所以有一个专门的邮件服务器自动安装配置脚本，叫iRedMail。iRedMail就是搭建邮件服务器的速成班，进行最简单的配置就能生成较为完善的邮件服务器。iRedMail支持很多系统安装，比如：Redhat/CentOS, Debian, Ubuntu, Gentoo,  FreeBSD等。
iRedMail涉及安装配置的软件也很丰富，使用的主要软件包括：Postfix, Dovecot, Apache, MySQL, OpenLDAP, Policyd, Amavisd, Roundcude, Awstats, Fail2ban等。iRedMail特性很丰富，但是其安装配置却是最简单的。
<br /><br />
注：由于openSUSE自带的Yast工具总是自动修改邮件服务器的配置文件，而Yast配置得却又不完善，
和iRedMail脚本格格不入，iRedMail作者生气不再支持openSUSE配置邮件服务器，不过其他Linux上还是可以很好使用的。
<br /><br />
iRedMail官网：<br />
<a href="http://www.iredmail.org/" target="_blank">
http://www.iredmail.org/ 
</a><br />
在Ubuntu下的介绍见：<br />
<a href="http://wiki.ubuntu.org.cn/IRedMail" target="_blank">
http://wiki.ubuntu.org.cn/IRedMail 
</a><br />

<br /><br />

<div class="heading2">20.6 其他类型服务器配置参考</div>
这里搜集一些其他类型服务器的配置参考，方便查看：<br />
DHCP服务器：<br />
<a href="https://doc.opensuse.org/documentation/leap/reference/html/book-reference/cha-dhcp.html" target="_blank">
https://doc.opensuse.org/documentation/leap/reference/html/book-reference/cha-dhcp.html
</a><br />

NFS服务器：<br />
<a href="https://doc.opensuse.org/documentation/leap/reference/html/book-reference/cha-nfs.html" target="_blank">
https://doc.opensuse.org/documentation/leap/reference/html/book-reference/cha-nfs.html
</a><br />

SVN服务器：<br />
<a href="http://blog.csdn.net/sonach/article/details/6975672 " target="_blank">
http://blog.csdn.net/sonach/article/details/6975672 
</a><br />
<a href="http://songxj.blog.51cto.com/620981/396113 " target="_blank">
http://songxj.blog.51cto.com/620981/396113 
</a><br />

Git服务器：<br />
<a href="http://www.open-open.com/lib/list/282" target="_blank">
http://www.open-open.com/lib/list/282
</a><br />
<a href="http://www.linuxidc.com/Linux/2012-04/58308.htm" target="_blank">
http://www.linuxidc.com/Linux/2012-04/58308.htm
</a><br />

HTTP文件分享服务：类似HTTP File Server<br />
<a href="http://wenku.baidu.com/view/5a6a79eb102de2bd96058863.html" target="_blank">
http://wenku.baidu.com/view/5a6a79eb102de2bd96058863.html
</a><br />
<a href="http://blog.chinaunix.net/uid-21868571-id-158930.html" target="_blank">
http://blog.chinaunix.net/uid-21868571-id-158930.html
</a><br />
<a href="https://luy.li/2010/05/15/simplehttpserverwithupload/" target="_blank">
https://luy.li/2010/05/15/simplehttpserverwithupload/
</a><br />

OpenStack安装体验：<br />
<a href="archives/Install-Openstack-SLE11SP2-r7.pdf" target="_blank">
安装openstack到SLE11SP2
</a><br />
<a href="http://en.opensuse.org/Portal:OpenStack " target="_blank">
http://en.opensuse.org/Portal:OpenStack 
</a><br />
<a href="http://en.opensuse.org/SDB:Cloud_OpenStack_Quickstart " target="_blank">
http://en.opensuse.org/SDB:Cloud_OpenStack_Quickstart 
</a><br />
<br />

最后给几个神奇的链接：<br />
服务器世界：<br />
<a href="http://www.server-world.info/en/ " target="_blank">
http://www.server-world.info/en/ 
</a><br />

鸟哥私房菜：<br />
<a href="http://linux.vbird.org/ " target="_blank">
http://linux.vbird.org/ 
</a><br />

openSUSE 最新官方文档：<br />
<a href="http://activedoc.opensuse.org/book " target="_blank">
http://activedoc.opensuse.org/book 
</a><br />

opensuse中文文档计划 ：<br />
<a href="http://forums.opensuse.org/aeae-chinese/aesaeoeeeaezaeaeoe/acaezaeaeoe/461804-opensuseaeaeaeaeea.html " target="_blank">
http://forums.opensuse.org/aeae-chinese/aesaeoeeeaezaeaeoe/acaezaeaeoe/461804-opensuseaeaeaeaeea.html 
</a><br />
openSUSE12.2官方文档第一册（中文译本） <br />
<a href="http://forums.opensuse.org/aeae-chinese/aesaeoeeeaezaeaeoe/acaezaeaeoe/480276-opensuse12-2aaeaeaecaeaoeiaeaeeaeoei.html " target="_blank">
http://forums.opensuse.org/aeae-chinese/aesaeoeeeaezaeaeoe/acaezaeaeoe/480276-opensuse12-2aaeaeaecaeaoeiaeaeeaeoei.html 
</a><br />

<br /><br />


<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="srvlamp.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="help.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
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
 
