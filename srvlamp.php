<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" lang="zh" >

<!-- <!DOCTYPE html>
<html> -->




<head>

<title>19. LAMP和LNMP服务器部署 - 安装和配置LAMP(Linux+Apache+ MySQL/MariaDB +Php/Python/Perl)/LNMP(Linux+Nginx+ MySQL/MariaDB +Php/Python/Perl)</title>

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
 
 


<div class="os1">19. LAMP和LNMP服务器部署</div>
本章简单介绍一些常见服务器软件的安装和配置，
如LAMP(Linux+Apache+MariaDB+Php)套件安装和phpwind论坛搭建，
nginx也很流行，所以也弄了一个LNMP(Linux+Nginx+MariaDB+Php)套件和Discuz!论坛，MySQL/MariaDB的Web管理界面 phpMyAdmin 见19.3.3小节。
这两个案例里面有HTTP和数据库的服务软件，
后面20章介绍了其他常见的FTP、SSH、DNS、VNC Server、Mail服务器等。
<br /><br />


<div class="os2">19.1 MySQL/MariaDB</div>
MySQL是流行的跨平台的数据库管理系统，经常和Php、Apache/nginx组成网页服务平台。
MySQL公司先被Sun收购，Sun又被Oracle收购，给开源社区带来的打击不小。
因为Oracle自己是做数据库起家，不可能对这个开源竞争对手有好处，
MySQL闭源的声音越来越多。MySQL作者Michael Widenius自己创办了新公司Monty Program AB，
在MySQL基础上新创了MariaDB开源数据库。MariaDB带来更好的数据库管理特性，
更好的自由开源保障。所以openSUSE 12.3版本发布时抛弃了MySQL，
集成了新的MariaDB。MariaDB使用方式和MySQL差不多
（两个数据库包含的一堆文件名是一样的，所以不要同时装），
但性能更好。所以这里只介绍MariaDB安装配置了。<br /><br />

MariaDB的服务器端软件包叫mariadb，客户端叫mariadb-client，
还有个MariaDB的管理工具集叫mariadb-tools。
openSUSE默认装了前两个，建议把三个都装上。<br />
<div class="clroot">
zypper  in   mariadb-tools  mariadb  mariadb-client
</div><br />

装上文件之后需要初次配置。下面的安装配置都是以root命令行执行：
<br /><br />
（1）启动MariaDB数据库服务<br />
<div class="clroot">
systemctl  enable  mysql.service
</div>
<div class="clroot">
systemctl  start  mysql.service
</div><br />

（2）设置数据库root密码：<br />
<div class="clroot">
mysqladmin  -u  root  password  数据库根密码
</div><br />

（3）进入数据库后台：<br />
<div class="clroot">
mysql  -u  root  -p  -h  localhost
</div><br />
输入数据库根密码后就进入数据库控制台了，可以执行sql命令：<br />
<center><a href="picsrv/mariadb01.png" rel="thumbnail"><img src="picsrv/mariadb01s.png" alt="mariadb01" class="pic" /></a></center><br />

（4）设置新的普通用户名<br />
上面登录到数据库管理控制台后，执行：<br />
<div class="clroot">
CREATE  USER  '普通用户名'@'%'  IDENTIFIED  BY  '普通用户密码';
</div>
<div class="clroot">
GRANT  ALL  PRIVILEGES  ON *.*  TO  '普通用户名'@'%';
</div><br />
将上面普通用户名、普通用户密码替换成自己喜欢好的账户和密码，比如<br />
CREATE  USER  'susedb'@'%'  IDENTIFIED  BY  'opensuse123';<br />
GRANT  ALL  PRIVILEGES  ON *.*  TO  'susedb'@'%';<br />
以后就尽量用新的如susedb帐户登录使用数据库。<br /><br />

（5）运行安全配置<br />
执行命令：<br />
<div class="clroot">
mysql_secure_installation
</div><br />
在命令行根据提示输入：<br />
<div class="code">
显示Enter current password for root (enter for none): <br />
输入数据库根密码<br /><br />

显示Change the root password? [Y/n] ： n            <br />（已有密码，不需要重新设）<br /><br />

