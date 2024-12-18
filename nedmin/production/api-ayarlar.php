<?php include 'header.php' ?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>API Ayarları <small>

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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_title">Analystic API
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="ayar_analystic" value="<?= $ayarcek['ayar_analystic'] ?>" type="text"
                                        id="ayar_title" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_description">Maps API <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="ayar_maps" value="<?= $ayarcek['ayar_maps'] ?>"
                                        type="text" id="ayar_description" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Zopim API <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="ayar_zopim" value="<?= $ayarcek['ayar_zopim'] ?>" type="text"
                                        id="ayar_keywords" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>


                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6  col-md-offset-3 d-flex justify-content-end">
                                    <button name="apiayarkaydet" type="submit"
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