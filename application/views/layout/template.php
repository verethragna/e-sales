<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php base_url() ?>css/style.css">
</head>
<body>
<div id="wrapper">
	
        <div id="header">
        <?php
            $this->load->view('layout/t_header');
        ?>
        </div>    
        <div id="content">
        <?php 
			$this->load->view('layout/t_content');
		?>
        </div>
        <?php
			$this->load->view('layout/t_footer');
		?>
        <div id="footer">
        
    </div>
    
</div>   
</body>
</html>