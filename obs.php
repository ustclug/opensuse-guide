<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" lang="zh" >

<!-- <!DOCTYPE html>
<html> -->




<head>

<title>18. 软件打包服务 - Open Build Service</title>

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
 
 


<div class="os1">18. 软件打包服务 - Open Build Service</div>
觉得看文字教程无聊的同学可以直接去看玛噶学姐的优酷视频教程：<br />
<a href="http://v.youku.com/v_show/id_XNTE5NzA2NDI0.html" target="_blank">
<b>openSUSE 下构建 RPM 软件包</b>
</a><br /><br />

<div class="os2">18.1 软件打包简介</div>

前面17章介绍了代码编译工具、集成开发环境（IDE）、源码的发布管理（版本控制系统），软件源码从开发到管理、发布走了一遍，下面到怎样把软件源码打包成适合各个版本的Linux，比如Debian/Ubuntu/Deepin会使用deb包，Fedora/openSUSE使用rpm包。不同的Linux发行版和同一发行版的不同版本号的Linux，通常都需要将软件从源码编译组建成二进制格式的deb或rpm包。通过安装deb或rpm包，省去了普通用户编译源码、寻找软件依赖库的繁琐过程，就可以实现傻瓜式安装，省时省力。<br /><br />
当然还有将一些头文件、库文件打包成devel(或dev)系列的deb或rpm包，用于开发。<br />
通常以devel(或dev)结尾的deb或rpm包，就是开发和编译代码用的。<br />
以debuginfo和debugsource结尾的就是专用于该软件的调试信息和调试源码包。<br />
以source结尾的包（如kernel-source）就是该软件完整的源代码的打包。<br />
以lang结尾的包（如anjuta-lang）就是该软件的多国语言包。<br /><br />

各种各样的Linux都是这些打好的软件包的集合，如果没有deb或rpm之类现成的软件包，那么从源代码编译软件，生成可执行程序或库，对新手来说是一件麻烦的事。软件基本都不是独立的个体，通常会依赖这样或那样的库，很可能在网上找了软件源码来编译，发现怎么搞都不行，很多时候就是依赖的库太多，剪不断理还乱，所以新手就很难弄。<br /><br />

当然，这些东西搞多了就轻车熟路了。作为新世纪的好青年，不能总是指望老外搞。作为世界人口第一的大国，我们也应该为开源社区出一份力。写17和18章的内容也是期望大家多作贡献。
<br /><br />

<div class="os2">18.2 Open Build Service</div>
下面介绍Open Build Service（OBS），Open Build Service原本叫openSUSE Build Service，最初是openSUSE社区人员为openSUSE生成rpm软件安装包而打造的平台，现在已经发展成支持各种Linux发行版软件打包的服务平台，由于支持的Linux系统的广泛性，2011年openSUSE Build Service正式改名为Open Build Service。其主页：<br />
<a href="http://openbuildservice.org/" target="_blank">
http://openbuildservice.org/
</a> <br /><br />
目前支持的操作系统包括：openSUSE, Debian, Fedora, Ubuntu, Red Hat Enterprise Linux, SUSE Linux Enterprise等。<br /><br />
在openSUSE 12.1的时候，还需要添加OBS安装源：<br />
<a href="http://download.opensuse.org/repositories/openSUSE:/Tools/openSUSE_12.1/" target="_blank">
http://download.opensuse.org/repositories/openSUSE:/Tools/openSUSE_12.1/
</a><br /><br />

现在新版本中发现其发行DVD盘里面就有OBS的各种软件。所以省事了，直接在root命令行执行：<br />
<div class="clroot">zypper  in  osc</div><br />
查看内置帮助文档命令：<br />
<div class="cl">osc  help</div><br />
osc就是OBS命令行的意思，软件包管理器会自动安装相关的软件包，所以安装是非常容易的。
OBS软件直接放到发行DVD里面，也可以看出openSUSE社区和其他开源社区对大家的召唤啊。
<br /><br />

