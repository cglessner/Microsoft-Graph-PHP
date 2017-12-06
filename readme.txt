---Install---
node js
PHP > 7.0
Composer

---Register App in Azure AD---

Reply url: http://localhost:8000/oauth

Graph Permission for '/me/insights/trending'
-Read items in all site collections (delegated)

---Config---
Rename .env.example to .env

Fill in AZURE_CLIENTID and AZURE_CLIENTSECRET into .env file 

---Build---

Run: npm install
Run: Composer Install
Run: npm run dev
Run: php artisan serve

Open browser: http://localhost:8000

Enjoy :)





