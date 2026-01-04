# 🚀 Agency Pro - Quick Start Guide

## Installation in 5 Minutes

### Step 1: Upload Theme (1 min)
```
1. Upload 'agency-pro-theme' folder to /wp-content/themes/
2. Go to Appearance → Themes
3. Click Activate on "Agency Pro"
```

### Step 2: Create Pages (2 min)
Create these 4 pages with their templates:

1. **Home** → Template: Front Page
2. **About** → Template: About Page  
3. **Services** → Template: Services Page
4. **Contact** → Template: Contact Page

**Set Home as Homepage:**
- Settings → Reading → Static Page → Homepage: Home

### Step 3: Create Menu (1 min)
```
1. Appearance → Menus
2. Create "Primary Menu"
3. Add pages: Home, About, Services, Contact
4. Assign to "Primary Menu" location
5. Save
```

### Step 4: Google Sheets (1 min)
```
1. Create Google Sheet with columns:
   Timestamp | Name | Email | Phone | Company | Message

2. Extensions → Apps Script → Paste code from google-apps-script.js

3. Deploy → New deployment → Web app
   - Execute as: Me
   - Access: Anyone

4. Copy Web App URL

5. WordPress: Settings → Agency Pro → Paste URL → Save
```

### Step 5: Customize (Optional)
- Upload logo: Customize → Site Identity
- Update contact info in footer.php
- Change colors in style.css

---

## ✅ Done!

Your professional agency website is ready!

Visit your site to see it in action.

**Next Steps:**
- Test contact form
- Install security plugin
- Enable caching
- Add your content

---

## 🆘 Need Help?

Check the full README.md for detailed instructions and troubleshooting.

**Common Issues:**

❌ **Menu not showing?**
→ Create menu and assign to Primary location

❌ **Contact form not working?**  
→ Check Google Sheets URL in Settings → Agency Pro

❌ **Pages look wrong?**
→ Make sure you selected the correct Page Template

❌ **Mobile menu not working?**
→ Clear cache (Ctrl+F5)

---

## 📞 Contact Information to Update

Search these files and replace with your info:

**footer.php:**
- Address: "123 Business Street"
- Phone: "+1 (234) 567-8900"
- Email: "contact@youragency.com"

**page-contact.php:**
- Same as above

**Social Links:**
- Update URLs in footer.php (lines with #)

---

## 🎨 Quick Customization

### Change Brand Colors
Edit `style.css` line 23-28:
```css
--primary-color: #1a73e8;    /* Your brand color */
--secondary-color: #0d47a1;   /* Darker shade */
--accent-color: #00bcd4;      /* Highlight color */
```

### Add Your Logo
- Go to: Customize → Site Identity → Logo
- Upload PNG with transparent background
- Recommended size: 200x60 pixels

### Update Hero Text
Edit `front-page.php` line 17-18:
```php
<h1>Your Amazing Headline Here</h1>
<p>Your compelling subheading goes here</p>
```

---

## 📊 Verify Google Sheets Setup

Test your contact form:
1. Visit Contact page
2. Fill out form
3. Submit
4. Check Google Sheet for new row

✅ If row appears = Success!  
❌ If no row = Check Settings → Agency Pro URL

---

## 🔒 Security Checklist

After setup, install these (free):

1. **Wordfence Security** - Firewall & malware scan
2. **WP Super Cache** - Speed & performance  
3. **UpdraftPlus** - Automated backups

---

## 🎯 Content Checklist

Before launch, update:

- [ ] Replace all "Your Company" text
- [ ] Update phone numbers
- [ ] Update email addresses  
- [ ] Update physical address
- [ ] Add your logo
- [ ] Test contact form
- [ ] Add real testimonials (remove placeholders)
- [ ] Add client logos
- [ ] Update team member info
- [ ] Check all links work
- [ ] Test on mobile

---

## 🚀 Launch!

Ready to go live?

1. Backup everything
2. Point domain to hosting
3. Install SSL certificate  
4. Test all pages
5. Submit to Google Search Console
6. Announce on social media

---

**Congratulations! Your agency website is live! 🎉**

For detailed help, see the full README.md file.
