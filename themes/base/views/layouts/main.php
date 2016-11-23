<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<?php
		// Suppress Yii's autoload of JQuery
		// We're loading it at bottom of page (best practice)
		// from Google's CDN with fallback to local version 
		Yii::app()->clientScript->scriptMap=array(
			'jquery.js'=>false,
		);
		
		// Load Yii's generated javascript at bottom of page
		// instead of the 'head', ensuring it loads after JQuery
		Yii::app()->getClientScript()->coreScriptPosition = CClientScript::POS_END;
	?>
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width">
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-and-responsive.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
	
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>


<!--script language=JavaScript>


function inhabilitar(){
    alert ("Esta función está inhabilitada.\n\nPerdonen las molestias.")
    return false
}

document.oncontextmenu=inhabilitar


</script--> 

</head>
<body>

<div class="container">
	<div class="row">
		<header class="span12">
			<div id="header-top" class="row">
				<div class="span4">
					<a href="<?php echo Yii::app()->request->baseUrl; ?>/">
	<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/uagrm.png" alt="" />




					</a>
				</div>
				<div class="span8">
					<p style="text-align:right;">
						contactenos al  72630007<br />
						
					</p>
				</div>
			</div>

			<div class="navbar">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<a class="brand" href="<?php echo Yii::app()->request->baseUrl; ?>/"><?php echo CHtml::encode(Yii::app()->name); ?></a>
						<div class="nav-collapse">
						<?php $this->widget('zii.widgets.CMenu',array(
							'items'=>array(							

				array('label'=>'Home', 'url'=>array('/site/index')),
			//	array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Administrador', 'url'=>array('/administrador/index')),
				array('label'=>'Evento', 'url'=>array('/Evento/index')),
				array('label'=>'Evento_Programado', 'url'=>array('/EventoProgramado/index')),
				array('label'=>'Expositor', 'url'=>array('/Expositor/index')),
				array('label'=>'Facultad', 'url'=>array('/Facultad/create')),
			//	array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)

    //    <td width="33%" align="center"><a href="/../prueba1/index.php/foto/index">Ir a yii</a> </td>
							),
							'htmlOptions'=>array('class'=>'nav'),
						)); ?>
						 
  		<!--li><td width="33%" align="center"><a href="/../../carro_ronney/index.php">Ir a yii</a></li></td-->
					
						</div>
					</div>
				</div>
			</div><!-- navbar -->
			
			<?php if(isset($this->breadcrumbs)):?>
				<?php $this->widget('zii.widgets.CBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
					'htmlOptions'=>array('class'=>'breadcrumbs breadcrumb'),
				)); ?><!-- breadcrumbs -->
			<?php endif?>
		</header>
	</div>
	
	<div class="row">
		<div class="span12">
			<?php echo $content; ?>
		</div>
	</div>

	<div class="row">
		<footer class="span12">
			<div class="row">
				<div class="span8">
					<p>Copyright &copy; <?php echo date('Y'); ?> compañia UAGRM - All Rights Reserved.</p>
				</div>
				<div class="span4">
					<p style="text-align:right;">diseño web <a href="#" target="_blank">Ronny Alexander Fernandez</a></p>
				</div>
			</div>
		</footer>
	</div><!-- footer -->

</div><!-- container -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/libs/jquery-1.7.2.min.js"><\/script>')</script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/libs/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/script.js"></script>
<script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>