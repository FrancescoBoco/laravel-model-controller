# Passi post-clone di una repo di Laravel
1. Clono la repo del nuovo esercizio (che probabilmente è la copia del template)
2. Copio il file .env.example e lo rinomino in .env (senza cancellare il file .env.example)
3. Apro il terminale ed eseguo il comando composer install
4. Dopo l'esecuzione di composer install, eseguo nel terminale il comando php artisan key:generate
5. Dopo l'esecuzione di php artisan key:generate, eseguo nel terminale il comando npm i
6. Dopo l'esecuzione di npm i:
    a. Avvio il server di Laravel con php artisan serve e di fianco avvio npm run dev
    b. Eseguo il comando npm run build e poi avvio il server di Laravel con php artisan serve

Come aggiungere un'entità (e relativa CRUD) -> es. pasta, libri, macchine...
<!-- 1. N.B. l'entità User è già implementata in Laravel -->
<!-- 2. Creo una migration tramite il comando php artisan make:migration create_NOMETABELLA_table (es. create_pastas_table) -->
<!-- 3. Riempio la migration con le colonne necessarie -->
<!-- 4. Eseguo la migration tramite il comando php artisan migrate -->
<!-- 5. Creo il model associato alla mia entità tramite il comando php artisan make:model NOMEENTITA (es. Pasta) -->
6. Creo il seeder associato alla mia entità tramite il comando php artisan make:seeder NOMEENTITASeeder (es. PastaSeeder)
7. Riempio il seeder con le operazioni necessarie a creare i salvare i miei dati iniziali (quelli reali)/di test (quelli fake)
8. Eseguo il seeder con il comando php artisan db:seed --class=NOMEENTITASeeder
9. Creo un resource controller tramite il comando php artisan make:controller NOMEENTITAController --resource (es. PastaController)
10. Associo le funzioni (già definite) del nuovo controller alle rispettive rotte aggiungendo in web.php Route::resource('NOMETABELLA', NOMEENTITAController::class)
11. Riempio i corpi delle funzioni secondo necessità