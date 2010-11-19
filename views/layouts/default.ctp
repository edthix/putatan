<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" id="putatan">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Putatan<?php echo ' : '. $title_for_layout; ?></title>
<?php
echo $this->Html->charset();
echo $this->Html->css(array('reset', 'text', '960', 'putatan'));
//echo $this->Html->script(array('jquery-1.4.3.min','candy-shop'));
?>
</head>

<body>

<div class="container_12" style="background:#ffffff;">

	<div class="grid_12">
            
                <h1><a href="#">Codename: Putatan</a></h1>
                <hr />
                
                <div id="search">
                    
                    <!-- <h3>Search First</h3>-->
                    <?php echo $this->Session->flash(); ?>
                    
                    <fieldset>
                                                       
                            <form action="/questions/search" method="get">
                                <input type="text" name="q" id="q" class="search" value="Cari jawapan dulu.." /><br />
                                <input type="submit" name="search" value="OK bah!" class="button_search" />
                            </form>
                            
                    </fieldset>
                </div>
                <hr />

        </div><div class="clear"></div><!-- /.grid_12 -->

        <div class="grid_9">                

        
        
                <?php echo $content_for_layout; ?>
        
        

                                               
        </div>
        
        <div class="grid_3">                
                
                <div class="section">         
                    <?php echo $this->Html->link(__('New Question', true), array('action' => 'add')); ?>
                </div>
                <br />
                         
                <div class="section">
                    <h2>Tags</h2>
                    <ul>
                        <?php for($i=0; $i<3; $i++) { ?>
                        <li><a href="#">Lorem Ipsum</a></li>
                        <li><a href="#">Dolor Sit Amet</a></li>
                        <li><a href="#">Lorem Ipsum
                        <li><a href="#">Dolor Sit</a></li>
                        <?php } ?>
                    </ul>
                </div>                         
                         
                            
        </div>
        
        <div class="clear"></div>
        
</div>
<br />
<div style="background:#ffffff"><?php echo $this->element('sql_dump'); ?></div>

</body>
</html>