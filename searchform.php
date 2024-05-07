<form role="search" method="get" action="<?php echo home_url( '/' ) ?>" class="header__search">
	<input type="text" value="<?php echo get_search_query() ?>" name="s" class="header__search-field" placeholder="Поиск"
		autocomplete="off" minlength="3" required>
	<input type="submit" value="" class="header__search-button">
</form>
