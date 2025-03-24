-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2025 at 08:04 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
-- SET PASSWORD = PASSWORD(null);

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `correct_answer` char(1) DEFAULT NULL,
  `answer_a` varchar(255) DEFAULT NULL,
  `answer_b` varchar(255) DEFAULT NULL,
  `answer_c` varchar(255) DEFAULT NULL,
  `answer_d` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `correct_answer`, `answer_a`, `answer_b`, `answer_c`, `answer_d`) VALUES
(1, 1, 'D', 'Zbiór danych przechowywanych w pamięci', 'Procesor odpowiedzialny za wykonywanie obliczeń', 'Sposób przechowywania danych w chmurze', 'Skończony ciąg jasno określonych kroków prowadzących do rozwiązania problemu'),
(2, 2, 'B', 'Read Access Memory', 'Random Access Memory', 'Random Algorithmic Machine', 'Read Allocation Memory'),
(3, 3, 'A', 'Linux', 'Python', 'HTML', 'Ethernet'),
(4, 4, 'A', 'Python', 'HTML', 'HTTP', 'CSS'),
(5, 5, 'C', 'Tworzenie dokumentów tekstowych', 'Przetwarzanie danych w chmurze', 'Konwertowanie kodu źródłowego na kod maszynowy', 'Zarządzanie pamięcią RAM'),
(6, 6, 'A', 'Hypertext Transfer Protocol', 'High Transfer Technology Protocol', 'Hyperlink Text Transmission Process', 'Host Transfer Tunnel Protocol'),
(7, 7, 'C', 'Zbiór niepowiązanych ze sobą plików', 'Urządzenie do przechowywania danych', 'Zorganizowany zbiór danych przechowywanych w sposób umożliwiający łatwy dostęp', 'Format pliku tekstowego'),
(8, 8, 'C', 'Przechowywanie danych', 'Zarządzanie systemem operacyjnym', 'Przesyłanie danych pomiędzy różnymi sieciami', 'Monitorowanie pracy procesora'),
(9, 9, 'A', 'Google Chrome', 'Windows', 'Oracle', 'Python'),
(10, 10, 'B', 'Program do edytowania plików tekstowych', 'Struktura przechowywania i organizowania plików na nośniku danych', 'Język programowania', 'Protokół komunikacyjny'),
(11, 11, 'C', 'RAM', 'Procesor', 'Dysk twardy', 'Karta graficzna'),
(12, 12, 'A', 'Uniform Resource Locator', 'Universal Random Link', 'Unique Resource Lin', 'Unified Router List'),
(13, 13, 'B', 'SQL', 'HTTP', 'CSS', 'JPG'),
(14, 14, 'B', 'General Processing Unit', 'Graphical Processing Unit', 'Graphic Power Unit', 'General Power Unit'),
(15, 15, 'C', 'Tworzenie stron internetowych', 'Obsługa sieci komputerowych', ' Zarządzanie zasobami sprzętowymi i programowymi', 'Przetwarzanie grafiki'),
(16, 16, 'D', 'Metoda organizacji danych w bazie danych', 'Tworzenie dokumentów tekstowych', 'Protokół internetowy', 'Paradygmat programowania oparty na obiektach i ich interakcjach'),
(17, 17, 'D', 'Przechowywanie danych', 'Przetwarzanie tekstu', 'Zarządzanie siecią', 'Renderowanie obrazów i grafiki'),
(18, 18, 'D', 'Program do tworzenia grafiki', 'Przestrzeń dyskowa na komputerze', 'Język programowania', 'Usługi dostarczające zasoby obliczeniowe przez internet'),
(19, 19, 'D', 'Data Network Service', 'Dynamic Network Storage', 'Digital Node Server', 'Domain Name System '),
(20, 20, 'C', 'System operacyjny', 'Protokół internetowy', 'Podstawowy system wejścia-wyjścia komputera', 'Aplikacja biurowa'),
(21, 21, 'A', 'Solid State Drive', 'Simple Storage Device', 'Secure Storage Disk', 'System Serial Device'),
(22, 22, 'A', 'File Transfer Protocol', 'Fast Text Processing', 'File Tracking Program', 'Flexible Transmission Protocol'),
(23, 23, 'C', 'Systemem operacyjnym', 'Urządzeniem do przechowywania danych', 'Oprogramowaniem chroniącym sieć przed nieautoryzowanym dostępem ', 'Przeglądarka internetowa'),
(24, 24, 'B', 'Application Processing Interface', 'Application Programming Interface', 'Automated Program Integration', 'Accessible Protocol Interaction'),
(25, 25, 'B', 'Tworzenie stron internetowych', 'Usługa polegająca na udostępnianiu zasobów serwera', 'Protokół internetowy', 'Typ pamięci RAM'),
(26, 26, 'B', 'Język programowania', 'Język znaczników do tworzenia stron internetowych', 'System operacyjny', 'Format pliku tekstowego'),
(27, 27, 'A', 'Narzędzie do wirtualizacji aplikacji', 'System operacyjny', 'Protokół internetowy', 'Język programowania\r\n'),
(28, 28, 'A', 'Transmission Control Protocol/Internet Protocol', 'Text Control Processing/Internet Protocol', 'Transfer Command Protocol/Internal Process', 'Terminal Communication Protocol/Internet Point'),
(29, 29, 'B', 'System kontroli wersji', 'Platforma do hostowania kodu źródłowego', 'Protokół internetowy', 'Język programowania'),
(30, 30, 'A', 'Język znaczników do przechowywania danych', 'Protokół internetowy', 'Format pliku graficznego', 'System plików'),
(31, 31, 'D', 'Data Object Management', 'Digital Output Memory', 'Dynamic Operation Module', 'Document Object Model '),
(32, 32, 'D', 'Java Syntax Object Name', 'Jumbled Symbolic Object Notation', 'Joint Script Output Network', 'JavaScript Object Notation'),
(33, 33, 'B', 'Internet Data Exchange', 'Integrated Development Environment', 'Internal Device Emulator', 'Input Device Engine'),
(34, 34, 'D', 'Simple Queue Logic', 'System Query Layout', 'Secure Quality Log', 'Structured Query Language'),
(35, 35, 'C', 'Control Process Unit', 'Control Processing Unit', 'Central Processing Unit', 'Computer Processing Unit'),
(36, 36, 'C', 'Przechowywanie danych', 'Obsługa przeglądarki internetowej', 'Zarządzanie zasobami komputera', 'Tworzenie stron internetowych'),
(37, 37, 'B', '.txt', '.exe', '.jpg', '.bat'),
(38, 38, 'D', 'Monitor', 'Drukarka', 'Klawiatura', 'Router'),
(39, 39, 'A', 'Przechowywanie danych tymczasowo', 'Przechowywanie danych na stałe', 'Tworzenie kopii zapasowych', 'Łączenie z Internetem'),
(40, 40, 'D', 'Dziesiętny', 'Heksadecymalny', 'Oktalny', 'Binarny');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`) VALUES
(1, 'Co to jest algorytm?'),
(2, 'Co oznacza skrót RAM?'),
(3, 'Który z poniższych to system operacyjny?'),
(4, 'Które z poniższych jest przykładem języka programowania?'),
(5, 'Jakie jest główne zadanie kompilatora?'),
(6, 'Co oznacza skrót HTTP?'),
(7, 'Co to jest baza danych?'),
(8, 'Jakie jest główne zadanie routera?'),
(9, 'Które z poniższych jest przykładem przeglądarki internetowej?'),
(10, 'Co to jest system plików?'),
(11, 'Które urządzenie przechowuje dane w sposób trwały?'),
(12, 'Co to jest URL?'),
(13, 'Który z poniższych to protokół komunikacyjny?'),
(14, 'Co oznacza skrót GPU?'),
(15, 'Jakie jest główne zadanie systemu operacyjnego?'),
(16, 'Co to jest programowanie obiektowe?'),
(17, 'Jakie jest główne zadanie karty graficznej?'),
(18, 'Co to jest chmura obliczeniowa?'),
(19, 'Co oznacza skrót DNS?'),
(20, 'Co to jest BIOS?'),
(21, 'Co oznacza skrót SSD?'),
(22, 'Co oznacza skrót FTP?'),
(23, 'Co to jest firewall?'),
(24, 'Co oznacza skrót API?'),
(25, 'Co to jest hosting?'),
(26, 'Co to jest HTML?'),
(27, 'Co to jest Docker?'),
(28, 'Co oznacza skrót TCP/IP?'),
(29, 'Co to jest GitHub?'),
(30, 'Co to jest XML?'),
(31, 'Co oznacza skrót DOM?'),
(32, 'Co oznacza skrót JSON?'),
(33, 'Co to jest IDE?'),
(34, 'Co oznacza skrót SQL?'),
(35, 'Co oznacza skrót CPU?'),
(36, 'Co jest podstawowym zadaniem systemu operacyjnego?'),
(37, 'Jakie jest rozszerzenie pliku wykonalnego w systemie Windows?'),
(38, 'Jakie urządzenie jest używane do bezprzewodowej komunikacji między komputerami w sieci lokalnej?'),
(39, 'Jakie jest podstawowe zadanie pamięci RAM?'),
(40, 'Jaki system liczbowy jest używany przez komputery do przetwarzania danych?');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `userScore` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `imie` varchar(30) DEFAULT NULL,
  `literaNazwiska` char(1) DEFAULT NULL,
  `szkola` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