下面的全选Y，去除数据库不安全的默认设置：<br />
Remove anonymous users? [Y/n]  Y<br />
Disallow root login remotely? [Y/n]  Y<br />
Remove test database and access to it? [Y/n]  Y<br />
Reload privilege tables now? [Y/n]  Y<br />
</div><br />

这样一些默认不安全的设置就被去除了。由于数据库root不能远程登录，
所以需要一个新的普通帐户如susedb。<br /><br />

（6）开放防火墙端口<br />
如果需要远程登录数据库，那么需要把openSUSE默认的防火墙端口打开。如果只在数据库本机管理，就不需要开防火墙端口。<br /><br />

打开Yast----》安全和用户----》防火墙。<br />
在设置窗口，左边选“允许的服务”，右边区域用默认的“外部区域”，<br />
要允许的服务选“MySQL server”，点击“添加”，
然后点“下一步”，完成配置即可。<br />
<center><a href="picsrv/mariadb02.png" rel="thumbnail"><img src="picsrv/mariadb02s.png" alt="mariadb02" class="pic" /></a></center><br />

远程登录数据库就可以执行：<br />
<div class="cl">
mysql   -u  susedb   -p   -h  数据库服务器IP
</div><br />
Windows下MySQL客户端也可以使用用户名、密码、数据库服务器IP登录openSUSE上的数据库服务器进行操作。
<br /><br />

<div class="os2">19.2 PHP</div>
PHP，是英文超文本预处理语言Hypertext Preprocessor的缩写。
简单地说，php就是用来建设网站必不可少的计算机语言。
我们平时在上网时看到的网站大部站是用php制作的。
比如：新浪、百度、腾讯、网站公司的网站都是用php开发的。
php是一门简单易学的语言，
只要有初中以上学历的人都可以快速学习并掌握建站技术。
<br /><br />
PHP除了核心模块，还有无数的扩展模块。比如php5-mysql是包含连接MySQL数据库函数的模块，php5-ftp是访问FTP服务器的模块，php5-gd是创建管理png、jpg、gif等各种图片的模块，php5-zip、php5-zlib、php5-bz2是访问压缩包的函数模块，
php5-pear用于管理PHP扩展和程序的集合，在Yast软件管理里面搜索php，可以看到茫茫多php5-pear打头的扩展模块。<br />
apache2-mod_php5是用于和Apache搭建网页服务器的模块。<br /><br />

安装php5和常用模块执行：<br />
<div class="clroot">
zypper  in  php5  php5-bz2  php5-gd  php5-mbstring  php5-mcrypt  php5-mysql  php5-zip  php5-zlib  pwgen  php5-gettext  php5-pear  php5-suhosin
</div><br />
查看php和pear内置帮助，执行<br />
<div class="cl">
php  -h
</div>
<div class="cl">
pear  help
</div><br />

比如用户主文件夹里的hello.php文件内容：<br />
<div class="code">
&lt;?php<br />
   echo "Hello world! \n";    //输出Helo world<br />
?&gt;<br />
</div><br />
解析执行hello.php：<br />
<div class="cl">
php  -f  hello.php
</div>
<br /><br />


<div class="os2">19.3 Apache与LAMP</div>
Apache是最流行的Web服务器软件之一，当然也是开源跨平台的。Apache发展了很多年，现在非常强大，拥有大量的扩展模块，支持各种Web服务特性，可以做服务器集群、负载均衡。<br /><br />
LAMP是一个流行的Web建站平台：Linux+Apache+MySQL/MariaDB+Php/Python/Perl 。<br />
LNMP也是类似的流行Web建站平台： Linux+Nginx+MySQL/MariaDB+Php/Python/Perl。<br /><br />

如果要架设LNMP平台，19.3节Apache的东西不要装，免得冲突，直接去看19.4节。
这里先简单示范一个LAMP + phpWind论坛搭建。
<br /><br />

<div class="os3">19.3.1 Apache安装配置</div>
现在openSUSE Linux、MariaDB、Php都装上了，就剩Apache了。<br /><br />
（1）执行安装<br />
<div class="clroot">
zypper  in  apache2  apache2-mod_php5  apache2-doc  yast2-http-server
</div><br />
如果要使用Python和Perl来做网页开发，
对应Apache扩展模块是apache2-mod_python和apache2-mod_perl 。
对于Servlet/JSP动态网页是通过tomcat软件支持的。
由于这里是搭建Php网站，所以不需要这些额外模块。
装php5模块和apache本身就行了。<br /><br />