<div class="os2">18.3 简单的OBS之旅</div> OBS打包服务的大致工作流程是在本地准备好源代码包，编辑好SPEC文件，然后将各种相关文件提交给OBS服务器，服务器自动根据SPEC文件进行编译链接源代码，为各个版本Linux打包，并检查软件包信息。所以通常都是需要连网操作的。既然是贡献软件包，自然是公开在OBS网站的。
下面先介绍命令行下的osc打包。下节介绍Web页面的提交方式。<br /><br />

下面就用hellolq.cpp作为例子，打包成rpm发到OBS网站上去。<br />
<div class="code">
//hellolq.cpp<br />
#include &lt;iostream&gt; <br />
using namespace std; <br /><br />

int main(int argc, char** argv)<br />
{<br />
&nbsp;&nbsp;&nbsp;&nbsp;    cout &lt;&lt; "Hello LQ!" &lt;&lt; endl;<br />
&nbsp;&nbsp;&nbsp;&nbsp;    return 5201314;<br />
}
</div><br />
<b>
本章用到的代码、SPEC等文件压缩包下载：<br />
<a href="./18.hellolq.tar.gz" target="_blank">
18.hellolq.tar.gz
</a>
</b>
<br /><br />

（1）注册OBS帐号<br />
去这个网站：<br />
<a href="https://build.opensuse.org/" target="_blank">
https://build.opensuse.org/ 
</a>
<br />
点击右上角“Sign Up”，注册自己喜欢的帐号；<br />
注册完成后，重新回到上面网址；<br />
点击右上角的“Login”，用新账户登录进去。<br />
登录后会看到页面变了，中间有个“New Project”，点击一下，<br />

<center><a href="picobs/obs01.png" rel="thumbnail"><img src="picobs/obs01s.png" alt="obs01" class="pic" /></a></center><br />

填写新建的项目：<br />
<center><a href="picobs/obs02.png" rel="thumbnail"><img src="picobs/obs02s.png" alt="obs02" class="pic" /></a></center><br />

最下面两个复选框不要选，直接点“Create Project”。如果刚注册的用户名为iloveliuqing，那么就会出现新建的项目 home:iloveliuqing 。第一步成功。
<br /><br />

（2）在本地创建OBS打包项目文件夹<br />
在用户主文件夹下建立一个文件夹，专门用于OBS打包：<br />
<div class="cl">mkdir  ~/OBSProjects</div><br />
比如用户主文件夹是/home/suse123，那么OBS项目文件夹就是/home/suse123/OBSProjects 。
<br /><br />

（3）把服务器上的OBS项目同步到本地OBSProjects。<br />
OBS命令类似SVN的命令，这里先和服务器上的同步一下。<br />
<div class="cl">cd  ~/OBSProjects</div>
<div class="cl">osc  checkout  home:<b><i>username</i></b>
</div><br />
checkout可以简写成co，<b><i>username</i></b>就是前面注册的账户名，比如<br />
osc  co  home:iloveliuqing <br />
连网同步的时候，命令行会提示需要自己前面注册的用户名和密码。然后等待下载同步过程。由于新账户没东西，所以本地OBSProjects/home:<b><i>username</i></b>文件夹是空的。
<br /><br />

