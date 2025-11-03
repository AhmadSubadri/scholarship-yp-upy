# CodeIgniter 3 + Tailwind CSS Starter Kit

A simple and clean starter kit to integrate **Tailwind CSS** with **CodeIgniter 3**. This kit allows you to quickly set up a CI3 project with Tailwind CSS for modern, responsive UI development.

## ✅ Features

- Tailwind CSS v3 pre-configured
- PostCSS and Autoprefixer setup
- Watch and build scripts for development and production
- Supports CodeIgniter 3 views (including HMVC modules)
- Dark/light mode ready (optional)
- Compatible with multi-version Node.js using `.nvmrc`

## 🚀 Quick Start

### Prerequisites

- [Node.js](https://nodejs.org/) (recommended: use `nvm` to manage versions)
- [CodeIgniter 3](https://codeigniter.com/) (3.1.x or later)

### Installation

1. Clone or download this repository into your CI3 project folder.

2. Navigate to the project root and install dependencies:

   ```bash
   npm install
   ```

3. Use the correct Node.js version (optional, if using `nvm`):

   ```bash
   nvm use
   ```

4. Build Tailwind CSS for the first time:

   ```bash
   npm run build
   ```

   This will generate `assets/css/tailwind.css`.

5. Link the CSS file in your CI3 view:

   ```html
   <link
   	rel="stylesheet"
   	href="<?php echo base_url('assets/css/tailwind.css'); ?>"
   />
   ```

### Development

To watch for changes in `src/input.css` and rebuild CSS automatically, run:

```bash
npm run dev
```
