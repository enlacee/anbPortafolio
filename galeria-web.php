
<style type="text/css">
    .galeria-web{
        
        width: 660px;
        background-color: #fff;
    }
    .galeria-web li{
        width: 250px;
        height: 250px;
        float: left;
        padding: 10px;
        margin: 5px;
        list-style: none;
        border: 1px solid #999;
        background-color: #ccf;
    }
</style>

<div class="wrapper galeria-web" style="margin: 0 auto;">
    <div style="clear: both"></div>
    <h1>Proyectos Webs.</h1>
    <?php
    $galeria_raiz = '/images/galeria-web';
    $directorio = TEMPLATEPATH . $galeria_raiz . '/250';
    //echo $directorio . "</br>";
    
    if (is_dir($directorio)) {
        // echo "SI existe ".$directorio;
        $content_dir = scandir($directorio);

        $files = array();
        foreach ($content_dir as $key => $value) {
            //$s=strripos( $value,'png');
            // $s= stristr( $value,'png');
            $rpta = strstr($value, 'png');
            if ($rpta != false) {
                $files[] = $value;
            }
        }
    }
//    echo "<pre>";
//    echo print_r($files);
//    echo "<pre>";
    ?>
    <ul>
    <?php foreach ($files as $key => $value): ?>
            <li><img src="<?php bloginfo("template_directory"); ?><?php echo $galeria_raiz . '/250/' . $value; ?>"></li>     
        <?php endforeach; ?>      
    </ul>
    
    <div style="clear: both"></div>
</div>


