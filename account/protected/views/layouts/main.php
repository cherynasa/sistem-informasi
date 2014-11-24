<?php /* @var $this Controller */ ?>

<?php /*
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>

*/
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Accounting Solution</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script>
    <script src="js/Kozuka_Gothic_Pro_OpenType_300.font.js" type="text/javascript"></script>
    <script src="js/Kozuka_Gothic_Pro_OpenType_700.font.js" type="text/javascript"></script>
    <script src="js/Kozuka_Gothic_Pro_OpenType_900.font.js" type="text/javascript"></script> 
    <script src="js/FF-cash.js" type="text/javascript"></script>     
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/tms-0.3.js"></script>
	<script type="text/javascript" src="js/tms_presets.js"></script>
    <script type="text/javascript" src="js/easyTooltip.js"></script> 
    <script type="text/javascript" src="js/script.js"></script>
	<!--[if lt IE 7]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        	<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
</head>
<body id="page1">
	<!--==============================header=================================-->
    <header>
    	<div class="main">
        	<div class="prev-indent-bot2">
                <h1><a href="index.html">wisesolutions</a></h1>
                <nav>
                    <ul class="menu">
                        <li><a class="active" href="index.php">Home</a></li>
                        <li><a href="#">Balance-Sheet</a></li>
                        <li><a href="#">Income-Statement</a></li>
                    <!--     <li><a href="clients.html">clients</a></li>
                        <li><a href="contacts.html">contacts</a></li> -->
                       
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>
        </div>
        <div class="slider-wrapper">
        	<div class="slider">
            	<ul class="items">
                	<li>
                    	<img src="images/slider-img1.png" alt="">
                        <div class="banner">
                        	<strong>Balance <strong>Sheets</strong></strong>
                            <em>Let’s create your company’s Balance Sheets!</em>
                            <span class="button">
                            	<a href="#"><strong>Read More</strong></a>
                            </span>
                        </div>
                    </li>
                    <li>
                    	<img src="images/slider-img2-.jpg" alt="">
                        <div class="banner">
                        	<strong>Income <strong>Statement</strong></strong>
                            <em>Make your company accounting more effecient with us!</em>
                            <span class="button">
                            	<a href="#"><strong>Read More</strong></a>
                            </span>
                        </div>
                    </li>
                    
                    <!-- <li>
                    	<img src="images/slider-img3-.jpg" alt="">
                        <div class="banner">
                        	<strong>LET US <strong>COOPERATE!</strong></strong>
                            <em>Let’s create your company’s growth strategy together!</em>
                            <span class="button">
                            	<a href="#"><strong>Read More</strong></a>
                            </span>
                        </div>
                    </li> -->

                </ul>
            </div>
        </div>
    </header>
    

    <?php echo $content; ?>
	<!--==============================content================================-->
	<!--
    <section id="content"><div class="ic"></div>
        <div class="main">
            <div class="container_12">
                <div class="wrapper">
                    <article class="grid_6">
                    	<h3>News</h3>
                        <div class="indent-bot">
                        	<time class="tdate-1" datetime="2011-12-24"><strong>24</strong>dec</time>
                            <div class="extra-wrap">
                            	<h6><a class="link" href="#">Ut enim ad minim veniam quis nostrud </a></h6>
                                Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="indent-bot">
                        	<time class="tdate-1" datetime="2011-12-21"><strong>21</strong>dec</time>
                            <div class="extra-wrap">
                            	<h6><a class="link" href="#">Duis auterure dolor reprehenderit</a></h6>
                                Voluptate velit esse cillum dolore eu fugiat nulla<br> pariatur xcepteur sint occaecat.
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="p3">
                        	<time class="tdate-1" datetime="2011-12-09"><strong>09</strong>dec</time>
                            <div class="extra-wrap">
                            	<h6><a class="link" href="#">Cupidatat non proident sunt in culpa </a></h6>
                                Ceserunt mollit anim est laborum tempor incididunt ut labore et dolore magna aliqua.
                            </div>
                            <div class="clear"></div>
                        </div>
                        <span class="button-2">
                            <a href="#"><strong>News Archive</strong></a>
                        </span>
                    </article>
                    <article class="grid_6">
                    	<div class="indent-top">
                            <div class="wrapper indent-bot2">
                                <figure class="img-indent"><img src="images/page1-img1.jpg" alt=""></figure>
                                <div class="extra-wrap">
                                    <h4>We Know <strong>What It Takes</strong><strong class="color-3">to be the <em>Leader!</em></strong></h4>
                                </div>
                            </div>
                            <p class="p1">Wise Solutions is one of <a class="link" target="_blank" href="http://blog.templatemonster.com/free-website-templates/">free website templates</a> created by TemplateMonster.com team. This website template is optimized for 1280X1024 screen resolution. It is also XHTML &amp; CSS valid.</p>
                            <p class="img-indent-bot">This <a class="link" target="_blank" href="http://blog.templatemonster.com/2011/01/03/free-website-template-jquery-slider-business-website/">Wise Solutions Template</a> goes with two packages – with PSD source files and without them. PSD source files are available for free for the registered members of TemplatesMonster.com. The basic package is available for anyone without registration.</p>
                            <span class="button-2">
                                <a href="#"><strong>aBOUT cOMPANY</strong></a>
                            </span>
                        </div>                        
                    </article>
                </div>
            </div>
        </div>
    </section>
    -->
	<!--==============================footer=================================-->
    <footer>
        <div class="main">
        	<div class="container_12">
            	<div class="wrapper">
                	<article class="grid_3">
                    	<ul class="list-services">
                        	<li class="item-1"><a class="tooltips" title="facebook" href="#"></a></li>
                            <li class="item-2"><a class="tooltips" title="twiiter" href="#"></a></li>
                            <li class="item-3"><a class="tooltips" title="delicious" href="#"></a></li>
                            <li class="item-4"><a class="tooltips" title="youtube" href="#"></a></li>
                        </ul>
                    </article>
                    <article class="grid_3">
                    	<div class="indent-left2">
                            <h5>Navigation</h5>
                            <ul class="list-1">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">Balance-Sheet</a></li>
                                <li><a href="#">Income-Statement</a></li>

                               <!--  <li><a href="clients.html">Clients</a></li>
                                <li><a href="contacts.html">Contacts</a></li> -->
                            </ul>
                        </div>
                    </article>
                    <article class="grid_3">
                    	<h5>Contact</h5>
                        <dl class="contact">
                            <dt>Jalan PHH Musthofa<br>Bandung, Jawa Barat<br></dt>
                            <dd><span>Phone:</span>  022-2234324</dd>
                            <dd><span>Fax:</span>  2177637912</dd>
                         </dl>
                    </article>
                    <article class="grid_3">
                    	<h5>Legal</h5>
                        <p class="prev-indent-bot3 color-1">Accounting Solutions &copy; 2011</p>
                        
                        
						
                    </article>
                </div>
            </div>
        </div>
    </footer>
	<script type="text/javascript"> Cufon.now(); </script>
    <script type="text/javascript">
		$(window).load(function(){
			$('.slider')._TMS({
				duration:800,
				easing:'easeOutQuad',
				preset:'simpleFade',
				pagination:true,//'.pagination',true,'<ul></ul>'
				pagNums:false,
				slideshow:7000,
				banners:'fade',// fromLeft, fromRight, fromTop, fromBottom
				waitBannerAnimation:false
			})
		})
	</script>
</body>
</html>