（2）装好后启动Apache服务<br />
<div class="clroot">
systemctl  enable  apache2.service
</div>
<div class="clroot">
systemctl  start  apache2.service
</div><br />

（3）开启防火墙80端口<br />
Web服务器当然得开服务端口了。与前面类似的，打开 <br />
Yast----》安全和用户----》防火墙。<br />
左边“选允许的服务”，右边添加“HTTP Server”，
如果用得到HTTPS服务，就把“HTTPS Server”一块添加开放。
<br /><br />

（4）Yast图形界面管理<br />
Yast还有专门的管理Apache服务器的模块，前面安装了。打开<br />
Yast----》网络服务----》HTTP服务器。<br />
就可以从图形界面操控Web服务器。配置比较简单，初次配置一直点下一步就行，
也可以编辑一下站点名字和管理员邮箱：<br />
<center><a href="picsrv/apache01.png" rel="thumbnail"><img src="picsrv/apache01s.png" alt="apache" class="pic" /></a></center><br />

以后就都可以用这个Yast的“HTTP服务器”配置来管理服务器。<br />
HTTP网页文档根就是/srv/www/htdocs，所以最好把/srv单独做个分区或者把根分区弄大点，免得空间不够。<br /><br />

现在LAMP平台就架好了，我们把hello.php复制到/srv/www/htdocs，（这个文件夹写入要root权限）<br />
<div class="clroot">
cp  hello.php  /srv/www/htdocs
</div><br />
然后在浏览器里打开网页：<br />
<a href="http://127.0.0.1/hello.php" target="_blank">
http://127.0.0.1/hello.php </a><br />
就可以在浏览器里看到Hello world，说明安装成功。

<br /><br />
<div class="os3">19.3.2 phpwind论坛</div>
LAMP平台当然不是仅仅用来显示helloworld的。现在来装一个phpwind论坛来试试。phpwind是很流行的社区系统，可以去主页查看介绍：<br />
<a href="http://www.phpwind.com/index.php" target="_blank">
http://www.phpwind.com/index.php 
</a>
<br />
下载页面：<br />
<a href="http://www.phpwind.com/index.php?m=downloads&a=downloadsphpwind" target="_blank">
http://www.phpwind.com/index.php?m=downloads&amp;a=downloadsphpwind 
</a><br />
一般Windows下用GBK的包，Linux当然要用简体UTF8的包。下载下来。<br />
参看安装教程：<br />
<a href="http://faq.phpwind.net/answer-881" target="_blank">
http://faq.phpwind.net/answer-881 
</a>
<br /><br />

（1）设置网页文件夹权限<br />
需要将一堆文件设置成777权限，就是所有人可以读、写、执行。<br />
所以这里先把/srv/www/htdocs设置成 777 ，再把论坛文件放进去。<br />
root命令行执行：<br />
<div class="clroot">
chmod  777  -R  /srv/www/htdocs
</div><br />

（2）解压缩phpwind包，将upload内的文件捣腾到htdocs文件夹<br />
下载的比如phpwind_v9.0_utf8.zip，解压缩到phpwind_v9.0_utf8文件夹，
然后进入里面的upload文件夹。Ctrl + A 再Ctrl + X，剪切所有文件到
/srv/www/htdocs 文件夹里。<br />
由于默认解压缩的文件权限不是777 ，所以再执行一遍：<br />
<div class="clroot">
chmod  777  -R  /srv/www/htdocs
</div><br />

（3）执行phpwind安装<br />
打开浏览器，访问：<br />
<a href="http://127.0.0.1/install.php" target="_blank">
http://127.0.0.1/install.php
</a><br />
接受协议；<br />
接着看到各种环境状态，这里当然是很好的状态了，没问题：<br />
<center><a href="picsrv/phpwnd01.png" rel="thumbnail"><img src="picsrv/phpwnd01s.png" alt="phpwnd01" class="pic" /></a></center><br />

