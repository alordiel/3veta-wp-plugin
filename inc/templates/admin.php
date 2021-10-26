<div class="veda-container">

	<h1><?php _e( '3veta - Embed your Booking page', '3veta' ) ?></h1>

	<div class="veta-logo-left">
		<img src="<?php echo VETA_REL_URL . '/assets/images'; ?>/3veta-logo-typography-transparent.png"
			 alt="3veta logo">
	</div>

	<div class="booking-url box-container">
		<h2><?php _e( 'Your Booking Page', '3veta' ); ?></h2>
		<div class="veta-content-box">
			<div class="veta-flex-box">
				<div>
					<strong><?php _e( 'Your 3veta booking page', '3veta' ) ?>:</strong>
				</div>
				<div>
					<div class="set-veta-account">
						<input type="text" class="3veta-domain" id="veta-domain">
						<input type="text" disabled value=".3veta.com/booking" style="width: 145px;">
					</div>
					<p><?php _e( 'Your can find your 3veta booking page URL on https://app.3veta.com/my-page', '3veta' ); ?></p>
				</div>
				<div>
					<button type="button" class="veta-button" id="veta-domain-save">
						<?php _e( 'Save Changes', '3veta' ) ?>
					</button>
				</div>
			</div>
		</div>
	</div>

	<div class="shortcodes box-container">
		<h2><?php _e( 'Embed Types', '3veta' ); ?></h2>
		<div class="veta-content-box">
			<table class="veta-table">
				<tbody>
				<tr>
					<td style="width: 130px"></td>
					<td style="width: 70px"><?php _e( 'Height (px)', '3veta' ) ?></td>
					<td style="width: 70px"><?php _e( 'Width (px)', '3veta' ) ?></td>
					<td></td>
					<td style="width: 110px"></td>
				</tr>
				<tr>
					<td><strong><?php _e( 'Inline', '3veta' ) ?></strong></td>
					<td><input id="table-inline-height" class="value-input" type="number" value="600"></td>
					<td><input id="table-inline-width" class="value-input" type="number" value="600"></td>
					<td>
						<input
							disabled
							type="text"
							value="[3veta type='inline' width='600px' height='600px']"
							class="veta-display-shortcode"
						>
					</td>
					<td>
						<button type="button" id="table-copy-inline-shortcode" class="veta-button">
							<?php _e( 'Copy', '3veta' ); ?>
						</button>
					</td>
				</tr>
				<tr>
					<td><strong><?php _e( 'Full page', '3veta' ) ?></strong></td>
					<td><input class="value-input" disabled type="text" value="max"></td>
					<td><input class="value-input" disabled type="text" value="max"></td>
					<td>
						<input
							disabled
							type="text"
							value="[3veta type='full']"
							class="veta-display-shortcode full-page-shortcode"
						>
					</td>
					<td>
						<button class="veta-button" type="button" id="table-copy-full-page-shortcode">
							<?php _e( 'Copy', '3veta' ); ?>
						</button>
					</td>
				</tr>
				</tbody>
			</table>

			<div class="veta-list-of-options">
				<div class="inline-mobile-shortcode" style="margin-bottom: 30px">
					<h3><?php _e( 'Inline shortcode', '3veda' ) ?></h3>
					<p>
						<label for="boxed-inline-height">
							<?php _e( 'Height (px)', '3veta' ) ?>
							<input id="boxed-inline-height" class="value-input" type="number" value="600">
						</label>
					</p>
					<p>
						<label for="boxed-inline-width">
							<?php _e( 'Width (px)', '3veta' ) ?>
							<input id="boxed-inline-width" class="value-input" type="number" value="600">
						</label>
					</p>
					<p>
						<input
							disabled
							type="text"
							value="[3veta type='inline' width='600px' height='600px']"
							class="veta-display-shortcode"
						>
					</p>
					<button type="button" id="boxed-copy-inline-shortcode" class="veta-button">
						<?php _e( 'Copy', '3veta' ); ?>
					</button>
				</div>

				<div class="full-page-shortcode">
					<h3><?php _e( 'Full page shortcode', '3veda' ) ?></h3>
					<p>
						<input
							disabled
							type="text"
							value="[3veta type='full']"
							class="veta-display-shortcode full-page-shortcode"
						>
					</p>
					<button class="veta-button" type="button" id="boxed-copy-full-page-shortcode">
						<?php _e( 'Copy', '3veta' ); ?>
					</button>
				</div>
			</div>
		</div>
	</div>

	<div class="quick-links box-container">
		<h2><?php _e( 'Quick links', '3veta' ); ?></h2>
		<div class="veta-content-box">
			<a href="https://app.3veta.com/login"><?php _e( 'Manage my 3veta bookable services', '3veta' ) ?></a>
			<a href="https://app.3veta.com/login"><?php _e( 'Go to my 3veta meetings', '3veta' ) ?></a>
			<a href="https://3veta.com/about#contact"><?php _e( 'Contact Support', '3veta' ) ?></a>
		</div>
	</div>

	<div class="3veta-faq box-container">
		<h2><?php _e( 'FAQs', '3veta' ); ?></h2>
		<div class="veta-content-box">
			<div>
				<h3>What is Lorem Ipsum?</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
					industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
					and scrambled it to make a type specimen book. </p>
			</div>
			<div>
				<h3>What is Lorem Ipsum?</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
					industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
					and scrambled it to make a type specimen book. </p>
			</div>
			<div>
				<h3>What is Lorem Ipsum?</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
					industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
					and scrambled it to make a type specimen book. </p>
			</div>
		</div>
	</div>
</div>
