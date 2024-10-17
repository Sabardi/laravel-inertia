Here's the complete Markdown code:

```markdown
## Langkah-langkah Instalasi Laravel dengan Tailwind CSS

1. **Buat Proyek Laravel Baru**
   ```bash
   composer create-project laravel/laravel projectName
   cd projectName
   ```

2. **Instalasi Tailwind CSS dan Dependensinya**
   ```bash
   npm install -D tailwindcss postcss autoprefixer
   npx tailwindcss init -p
   ```

3. **Konfigurasi Tailwind CSS**

   Tambahkan kode berikut di `tailwind.config.js`:
   ```javascript
   content: [
     "./resources/**/*.blade.php",
     "./resources/**/*.js",
     "./resources/**/*.vue",
   ],
   ```

4. **Tambahkan Kode di Berkas CSS**

   Tambahkan kode berikut di `./resources/css/app.css`:
   ```css
   @tailwind base;
   @tailwind components;
   @tailwind utilities;
   ```

5. **Buat Berkas Pengujian**

   Buat file HTML dengan konten berikut untuk pengujian:
   ```html
   <!doctype html>
   <html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @vite('resources/css/app.css')
   </head>
   <body>
     <h1 class="text-3xl font-bold underline">
       Hello world!
     </h1>
   </body>
   </html>
   ```
```