进入下一步；<br />
<center><a href="picsrv/phpwnd02.png" rel="thumbnail"><img src="picsrv/phpwnd02s.png" alt="phpwnd02" class="pic" /></a></center><br />

输入MariaDB数据库密码，除了root，也可以用前面自己设的普通用户名如susedb。<br />
输入phpwnd的数据库名字，可以设置为phpwnd（论坛软件自动创建叫这个名字的数据库）。<br />
输入论坛管理员密码。输入好后点创建数据。<br />
创建好数据论坛就成功装好了，可以发帖：<br />
<center><a href="picsrv/phpwnd03.png" rel="thumbnail"><img src="picsrv/phpwnd03s.png" alt="phpwnd03" class="pic" /></a></center><br />

论坛主页是：<br />
<a href="http://127.0.0.1/" target="_blank">
http://127.0.0.1/
</a><br />
论坛管理后台页面是：<br />
<a href="http://127.0.0.1/admin.php" target="_blank">
http://127.0.0.1/admin.php
</a><br />
建议不用的时候把admin.php挪走，或者改成乱七八糟的名字。用的时候再改回来。
<br /><br />

（4）更正/srv/www/htdocs权限<br />
之前为安装方便，全改成777了，最好按照最小化权限重设：<br />
<div class="clroot">
chmod  755  -R  /srv/www/htdocs
</div>
<div class="clroot">
chmod  777  -R  /srv/www/htdocs/attachment
</div>
<div class="clroot">
chmod  777  -R  /srv/www/htdocs/html
</div>
<div class="clroot">
chmod  777  -R  /srv/www/htdocs/data
</div><br />

这样就把LAMP + phpwind论坛架设好了。

<br /><br />

<div class="os3">19.3.3 phpMyAdmin</div>
phpMyAdmin是MySQL/MariaDB数据库的管理界面，可以通过Web界面操作数据库。
由于是php语言写的，所以需要LAMP或LNMP一整套平台才跑的起来。
现在LAMP已经装好了，正好把phpMyAdmin装上，方便对数据库的管理。<br />
<div class="clroot">
zypper  in  phpMyAdmin
</div><br />
装好后就自动放在/srv/www/htdocs/phpMyAdmin/文件夹里了。在浏览器里访问：<br />
<a href="http://127.0.0.1/phpMyAdmin/" target="_blank">
http://127.0.0.1/phpMyAdmin/
</a><br />

就可以用数据库的用户名密码登录，来管理数据库。<br />
<center><a href="picsrv/phpMyAdmin.png" rel="thumbnail"><img src="picsrv/phpMyAdmins.png" alt="phpMyAdmin" class="pic" /></a></center>

<br /><br />

<div class="os2">19.4 Nginx与LNMP</div>
与Apache相比，Nginx是后起之秀。Apache模块很多，属于大而全的服务器软件。
而Nginx以小巧高效闻名，由俄罗斯的程序设计师Igor Sysoev所开发，其特点是占有内存少，并发能力强，事实上nginx的并发能力确实在同类型的网页服务器中表现较好。中国大陆使用nginx网站用户有：新浪、网易、 腾讯、小米官网等。<br /><br />
使用Apache的体系叫LAMP，使用Nginx的当然叫LNMP了。Apache大而全的好处是有现成的 apache2-mod_php5模块，装上就什么都不用管。
而Nginx就没这类的模块，需要借助FastCGI来解析php文件。
参看：<br />
<a href="http://www.myhack58.com/Article/sort099/sort0102/2012/33364.htm" target="_blank">
http://www.myhack58.com/Article/sort099/sort0102/2012/33364.htm
</a><br />

Apache和Nginx装一个就够了，因为HTTP服务默认都占用80端口，装两个显得浪费。
这一节的内容是接着19.2节，php装好之后，安装配置LNMP平台。
<br /><br />

<div class="os3">19.4.1 Nginx安装</div>
（1）Nginx没什么附加模块，直接装它本身就行了：
（好像在13.2中把nginx移到不稳定源里了，如果官方源里没有，去 
<a href="http://software.opensuse.org/package/nginx"  target="_blank">
http://software.opensuse.org/package/nginx 
</a>
页面找 nginx）<br />
<div class="clroot">
zypper  in  nginx
</div><br />

