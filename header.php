<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kanit&subset=thai,latin" rel="stylesheet" type="text/css">
<!-- Custom CSS -->
<link href="css/modern-business.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<style>
nav.navbar-findcond { background: #fff; border-color: #ccc; box-shadow: 0 0 2px 0 #ccc; }
nav.navbar-findcond a { color: #f14444; }
nav.navbar-findcond ul.navbar-nav a { color: #f14444; border-style: solid; border-width: 0 0 2px 0; border-color: #fff; }
nav.navbar-findcond ul.navbar-nav a:hover,
nav.navbar-findcond ul.navbar-nav a:visited,
nav.navbar-findcond ul.navbar-nav a:focus,
nav.navbar-findcond ul.navbar-nav a:active { background: #fff; }
nav.navbar-findcond ul.navbar-nav a:hover { border-color: #f14444; }
nav.navbar-findcond li.divider { background: #ccc; }
nav.navbar-findcond button.navbar-toggle { background: #f14444; border-radius: 2px; }
nav.navbar-findcond button.navbar-toggle:hover { background: #999; }
nav.navbar-findcond button.navbar-toggle > span.icon-bar { background: #fff; }
nav.navbar-findcond ul.dropdown-menu { border: 0; background: #fff; border-radius: 4px; margin: 4px 0; box-shadow: 0 0 4px 0 #ccc; }
nav.navbar-findcond ul.dropdown-menu > li > a { color: #444; }
nav.navbar-findcond ul.dropdown-menu > li > a:hover { background: #f14444; color: #fff; }
nav.navbar-findcond span.badge { background: #f14444; font-weight: normal; font-size: 11px; margin: 0 4px; }
nav.navbar-findcond span.badge.new { background: rgba(255, 0, 0, 0.8); color: #fff; }

</style>
<style>
@media screen and (max-width: 400px)
{
    .navbar-brand
    {
      font-size: 13px;
    }

}
</style>

<nav class="navbar navbar-findcond navbar-fixed-top">
    <div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">NIDNAIYANA.COM | พินิจวรรณกรรมซีไรต์</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="profile.php">ประวัติส่วนตัว</a></li>
				<li class="active"><a href="webboard.php">เว็บบอร์ด <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="contact.php">ติดต่อเรา <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="#" data-toggle="modal" data-target="#myModal">เข้าสู่ระบบ <span class="glyphicon glyphicon-log-in"></span> </a></li>

				<!-- <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">เข้าสู่ระบบ <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Geri bildirim</a></li>
						<li><a href="#">Yardım</a></li>
						<li class="divider"></li>
						<li><a href="#">Ayarlar</a></li>
						<li><a href="#exit">Çıkış yap</a></li>
					</ul>
				</li> -->
			</ul>
		</div>
	</div>
</nav>


<?php include("regis_popup.php"); ?>
