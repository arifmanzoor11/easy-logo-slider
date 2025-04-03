<?php
// Make Post Type Sortable
function els_make_logo_sortable($sortable) {
    $sortable['els_logo'] = 'menu_order';
    return $sortable;
}
add_filter('manage_edit-els_logo_sortable_columns', 'els_make_logo_sortable');