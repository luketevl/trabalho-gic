<html>

<head>
	<link rel="stylesheet" href="<?php echo base_url(); ?>/resources/jquery-notification/notification.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>/resources/css/style.css" />
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/common/jquery.js" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/common/load.js" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/common/functions.js" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/jquery-notification/jquery.notification.js" ></script>
</head>


<form method="post" action="mostrar.php" id="form">
    <div>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" class="number" />
    </div>
    <div>
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" name="sobrenome" id="sobrenome" class="required" />
    </div>            
    <div class="submit">
        <input type="submit" />
    </div>
</form>