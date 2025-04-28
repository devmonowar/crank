<div class="sidebar__widget-content">
   <div class="sidebar__search">
      <form action="<?php echo esc_url(home_url('/')); ?>">
         <div class="sidebar__search-input-2">
            <input type="text" name="s" placeholder="<?php echo esc_attr__('Search Here', 'crank'); ?>" value="<?php echo esc_attr(get_search_query()); ?>">
            <button type="submit"><i class="far fa-search"></i></button>
         </div>
      </form>
   </div>
</div>