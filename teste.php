<?= doctype('html5');?>
<html>

<head>
    <title>Área Administrativa</title>
    
    
    <?php   //metas
        $meta = array(
            array('name' => 'author', 'content' => 'Ivan Rufino Martins'),
            array('name' => 'copyright', 'content' => '© 2013 Ivan Rufino Martins'),
            array('name' => 'description', 'content' => 'Area administrativa restrita'),
            array('name' => 'keywords', 'content' => 'ivan, rufino, martins, portifolio, serviços, ti, sites, sistemas, web, php, mysql, hospedagem'),
            array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv'),
            array('name' => 'Content-language', 'content' => 'pt-br', 'type' => 'equiv'),
            array('name' => 'robots', 'content' => 'None'),
            
        );
        echo meta($meta); 
        
        //css e favicon
        echo link_tag('assets/css/tabela_css.css');
        echo link_tag('assets/css/estilo_Admin.css');
        echo link_tag('assets/css/orbit-1.2.3.css');
        echo link_tag('assets/images/favicon.ico', 'shortcut icon', 'image/x-icon');
?>
<!--    Scripts da pagina-->
    <script type="text/javascript" src="<?= site_url()?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?= site_url()?>assets/js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="<?= site_url()?>assets/js/jquery.orbit-1.2.3.min.js"></script>


<script type="text/javascript">
     $(window).load(function() {
         $('#featured').orbit( {
             animationSpeed: 1000,
             advanceSpeed: 5000,
             bullets:true,
             captions: true,
         });
     });
</script>         
</head>
