# **Easy Logo Slider Plugin**  

**Version:** 1.0  
**Author:** Arti B.  
**Requires WordPress Version:** 5.0+  
**Tested up to:** 6.4+  
**Requires PHP Version:** 7.2+  

## **Description**  
The **Easy Logo Slider** plugin is a simple and lightweight solution for displaying a responsive logo slider on your WordPress site using **Slick Carousel**. This plugin allows users to showcase client logos, partners, or sponsors in a visually appealing slider format.  

## **Features**  
✔️ Easy-to-use shortcode `[easy_logo_slider]`  
✔️ Fully responsive and mobile-friendly  
✔️ Uses **Slick Carousel** for smooth animations  
✔️ Supports autoplay, custom scroll speeds, and infinite looping  
✔️ Works with the **Custom Post Type (CPT) `els_logo`** for easy logo management  

---

# **Installation**  

### **Method 1: Install via WordPress Dashboard**  
1. Navigate to **Plugins** → **Add New**  
2. Click on **Upload Plugin** and select the ZIP file  
3. Click **Install Now**, then **Activate**  

### **Method 2: Manual Installation**  
1. Upload the `easy-logo-slider` folder to the `/wp-content/plugins/` directory  
2. Go to **Plugins** in the WordPress dashboard and activate it  

---

# **Usage**  

### **Step 1: Add Logos**  
1. Navigate to **Logos** → **Add New**  
2. Upload the logo image as the **featured image**  
3. Click **Publish**  

### **Step 2: Display the Slider**  
Use the following shortcode in **any page or post**:  
```php
[easy_logo_slider slides_to_show="3" autoplay="true" autoplay_speed="3000"]
```

### **Shortcode Parameters**  
| Parameter        | Default  | Description |
|-----------------|---------|-------------|
| `number`        | `-1`    | Number of logos to display (`-1` means all) |
| `order`         | `ASC`   | Order of logos (`ASC` or `DESC`) |
| `orderby`       | `menu_order` | Sorting order (`title`, `date`, `rand`, etc.) |
| `slides_to_show`| `4`     | Number of logos per slide |
| `slides_to_scroll` | `1` | Number of slides scrolled at once |
| `autoplay`      | `true`  | Enables autoplay (`true` or `false`) |
| `autoplay_speed`| `2000`  | Time in milliseconds between slides |

---

# **Customization**  

### **Custom CSS**
To style the slider, add custom CSS to your theme’s `style.css` file or use the **Customizer** under **Appearance → Customize → Additional CSS**.  

Example:  
```css
.els-logo-item img {
    max-width: 120px;
    height: auto;
    opacity: 0.8;
    transition: opacity 0.3s ease-in-out;
}
.els-logo-item img:hover {
    opacity: 1;
}
```

---

# **Development & Files**  

### **Main Files**  
- `easy-logo-slider.php` → Core Plugin File  
- `inc/logo-slider-shortcode.php` → Shortcode Logic  
- `inc/enqueue-scripts.php` → JS & CSS Enqueue  
- `js/els-slider.js` → JavaScript for initializing Slick Carousel  
- `css/els-slider.css` → Basic styling for the slider  

---

# **Troubleshooting**  

### **1. Slider Not Working?**  
✅ **Check if Slick is Loaded**  
- Open the **browser console (F12 → Console Tab)**  
- Type: `typeof jQuery.fn.slick !== 'undefined'`  
- If it returns `false`, ensure **Slick JS** is enqueued properly  

✅ **Check for jQuery Conflicts**  
- Add the following script inside `wp_footer`:  
```php
add_action('wp_footer', function() {
    echo '<script>console.log("jQuery Version:", jQuery.fn.jquery);</script>';
});
```

✅ **Ensure WordPress is Loading jQuery**  
- Add this to your theme's `functions.php`:  
```php
function ensure_jquery_loaded() {
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'ensure_jquery_loaded');
```

✅ **Try Disabling Other Plugins**  
Some plugins may load their own version of jQuery or interfere with Slick Carousel.

---

# **Changelog**  

### **Version 1.0**  
- ✅ Initial Release  
- ✅ Shortcode support for easy embedding  
- ✅ Basic styling & customization options  

---

# **Future Improvements**  
🚀 Add **custom post fields** for logo links  
🚀 Provide **more transition effects**  
🚀 Add **widget support**  

---

# **Support & Feedback**  
If you have any issues, feel free to open a support request on [GitHub](https://github.com/your-repo-url) or email us at `support@yourdomain.com`.  

---

🔥 **Thank you for using Easy Logo Slider!** 🚀