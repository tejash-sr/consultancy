# Agency Pro WordPress Theme

## 🚀 Professional Agency Website Theme

A modern, high-converting WordPress theme designed for digital agencies, tech companies, and consulting firms. Built with clean code, optimized for performance, and includes Google Sheets integration for contact forms.

---

## 📋 Table of Contents

1. [Features](#features)
2. [Installation](#installation)
3. [Google Sheets Setup](#google-sheets-setup)
4. [Theme Configuration](#theme-configuration)
5. [Creating Pages](#creating-pages)
6. [Customization](#customization)
7. [Recommended Plugins](#recommended-plugins)
8. [Performance Optimization](#performance-optimization)
9. [Troubleshooting](#troubleshooting)
10. [Support](#support)

---

## ✨ Features

### Core Features
- ✅ **Fully Responsive** - Mobile-first design that looks great on all devices
- ✅ **Contact Form with Google Sheets Integration** - Automatic data capture
- ✅ **Modern Design** - Clean, professional aesthetic inspired by industry leaders
- ✅ **SEO Optimized** - Built-in SEO best practices
- ✅ **Fast Loading** - Optimized for performance
- ✅ **Custom Page Templates** - Home, About, Services, Contact
- ✅ **Smooth Animations** - Engaging scroll effects and transitions
- ✅ **Mobile Menu** - Touch-friendly navigation
- ✅ **Custom Logo Support** - Easy branding
- ✅ **Widget Ready** - Footer widget areas

### Technical Features
- Built with HTML5 & CSS3
- jQuery for enhanced interactivity
- AJAX form submission
- WordPress Coding Standards compliant
- Translation ready
- Cross-browser compatible
- Secure and sanitized code

---

## 🔧 Installation

### Step 1: Upload Theme Files

1. Download the theme folder (`agency-pro-theme`)
2. Upload to your WordPress installation:
   ```
   /wp-content/themes/agency-pro-theme/
   ```

### Step 2: Activate Theme

1. Log in to WordPress Admin Dashboard
2. Navigate to **Appearance → Themes**
3. Find "Agency Pro" and click **Activate**

### Step 3: Initial Setup

After activation, the theme is ready to use! Follow these steps for optimal setup:

1. **Set Permalinks**
   - Go to **Settings → Permalinks**
   - Select **Post name** structure
   - Click **Save Changes**

2. **Create Menus**
   - Go to **Appearance → Menus**
   - Create a new menu called "Primary Menu"
   - Assign it to "Primary Menu" location
   - Add pages: Home, About, Services, Contact

3. **Add Logo** (Optional)
   - Go to **Appearance → Customize → Site Identity**
   - Upload your logo
   - Recommended size: 200x60px (PNG with transparent background)

---

## 📊 Google Sheets Setup

### Prerequisites
- A Google account
- Basic understanding of Google Sheets

### Step-by-Step Guide

#### 1. Create Google Sheet

1. Go to [Google Sheets](https://sheets.google.com)
2. Create a new spreadsheet
3. Name it "Contact Form Submissions" (or any name you prefer)

#### 2. Add Column Headers

In the first row, add these exact headers:

| Timestamp | Name | Email | Phone | Company | Message |
|-----------|------|-------|-------|---------|---------|

#### 3. Open Apps Script Editor

1. In your Google Sheet, click **Extensions → Apps Script**
2. Delete any existing code in the editor

#### 4. Add the Script

1. Open the file `google-apps-script.js` from your theme folder
2. Copy all the code
3. Paste it into the Apps Script editor
4. Click the **disk icon** to save
5. Name the project "Contact Form Integration"

#### 5. Deploy as Web App

1. Click **Deploy → New deployment**
2. Click the **gear icon** next to "Select type"
3. Choose **Web app**
4. Configure settings:
   - **Description**: Contact Form Handler
   - **Execute as**: Me (your email)
   - **Who has access**: Anyone
5. Click **Deploy**
6. **Authorize** the script (you'll be asked to grant permissions)
7. Copy the **Web App URL** (it looks like: `https://script.google.com/macros/s/...`)

#### 6. Add URL to WordPress

1. In WordPress Admin, go to **Settings → Agency Pro**
2. Paste the Web App URL in the "Google Sheets Web App URL" field
3. Click **Save Changes**

#### 7. Test the Integration

1. Visit your Contact page
2. Fill out and submit the form
3. Check your Google Sheet - a new row should appear!

### Troubleshooting Google Sheets

**Form submits but no data in sheet?**
- Verify the Web App URL is correct
- Check that the script is deployed with "Anyone" access
- Ensure you authorized the script properly

**Getting authorization errors?**
- Re-deploy the script
- Make sure you're using the same Google account

---

## ⚙️ Theme Configuration

### Creating Pages

You need to create these 4 pages:

#### 1. Home Page

1. Go to **Pages → Add New**
2. Title: "Home" (or leave blank)
3. Under **Page Attributes → Template**, select **Front Page**
4. Click **Publish**
5. Go to **Settings → Reading**
6. Select "A static page"
7. Choose "Home" as Homepage
8. Save Changes

#### 2. About Page

1. **Pages → Add New**
2. Title: "About" or "About Us"
3. Template: **About Page**
4. Click **Publish**

#### 3. Services Page

1. **Pages → Add New**
2. Title: "Services" or "Our Services"
3. Template: **Services Page**
4. Click **Publish**

#### 4. Contact Page

1. **Pages → Add New**
2. Title: "Contact" or "Contact Us"
3. Template: **Contact Page**
4. Click **Publish**

### Menu Setup

1. **Appearance → Menus**
2. Create menu: "Primary Menu"
3. Add pages in this order:
   - Home
   - About
   - Services
   - Contact
4. Assign to "Primary Menu" location
5. Save Menu

---

## 🎨 Customization

### Changing Colors

Edit `style.css` and modify these CSS variables:

```css
:root {
    --primary-color: #1a73e8;      /* Main brand color */
    --secondary-color: #0d47a1;     /* Darker shade */
    --accent-color: #00bcd4;        /* Accent highlights */
}
```

### Updating Content

All page content is in the template files:
- **Home**: `front-page.php`
- **About**: `page-about.php`
- **Services**: `page-services.php`
- **Contact**: `page-contact.php`

Edit these files to update:
- Headlines
- Text content
- Services descriptions
- Team members
- Statistics

### Adding Your Information

In `footer.php` and `page-contact.php`, update:
- Company address
- Phone number
- Email address
- Social media links

Search for these placeholders and replace:
- `123 Business Street, City`
- `+1 (234) 567-8900`
- `contact@youragency.com`

### Logo Requirements

- **Format**: PNG with transparent background
- **Size**: 200x60px (or proportional)
- **Location**: Upload via **Customize → Site Identity**

---

## 🔌 Recommended Plugins

### Essential Plugins (Free)

1. **Yoast SEO** or **Rank Math**
   - Purpose: SEO optimization
   - Install: **Plugins → Add New → Search**

2. **WP Super Cache** or **W3 Total Cache**
   - Purpose: Performance & caching
   - Install: **Plugins → Add New → Search**

3. **Wordfence Security** or **Sucuri Security**
   - Purpose: Website security
   - Install: **Plugins → Add New → Search**

4. **Smush** or **EWWW Image Optimizer**
   - Purpose: Image optimization
   - Install: **Plugins → Add New → Search**

### Optional Enhancements

5. **Contact Form 7** (Alternative contact solution)
6. **Google Analytics Dashboard for WP**
7. **UpdraftPlus** (Backups)
8. **WP Mail SMTP** (Email reliability)

---

## ⚡ Performance Optimization

### 1. Image Optimization

- Compress all images before uploading
- Use WebP format when possible
- Recommended tools:
  - [TinyPNG](https://tinypng.com)
  - [Squoosh](https://squoosh.app)

### 2. Caching Setup

1. Install **WP Super Cache**
2. Go to **Settings → WP Super Cache**
3. Enable "Caching On"
4. Select "Simple" caching
5. Save Settings

### 3. CDN Integration (Optional)

For global performance:
- Consider Cloudflare (free tier available)
- Set up through your hosting provider

### 4. Database Optimization

1. Install **WP-Optimize**
2. Run weekly database cleanups
3. Remove post revisions
4. Clean transients

---

## 📱 Responsive Breakpoints

The theme adapts to these screen sizes:

- **Desktop**: 1200px and above
- **Tablet**: 768px - 1199px
- **Mobile**: Below 768px

Test your site on:
- Desktop browsers
- iPad/tablets
- iPhone/Android phones

---

## 🐛 Troubleshooting

### Issue: Menu Not Showing

**Solution:**
1. Create a menu at **Appearance → Menus**
2. Assign it to "Primary Menu" location
3. Clear cache if using a caching plugin

### Issue: Contact Form Not Working

**Solution:**
1. Check Google Sheets URL in **Settings → Agency Pro**
2. Verify script deployment in Google Apps Script
3. Test form with browser console open (F12) to see errors
4. Check that JavaScript is enabled

### Issue: Layout Looks Broken

**Solution:**
1. Clear browser cache (Ctrl+F5)
2. Clear WordPress cache
3. Check for plugin conflicts (deactivate plugins one by one)
4. Re-upload theme files

### Issue: Images Not Loading

**Solution:**
1. Check file paths are correct
2. Verify images were uploaded to WordPress media library
3. Check file permissions on server
4. Try re-uploading images

### Issue: Slow Website

**Solution:**
1. Install and configure caching plugin
2. Optimize all images
3. Minimize plugins (keep only essential ones)
4. Check with hosting provider about server resources

---

## 🔒 Security Best Practices

1. **Keep WordPress Updated**
   - Update core, themes, and plugins regularly

2. **Use Strong Passwords**
   - Admin accounts should use complex passwords

3. **Install Security Plugin**
   - Wordfence or Sucuri recommended

4. **Regular Backups**
   - Use UpdraftPlus or similar
   - Store backups off-site

5. **SSL Certificate**
   - Ensure HTTPS is enabled
   - Free certificates available via Let's Encrypt

---

## 📞 Additional Setup Tips

### For Developers

**Child Theme Development:**
Create a child theme for custom modifications:

```php
/* child-theme/style.css */
/*
Theme Name: Agency Pro Child
Template: agency-pro-theme
*/
```

**Custom Post Types:**
Add to child theme's `functions.php`:

```php
// Example: Portfolio custom post type
function agency_pro_portfolio_post_type() {
    register_post_type('portfolio', array(
        'labels' => array(
            'name' => 'Portfolio',
            'singular_name' => 'Project'
        ),
        'public' => true,
        'has_archive' => true,
    ));
}
add_action('init', 'agency_pro_portfolio_post_type');
```

### For Content Editors

**Best Practices:**
- Use proper heading hierarchy (H1 → H2 → H3)
- Add alt text to all images
- Keep paragraphs concise
- Use lists for readability
- Include clear calls-to-action

---

## 🎯 SEO Configuration

### Yoast SEO Setup

1. Install Yoast SEO plugin
2. Go to **SEO → General**
3. Run Configuration Wizard
4. Set up:
   - Site name
   - Default descriptions
   - Social media profiles

### Meta Tags

Each page should have:
- **Title**: 60 characters max
- **Description**: 155 characters max
- **Keywords**: 5-10 relevant terms

### Schema Markup

The theme includes basic structured data. Enhance with:
- Organization schema
- LocalBusiness schema (if applicable)
- Service schema for service pages

---

## 📧 Email Configuration

For reliable contact form emails:

1. Install **WP Mail SMTP**
2. Configure with your email provider:
   - Gmail
   - SendGrid
   - Mailgun
   - AWS SES

This ensures form submissions arrive in your inbox.

---

## 🌐 Multi-Language Support

The theme is translation-ready. To translate:

1. Install **Polylang** or **WPML**
2. Create translations for each page
3. Translate theme strings using POEdit

---

## 📦 File Structure

```
agency-pro-theme/
├── style.css                 # Main stylesheet
├── functions.php             # Theme functions
├── header.php               # Header template
├── footer.php               # Footer template
├── index.php                # Main template
├── front-page.php           # Home page template
├── page-about.php           # About page template
├── page-services.php        # Services page template
├── page-contact.php         # Contact page template
├── js/
│   └── main.js              # JavaScript functionality
├── google-apps-script.js    # Google Sheets integration
└── README.md                # This file
```

---

## ✅ Launch Checklist

Before going live, verify:

- [ ] All pages created and published
- [ ] Menu configured and working
- [ ] Logo uploaded
- [ ] Contact form tested and working
- [ ] Google Sheets integration active
- [ ] All placeholder text replaced
- [ ] Contact information updated
- [ ] Social media links added
- [ ] SEO plugin installed and configured
- [ ] Security plugin active
- [ ] Caching enabled
- [ ] Images optimized
- [ ] Mobile responsiveness tested
- [ ] All browsers tested
- [ ] SSL certificate installed
- [ ] Backup system configured
- [ ] Google Analytics added
- [ ] Privacy policy page created
- [ ] Terms of service page created

---

## 🚀 Going Live

### Pre-Launch

1. **Test Everything**
   - Click all links
   - Submit test forms
   - Test on multiple devices

2. **Set Up Analytics**
   - Install Google Analytics
   - Verify tracking code

3. **Backup**
   - Create full site backup
   - Store safely off-site

### Launch Day

1. **DNS Configuration**
   - Point domain to your hosting
   - Wait for propagation (up to 48 hours)

2. **SSL Setup**
   - Install SSL certificate
   - Update site URLs to HTTPS

3. **Final Checks**
   - Clear all caches
   - Test contact form
   - Verify all pages load correctly

### Post-Launch

1. **Submit to Search Engines**
   - Google Search Console
   - Bing Webmaster Tools

2. **Social Media**
   - Share launch announcement
   - Update social profiles with new URL

3. **Monitor**
   - Check analytics daily
   - Monitor form submissions
   - Watch for errors

---

## 🆘 Support

### Getting Help

If you need assistance:

1. **Check Documentation**
   - Read this README thoroughly
   - Review WordPress.org documentation

2. **Common Issues**
   - See Troubleshooting section above

3. **WordPress Community**
   - WordPress.org forums
   - Stack Overflow
   - WordPress Facebook groups

### Theme Updates

To update the theme safely:

1. **Backup first** (always!)
2. Download updated theme files
3. Deactivate child theme (if using)
4. Replace theme folder
5. Reactivate and test

---

## 📄 License

This theme is licensed under the GNU General Public License v2 or later.

---

## 🎉 Congratulations!

You've successfully set up your Agency Pro WordPress theme. Your professional website is now ready to attract clients and grow your business!

For the best results:
- Keep content fresh and updated
- Regularly monitor form submissions
- Respond to inquiries promptly
- Maintain your WordPress installation

**Good luck with your agency website! 🚀**