（4）设定想为哪些发行版打包<br />
命令行下可以用如下命令打开配置文件：<br />
<div class="cl">osc  meta  prj  -e  home:<b><i>username</i></b>
</div><br />
这时会看到vim里的配置条目：<br />
<div class="code">
&lt;project name="home:iloveliuqing"&gt; <br />
&nbsp;&nbsp;&lt;title&gt;iloveliuqing's Home Project&lt;/title&gt; <br />
&nbsp;&nbsp;&lt;description&gt;Test hellolq.&lt;/description&gt; <br />
&nbsp;&nbsp;&lt;person userid="iloveliuqing" role="maintainer"/&gt; <br />
&nbsp;&nbsp;&lt;person userid="iloveliuqing" role="bugowner"/&gt; <br />
&lt;/project&gt; <br />
</div><br />
在vim界面按i键开启编辑模式，在&lt;/project&gt;上面添加几行：<br />
<div class="code">
&lt;repository name="openSUSE_12.3"&gt; <br />
&nbsp;&nbsp;&lt;path project="openSUSE:12.3" repository="standard"/&gt; <br />
&nbsp;&nbsp;&lt;arch&gt;i586&lt;/arch&gt; <br />
&nbsp;&nbsp;&lt;arch&gt;x86_64&lt;/arch&gt; <br />
&lt;/repository&gt; <br />
</div><br />
输入好之后就是这个样子：<br />
<center><a href="picobs/obs03.png" rel="thumbnail"><img src="picobs/obs03s.png" alt="obs03" class="pic" /></a></center><br />
然后按ESC键退出编辑模式，再打字  :wq  就可以保存退出vim了。
添加的一段就是表示为openSUSE 12.3版本的32位和64位系统打包。这里做测试，只加了一个，还可以类似地添加多个目标版本。这配置文件是OBS服务器上的，通过远程编辑方式改变配置条目。
<br /><br />

（5）准备好源码包和spec 文件<br />
实际上的源码包当然不会只有一个hellolq.cpp，所以这里按照GNU标准，用自动配置工具如autoconf、automake等打了一个带有一些配置文件的源码包：hellolq-1.0.tar.gz 。
一般自动配置工作都是集成开发环境自动做的，所以不用在意生成的一堆配置文件和脚本。其实源代码就只有一个hellolq.cpp。当然感兴趣的可以去搜一下“Linux自动生成Makefile”。<br />
（需要注意的是automake处理时会添加install-sh、depcomp、missing三个快捷方式到源码文件夹里，这三个快捷方式在本地能用，但远程OBS服务器上是没有的。必须把它们三个的文件本体，从/usr/share/auotomake-<b><i>version/ </i></b>里面，复制到源码文件夹里，再做成压缩包。）
<br /><br />

在解决好依赖关系之后，Linux下的软件源代码编译安装通常都是非常简单的三板斧：<br />
<div class="cl">./configure</div>
<div class="cl">make</div>
<div class="cl">sudo  make  install</div>
<br />
第一步是检查配置环境，看看有没有依赖的工具、头文件、库等。第二步是正式编译链接，生成目标文件和可执行的程序。第三步是安装到系统中。
<br /><br />
得到要打包的源代码后，怎么让OBS打包系统知道编译、打包、安装、卸载这个软件时具体执行什么命令呢？
<br /><br />
这就要靠 spec 文件了。除了软件源码，就数 spec 文件重要了。在OBS上打包，至少需要这两个东西。
spec 文件的编写知识很多，但通常情况下，找个差不多的模板，
把软件包的名字、版本、依赖关系之类的改改就差不多了。
对于这里简单的软件包，找了个模板套一下，然后把名字改为 hellolq.spec 。
<br /><br />

