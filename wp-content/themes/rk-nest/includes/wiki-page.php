<?php
// Hook for adding admin menus
add_action('admin_menu', 'cust_add_pages');

// Add page(s)
function cust_add_pages() {
    add_menu_page(
    	__('Website Wiki','menu-test'),
    	__('Website Wiki','menu-test'),
    	'manage_options',
        'wiki',
        'cust_wiki_page',
        'dashicons-editor-ol'
    );
}

// Content
function cust_wiki_page() {
	?>

	<br/>
    <h1><?php _e('Shortcodes', be_domain()); ?></h1>
    <p>Please note styling is not applied within backend admin pages</p>

	<h3>Sections</h3>
    <ol>
    	<li><a href="#button">Buttons / CTA</a></li>
    	<li><a href="#email">Spamless Email</a></li>
    </ol>

    <hr>

    <div class="section" id="button">
		<h3><?php _e('Buttons / CTA', be_domain()); ?></h3>
		<?php echo do_shortcode('[button href="www.domain.com"]click me![/button]'); ?>
		<p>Use [button href="www.domain.com"]click me![/button] to display a visual button.</p>
		<p>Optional target parameter if link is needed to open new window/tab. ex [button href='www.domain.com' popout='true']open me in a new window/tab![/button]</p>
	</div>

	 <div class="section" id="email">
		<h3><?php _e('Spamless Email', be_domain()); ?></h3>
		<p>Use [email]info@domain.com[/email] to display an email mailto link which is "spam protected". This shortcode applies javascript that pulls apart the email and displays it broken for bots, but compiled for humans to read.</p>
		<p>Optional use of custom text for link instead of email address. ex [email email='info@domain.com']email me![/email]</p>
		<p>Optional class of btn to give button look, as shown above. ex [email email='info@domain.com' class='btn']email me![/email]</p>
	</div>

    <?php
}

?>
