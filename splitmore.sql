-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 27 jun 2017 om 13:02
-- Serverversie: 10.1.16-MariaDB
-- PHP-versie: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `splitmore`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'users/default.png',
  `role_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `dob`, `city`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `avatar`, `role_id`) VALUES
(1, 'Tristan', 'Smit', '199758', 'Almere', 'liedtekst@gmail.com', '$2y$10$C2Ysh4aLIj9UWmW4Ope6r.KZzjYf8ZWilaRJAB5Rgjan0hmu.XHru', '1iNoVCI1hS02YCaWUHG7urJy6dsM079zNode4Tx9THFZE0KHlgNEYQjqo622', '2017-01-10 13:38:40', '2017-02-08 12:22:52', 'users/default.png', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vacatures`
--

CREATE TABLE `vacatures` (
  `id` int(10) UNSIGNED NOT NULL,
  `vacnaam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vacbedrijf` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `vacplaats` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vacprov` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `vacatures`
--

INSERT INTO `vacatures` (`id`, `vacnaam`, `vacbedrijf`, `vacplaats`, `vacprov`, `info`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Vakkenvuller ', 'Albert Heijn', 'Almere Poort', 'Flevoland', 'Voor verschillende klanten in Nederland zoeken wij scholieren die overdag, ‘s avonds of in het weekend aan het werk willen gaan als vakkenvuller. Je werkzaamheden bestaan uit het vullen en onderhouden van de schappen, spiegelen, schoonmaken en klanten wegwijs maken. Iedereen kan het leren! Het fijne aan deze bijbaan is dat je flexibele werktijden hebt, waardoor het goed te combineren is met je school of studie.\n\nDeze baan is op oproepbasis. Dat betekent dat je wordt opgenomen in onze pool als je solliciteert. Vervolgens kunnen we je via de mail op de hoogte houden als er werk beschikbaar is. Jij kunt daarna aangeven of je de klus wilt oppakken. Klinkt ideaal, toch? Dat is het ook! Schrijf je direct in, en wie weet kun jij binnenkort al aan de slag als vakkenvuller!', 'ah.png', NULL, NULL),
(2, 'Crewlid', 'McDonalds', 'Almere Haven', 'Flevoland', 'Voordat je Crewtrainer wordt heb je altijd ervaring opgedaan als Crewlid. Je weet dus wat er nodig is om de kwaliteit, service en hygiëne in en om het restaurant op peil te houden. Naast gewoon meewerken op de vloer sta je ook ingeroosterd om nieuwe collega’s te trainen op de verschillende stations. Je bent echt een buddy voor nieuwe collega’s, die je een goede start van hun loopbaan bij McDonald’s bezorgt.\n\nOm jouw kennis en ervaring zo goed mogelijk over te brengen, helpen we je trainings- en coachingsvaardigheden verder te ontwikkelen. We organiseren daarvoor regelmatig crewtrainer meetings en elk jaar kiezen we de Crewtrainer van het jaar.', 'mc.jpg', NULL, NULL),
(3, 'Koerier', 'New York Pizza', 'Almere Stedenwijk', 'Flevoland', 'Declan heeft kleine piemel. New York Pizza Stedenwijk is op zoek naar bezorgers voor 2 tot 5 avonden in de week. Voor onze vestiging in Almere zijn we op zoek naar scooter bezorgers ter versterking van ons bezorgteam. Als scooter bezorger rijd je op een van onze scooters door de straten van Den Haag. Je levert bestellingen warm af aan onze klanten. Geen ritje is hetzelfde en iedere dag maken onze bezorgers weer leuke momenten mee. Aangezien we meerdere vestigingen in de stad hebben hoef je niet van de ene kant naar de andere kant van Den Haag. Op minder drukke momenten help je onze fililaalmedewerkers met ondersteunende taken.', 'nyp.png', NULL, NULL),
(4, 'Fietskoerier', 'New York Pizza', 'Almere Buiten', 'Flevoland', 'Ze zoeken een fietskoerier die lekker kan rondfietsen.', 'nyp.png', '2017-01-12 17:06:41', '2017-01-12 17:06:41');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_index` (`role_id`);

--
-- Indexen voor tabel `vacatures`
--
ALTER TABLE `vacatures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `vacatures`
--
ALTER TABLE `vacatures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