详细的编写方法参考：<br />
<a href="http://fedoraproject.org/wiki/How_to_create_an_RPM_package" target="_blank">
http://fedoraproject.org/wiki/How_to_create_an_RPM_package
</a>
<br />
改好的hellolq.spec如下：<br />
<div class="code">
Name:           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hellolq <br />
Version:        &nbsp;&nbsp;1.0 <br />
Release:        &nbsp;&nbsp;1 <br />
License:        &nbsp;&nbsp;GPL-2.0+ <br />
Source:         &nbsp;&nbsp;&nbsp;hellolq-1.0.tar.gz <br />
Group:          &nbsp;&nbsp;&nbsp;&nbsp;Productivity/Other <br />
Summary:        &nbsp;&nbsp;Test hellolq    <br />
<br />
# List of additional build dependencies<br />
BuildRequires:  gcc-c++ , libstdc++-devel  <br />
BuildRoot:      %{_tmppath}/%{name}-%{version}-build<br />
<br />
%description<br />
hellolq-1.0<br />
<br />
<br />
%prep<br />
%setup -q<br />
<br />
%build<br />
<br />
# Assume that the package is built by plain 'make' if there's no ./configure.<br />
# This test is there only because the wizard doesn't know much about the<br />
# package, feel free to clean it up<br />
if test -x ./configure; then<br />
&nbsp;&nbsp;&nbsp;&nbsp; %configure<br />
fi<br />
make<br />
<br />   
<br />
%install<br />
<br />
make DESTDIR=%buildroot install<br />
<br />
<br />
# Write a proper %%files section and remove these two commands and<br />
# the '-f filelist' option to %%files<br />
echo '%%defattr(-,root,root)' >filelist<br />
find %buildroot -type f -printf '/%%P*\n' >>filelist<br />
<br />
<br />
%clean<br />
rm -rf %buildroot<br />
<br />
%files -f filelist<br />
%defattr(-,root,root)<br />
<br />
# This is a place for a proper filelist:<br />
# /usr/bin/Qt4<br />
# You can also use shell wildcards:<br />
# /usr/share/Qt4/*<br />
# This installs documentation files from the top build directory<br />
# into /usr/share/doc/...<br />
# %doc README COPYING<br />
# The advantage of using a real filelist instead of the '-f filelist' trick is<br />
# that rpmbuild will detect if the install section forgets to install<br />
# something that is listed here<br />
<br />
<br />
%changelog<br />
* Tue Mar 26 2013 Winland &lt;winland0704@126.com&gt; 1.0<br />
- Build for 1.0.<br />
</div><br />
这倒数第二段的注释深深地出卖了我，这是从一个打包qt的项目里弄来的spec模板。这个是最简单的模板，可以自己试着玩玩，但是正式的写法最好参考opensuse_zh项目上的软件包的spec文件写法。比如Dr.COM 包页面，打开页面里的drcom.spec文件就可以看到里面的内容了。<br />
<a href="https://build.opensuse.org/package/show?package=Dr.COM&project=home%3Aopensuse_zh" target="_blank">
https://build.opensuse.org/package/show?package=Dr.COM&amp;project=home%3Aopensuse_zh
</a><br />

准备好源码包hellolq-1.0.tar.gz和spec文件hellolq.spec之后，就可以进入下一步了。
<br /><br />

（6）创建一个具体的打包项目<br />
继续在~/OBSProjects里面执行命令，来新建一个打包项目：<br />
<div class="cl">osc  meta  pkg  -e home:<b><i>username   packagename</i></b>
</div>
<b><i>username</i></b>是之前的用户名，<b><i>packagename</i></b>就是软件包的名字。
比如执行<br />
osc  meta  pkg  -e  home:iloveliuqing  hellolq <br />
命令行下会打开vim，编辑配置文件，按 i 键编辑，<br />
在 &lt;title&gt; &lt;/title&gt; 中间填写软件名字，如 hellolq 。<br />
在 &lt;description&gt; &lt;/description&gt; 中间填写软件描述，如 Test hellolq 。<br />
然后按ESC，再输入 :wq 。就可以保存退出了。<br /><br />
这个是在OBS服务器上创建了打包项目，本地需要更新一下：<br />
<div class="cl">osc  up  home:<b><i>username</i></b>
</div>
显示结果如下：<br />
<div class="code">  
suse123@linux-9ppl:~/OBSProjects&gt; osc  up  home:iloveliuqing<br />
checking out new package hellolq<br />
A &nbsp;&nbsp;&nbsp;&nbsp; home:iloveliuqing/hellolq<br />
At revision None.<br />
</div><br />
这时就会和OBS服务器同步了。<br /><br />

（7）写打包记录，添加文件到打包项目<br />
把之前准备的hellolq-1.0.tar.gz
 和 hellolq.spec 复制到这个目录里： <br />
