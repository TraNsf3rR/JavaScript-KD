# Uzdevumu pārvaldnieks (Mini MVC projekts)

## Projekta apraksts

Šis ir vienkāršs uzdevumu pārvaldnieks, kas izveidots, izmantojot MVC (Model-View-Controller) struktūru. Lietotājs var:

* pievienot jaunus uzdevumus,
* apskatīt visus uzdevumus,
* rediģēt uzdevumus,
* dzēst uzdevumus (ar apstiprinājumu),
* mainīt uzdevuma statusu (done / not-done).

Dati tiek saglabāti JSON failā serverī, un komunikācija starp klientu un serveri notiek ar `fetch()` palīdzību.

---

## Kā projekts darbojas

* Frontend (JavaScript) sūta pieprasījumus uz serveri (PHP).
* Controller apstrādā pieprasījumu.
* Model lasa vai saglabā datus `tasks.json` failā.
* View attēlo datus lietotājam.
* Pēc katras darbības dati tiek pārlādēti un attēloti no jauna.

---

## Failu struktūra un to nozīme

```
project/
│
├── index.php              # Galvenais ieejas punkts (routing)
│
├── data/
│   └── tasks.json         # Datu glabāšana (uzdevumu saraksts)
│
├── controllers/
│   └── TaskController.php # Apstrādā lietotāja pieprasījumus
│
├── models/
│   └── TaskModel.php      # Darbs ar datiem (lasīšana/saglabāšana)
│
├── views/
│   └── taskView.php       # Lietotāja interfeiss (HTML)
│
└── assets/
    ├── style.css          # Stils
    └── app.js             # JavaScript loģika (fetch, DOM, eventi)
```

---

## Kā palaist projektu

### 1. Ar XAMPP

1. Ievieto projektu mapē:

   ```
   C:\xampp\htdocs\
   ```
2. Palaid **Apache** serveri XAMPP kontrolpanelī.
3. Atver pārlūkā:

   ```
   http://localhost/project/
   ```

---

### 2. Ar PHP iebūvēto serveri

1. Atver termināli projekta mapē.
2. Palaid serveri:

   ```
   php -S localhost:8000
   ```
3. Atver pārlūkā:

   ```
   http://localhost:8000
   ```
