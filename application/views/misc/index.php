 

<div class="container kontainer-konten my-4">
	<div class="d-flex flex-row flex-wrap konten">
	<?php foreach ($lapangans as $lapangan){ ?>
		<div class="col-md-4">
			<figure class="card card-product">
				<div class="img-wrap d-flex"><img src="<?php base_url() ?>assets/images/<?= $lapangan->gambar ?>"></div>
				<figcaption class="info-wrap">
					<h4 class="title"><?= $lapangan->nama_lapangan ?></h4>
					<p class="desc"><?= $lapangan->deskripsi_lapangan ?></p>
					<div class="rating-wrap">
						<div class="label-rating">Reviews <?= $lapangan->review ?></div>
					</div> <!-- rating-wrap.// -->
				</figcaption>
				<div class="bottom-wrap">
					<a href="<?= base_url()?>Home/lapangan/<?= $lapangan->id_lapangan?>" class="btn btn-sm btn-primary float-right">Details</a>	
					<div class="price-wrap h5">
					</div> <!-- price-wrap.// -->
				</div> <!-- bottom-wrap.// -->
			</figure>
		</div>
	<?php } ?>

	</div>
</div>


</html>