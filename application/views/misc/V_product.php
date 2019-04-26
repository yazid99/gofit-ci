<link rel="stylesheet" type="text/css" href="<?=base_url() ?>assets/css/product.css">
    <div class="container">
        <div class="card my-4 p-2">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">

                        <div class="preview-pic tab-content">
                          <div class="tab-pane active" id="pic-1"><img src="<?= base_url() ?>assets/images/<?=$lapangan->gambar?>" /></div>
                      </div>

                  </div>
                  <div class="details col-md-6">
                    <h3 class="product-title"><?= $lapangan->nama_lapangan?></h3>
                    <span class="review-no"> Lokasi : <?=$lapangan->lokasi?></span>
                    <span>______________________________________________________________________________________________</span>
                    <div class="rating">
                        <span class="review-no"><?=$lapangan->review?> reviews</span>
                    </div>
                    <p class="product-description"><?= $lapangan->additional_info?>.</p>
                    <p class="product-description"><?= $lapangan->jam_kerja?>.</p>
                    <h4 class="price">Harga: <span>35.000 / Jam</span></h4>
                    <p class="vote"><strong>91%</strong> Pelanggan Menyukai Lapangan ini  <strong>(<?= $lapangan->review ?> votes)</strong></p>
                    <div class="input-group date">
                        <div class="input-group-addon">
                         <span class="glyphicon glyphicon-th"></span>
                     </div>
                     <input placeholder="masukkan tanggal Awal" type="text" class="form-control datepicker" name="tgl_awal">
                 </div>
                 <h5 class="sizes">Jam Booking:
                    <select class="mdb-select md-form">
                      <option value="" disabled selected>Pilih Jadwal</option>
                      <option value="1" disabled>10:00-11:00</option>
                      <option value="2">11:00- 12:00</option>
                      <option value="3">12:00- 13:00</option>
                      <option value="3">14:00- 15:00</option>
                      <option value="3">15:00- 16:00</option>
                      <option value="3">16:00- 17:00</option>
                      <option value="3" disabled="">17:00- 18:00</option>
                      <option value="3" disabled="">18:00- 19:00</option>
                      <option value="3">19:00- 20:00</option>
                      <option value="3">20:00- 21:00</option>
                      <option value="3">21:00- 22:00</option>
                  </select>
              </h5>
              <div class="action">
                <?php if (isset($_SESSION['id'])) { ?>
                 <a href="<?=base_url()?>Misc/booklapangan/<?=$this->session->userdata('id')?>/<?=$lapangan->id_lapangan?>"><button class="add-to-cart btn btn-default" >Book!</button></a>
             <?php }else{?>
                 <a href="<?=base_url()?>/Login"><button class="add-to-cart btn btn-default" >Book!</button></a>   
                <?php }?>

            </div>
        </div>
    </div>
</div>
</div>
</div>