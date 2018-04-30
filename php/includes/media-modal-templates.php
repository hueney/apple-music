<?php

namespace Apple_Music;

function search() {
	?>
	<script type="text/html" id="tmpl-apple-music-search">

		<form action="#" class="apple-music-toolbar-container clearfix">
			<label for="apple-music-search"><?php esc_html_e( 'Search', 'apple-music' ); ?></label>
			<!-- Input name below should come from the data -->
			<input
				type="text"
				name="{{ data.tab }}"
				value=""
				class="apple-music-input-text apple-music-input-search"
				size="40"
				id="apple-music-search"
				placeholder="<?php echo esc_attr__( 'Search Apple Music', 'apple-music' ); ?>"
			>
			<input class="button button-large" type="submit" value="<?php esc_attr_e( 'Search', 'apple-music' ); ?>">
			<div class="spinner"></div>
		</form>

	</script>
	<?php
}

function item() {
	?>
	<!-- Is data.tab available? -->
	<script type="text/html" id="tmpl-apple-music-item">
		<div id="apple-music-item-{{ data.tab }}-{{ data.id }}" class="apple-music-item-area" data-id="{{ data.id }}">
			<div class="apple-music-item-container clearfix">
				<div class="apple-music-thumb">
					<img src="{{ data.thumbnail }}" alt="">
				</div>
				<div class="apple-music-item-main">
					<div class="apple-music-item-content">
						{{{ data.content }}}
					</div>

				</div>
			</div>
		</div>
		<a href="#" id="apple-music-check-{{ data.id }}" data-id="{{ data.id }}" class="check" title="<?php esc_attr_e( 'Deselect', 'apple-music' ); ?>">
			<div class="media-modal-icon"></div>
		</a>
	</script>
	<?php
}

function sidebar() {
	?>
	<script type="text/html" id="tmpl-apple-music-sidebar">
		<h3>{{ data.content }}</h3>
		<p>{{ data.description }}</p>

		<form action="#" class="clearfix">
			<!-- Player should only be an option for songs, albums and playlists -->
			<p><input type="radio" name="format" value="player" id="player"><label for="player"><?php esc_html_e( 'Player', 'apple-music' ); ?></label></p>
			<p><input type="radio" name="format" value="badge" id="badge"><label for="badge"><img src="<?php echo esc_url( PLUGIN_DIR_URL . 'assets/images/badge.svg' ); ?>" alt="<?php esc_html_e( 'Apple Music badge icon', 'apple-music' ); ?>"/></label></p>
			<p><input type="radio" name="format" value="text-lockup" id="text-lockup"><label for="text-lockup"><img src="<?php echo esc_url( PLUGIN_DIR_URL . 'assets/images/standard-black.svg' ); ?>" alt="<?php esc_html_e( 'Apple Music text lockup icon', 'apple-music' ); ?>"/></label></p>
			<p><input type="radio" name="format" value="app-icon" id="app-icon"><label for="app-icon"><img src="<?php echo esc_url( PLUGIN_DIR_URL . 'assets/images/app-icon-black.svg' ); ?>" alt="<?php esc_html_e( 'Apple Music app icon', 'apple-music' ); ?>"/></label></p>
			<p><input type="radio" name="format" value="link" id="link"><label for="link"><?php esc_html_e( 'Link', 'apple-music' ); ?></label></p>
		</form>

	</script>
	<?php
}
