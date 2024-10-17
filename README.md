Berikut adalah berbagai jenis route yang bisa digunakan saat menggunakan Inertia.js dengan Laravel:

### 1. **Route Get Dasar**

   Contoh route dasar yang mengembalikan halaman Inertia:
   ```php
   Route::get('/', function () {
       return Inertia::render('Home');
   });

   Route::get('/tentang', function () {
       return Inertia::render('About');
   });
   ```

### 2. **Route dengan Nama (Named Route)**

   Named route memungkinkan Anda untuk mereferensikan route berdasarkan namanya:
   ```php
   Route::get('/kontak', function () {
       return Inertia::render('Contact');
   })->name('kontak');
   ```

### 3. **Route dengan Parameter**

   Anda dapat meneruskan parameter ke route dan membuatnya tersedia di halaman Inertia:
   ```php
   Route::get('/pengguna/{id}', function ($id) {
       return Inertia::render('UserProfile', [
           'userId' => $id
       ]);
   });
   ```

### 4. **Route Post**

   Menangani pengiriman form dengan permintaan `POST`:
   ```php
   Route::post('/kirim-form', function (Illuminate\Http\Request $request) {
       // Proses data form
       return redirect()->route('home');
   });
   ```

### 5. **Route dengan Controller**

   Anda juga bisa menggunakan controller untuk menangani logika yang lebih kompleks:
   ```php
   Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
   ```

### 6. **Group Routes**

   Mengelompokkan beberapa route dengan middleware atau prefix yang sama:
   ```php
   Route::middleware(['auth'])->group(function () {
       Route::get('/profil', function () {
           return Inertia::render('Profile');
       });

       Route::get('/pengaturan', function () {
           return Inertia::render('Settings');
       });
   });
   ```

### 7. **Resource Routes**

   Jika Anda memiliki resource controller, Anda dapat menggunakan resource route untuk membuat beberapa route secara otomatis:
   ```php
   Route::resource('post', PostController::class);
   ```