（2）开启nginx服务<br >
<div class="clroot">
systemctl  enable  nginx.service
</div>
<div class="clroot">
systemctl  start  nginx.service
</div><br />

（3）开放防火墙端口<br />
由于是HTTP服务器，必须在防火墙里把80端口打开。<br />
与19.3节类似的，打开Yast----》安全和用户----》防火墙。<br />
左边“选允许的服务”，右边添加“HTTP Server”，
如果用得到HTTPS服务，就把“HTTPS Server”一块添加开放。<br />
安装好nginx后，如果把前面的hello.php放在/srv/www/htdocs目录，浏览器里访问<br />
<a href="http://127.0.0.1/hello.php" target="_blank">
http://127.0.0.1/hello.php </a><br />
这时不会看到解析的网页，而是直接下载了hello.php文件。所以必须要继续配置。

<br /><br />

<div class="os3">19.4.2 php-fpm安装配置</div>
软件包php5-fpm是用于FastCGI进程管理的PHP5模块。<br />
LNMP平台大致的工作流程是：安装php5-fpm后，通过php-fpm启用FastCGI进程，
然后配置nginx，让nginx把php文件解析交给FastCGI进程处理，
然后nginx把解析得到网页显示出来。下面进行安装配置。
<br /><br />

（1）安装php5-fpm<br />
<div class="clroot">
zypper  in  php5-fpm
</div><br />

（2）编辑php-fpm.conf<br />
装了之后，在/etc/php5/fpm/目录有默认的配置文件php-fpm.conf.default，
要启用php5-fpm必须复制一个php-fpm.conf放在/etc/php5/fpm/目录：<br />
<div class="clroot">
cp  /etc/php5/fpm/php-fpm.conf.default   /etc/php5/fpm/php-fpm.conf
</div><br />

文件php-fpm.conf就是实际使用的php5-fpm配置文件。<br />
用root权限打开php-fpm.conf进行编辑：<br />
把   ;error_log = log/php-fpm.log  一行开头的分号去掉，并改为<br />
<div class="code">
error_log = /var/log/php-fpm.log<br />
</div><br />
保存文件。然后可以尝试在root命令行执行：<br />
<div class="clroot">
php-fpm
</div><br />
如果没提示ERROR，那表示配置文件没问题。
<br /><br />

（3）启动PHP的FastCGI进程<br />
用root命令行启动FastCGI服务：<br />
<div class="clroot">
systemctl  enable  php-fpm.service
</div>
<div class="clroot">
systemctl  start  php-fpm.service
</div><br />
可以查看 php-fpm监听状态：<br />
<div class="cl">
netstat   -antl  |grep 9000
</div><br />
命令行会提示：
<div class="code">
tcp&nbsp;&nbsp;&nbsp;&nbsp;0&nbsp;&nbsp;&nbsp;&nbsp;0 &nbsp;&nbsp;&nbsp;&nbsp;127.0.0.1:9000&nbsp;&nbsp;&nbsp;&nbsp;0.0.0.0:*&nbsp;&nbsp;&nbsp;&nbsp;LISTEN  
</div><br />
如果是使用负载分担，将nginx和php-fpm分别运行在两台不同服务器上的话，
需要开放防火墙的TCP 9000端口，使它们能够互通。
如果二者在同一台机器上那就无所谓。
<br /><br />

（4）配置nginx<br />
用root权限编辑/etc/nginx/nginx.conf  ，找到其中的两段：<br />
<div class="code">
&nbsp;&nbsp;location / {<br />
&nbsp;&nbsp;&nbsp;&nbsp;root&nbsp;&nbsp;&nbsp;&nbsp;/srv/www/htdocs/;<br />
&nbsp;&nbsp;&nbsp;&nbsp;index&nbsp;&nbsp;&nbsp;index.html  index.htm ;<br />
&nbsp;&nbsp;}<br />
##<br />
##中间的一大堆不动。  <br />
##     <br />
&nbsp;&nbsp;#location ~ \.php$ {<br />
&nbsp;&nbsp;&nbsp;&nbsp;#    root&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; html;<br />
&nbsp;&nbsp;&nbsp;&nbsp;#    fastcgi_pass&nbsp;   127.0.0.1:9000;<br />
&nbsp;&nbsp;&nbsp;&nbsp;#    fastcgi_index  index.php;<br />
&nbsp;&nbsp;&nbsp;&nbsp;#    fastcgi_param  SCRIPT_FILENAME  /scripts$fastcgi_script_name;<br />
&nbsp;&nbsp;&nbsp;&nbsp;#    include&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; fastcgi_params;<br />
&nbsp;&nbsp;#}<br />
</div><br />

