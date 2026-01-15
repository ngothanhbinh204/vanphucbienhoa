<?php
/**
 * Custom Menu Walker and Helper Functions for Van Phuc Theme
 * Handles splitting the menu into Left/Right and rendering detatched Mega Menu Trays.
 */

class CHP_Menu_Walker {

    /**
     * Cache for menu trees to avoid re-processing
     */
    private static $trees = [];

    /**
     * Get menu items as a nested tree structure
     * 
     * @param string $location Theme location key
     * @return array Nested array of menu items
     */
    public static function get_tree($location) {
        if (isset(self::$trees[$location])) {
            return self::$trees[$location];
        }

        $locations = get_nav_menu_locations();
        if (!isset($locations[$location])) {
            self::$trees[$location] = [];
            return [];
        }

        $menu_id = $locations[$location];
        $items = wp_get_nav_menu_items($menu_id);

        if (!$items) {
            self::$trees[$location] = [];
            return [];
        }

        // Index items by ID
        $items_by_id = [];
        foreach ($items as $item) {
            $item->children = [];
            $items_by_id[$item->ID] = $item;
        }

        $tree = [];
        foreach ($items as $item) {
            if ($item->menu_item_parent && isset($items_by_id[$item->menu_item_parent])) {
                $items_by_id[$item->menu_item_parent]->children[] = $item;
            } else {
                $tree[] = $item;
            }
        }

        self::$trees[$location] = $tree;
        return $tree;
    }

    /**
     * Render the desktop top-level links (Left or Right)
     * 
     * @param string $location Menu location 'menu-left' or 'menu-right'
     * @param int $start_index Global index offset for IDs (e.g. navigation_0)
     * @return int The count of items rendered
     */
    public static function render_desktop_links($location, $start_index = 0) {
        $items = self::get_tree($location);
        $count = count($items);
        $side = ($location === 'menu-left') ? 'left' : 'right';
        $class = 'menu-links-' . $side;
        
        // HTML Attribute data-count-left or data-count-right
        $attr = 'data-count-' . $side . '="' . $count . '"';

        echo '<ul class="menu-links ' . esc_attr($class) . '" ' . $attr . '>';
        
        foreach ($items as $index => $item) {
            $global_index = $start_index + $index;
            // The HTML uses id="navigation_0"
            $id = 'navigation_' . $global_index;
            $title = $item->title;
            $url = $item->url;
            
            echo '<li><a id="' . esc_attr($id) . '" class="tray_link_hover" href="' . esc_url($url) . '">' . esc_html($title) . '</a></li>';
        }

        echo '</ul>';
        return $count;
    }

    /**
     * Render the desktop Mega Menu Trays for ALL items (Left + Right combined)
     * 
     * @param array $locations Array of locations ['menu-left', 'menu-right']
     */
    public static function render_desktop_trays($locations) {
        $all_items = [];
        foreach ($locations as $loc) {
            $all_items = array_merge($all_items, self::get_tree($loc));
        }

        foreach ($all_items as $index => $item) {
            $tray_id = 'navigation_' . $index . '_tray';
            // Even if no children, we might need a tray if there is promo content? 
            // Static HTML seems to have trays for everything. 
            // If strictly empty, maybe skip? But let's assume we render structure.
            
            $has_children = !empty($item->children);
            $promo_image = get_field('menu_promo_image', $item); // Assumed ACF Field
            
            // If typical "Mega Menu" structure
            echo '<div class="mega_menu_tray" id="' . esc_attr($tray_id) . '">';
            echo '<div class="tray_container">';
            echo '<div class="row mega-menu-inner">';
            
            // ---------------- COLUMNS WRAP (Left Side) ----------------
            echo '<div class="col-8 nav-columns-wrap">';
            echo '<div class="row">';
            
            if ($has_children) {
                foreach ($item->children as $column) {
                    echo '<div class="col-3 col-links mr-auto">';
                    echo '<div class="menu-column-label">' . esc_html($column->title) . '</div>';
                    echo '<div class="menu-column-links">';
                    echo '<ul class="mr-5">';
                    
                    if (!empty($column->children)) {
                        foreach ($column->children as $link) {
                            $link_class = 'mega-nav-link';
                            // Check specific classes if needed (e.g. column-summary-link)
                            // We can use standard WP classes
                            if (in_array('summary-link', $link->classes)) {
                                $link_class .= ' column-summary-link';
                            }
                            echo '<li class="' . esc_attr($link_class) . '"><a href="' . esc_url($link->url) . '" target="' . esc_attr($link->target) . '">' . esc_html($link->title) . '</a></li>';
                        }
                    }
                    
                    echo '</ul>';
                    echo '</div>'; // .menu-column-links
                    echo '</div>'; // .col-links
                }
            } else {
                // No children, maybe plain links or empty
            }
            
            echo '</div>'; // .row
            echo '</div>'; // .col-8.nav-columns-wrap
            
            // ---------------- PROMO IMAGE (Right Side) ----------------
            echo '<div class="col-4 menu-image-link">';
            
            // Use ACF fields if available, otherwise fallback or empty
            $image_url  = get_field('menu_promo_image', $item->ID); 
            $image_link = get_field('menu_promo_link', $item->ID);
            $image_text = get_field('menu_promo_text', $item->ID);
            $image_btn  = get_field('menu_promo_button_text', $item->ID) ?: 'SHOP NOW';

            // Fallback for demo if no ACF yet, or just empty structure
            if ($image_url) {
                echo '<div class="image-link-wrap"><a class="image_container" href="' . esc_url($image_link) . '" target="">';
                echo '<div class="image-16by9 hover_zoom"><img src="' . esc_url($image_url) . '" alt="">';
                echo '<div class="image-link-content">';
                echo '<p>' . esc_html($image_text) . '</p><span>' . esc_html($image_btn) . '</span>';
                echo '</div></div></a></div>';
            } else {
                 // Empty placeholder to maintain structure if needed? Or just render nothing.
                 // Static HTML has this div always.
                 echo '<div class="image-link-wrap"></div>';
            }

            echo '</div>'; // .col-4.menu-image-link
            
            echo '</div>'; // .row.mega-menu-inner
            echo '</div>'; // .tray_container
            echo '</div>'; // .mega_menu_tray
        }
        
        // Background div
        echo '<div class="mega_tray_background"><!-- No Content Needed --></div>';
    }

