<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label for="search">Search</label>
    <!-- <input type="hidden" name="cat" value="10" Restrict search to specific category-->
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" required>
    <button type="submit">Suchen!</button>
</form>