第二段本来是用#注释掉的，把#去掉，这段php的配置就会生效，然后编辑如下：<br />

<div class="code">
&nbsp;&nbsp;location / {<br />
&nbsp;&nbsp;&nbsp;&nbsp;root&nbsp;&nbsp;&nbsp;&nbsp;/srv/www/htdocs/;<br />
&nbsp;&nbsp;&nbsp;&nbsp;index&nbsp;&nbsp;&nbsp;index.php  index.html  index.htm ;<br />
&nbsp;&nbsp;}<br />
##上一段添加了一个 index.php 的主页文件名<br />
##中间的一大堆不动。  <br />
##下面一段改网页root位置，并把/scripts改成root一样的位置<br />
&nbsp;&nbsp;location ~ \.php$ {<br />
&nbsp;&nbsp;&nbsp;&nbsp;root&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /srv/www/htdocs;<br />
&nbsp;&nbsp;&nbsp;&nbsp;fastcgi_pass&nbsp;   127.0.0.1:9000;<br />
&nbsp;&nbsp;&nbsp;&nbsp;fastcgi_index  index.php;<br />
&nbsp;&nbsp;&nbsp;&nbsp;fastcgi_param  SCRIPT_FILENAME  /srv/www/htdocs$fastcgi_script_name;<br />
&nbsp;&nbsp;&nbsp;&nbsp;include&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; fastcgi_params;<br />
&nbsp;&nbsp;}<br />
</div><br />
编辑后保存。
<br /><br />

（5）重启nginx<br />
<div class="clroot">
systemctl  restart  nginx.service
</div><br />
再用浏览器访问：<br />
<a href="http://127.0.0.1/hello.php" target="_blank">
http://127.0.0.1/hello.php </a><br />
就可以看到久违的Hello wolrd。这样LNMP平台就配置好了。
<br /><br />

<div class="os3">19.4.3 Discuz!论坛</div>
这里提到的Discuz!和上一节的phpwnd、phpMyAdmin在LAMP和LNMP都可以正常运行。配置好了LAMP或LNMP平台后，可以随意装哪个论坛软件和phpMyAdmin。这里是演示方便，把Discuz!放到这来装，如果放到前面LAMP装是一样的。论坛phpwnd放到LNMP下也是一样装。<br /><br />

根据维基百科，Discuz!是个可免费下载的PHP网络论坛程序，简称DZ，由戴志康（Crossday）所创立，目前最新版本是X2.5。前身为Crossday Bulletin（CDB），最初改自XMB，尔后改写成为现今的Discuz!社区论坛程序，由康盛创想所有。现在Discuz!已成为大中华地区最多用户使用的论坛程序。Discuz!的源代码可免费下载，但它并不是开源软件，因为其许可证不符合开放源代码的定义。其官方网站：<br />
<a href="http://www.comsenz.com/products/discuzx" target="_blank">
http://www.comsenz.com/products/discuzx</a><br />
下载地址：<br />

<a href="http://www.comsenz.com/downloads/install/discuzx" target="_blank">
http://www.comsenz.com/downloads/install/discuzx</a><br />
大陆的选“简体UTF-8”，想要装繁体的也可以选“繁体UTF-8”。
<br /><br />

（1）把论坛文件放到/srv/www/htdocs/ <br />
下载后把Discuz_X2.5_SC_UTF8.zip解压缩放到主文件夹的  Discuz_X2.5_SC_UTF8 文件夹里。<br />
 Discuz_X2.5_SC_UTF8 文件夹里有三个子文件夹：readme，upload，utility。<br />
