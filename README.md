<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio-Vue README</title>
</head>
<body>

  <h1>Portfolio-Vue</h1>
  <p>A modern <strong>portfolio website</strong> built with <strong>Laravel</strong> for the backend and <strong>Vue.js</strong> for the frontend. Designed to showcase projects, skills, and team members with a responsive and animated UI.</p>

  <h2>Features</h2>
  <ul>
    <li>Fully responsive design (mobile, tablet, desktop)</li>
    <li>Hero section with animated gradient and floating image</li>
    <li>About, Team, Portfolio, Gallery, and Contact sections</li>
    <li>Smooth scrolling between sections</li>
    <li>Portfolio grid with hover animations</li>
    <li>Contact form integration</li>
    <li>Fixed header with responsive mobile menu</li>
    <li>Tailwind CSS for styling</li>
    <li>Vue.js for dynamic components and animations</li>
    <li>Laravel backend for future CMS or API integration</li>
  </ul>

  <h2>Tech Stack</h2>
  <ul>
    <li><strong>Frontend:</strong> Vue 3, Tailwind CSS, Vue Router</li>
    <li><strong>Backend:</strong> Laravel 10</li>
    <li><strong>Database:</strong> MySQL (optional for CMS/Contact storage)</li>
    <li><strong>Icons & Animations:</strong> Font Awesome, Custom CSS Animations</li>
  </ul>

  <h2>Project Setup</h2>

  <h3>Clone the repository</h3>
  <pre><code>git clone https://github.com/nazrulislam-CSE/portfolio-vue.git
cd portfolio-vue</code></pre>

  <h3>Install Laravel dependencies</h3>
  <pre><code>composer install
cp .env.example .env
php artisan key:generate</code></pre>

  <h3>Install NPM dependencies</h3>
  <pre><code>npm install
npm run dev</code></pre>

  <h3>Run the project</h3>
  <pre><code>php artisan serve</code></pre>
  <p>Open your browser at <code>http://127.0.0.1:8000</code></p>

  <h2>Folder Structure</h2>
  <pre><code>portfolio-vue/
├── app/                # Laravel backend logic
├── public/             # Public assets (images, CSS, JS)
├── resources/js/       # Vue components & app logic
│   ├── Components/
│   ├── Pages/
│   └── app.js
├── resources/views/    # Blade templates
├── routes/
├── database/
└── package.json</code></pre>

  <h2>Screenshots</h2>
  <p>(Add screenshots of your hero section, portfolio grid, team section, etc.)</p>

  <h2>License</h2>
  <p>This project is licensed under the MIT License.</p>

  <h2>Author</h2>
  <p><strong>Nazrul Islam Suzon</strong></p>
  <ul>
    <li>GitHub: <a href="https://github.com/nazrulislam-CSE" target="_blank">https://github.com/nazrulislam-CSE</a></li>
    <li>Email: <a href="mailto:nsuzon02@gmail.com">nsuzon02@gmail.com</a></li>
  </ul>

</body>
</html>
