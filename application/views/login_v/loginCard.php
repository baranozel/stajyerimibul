<div class="container px-4 py-5 mx-auto">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">
                        <form action="<?php echo base_url('login/logindata'); ?>" method="POST">
                            <div class="row justify-content-center px-3 mb-3"> <img id="logo" src="#"> </div>
                            <h3 class="mb-5 text-center heading">stajyerimibul.com</h3>
                            <h6 class="msg-info">Stajyer hesabına giriş yap</h6>
                            <div class="form-group"> <label class="form-control-label text-muted">E-mail</label> <input
                                    type="text" id="email" name="email" placeholder="E-mail" class="form-control">
                            </div>
                            <div class="form-group"> <label class="form-control-label text-muted">Şifre</label> <input
                                    type="password" id="psw" name="sifre" placeholder="Şifre" class="form-control">
                            </div>
                            <div class="row justify-content-center my-3 px-3"> <button class="btn-block btn-color">Giriş
                                    Yap</button> </div>
                        </form>
                        <div class="row justify-content-center my-2"> <a href="#"><small class="text-muted">Şifremi
                                    Unuttum</small></a> </div>
                    </div>
                </div>
                <div class="bottom text-center mb-5">
                    <p href="#" class="sm-text mx-auto mb-3">Stajyer hesabın yok
                        mu?<button onclick="window.location.href='<?php echo base_url('welcome/signup'); ?>'"
                            class="btn btn-white ms-2">Kayıt
                            ol</button></p>
                </div>
            </div>
            <div class="card card2">
                <div class="my-auto mx-md-5 px-md-5 right">
                    <h3 class="text-white">İşveren misin?</h3>
                    <div class="row justify-content-center my-3 px-3"> <button
                            class="btn-block btn-color2 text-black">İşveren hesabıyla oturum aç</button> </div>
                </div>
            </div>
        </div>
    </div>
</div>