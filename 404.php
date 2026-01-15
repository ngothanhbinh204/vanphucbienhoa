<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package vanphucbienhoa
 */

get_header();
?>

<section class="is-outofview fade-in section is-relative block-dark">
	<div
		class="has-text-centered flex-center is-width-desktop formatted is-relative">
		<div class="hero h-40">
			<div class="hero-content">
				<hr />
				<h2 class="title-key has-text-grey">404</h2>
				<h1 class="padding-bottom-double has-text-primary">
					Sorry, we couldn&#039;t find the page you are looking for.
				</h1>
				<div>
					<a
						href="https://www.coachhousepianos.co.uk"
						class="button"
						title="Go back to Coach House Pianos">Homepage</a>
				</div>
			</div>
		</div>
	</div>
	<span class="key-line key-line-bottom"></span>
</section>
<?php
get_footer();
