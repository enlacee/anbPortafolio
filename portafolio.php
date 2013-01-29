
<div id="impress">

    <div id="overview" class="step" data-x="500" data-y="500" data-scale="6">
    </div>

    <div id="title" class="step" data-x="750" data-y="-600" data-scale="4">
        <span class="try">Love, afisi&oacuten por la Web</span>
        <h1>www<sup>...</sup></h1>
        <span class="footnote"><sup></sup> geek|developer|programador|Jedy|Ninja ... web</span>
    </div>


    <div class="step" data-x="2200" data-y="800" data-scale="4">

        <span class="try">Anibal Copitan Norabuena</span><br>
        <q class=" thoughts" style="font-size: 70%">
            in <a href="#">detops.tk@gmail.com</a>
            or (0051)991017327
        </q><br>        
        <p class="message">Con&oacuteceme un poco mas<p><br>
            <b>sigue leyendo... :D</b>
    </div>


    <div class="step" data-x="-700" data-y="1200" data-rotate="-3" data-scale="3">
        Desarrollo y Experiencia en:</br>
        <span class="try"><b>Front End</b></span></br>
        <ol>
            <li>JavaScript => Jquery, backbone</li>
            <li>Diseño Web => Html5 and Css3</li>
            <li>Soporte Web => Chrome, FireFox</li>
        </ol>

        <span class="try"><b>Back End</b></span><br>

        <ol>
            <li>PHP => CodeIgniter, WordPress</li>
            <li>MySQL, SqlLite, SQLServer</li>
            <li>Python</li>
        </ol>
    </div>    



    <div  class="step" data-x="900" data-y="2500" data-scale="3">
        Sospecho que quieres ver mas acci&oacuten :P entonces
        <b class="positioning"> </b><q class="thoughts"><a href="?op=galeria-web">click me.</a></q>
    </div>    


    <div class="hint">
        <p>Use a spacebar or arrow keys to navigate</p>
    </div>
</div><!--end impress -->
<link href='<?php bloginfo('template_url'); ?><?php echo "/css/impress-demo.css"; ?>' rel="stylesheet" />

<script>
    if ("ontouchstart" in document.documentElement) { 
        document.querySelector(".hint").innerHTML = "<p>Tap on the left or right to navigate</p>";
    }
</script>
<script  src='<?php bloginfo("template_directory"); ?><?php echo "/js/impress.js"; ?>'></script>
<script>impress().init();</script>
