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
                    <label for='email'>Enter your email</label>
                </div>
            </div>

            <div class='row'>
                <div class='input-field col s12'>
                    <input class='validate' type='password' name='password' id='password' />
                    <label for='password'>Enter your password</label>
                </div>
                <label style='float: right;'>
                    <a class='pink-text' href='#!'><b>Forgot Password?</b></a>
                </label>
            </div>

            <br />
            <center>
                <div class='row'>
                    <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
                </div>
            </center>
        </form>
    </div>
</div>