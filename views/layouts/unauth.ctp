<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('CakePHP: the rapid development php framework:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('style');
		
		echo $this->Html->css('sys.ui');

		echo $scripts_for_layout;
	?>
</head>
<body id="page-stream">
	<!-- Header start -->
	<div class="header">
    	<!-- Center header -->
    	<div class="c-header m-auto">
        	<div class="logo left">
            	<?php echo $this->Html->image('sofish-logo.png'); ?>
            </div>
          	<div class="search left">
            	<form action="" method="get" class="search-form">
          	  		<label>
          	  		<input type="text" name="textfield" id="search-field" value="Search" onFocus="clearField(this)" onBlur="clearField(this)" />
              		<input name="" type="button" id="search-submit" />
          	  		</label>
          		</form>
            </div>
            <div class="r-avatar right">
				<span id="avatar" class="pull_button" pull="dropMenu"><?php echo $this->Html->image('me.jpg'); ?></span>
				<?php echo $this->element('menu'); ?>
            </div>
			<div class="clear"></div>
		
        </div>
        <!-- End center header -->
    </div>
    <!-- Header end -->
    
    <!-- Main Body start -->
    <div class="main-body">
    	<!-- Center main start -->
    	<div class="c-mainbody m-auto">
        	<!-- Start Left sidebar -->
			<div class="left-sidebar left">
    
			</div>
            <!-- End Left sidebar -->
            
            <!--- Content start -->
            <div class="content left">
				<div id="content">

					<?php echo $this->Session->flash(); ?>

					<?php echo $content_for_layout; ?>

				</div>
                <div class="clear"></div>
            </div>
            <!-- content end -->
            <div class="clear"></div>
        </div>
        <!-- Center main end -->
    </div>
    <!-- Main body end -->
    
    <div class="footer">
		<?php echo $this->element('footer'); ?>
	</div>

</body>
</html>