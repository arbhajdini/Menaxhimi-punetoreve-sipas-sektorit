# Menaxhimi i Punëtorëve sipas Sektorit

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)

Ky është një web aplikacion universitar për menaxhimin e punëtorëve sipas sektorit, i ndarë në dy module: **Moduli i Përdoruesve** për shfaqjen e punëtorëve dhe **Moduli i Administratorit** për menaxhimin e tyre.

## Funksionalitetet

- **Moduli i Përdoruesve**:
  - Shfaq listën e punëtorëve të grupuar sipas sektorit.
  - Buton "Kyçu" për qasje në faqen e administratorit.
- **Moduli i Administratorit**:
  - Shton, modifikon, dhe fshin punëtorë.
  - Shton, modifikon, dhe fshin sektorë.
  - Shton përdorues të rinj (administratorë).
  - Mbron qasjen me mesazhin "Ndalohet qasja nga personat e paautorizuar".
  - Buton për kthim në faqen e përdoruesve.

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
3. Krijo databazën në phpMyAdmin dhe importo `database.sql` (nëse ekziston).
4. Përditëso `config.php` me kredencialet e databazës.
5. Nis XAMPP/WAMP dhe hap: `http://localhost/Menaxhimi-punetoreve-sipas-sektorit`.

## Struktura

```plaintext
├── ModuliPerdoruesit/     # Ndërfaqja e përdoruesve (HTML, CSS, JS)
├── ModuliAdministratorit/ # Logjika dhe ndërfaqja e administratorit (PHP, HTML, CSS, JS)
├── database.sql           # Struktura e databazës
├── config.php             # Konfigurimi i databazës (.gitignore)
├── README.md              # Dokumentacioni
├── .gitignore             # Skedarët e përjashtuar
└── LICENSE                # MIT License
```

## Licenca

[MIT License](LICENSE)

## Kontakti

- **GitHub**: [arbhajdini](https://github.com/arbhajdini)
- **Email**: [emaili.juaj@gmail.com](mailto:emaili.juaj@gmail.com)

**Zhvilluar nga Arb Hajdini**