~/OBSProjects/home:<b><i>username/packagename/</i></b>  <br />
比如OBSProjects/home:iloveliuqing/hellolq/目录。然后进入这个目录：<br />
<div class="cl">
cd  ~/OBSProjects/home:<b><i>username/packagename/</i></b>
</div><br />
先在打包目录里面执行：<br />
<div class="cl">
osc  vc
</div><br />
这会打开一个hellolq.changes文件，用于记录打包者做的事情，比如记录打包开始日期、什么时候修复了什么问题之类的。这里输入的是：<br />
<div class="code">  
-------------------------------------------------------------------<br />
Tue Mar 26 2013 Winland &lt;winland0704@126.com&gt; <br />
<br />
- begin OBS test<br />
- build hellolq-1.0<br />
<br />
</div><br />
编辑好后，按ESC键，在输入  :wq 保存退出。<br /><br />

执行添加文件到打包项目的命令：<br />
<div class="cl">
osc  add  *
</div><br />
这会把该目录里的文件都添加到打包项目里。<br />
然后执行提交：<br />
<div class="cl">
osc  commit
</div><br />
提交时会提示要在“--This line, and those below, will be ignored--”上面输入一些关于本次提交打包的描述信息，比如 Fix bugs. Test hellolq 。
按i键编辑，编辑好后按ESC键，再输入 :wq 保存退出。<br />
再等待文件都被上传到服务器。就差不多搞定了。
<br /><br />

（8）查看打包结果<br />
上传到的文件，OBS服务器会自动根据spec文件打成rpm包。<br />
查看提交日志，执行： <br />
<div class="cl">
osc  log 
</div><br />
查看打包结果，执行：
<div class="cl">
osc  results
</div><br />
如果打包的过程结束，会看到finished字样。finished表示在某个系统平台执行编译链接、安装检查的过程结束，finished不是说成功也不是说失败。如果OBS服务器打包过程出错，以后查看results会出现failed字样。如果打包过程没问题，以后查看results会出现succeeded字样。<br /><br />

查看在某个版本系统架构上打包的日志，执行：<br />
<div class="cl">
osc  buildlog  openSUSE_12.3  i586
</div>
<div class="cl">
osc  buildlog  openSUSE_12.3  x86_64
</div><br />
在finished之后就可以查看这些打包日志。<br />
如果出错，会看到有些ERROR打头记录可以查看哪里出错的。<br />
如果没问题，会看到类似这些记录：<br />
<div class="code">  
RPMLINT report: <br />
… … <br />
... saving built packages<br />
… … <br />
build34 finished "build hellolq.spec" at Wed Mar 27 04:47:49 UTC 2013.<br />
</div><br />
打包成功后，就可以在自己的OBS个人页面看到打好的包：<br />
<center><a href="picobs/obs04.png" rel="thumbnail"><img src="picobs/obs04s.png" alt="obs04" class="pic" /></a></center><br />
也可以从属于自己的打包软件源下载软件，比如：<br />
<a href="http://download.opensuse.org/repositories/home:/iloveliuqing/openSUSE_12.3/"  target="_blank">
http://download.opensuse.org/repositories/home:/iloveliuqing/openSUSE_12.3/
</a> <br />
OBS个人空间<br />
http://download.opensuse.org/repositories/home:/<b><i>username</i></b>/ <br />
就是自己专属的打包发布的地方。
<br /><br />


<div class="os2">18.4 Web界面提交打包</div>
登录<a href="https://build.opensuse.org/" target="_blank">
https://build.opensuse.org/ 
</a>网站之后，点击右上角的Home Project，就会进入自己的打包项目管理页面。<br />
注册帐号和新建个人项目同上一节的（1）步骤。下面示例Web界面操作。<br /><br />

<center><a href="picobs/obs05.png" rel="thumbnail"><img src="picobs/obs05s.png" alt="obs05" class="pic" /></a></center><br />
（1）设置想为哪些发行版打包<br />
到 Home Project 主界面，点击上面的 Repositories ，找到 Build Flag 字样上面的 Add repositories，点击它就可以选择添加要打包的平台。<br />
<center><a href="picobs/obs06.png" rel="thumbnail"><img src="picobs/obs06s.png" alt="obs06" class="pic" /></a></center><br />

