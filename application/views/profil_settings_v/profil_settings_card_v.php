<div class="container rounded bg-white mt-5 mb-5">
    <form action="<?php echo base_url('logout') ?>">
        <button class="btn  profile-button">Çıkış Yap</button>
    </form>
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                    width="150px"
                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold"><?php echo $this->session->userdata('First_Name'); ?>
                    <?php echo   $this->session->userdata('Last_Name'); ?></span>
                <span class="text-black-50"><?php echo $this->session->userdata('email'); ?></span><span> </span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profil Ayarları</h4>
                </div>
                <form action="<?php echo base_url('profile/profiledata') ?>" method="POST">
                    <div class="row mt-2">

                        <div class="col-md-6"><label class="labels">Ad</label><input name="First_Name" type="text"
                                class="form-control2" placeholder="ad"
                                value="<?php echo $this->session->userdata('First_Name'); ?>"></div>
                        <div class="col-md-6"><label class="labels">Soyad</label><input name="Last_Name" type="text"
                                class="form-control2" value="<?php echo $this->session->userdata('Last_Name'); ?>"
                                placeholder="soyad"></div>

                    </div>
                    <div class="row mt-3">

                        <div class="col-md-12"><label class="labels">Telefon Numarası</label><input name="phone"
                                type="text" class="form-control2" placeholder="telefon numarası"
                                value="<?php echo $this->session->userdata('phone'); ?>"></div>
                        <div class="col-md-12"><label class="labels">Email</label><input name="email" type="text"
                                class="form-control2" placeholder="email"
                                value="<?php echo $this->session->userdata('email'); ?>"></div>
                        <div class="col-md-12">
                            <label class="labels">Öğrenim</label>
                            <select class="form-control" id="sel1">
                                <option>Üniversite</option>
                                <option>Lise</option>
                            </select>
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Şehir</label><input name="city" type="text"
                                class="form-control2" placeholder="şehir"
                                value="<?php echo $this->session->userdata('city'); ?>"></div>
                        <div class="col-md-6"><label class="labels">Semt</label><input name="semt" type="text"
                                class="form-control2" value="<?php echo $this->session->userdata('semt') ?>"
                                placeholder="semt"></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn  profile-button submit">Kaydet</button>
                    </div>
                </form>

            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience">
                    <span>Deneyimler</span><span class="border px-3 p-1 add-experience"><i
                            class="fa fa-plus"></i>&nbsp;Ekle</span>
                </div><br>
                <div class="col-md-12"><label class="labels">Bilmemne olarak</label><input type="text"
                        class="form-control2" placeholder="bilmemne bilmemne şirketi" disabled value=""></div> <br>
                <div class="col-md-12"><label class="labels">Bilmemne olarak</label><input type="text"
                        class="form-control2" placeholder="bilmemne bilmemne şirketi" disabled value=""></div> <br>
            </div>
        </div>
    </div>
</div>
</div>
</div>