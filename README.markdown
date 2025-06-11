# Menaxhimi i Punëtorëve sipas Sektorit

Ky është një web aplikacion universitar për menaxhimin e punëtorëve sipas sektorit, i ndarë në dy module: **Moduli i Përdoruesve** për shfaqjen e punëtorëve dhe **Moduli i Administratorit** për menaxhimin e tyre.

## Funksionalitetet

- **Moduli i Përdoruesve**:
  - Shfaq listën e punëtorëve të grupuar sipas sektorit.
  - Buton "Kyçu" për qasje në faqen e administratorit.
- **Moduli i Administratorit**:
  - Shton, modifikon, dhe fshin punëtorë.
  - Shton, modifikon, dhe fshin sektorë.
  - Shton përdorues të rinj (administratorë).

## Teknologjitë

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Databaza**: MySQL
- **Server**: XAMPP/WAMP

## Instalimi

1. Klono repository-n:
   ```bash
   git clone https://github.com/arbhajdini/Menaxhimi-punetoreve-sipas-sektorit.git
   ```
2. Kopjo projektin në `htdocs` (XAMPP) ose `www` (WAMP).
3. Krijo databazën në phpMyAdmin dhe importo `database.sql`.
4. Përditëso `config.php` me kredencialet e databazës.
5. Nis XAMPP/WAMP dhe hap: `http://localhost/Menaxhimi-punetoreve-sipas-sektorit`.

## Struktura

```plaintext
├── ModuliPerdoruesit/     # Ndërfaqja e përdoruesve (HTML, CSS, JS)
├── ModuliAdministratorit/ # Logjika dhe ndërfaqja e administratorit (PHP, HTML, CSS, JS)
├── database.sql           # Struktura e databazës
└── README.md              # Dokumentacioni

```


## Kontakti

- **GitHub**: [arbhajdini](https://github.com/arbhajdini)
- **Email**: [arbhajdini@gmail.com](mailto:emaili.juaj@gmail.com)
- **LinkedIn**: [arbhajdini](https://www.linkedin.com/in/arbhajdini/)

**Zhvilluar nga Arb Hajdini**
