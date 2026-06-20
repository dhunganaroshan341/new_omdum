🌍 Travel Package Management
🥾 Trekking & Tour Itinerary Management
📅 Booking Inquiry System
👤 Google OAuth Authentication
🛡️ Google reCAPTCHA Integration
📧 Email Notifications for Booking Requests
🖼️ Tour Image Management
⚙️ Admin CMS Dashboard
🔍 Package Search & Filtering

# model information

Country
└── hasMany TourPackage

TourPackage
├── hasMany Itinerary
├── hasMany TourPackageImage
├── hasMany TourPackageVideo
├── hasMany TourFaq
├── hasMany Testimonial

<!-- ├── hasOne PreparationGuide
├── hasOne Service
├── hasOne SocialResponsibility -->
