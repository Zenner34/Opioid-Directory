<?php $search_terms = htmlspecialchars( $_GET["s"] ); ?>
<form class="navbar-form navbar-left" action="<?php bloginfo('siteurl'); ?>/" id="searchform" method="get">
    <div class="form-group">
        <input type="text" class="form-control" id="s" name="s" placeholder="Search"<?php if ( $search_terms !== '' ) { echo ' value="' . $search_terms . '"'; } ?> />
    </div>
    <button type="submit" value="Search" class="btn btn-grn">Search</button>
</form>