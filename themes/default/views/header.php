<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>
<?php foreach ($servers as $index => $server):?>
	<?php if($index == $serverIndex): ?>
		<?php echo $server["mongo_name"] ?>
	<?php endif ?>
<?php endforeach ?>
</title>
<script language="javascript" src="js/jquery-1.4.2.min.js"></script>
<script language="javascript" src="js/jquery.textarea.js"></script>
<link rel="stylesheet" href="<?php render_theme_path() ?>/css/global.css" type="text/css" media="all"/>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<?php render_page_header(); ?>
<script language="javascript">
$(function () {
	$(document).click(window.parent.hideMenus);
	if ($("textarea").length > 0) {
		$("textarea").tabby();
<<<<<<< HEAD


		// Search with ID field
=======
		
		
		// Search with ID field 
>>>>>>> dolarion/master
 		var elTextField = $("<input />").attr({type: 'text', size: 30}).keypress(function(e) {
	            if (e.keyCode == '13') {
	                e.preventDefault();
	                $(this).parent().find('input:last').click();
	            }
	        });
        	var elButton    = $("<input />").attr({type: 'button', value: 'Select by ID'})
	                                        .bind('click', function (e) {
	                                            var v = $(this).parent().find('input:first').val();
	                                            // заветная строка!
<<<<<<< HEAD
	                                            $('#query_form textarea').val('{\n\t\"_id\": ObjectId(\"'+v+'\")\n}');
=======
	                                            $('#query_form textarea').val('{\n\"_id\": ObjectId(\"'+v+'\")\n}');
>>>>>>> dolarion/master
	                                            $('#query_form').submit();
	                                        });
	        $("<div />")
	            .html('_id: ')
	            .css({paddingLeft: 5, paddingTop: 4})
	            .append(elTextField)
	            .append(' ')
	            .append(elButton)
	            .prependTo('#query_form');
<<<<<<< HEAD


=======
            
            
>>>>>>> dolarion/master
	}
});
</script>
</head>
<body>
