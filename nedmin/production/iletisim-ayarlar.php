<?php include 'header.php' ?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>İletişim Ayarları <small>

                                <?php
                                if (!isset($_GET['durum'])) {
                                    echo "İşlem Durumu";
                                } else if ($_GET['durum'] == "ok") { ?>

                                        <b style="color:green">İşlem Başarılı</b>
                                    <?php

                                } else if ($_GET['durum'] == "no") { ?>

                                            <b style="color:red">İşlem Başarısız!</b>

                                    <?php

                                }

                                ?>

                            </small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate
                            class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Telefon Numarası
                                    <span class="requiredé">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="ayar_tel" value="<?= $ayarcek['ayar_tel'] ?>" type="text"
                                         required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Telefon Numarası (GSM)
                                    <span class="requiredé">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="ayar_gsm" value="<?= $ayarcek['ayar_gsm'] ?>" type="text"
                                         required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Fax Numarası
                                    <span class="requiredé">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="ayar_fax" value="<?= $ayarcek['ayar_fax'] ?>" type="text"
                                         required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Mail adresi
                                    <span class="requiredé">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="ayar_mail" value="<?= $ayarcek['ayar_mail'] ?>" type="email"
                                         required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">İl
                                    <span class="requiredé">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="ayar_il" value="<?= $ayarcek['ayar_il'] ?>" type="text"
                                         required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">İlçe
                                    <span class="requiredé">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="ayar_ilce" value="<?= $ayarcek['ayar_ilce'] ?>" type="text"
                                         required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Adres
                                    <span class="requiredé">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea class="form-control col-md-7 col-xs-12" name="ayar_adres"   required="required"  class="form-control" rows="3"><?= $ayarcek['ayar_adres'] ?></textarea>

                                
                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Mesai
                                    <span class="requiredé">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="ayar_mesai" value="<?= $ayarcek['ayar_mesai'] ?>" type="text"
                                         required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6  col-md-offset-3 d-flex justify-content-end">
                                    <button name="iletisimayarkaydet" type="submit"
                                        class="btn btn-success pull-right">Güncelle</button>

                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
<!-- /page content -->


<?php include 'footer.php' ?>