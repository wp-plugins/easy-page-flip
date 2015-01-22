<?php
	$absolute_path = __FILE__;
	$path_to_file = explode( 'wp-content', $absolute_path );
	$path_to_wp = $path_to_file[0];
	require_once( $path_to_wp . '/wp-load.php' );
	header('HTTP/1.1 200 OK');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link href="<?php echo plugins_url( '/css/chrEpf-tinymce.css' , __FILE__ );?>" type="text/css" rel="stylesheet">
	<script>
	//<![CDATA[
		jQuery(document).ready(function($) {

			$(".insert_epc").click (function () {
				var order = $('select.order option:selected').val();
				var orderby = $('select.orderby option:selected').val();
				var page = $('select.page option:selected').val();
				var thumb = $('select.thumb option:selected').val();
				tinymce.execCommand('mceInsertContent', false, '[chr-pageflip-list order="'+order+'" orderby="'+orderby+'" posts="'+page+'" thumb="'+thumb+'"]');
				$("#TB_overlay, #TB_window").remove();
				return false;
			});
		
			var	ajaxCont = $('#TB_ajaxContent'),
		
			tbWindow = $('#TB_window');
		
			ajaxCont.css({
				padding: 0,
				width: '94%',
				overflowY: 'scroll',
				height: 320,
				padding: 20
			});
		
			tbWindow.css({
				width: ajaxCont.outerWidth(),
				marginLeft: -(ajaxCont.outerWidth()/2),
				height: 340
			});

		})		
	</script>
</head>
<body>
	<fieldset>  
		<legend>Easy Page Flip</legend>
		
		<h3><?php echo __('Select the order:','easy-page-flip' );?></h3>
		<ul class="ul-list-order">
			<li>
				<select class="order" style="width: 30%; display: inline-block;">
					<option value="DESC" selected><?php echo __('Descending','easy-page-flip' );?></option>
					<option value="ASC"><?php echo __('Ascending','easy-page-flip' );?></option>
  				</select> 
			</li>
		</ul>
		
		<h3><?php echo __('Select order by:','easy-page-flip' );?></h3>
		<ul class="ul-list-order">
			<li>
				<select class="orderby" style="width: 30%; display: inline-block;">>
					<option value="date" selected><?php echo __('Date','easy-page-flip' );?></option>
					<option value="ID"><?php echo __('ID','easy-page-flip' );?></option>
					<option value="title"><?php echo __('Title','easy-page-flip' );?></option>
					<option value="rand"><?php echo __('Random','easy-page-flip' );?></option>
  				</select> 
			</li>
		</ul>
		
		<h3><?php echo __('List Magazines per Page:','easy-page-flip' );?></h3>
		<ul id="ul-list-page">
			<li>
				<select class="page" style="width: 30%; display: inline-block;">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6" selected>6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="-1"><?php echo __('All','easy-page-flip' );?></option>
  				</select> 
			</li>
		</ul>

		<h3><?php echo __('Image Size:','easy-page-flip' );?></h3>
		<ul id="ul-list-image">
			<li>
				 <?php
					$new_sizes = array();
					$added_sizes = get_intermediate_image_sizes();
	    		?>
				<select class="thumb" style="width: 30%; display: inline-block;">
				<?php foreach( $added_sizes as $key => $value) : ?>
					<option value="<?php echo $new_sizes[$value] = $value;?>"><?php echo $new_sizes[$value] = $value ;?></option>';
	    		<?php endforeach ?>
				</select> 
			</li>
		</ul>

		
		<button class="insert_epc" id="btn-send"><?php echo __('Submit','easy-page-flip' );?></button>

	</fieldset>
</body>
</html>