在root命令行执行命令把 upload里面的都移动到/srv/www/htdocs/   文件夹：<br />
<div class="clroot">
mv   /home/用户名/Discuz_X2.5_SC_UTF8/upload/*   /srv/www/htdocs/
</div><br />
（这里/home/用户名/Discuz_X2.5_SC_UTF8是解压缩后的路径，可以根据各人自己的的改。）<br />
然后在 /srv/www/htdocs/   文件夹就可以看到一大堆论坛文件了。
<br /><br />

（2）设置权限<br />
/srv/www/htdocs/ 里面有四个子文件夹config ，data，uc_client/data，uc_server/data
里面的都需要设置777权限。执行：<br />
<div class="clroot">
chmod  777  -R  /srv/www/htdocs/config/
</div>
<div class="clroot">
chmod  777  -R  /srv/www/htdocs/data/
</div>
<div class="clroot">
chmod  777  -R  /srv/www/htdocs/uc_client/data/
</div>
<div class="clroot">
chmod  777  -R  /srv/www/htdocs/uc_server/data/
</div><br />

（3）进行Discuz!论坛安装<br />
打开浏览器，访问：<br />
<a href="http://127.0.0.1/install/" target="_blank">
http://127.0.0.1/install/</a><br />
进入安装界面，同意协议，进入环境检查界面：<br />
<center><a href="picsrv/discuz01.png" rel="thumbnail"><img src="picsrv/discuz01s.png" alt="discuz01" class="pic" /></a></center>
<br />

一切OK，点“下一步”;<br /><br />

进入设置运行环境，选“全新安装 Discuz! X (含 UCenter Server)”，点“下一步”；<br />
<center><a href="picsrv/discuz02.png" rel="thumbnail"><img src="picsrv/discuz02s.png" alt="discuz02" class="pic" /></a></center>
<br />

填写数据库用户名密码，推荐用前面新建的普通的数据库用户名密码，如susedb的用户名。<br />
然后填写给Discuz! 用的数据库名，论坛管理员admin的新密码。
点“下一步”。<br /><br />
等待创建数据库表完成和数据初始化。会提示Discuz! 应用中心有一些应用，可以装一下喜欢的。
这里就不装了。直接进入论坛：<br />
<a href="http://127.0.0.1/" target="_blank">
http://127.0.0.1/
</a><br />

<center><a href="picsrv/discuz03.png" rel="thumbnail"><img src="picsrv/discuz03s.png" alt="discuz03" class="pic" /></a></center>
<br />

其管理后台是<br />
<a href="http://127.0.0.1/admin.php" target="_blank">
http://127.0.0.1/admin.php
</a><br />
平时不用后台时，最好把admin.php挪走，或者改成乱七八糟的名字。等到要用的时候再改回去。<br /><br />

LNMP平台装phpMyAdmin与上面LAMP装是一样的，就不重复了。<br />
下一章介绍其他常见的服务器软件。<br /><br /><br />


最后附上更多的参考资料：<br />
<a href="http://www.myhack58.com/Article/sort099/sort0102/2012/33364.htm" target="_blank">
实战Nginx与PHP（FastCGI）的安装、配置与优化
</a><br />
<a href="http://www.caryagos.com/press/%E5%9C%A8-opensuse-linux-%E4%B8%AD%E9%85%8D%E7%BD%AE%E5%AE%89%E8%A3%85-nginx-mysql-phpphp-fpm/" target="_blank">
在 OpenSuse Linux 中配置安装 Nginx + MySQL + PHP(PHP-FPM)
</a><br />
<a href="http://www.nginx.cn/231.html" target="_blank">
nginx php-fpm配置
</a><br />
<a href="https://zh.opensuse.org/SDB:%E6%90%AD%E5%BB%BALAMP%E6%9C%8D%E5%8A%A1%E5%99%A8" target="_blank">
SDB:搭建LAMP服务器
</a><br />
<a href="http://server.zol.com.cn/278/2781912.html" target="_blank">
新鲜体验 openSUSE 12.1下搭建Web服务器
</a><br />
<a href="http://hi.baidu.com/winland0704/item/b9ac5425782d92c2a4275a55" target="_blank">
配置http服务器（apache, nginx）支持 html5 video（ogv, webm...）
</a><br />



<br /><br />



<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="obs.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="srvother.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
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
 
