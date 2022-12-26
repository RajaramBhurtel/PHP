<?php $this->extend( 'layouts/admin' ); ?>
<?= $this->section( 'content' );?>
	<div class="merch-container">
		<form class="merch-setting-form" action="<?= lang( 'Route.setting' ); ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
			<input type="hidden" name="id" value="1" />
			<div class="form-row">
				<label><?= lang( 'Fields.label.logo' ); ?></label>
				<input type="file" name="logo" value="<?= set_value('logo') ?>" class="form-control"  id="logo"   />
			</div>
			<div class="form-row">
				<label><?= lang( 'Fields.label.backgroundColorHeader' ); ?></label>
				<input type="color" name="backgroundColorNav" value="<?= $styles[0][ 'value' ] ?>" class="form-control" id="backgroundColor"   />
			</div>
			<div class="form-row">
				<label><?= lang( 'Fields.label.backgroundColorBody' ); ?></label>
				<input type="color" name="backgroundColorBody" value="<?= $styles[1][ 'value' ] ?>" class="form-control" id="backgroundColor"   />
			</div>
			<div class="form-row">
				<label><?= lang( 'Fields.label.primaryColor' ); ?></label>
				<input type="color" name="primaryColor" value="<?= $styles[2][ 'value' ] ?>" class="form-control" placeholder="<?= lang( 'Fields.placeholder.primaryColor' ); ?>" id="primaryColor"   />
			</div>
			<div class="form-row">
				<label><?= lang( 'Fields.label.secondaryColor' ); ?></label>
				<input type="color" name="secondaryColor" value="<?= $styles[3][ 'value' ] ?>" class="form-control" placeholder="<?= lang( 'Fields.placeholder.secondaryColor' ); ?>" id="secondaryColor"  />
			</div>
			<div class="form-row btn-row">				
				<input class="merch-btn btn-green" type="submit" name="submit" value="<?= lang( 'Fields.label.submit') ?> " class="form-control">
			</div>
		</form>
	</div>
<?= $this->endSection(); ?>