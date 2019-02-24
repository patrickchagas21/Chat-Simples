<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div class="box">
                    <div class="shape1"></div>
                    <div class="shape2"></div>
                    <div class="shape3"></div>
                    <div class="shape4"></div>
                    <div class="shape5"></div>
                    <div class="shape6"></div>
                    <div class="shape7"></div>
                    <div class="float">
                        <form class="form" action="/login" method="post">
                            <div class="form-group">
                                <label for="username" class="text-white">Usuário:</label><br>
                                <input type="text" name="user_name" id="user_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-white">Senha:</label><br>
                                <input type="text" name="user_password" id="user_password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Entrar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>