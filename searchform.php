<form id='searchform' action='<?php echo esc_url( home_url( '/' ) ); ?>' method='get'>

<div class="input-group">
    <div class="input-group-addon" id="search_submit"><i class="glyphicon glyphicon-search"></i></div>
		<input type='text' name='s' class='form-search-field form-control' id="s" placeholder='<?php esc_attr_e( 'Search', 'wsxdevstudio' ); ?>' value="<?php the_search_query(); ?>" />
		
		<!-- <input type='submit' class='search-button' value='</?php esc_attr_e( 'Search', 'wsxdevstudio' ); ?>' /> -->
  </div>
	
</form>