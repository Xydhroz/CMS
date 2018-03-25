<div class="container">
    <div class="row">
        <div class="col s12 ">
            <div id="logo">
                <img src="<?=$hostName?>assets/img/RigelLogo.png" alt="Rigel CMS">
                <h2 class="indigo-text center">Rigel CMS</h2>
            </div>
            <h5 class="indigo-text center">Accès à l'administration, veuillez vous identifier</h5>
        </div>
    </div>
</div>


<div class="container center">
    <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

        <form class="col s12" method="post">
            <div class='row'>
                <div class='col s12'>
                </div>
            </div>

            <div class='row'>
                <div class='input-field col s12'>
                    <input class='validate' type='email' name='email' id='email' />
                    <label for='email'>Email</label>
                </div>
            </div>

            <div class='row'>
                <div class='input-field col s12'>
                    <input class='validate' type='password' name='password' id='password' />
                    <label for='password'>Mot de passe</label>
                </div>
                <label style='float: right;'>
                    <a class='pink-text' href='#!'><b>Mot de passe oublié ?</b></a>
                </label>
            </div>

            <br />
            <center>
                <div class='row'>
                    <button type='submit' id="login_submit" name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Connexion</button>
                </div>
            </center>
        </form>
    </div>
</div>

<?php

$script .="<script>

       $('#login_submit').click(function(e){
           Materialize.Toast.removeAll();
           e.preventDefault();
           email    = $('#email').val();
           password = $('#password').val();
           
           $.ajax({
                type : 'POST',
                url  : '".$hostName."controller/admin/login.php',
                data : 'email='+email+'&password='+password,
                success : function(data){
                    if(data == 'error'){
                          Materialize.toast('Identifiants Incorrects', 999999999999, 'red') // 4000 is the duration of the toast
                          $('#email').removeClass('valid');
                          $('#email').addClass('invalid');
                          $('#password').removeClass('valid');
                          $('#password').addClass('invalid');
                    }if(data == 'connect'){
                        window.location.replace('".$hostName."admin/accueil');
                    }
                }
           }); 
       });
       
</script>";