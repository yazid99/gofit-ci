<link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/cart.css">
<div class="container my-4">
   <div class="card shopping-cart">
            <div class="card-header bg-dark text-light">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Daftar
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
                <?php if (empty($laps)) {?>
                    <h1> Keranjang belanda anda kosong, Sewa Lapangan <a href="<?=base_url()?>/Misc">Disini</a></h1>
                <?php }else{ ?>
                <?php foreach ($laps as $lap) { ?>
                    <!-- PRODUCT -->
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="img-responsive" src="<?=base_url() ?>assets/images/<?=$lap->gambar ?>" alt="prewiew" width="120" height="80">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                            <h4 class="product-name"><strong><?= $lap->nama_lapangan?></strong></h4>
                            <h4>
                                <small><?= $lap->deskripsi_lapangan?> (Tanggal sekian) (Pukul Sekian) </small>
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-10 col-sm-3 col-md-6 text-right" style="padding-top: 5px">
                                <h6><strong>Rp35.000</strong></h6>
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 text-right">
                                <a href="<?= base_url() ?>C_cart/deleteCartContent/<?=$lap->id_bookingan?>"><button type="button" class="btn btn-outline-danger btn-xs">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button></a>
                            </div>

                        </div>
                    </div>
                    <hr>
                    <!-- END PRODUCT -->    
                <?php }?>
            <?php } ?>
            </div>
            <div class="card-footer">
                <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="Kode Kupon">
                        </div>
                        <div class="col-6">
                            <input type="submit" class="btn btn-primary" value="Gunakan Kupon">
                        </div>
                    </div>
                </div>
                <div class="pull-right" style="margin: 15px">
                    <a href="" class="btn btn-success pull-right">Checkout</a>
                </div>
            </div>
        </div>
</div>