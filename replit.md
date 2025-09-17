# Stalin & Co., Auditors Website

## Overview
This is the official website for Stalin & Co., Auditors - a professional auditing firm. The website is built with PHP, HTML, CSS, and JavaScript using the Bootstrap framework.

**Purpose**: Professional business website showcasing the firm's services, about information, and contact details.

**Current State**: Fully functional and deployed on Replit. The website includes multiple pages with responsive design and contact form functionality.

## Recent Changes (September 17, 2025)
- Successfully imported GitHub project to Replit environment
- Configured PHP 8.2 runtime environment
- Set up PHP development server on port 5000 with proper host configuration (0.0.0.0)
- Configured autoscale deployment settings for production
- All pages tested and verified working correctly

## Project Architecture

### Technology Stack
- **Backend**: PHP 8.2 (built-in development server)
- **Frontend**: HTML5, CSS3, JavaScript, Bootstrap 4
- **Assets**: jQuery, Owl Carousel, Magnific Popup, FontAwesome icons
- **Development Server**: PHP built-in server (`php -S 0.0.0.0:5000`)

### File Structure
```
/
├── index.php          # Homepage
├── about.php          # About page
├── services.php       # Services page  
├── contact.php        # Contact page
├── functions.php      # Shared PHP functions for page components
├── send_mail.php      # Contact form handler
├── css/              # Stylesheets and Bootstrap
├── js/               # JavaScript libraries
├── images/           # Website images and assets
├── fonts/            # Custom fonts (Flaticon)
└── scss/             # SCSS source files
```

### Key Features
- **Multi-page website**: Home, About, Services, Contact
- **Responsive design**: Mobile-friendly Bootstrap layout
- **Contact form**: PHP-based email functionality
- **Professional styling**: Custom CSS with animations and effects
- **Icon fonts**: Flaticon integration for professional icons

### Deployment Configuration
- **Target**: Autoscale (stateless web application)
- **Runtime**: PHP built-in server
- **Port**: 5000 (configured for Replit environment)
- **Host**: 0.0.0.0 (allows external access through Replit proxy)

## Development Notes

### Server Configuration
The website uses PHP's built-in development server which is perfect for this static content with minimal server-side processing. The server is configured to:
- Bind to all interfaces (0.0.0.0) for Replit compatibility
- Serve on port 5000 (Replit's standard web port)
- Handle PHP files and static assets

### Contact Form
The contact form uses a custom PHP email class in `send_mail.php`. Note that email functionality may require SMTP configuration in production environments.

### Known Considerations
- Google Maps integration present but may need API key configuration
- Email functionality uses PHP's mail() function which may need SMTP setup for reliable delivery
- All external CDN resources (fonts, FontAwesome) load from external sources

## User Preferences
- No specific coding style preferences documented yet
- Standard PHP/HTML structure maintained from original project
- Bootstrap framework preferred for UI components