（2）准备好源代码包和SPEC文件<br />
这个同上一节的osc命令行方式步骤（5）介绍的。有changes文件更好，做好打包记录是好习惯。
<br />
changes文件可以自己用编辑器建一个，然后编辑，一样好使的。
<br /><br />

（3）创建打包项目<br />
回到HomeProject主界面，点击下面的“Create package”，就可以新建一个打包项目。<br />
<center><a href="picobs/obs07.png" rel="thumbnail"><img src="picobs/obs07s.png" alt="obs07" class="pic" /></a></center><br />
编辑好后保存。
<br /><br />

（4）提交文件到打包项目<br />
到Home Project主界面，可以看到建好的Packages，打开这个打包项目，
找到Revision字样上面的Add file就可以添加文件。Web界面很直观，就不细说了。<br />
<center><a href="picobs/obs08.png" rel="thumbnail"><img src="picobs/obs08s.png" alt="obs08" class="pic" /></a></center><br />
添加完文件后，就可以静候佳音。<br />
右边的Build Results就是打包结果。<br />
点击结果里面的链接“finished”或“failed”、“succeeded”就能看到打包日志。<br />
有问题的就可以查看问题。
<br /><br />

<div class="os2">18.5 推荐的资料</div>
OBS是很强大的平台，熟悉了SPEC文件打包之后，不管去其他哪个Linux平台打包都是可以举一反三的。学习打包可以锻炼自己，也能为开源社区出力。当然，可以学到很多知识。打包出了问题实在不好解决，就去
<a href="http://forum.suse.org.cn/" target="_blank">
openSUSE中文社区
</a>
或openSUSE官方论坛求助。推荐几个网址，可以多去学学。
<br /><br />
玛噶学姐的“带你学”系列：<br />
<a href="https://forums.opensuse.org/aeae-chinese/aesaeoeeeaezaeaeoe/aa/470305-czazaaaaea-obs-ae-opensuse-build-service-aeaoeaezae.html" target="_blank">
(一) openSUSE Build Service 注册与安装
</a><br />
<a href="https://forums.opensuse.org/aeae-chinese/aesaeoeeeaezaeaeoe/aa/470403-czazaaaaea-obs-aeoe-obs-acaaeisaeaaaeaeaoeaeae.html" target="_blank">
(二) OBS 常用命令：以创建一个包为例
</a><br />

不过玛噶学姐最厉害的是把打包过程做成优酷视频教程了，不喜欢看文字的同学有福了！视频空间：<br />
<a href="http://u.youku.com/margueritesu" target="_blank">
<b>http://u.youku.com/margueritesu</b>
</a>

<br /><br />

山木的 Open Build Service 软件建包简要教程：<br />
<a href="http://hillwoodhome.net/archives/76" target="_blank">
(一)创建OBS项目
</a><br />
<a href="http://hillwoodhome.net/archives/92" target="_blank">
(二)从web页面构建发行版安装包
</a><br />
<a href="http://hillwoodhome.net/archives/102" target="_blank">
(三)利用osc工具构建发行版安装包
</a><br />
<a href="http://hillwoodhome.net/archives/109" target="_blank">
(四)编写跨平台spec文件
</a><br /><br />

Fedora的RPM打包教程<br />
<a href="http://fedoraproject.org/wiki/How_to_create_an_RPM_package" target="_blank">
http://fedoraproject.org/wiki/How_to_create_an_RPM_package
</a><br />

openSUSE的OBS打包指南<br />
<a href="https://en.opensuse.org/openSUSE:Build_Service_Tutorial" target="_blank">
https://en.opensuse.org/openSUSE:Build_Service_Tutorial
</a><br />

openSUSE的OSC使用教程<br />
<a href="https://en.opensuse.org/openSUSE:OSC" target="_blank">
https://en.opensuse.org/openSUSE:OSC
</a>

<br /><br />


<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="develop.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="srvlamp.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
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
 
