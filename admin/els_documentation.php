<?php
// Add Admin Submenu for Documentation under 'els_logo'
function els_add_documentation_submenu() {
    add_submenu_page(
        'edit.php?post_type=els_logo',
        'Documentation',
        'Documentation',
        'manage_options',
        'els-documentation',
        'els_documentation_page'
    );
}
add_action('admin_menu', 'els_add_documentation_submenu');

// Documentation Page Content
function els_documentation_page() {
    echo '<div class="wrap">
            <h1>Easy Logo Slider Documentation</h1>
            <p>Use the shortcode <code>[easy_logo_slider]</code> to display the logo slider.</p>
            <h2>Shortcode Parameters</h2>
            <table class="widefat">
                <thead>
                    <tr>
                        <th>Parameter</th>
                        <th>Description</th>
                        <th>Default</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>number</code></td>
                        <td>Number of logos to display</td>
                        <td>-1 (all logos)</td>
                    </tr>
                    <tr>
                        <td><code>slides_to_show</code></td>
                        <td>Logos visible at a time</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td><code>slides_to_scroll</code></td>
                        <td>Number of logos per scroll</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td><code>autoplay</code></td>
                        <td>Enable autoplay (true/false)</td>
                        <td>true</td>
                    </tr>
                    <tr>
                        <td><code>autoplay_speed</code></td>
                        <td>Autoplay speed in ms</td>
                        <td>2000</td>
                    </tr>
                    <tr>
                        <td><code>order</code></td>
                        <td>Order of logos (ASC/DESC)</td>
                        <td>ASC</td>
                    </tr>
                    <tr>
                        <td><code>orderby</code></td>
                        <td>Criteria for ordering (menu_order, date, title, etc.)</td>
                        <td>menu_order</td>
                    </tr>
                </tbody>
            </table>
        </div>';
}
