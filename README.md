🌐 Portfolio – Tobi Q

Welkom bij mijn portfolio! Dit project is bedoeld om mijn werk als Software Developer in opleiding te laten zien. Hier presenteer ik schoolopdrachten, projecten waar ik zelf aan werk, en experimentele dingen waar ik mee oefen.

🚀 Functionaliteiten

Responsive design – Werkt op mobiel, tablet en desktop

Projectoverzicht – Mijn lopende en afgeronde projecten

Contactformulier – Mogelijkheid om rechtstreeks een bericht te sturen

Cyberpunk-stijl – Donker thema met neon-accenten (mijn persoonlijke stijl)

⚙️ Tech Stack

Dit portfolio is gebouwd met:

HTML5 / CSS3 / TailwindCSS – Frontend structuur en styling

JavaScript – Interactiviteit (animaties, toggle functies, AJAX formulier)

PHP + MariaDB (via Docker) – Backend en database voor contactberichten

GitHub & Docker – Versiebeheer en lokale ontwikkelomgeving

📂 Projectstructuur
portfolio/
├── css/              # Stylesheets
├── js/               # JavaScript bestanden
├── img/              # Afbeeldingen
├── connection.php    # Database connectie
├── contact.php       # Contactformulier verwerking
├── index.html        # Hoofdpagina
└── README.md         # Dit bestand

🛠️ Installatie & Gebruik

Wil je dit project lokaal draaien? Volg dan deze stappen:

Clone de repo

git clone https://github.com/Relaced422/portfolio.git
cd portfolio


Start de Docker containers (Apache, PHP, MariaDB, PHPMyAdmin)

docker-compose up -d


Open je browser en ga naar:

http://localhost:8080


Database inrichten

Maak een database portfolio aan

Voeg tabel contact_messages toe met kolommen:

id (INT, AUTO_INCREMENT, PRIMARY KEY)

email (VARCHAR)

message (TEXT)

🎨 Toekomstige ideeën

Projecten filteren op categorie

Downloadbare CV via de site

Animaties voor een meer “cyberpunk hacking console” vibe

Dark/light theme toggle

📬 Contact

Wil je meer weten of samenwerken? Neem contact op via het formulier op de site, of via:

Tobi Quenum
