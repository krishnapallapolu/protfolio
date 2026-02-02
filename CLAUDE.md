# Krishna Pallapolu Portfolio

Personal portfolio website for Krishna Pallapolu, a Full Stack Developer based in Dubai, UAE.

## Tech Stack

- **Backend**: PHP
- **Frontend**: HTML5, CSS3, JavaScript, jQuery
- **Framework**: Bootstrap 5
- **Analytics**: Google Analytics (G-VPZK0V35K0)

## Project Structure

```
├── index.php           # Main portfolio page
├── style.css           # Global styles
├── schools.php         # Schools page
├── text2image.php      # Text to image converter
├── text2image.html     # Text to image HTML version
├── inc/
│   ├── header.php      # Shared header component
│   └── footer.php      # Shared footer component
├── itenary/
│   ├── index.php       # Itinerary index
│   └── mauritius-itenary.php
├── images/             # Favicons and icons
└── *.jpeg/jpg          # Profile images
```

## Key Sections (index.php)

- **About**: Profile card with contact info and social links
- **Skills**: Technical skills organized by category (Frontend, Backend, CMS, DevOps, Databases, Security)
- **Work History**: Professional experience timeline
- **Education**: Academic background

## Development Notes

- The site uses a dark theme (`bg-dark text-white`)
- Custom shadow effects using rgba(51, 232, 158, 0.75) - a green accent color
- Responsive design with Bootstrap grid system
- Font: "Noto Sans" from Google Fonts

## Running Locally

Requires a PHP server. Options:
```bash
# Using PHP built-in server
php -S localhost:8000

# Or use MAMP/XAMPP/WAMP
```

## Deployment

Automated deployment to Hostinger via GitHub Actions on push to `main` branch.

### GitHub Secrets Required

Configure these secrets in your GitHub repository (Settings → Secrets and variables → Actions):

| Secret | Description | Example |
|--------|-------------|---------|
| `FTP_SERVER` | Hostinger FTP server address | `ftp.yourdomain.com` |
| `FTP_USERNAME` | FTP username from Hostinger | `u123456789` |
| `FTP_PASSWORD` | FTP password | Your FTP password |
| `FTP_SERVER_DIR` | Remote directory path | `/public_html/` |

### Finding Hostinger FTP Credentials

1. Log in to Hostinger hPanel
2. Go to **Files** → **FTP Accounts**
3. Copy the FTP hostname, username, and use your FTP password
4. Server directory is typically `/public_html/` or `/domains/yourdomain.com/public_html/`

### Manual Deployment

Trigger manually via GitHub Actions tab → "Deploy to Hostinger" → "Run workflow"

## Contact Info (Site Owner)

- Email: krishna.naidu24@gmail.com
- Location: Dubai, UAE
- LinkedIn: linkedin.com/in/krishna-pallapolu-b4552738
- GitHub: github.com/krishna-pallapolu
