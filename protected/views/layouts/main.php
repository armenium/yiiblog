<!--<div id="mainmenu">
		<?php /*$this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); */
		?>
</div>
	<?php/* if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?>
	<?php endif*/?>
	-->
<!--

http://test1.ru/index.php?r=site/index
http://test1.ru/index.php?r=site/page&view=about
http://test1.ru/index.php?r=site/contact
http://test1.ru/index.php?r=site/login
http://test1.ru/index.php
Yii::app()->createUrl('site/login');
-->

<?php

function getPageUrl($page){
	return Yii::app()->createUrl($page);
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO -->
    <title>Богдан Тарасенко</title>
    <meta name="description" content="Мой Блог">
    <link type="text/plain" rel="author" href="humans.txt">
    
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon.png"  rel="icon" type="image/png">

    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/materialize.min.css"   media="screen,projection">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="screen,projection">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css" media="screen,projection">
  </head>

  <body>
    
    <div class="highlighted parallax-container">
      <!--<a class="logo" href="index-1.html" >-->
      <a class="logo"> 
        <h2 class="center white-text">Богдан Тарасенко</h2>
        <h6 class="center white-text">Мой блог,мои мысли,моя жизнь</h6>
      </a>
      <div><img src="<?php echo Yii::app()->request->baseUrl;?>/img/highlighted/mountain.jpg"  alt="mountain fog"></div>
    </div>
    
    <header class="white z-depth-1">
      <div class="container">

        <div class="row">

          <div class="col s12">
            <nav>
              <div class="nav-wrapper">
                <a class="button-collapse" href="#" data-activates="nav-mobile">
                  <i class="mdi-navigation-menu"></i>
                </a>

                <ul class="desktop-menu hide-on-med-and-down">
				<?php 
				$this->widget('zii.widgets.CMenu',array('items'=>array(
				array('label'=>'Главная', 'url'=>array('/site/index')),
				array('label'=>'Обо мне', 'url'=>array('/site/page', 'view'=>'about')),
				//array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Авторизация', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Регистрация', 'url'=>array('/site/registration'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); 
		?>
                </ul>

                <ul class="side-nav" id="nav-mobile">
				<?php 
				$this->widget('zii.widgets.CMenu',array('items'=>array(
				array('label'=>'Главная', 'url'=>array('/site/index')),
				array('label'=>'Обо мне', 'url'=>array('/site/page', 'view'=>'about')),
				//array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Регистрация', 'url'=>array('/site/registration'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Авторизация', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); 
				
		?>
                </ul>

              </div>
            </nav>
          </div>
        </div>

      </div>
    </header>


	<?php echo $content; ?>

	<div class="clear"></div>

	<!--
	<div id="footer">
		Copyright &copy; <?php// echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php // echo Yii::powered(); ?>
	</div>
	-->