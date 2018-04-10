<div class="container">
    <div class="row">
        <div class="col s12">
            <h1>404 NOT FOUND ! </h1>
            <?php
                if($_GET['page'] != 'index'){
                    echo '<h3>La page '.$_GET['view'].'/'.$_GET['page'].' n\'existe pas</h3>';
                }else{
                    echo '<h3>La page '.$_GET['view'].' n\'existe pas</h3>';
                }
            ?>
        </div>
    </div>
</div>