    /**
     * Render Mobile Menu Items
     */
    public static function render_mobile_menu($location = 'menu-mobile') {
        $items = self::get_tree($location);
        
        // 1. Render the List
        echo '<ul class="menu-links">';
        foreach ($items as $index => $item) {
             $id = 'navigation_mobile_' . $index;
             echo '<li><span id="' . esc_attr($id) . '" class="mobile_tray_link_hover">' . esc_html($item->title) . '</span></li>';
        }
        echo '</ul>';
        
        // 2. We need to render the Trays somewhere else?
        // In static HTML, they are separate:
        /*
           <div class="mobile-menu-inner"> ... UL ... </div>
           <div class="mobile_menu_bottom"></div>
           <!-- Trays -->
           <div class="mobile_mega_menu_sub_tray"> ... </div>
        */
    }

    /**
     * Render Mobile Trays (Submenus)
     */
    public static function render_mobile_trays($location = 'menu-mobile') {
        $items = self::get_tree($location);
        
        foreach ($items as $index => $item) {
             $tray_id = 'navigation_mobile_' . $index . '_tray';
             
             echo '<div class="mobile_mega_menu_sub_tray">';
             echo '<div class="mobile_mega_menu_tray" id="' . esc_attr($tray_id) . '">';
             
             // Top Bar
             echo '<div class="mobile_menu_top">';
             echo '<button class="sub_tray_back">' . esc_html($item->title) . '</button>';
             echo '<button class="mobile_close_tray"><img src="https://www.coachhousepianos.co.uk/wp-content/uploads/2025/06/mobile_close-1.svg"></button>'; 
             // Note: Image path should be dynamic ideally, but keeping static for now as requested strict structure
             echo '</div>';
             
             echo '<div class="container tray_container">';
             echo '<div class="row mega-menu-inner">';
             echo '<div class="col-12 nav-columns-wrap">';
             echo '<div class="row flex-column">';
             
             if (!empty($item->children)) {
                 foreach ($item->children as $column) {
                     echo '<div class="col-links mr-auto">';
                     echo '<div class="menu-column-label">' . esc_html($column->title) . '</div>';
                     echo '<div class="menu-column-links">';
                     echo '<ul class="">';
                     
                     if (!empty($column->children)) {
                         foreach ($column->children as $link) {
                              echo '<li class="mega-nav-link"><a href="' . esc_url($link->url) . '">' . esc_html($link->title) . '</a></li>';
                         }
                     }
                     
                     echo '</ul></div></div>';
                 }
             }
             
             echo '</div></div>'; // .row .col-12
             
             // Mobile Image Link 
             echo '<div class="col-12 menu-image-link">';
             $image_url  = get_field('menu_promo_image', $item->ID); 
             $image_link = get_field('menu_promo_link', $item->ID);
             $image_text = get_field('menu_promo_text', $item->ID);
             $image_btn  = get_field('menu_promo_button_text', $item->ID) ?: 'SHOP NOW';

             if ($image_url) {
                echo '<div class="image-link-wrap"><a class="image_container" href="' . esc_url($image_link) . '" target="">';
                echo '<div class="image-16by9 hover_zoom"><img src="' . esc_url($image_url) . '" alt="">';
                echo '<div class="image-link-content">';
                echo '<p>' . esc_html($image_text) . '</p><span>' . esc_html($image_btn) . '</span>';
                echo '</div></div></a></div>';
             }
             echo '</div>';
             
             echo '</div></div>'; // .row .container
             echo '</div></div>'; // .mobile_mega_menu_tray .mobile_mega_menu_sub_tray
        }
    }
}
