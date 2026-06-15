# Modern Ways Tours

Single-page PHP/MySQL travel website for the **Naran Tour Package** at `tours.logaixa.com`.

## Setup
1. Upload all files to your PHP hosting public directory.
2. Place all brand and gallery images inside `/assets/images/` using exactly these names: `logo.png`, `header.png`, `footer.png`, `favicon.png`, `icon.png`, `hero-naran.jpg`, `shogran.jpg`, `saifulmalook.jpg`, `babusar.jpg`, `kiwai.jpg`.
3. Create a MySQL database and import `database.sql` with phpMyAdmin or the MySQL CLI.
4. Update database credentials in `/includes/config.php`.
5. Visit `https://tours.logaixa.com/index.php`.

## Database Import
Use phpMyAdmin **Import** and select `database.sql`, or run:

```bash
mysql -u your_user -p your_database < database.sql
```

## Admin Login
Admin dashboard: `/admin/login.php`

Default users:
- Username: `asif`
- Username: `usman`
- Initial password for both: `Admin@12345`

**Important:** Change admin passwords immediately after first login by creating new admin users and disabling default accounts if needed.

## WhatsApp Number
Update `WHATSAPP_NUMBER` in `/includes/config.php`. The current number is `923355623281`, which creates links like `https://wa.me/923355623281?text=...`.

## Folder Guide
- `index.php` — public single-page website.
- `modal-forms.php` — contact and booking popup forms.
- `forms/` — form submit handlers that save to MySQL.
- `admin/` — protected admin login, dashboard, bookings, contacts, package manager, gallery/video manager, social link manager, and admin user management.
- `includes/` — configuration, database connection, reusable security helpers.
- `assets/css/style.css` — custom premium styling and animations.
- `assets/js/main.js` — menu, modal, and scroll interactions.
- `database.sql` — tables, default admin users, default packages, gallery/video items, and social links.

## Notes
The Group / Normal Package final discounted price is **PKR 26,000 per head only**. Personal shopping, extra personal food, room service, and personal expenses are not included.


## Managing Website Content
After login, admin users can manage public-facing content without editing code:

- **Packages**: add, edit, reorder, activate/inactivate, or remove package cards shown on the home page.
- **Gallery & Videos**: add destination images from `/assets/images/` or video embed URLs, update captions, reorder media, hide older media, or remove items.
- **Social Links**: update Facebook, Instagram, TikTok, Pinterest, YouTube, or any other platform URL and Font Awesome icon class.

For best speed and SEO, compress gallery images before uploading them to `/assets/images/` and use descriptive titles/captions in the admin dashboard.
