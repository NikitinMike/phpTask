<?php 
use PhpMvc\View;
use PhpMvc\Html;

View::setLayout('_layout');
View::setTitle('Welcome to My Application');
?>

<div class="embed-responsive embed-responsive-16by9">
<form>
    <div> 
        <br/>
            Hello, World!
        <br/>
        <br/>
        <button formaction="views\home\buttonHandler.php">
            <img src="content\images\button.png">
        </button>
    </div>
    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/AvMFHHyhmVM?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
</form>
</div>