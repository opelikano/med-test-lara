Додаток на Laravel. 
Включає в себе: 
- обробка даних про закупівлі обладнання. Модель "Purchase" з полями: назва продукту, кількість, дозування, ціна, дата закупівлі.
- функціонал для обробки даних про закупки(CRUD).

Налаштування підключення до бази даних знаходяться у файлі .env
Перейменуйте .env.example в .env і пропишіть підключення. 

Для розгортання перейдіть у папку додатку і виконайте:
- php artisan serve
- php artisan migrate
- php artisan db:seed --class=PurchaseSeeder

Далі можна зайти у браузері за адресою http://localhost:8000