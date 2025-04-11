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
    ?>
    <div class="wrap">
        <h1>Easy Logo Slider Documentation</h1>
        
        <div class="nav-tab-wrapper">
            <a href="#basic-usage" class="nav-tab nav-tab-active">Basic Usage</a>
            <a href="#shortcode-params" class="nav-tab">Shortcode Parameters</a>
            <a href="#advanced-features" class="nav-tab">Advanced Features</a>
            <a href="#troubleshooting" class="nav-tab">Troubleshooting</a>
        </div>

        <div class="tab-content">
            <div id="basic-usage" class="tab-pane active">
                <h2>Basic Usage</h2>
                <p>Use the shortcode <code>[easy_logo_slider]</code> to display the logo slider.</p>
                <pre>[easy_logo_slider slides_to_show="4" autoplay="true"]</pre>
            </div>

            <div id="shortcode-params" class="tab-pane">
                <h2>Available Parameters</h2>
                <table class="widefat">
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th>Description</th>
                            <th>Default</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>slides_to_show</code></td>
                            <td>Number of slides visible at once</td>
                            <td>4</td>
                            <td>Any number</td>
                        </tr>
                        <tr>
                            <td><code>slides_to_show_tablet</code></td>
                            <td>Slides visible on tablet devices</td>
                            <td>2</td>
                            <td>Any number</td>
                        </tr>
                        <tr>
                            <td><code>slides_to_show_mobile</code></td>
                            <td>Slides visible on mobile devices</td>
                            <td>1</td>
                            <td>Any number</td>
                        </tr>
                        <tr>
                            <td><code>autoplay</code></td>
                            <td>Enable/disable automatic sliding</td>
                            <td>true</td>
                            <td>true/false</td>
                        </tr>
                        <tr>
                            <td><code>show_arrows</code></td>
                            <td>Show navigation arrows</td>
                            <td>true</td>
                            <td>true/false</td>
                        </tr>
                        <tr>
                            <td><code>show_dots</code></td>
                            <td>Show navigation dots</td>
                            <td>true</td>
                            <td>true/false</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="advanced-features" class="tab-pane">
                <h2>Advanced Features</h2>
                <h3>Custom Styling</h3>
                <pre>
[easy_logo_slider 
    max_width="160px"
    width="200px"
    height="200px"
    object_fit="contain"
]</pre>
                
                <h3>Responsive Design</h3>
                <pre>
[easy_logo_slider 
    slides_to_show="4"
    slides_to_show_tablet="2"
    slides_to_show_mobile="1"
]</pre>
                
                <h3>Multiple Sliders</h3>
                <p>You can use multiple sliders on the same page with different settings:</p>
                <pre>
[easy_logo_slider slides_to_show="3" autoplay="true"]
[easy_logo_slider slides_to_show="4" autoplay="false"]</pre>
            </div>

            <div id="troubleshooting" class="tab-pane">
                <h2>Troubleshooting</h2>
                <h3>Common Issues</h3>
                <ul>
                    <li><strong>Slider not appearing:</strong> Check if your theme loads jQuery</li>
                    <li><strong>Images not loading:</strong> Verify image paths and permissions</li>
                    <li><strong>Responsive issues:</strong> Check theme conflicts</li>
                </ul>
            </div>
        </div>
    </div>
    <?php
}
