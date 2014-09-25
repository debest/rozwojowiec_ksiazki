-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas wygenerowania: 25 Wrz 2014, 12:44
-- Wersja serwera: 5.5.32-log
-- Wersja PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `rozwojowiec`
--
CREATE DATABASE IF NOT EXISTS `rozwojowiec` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `rozwojowiec`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Zrzut danych tabeli `authors`
--

INSERT INTO `authors` (`id`, `name`) VALUES
(4, 'Brett Regina'),
(1, 'Eker Harv T.'),
(3, 'Pawlikowska Beata'),
(2, 'Walkiewicz Jacek');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(10) unsigned NOT NULL,
  `publisher_id` int(10) unsigned NOT NULL,
  `title` varchar(128) NOT NULL,
  `publish_year` smallint(4) unsigned NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `author_id` (`author_id`),
  KEY `publisher_id` (`publisher_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Zrzut danych tabeli `books`
--

INSERT INTO `books` (`id`, `author_id`, `publisher_id`, `title`, `publish_year`, `comment`) VALUES
(3, 1, 1, 'Bogaty albo biedny po prostu różni mentalnie', 2012, 'Daj mi pięć minut, a powiem ci, jaką będziesz miał finansową przyszłość! Jak to możliwe? Wystarczy, że rozpoznam twój indywidualny "schemat pieniędzy i sukcesu". T.Harv Eker Z tej niezwykłej książki dowiesz się, jak rozpoznać i skorygować swój schemat pieniędzy, aby zdecydowanie zwiększyć swoje dochody i majątek. T.Harv Eker doszedł "od zera do milionera" w ciągu zaledwie dwóch i pół roku. Przeczytaj ją i zacznij się bogacić!'),
(4, 2, 2, 'Pełna moc możliwości', 2014, 'Pomyśl o swoich sukcesach. One nie są dziełem przypadku. Żadne „udało się”, „samo wyszło”, „przy okazji”. Okazje pojawiły się na Twojej drodze. Ale to Ty schyliłeś się, podniosłeś je, włożyłeś w nie pasję, ciężką pracę, upór i odniosłeś sukces. Czytelniku! Pomyśl o swoich marzeniach. Wiesz, po co są? Żeby je spełniać! Pomyśl o odwadze. Odwaga składa się z czterech elementów. Odwaga to zaufanie do siebie, ryzyko, decyzje i zaangażowanie. Te składowe — dążenie do sukcesu, pasja, praca, marzenia, odwaga — łączą się ze sobą w obraz spełnionego życia. Dają nam pełną MOC możliwości. O tym właśnie opowiadał Jacek Walkiewicz słuchaczom TEDxWSB we wrześniu 2012 roku we Wrocławiu.'),
(5, 3, 3, 'W dżungli podświadomości', 2013, 'Beata Pawlikowska w swoim poradniku pt. "W dżungli podświadomości" przenosi nas w świat psychologii, by pomóc nam zrozumieć samych siebie. Jest to pozycja dla wszystkich lekko zagubionych i chcących coś zmienić w swoim dotychczasowym życiu. \r\n\r\nAutorka zmierza się samą sobą, opowiadając o swoim życiu przed i po przemianie, jaka nastąpiła. Opisuje własne doświadczenia, dzięki czemu poznajemy jej „drugą twarz” i dowiadujemy się, że jej z pozoru kolorowe i poukładane życie ma wiele odcieni szarości. '),
(6, 4, 4, 'Bóg nigdy nie mruga', 2012, 'Pięćdziesiąt wskazówek. Pięćdziesiąt lekcji, w których autorka przeplata własne przeżycia z doświadczeniami ludzi spotkanych na swojej krętej drodze; przywołuje ważne dla siebie postaci, znaczące książki i filmy, inspirujące modlitwy i wypisy z lektur; przypomina o sile psalmów i prostych sentencji. Felietony Reginy Brett docenili i pokochali czytelnicy na całym świecie. Przyklejano je na lodówkach, rozsyłano w e-mailach do bliskich. Tematy lekcji, których udzieliło autorce życie, cytowano na tysiącach blogów i przedrukowywano w gazetach. Książka, którą trzymasz w ręce, stanie się bliska każdemu, kto kiedykolwiek znalazł się na życiowym zakręcie oraz wszystkim szukającym inspiracji. Niech każda z pięćdziesięciu lekcji będzie manifestem – jak bohaterka jednego z esejów, pewna sportowa czapka z prostym hasłem: „Życie jest dobre”. Bo takie jest. Naprawdę. Regina Brett pisze od 1986 roku. Za felietony drukowane na łamach największej gazety w Ohio, „The Plain Dealer”, otrzymała wiele krajowych i stanowych nagród. Była też dwukrotnie nominowana do nagrody Pulitzera w dziedzinie reportażu.'),
(7, 4, 4, 'Jesteś cudem', 2013, 'Nowa książka autorki bestsellera Bóg nigdy nie mruga, cieszącego się niesłabnącym zainteresowaniem czytelników na całym świecie. \r\nTym razem Regina Brett dzieli się z nami opowieściami o tym, że szczęście zależy od nas samych – naszych wyborów i decyzji, które najczęściej nie są aż tak trudne, jak się z pozoru wydają. A  każda próba zmiany świata wokół siebie na lepsze sprawia, że dokonujemy cudów. Cudów, które są osiągalne dla każdego z nas. Codziennie. \r\nRegina Brett nie stawia przed swoimi czytelnikami zadania ponad ich miarę. Niezależnie od tego, czy humorystycznie, czy refleksyjnie, zawsze pisze z niezachwianą wiarą w człowieka, w dobro, które w nim tkwi i które sprawia, że niemożliwe staje możliwe. Jesteś cudem to zbiór inspirujących lekcji o tym, jak niewiele trzeba, by zmienić coś na lepsze. \r\nTo 50 felietonów, które obudzą w czytelniku natchnienie. Choć każdy z nich to zupełnie inna historia, zebrane razem tworzą przewodnik pomagający dostrzec i docenić siłę zmian na lepsze – małych cudów. '),
(13, 3, 3, 'Moje zdrowe przepisy', 2014, 'Zaczęłam gotować, bo chciałam być zdrowa. Kiedy sprawdziłam w jaki sposób produkowana jest „żywność” sprzedawana w sklepach, zrozumiałam, że chyba nie mam wyjścia. Muszę nauczyć się gotować i stworzyć takie przepisy, które będą szybkie, łatwe i zdrowe. I takie są przepisy w tej książce. Każde danie gotuje się samo. Ja tylko wkładam do garnka składniki w odpowiedniej kolejności i wracam pół godziny później, kiedy jedzenie jest gotowe. I jest pyszne!');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `publishers`
--

CREATE TABLE IF NOT EXISTS `publishers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Zrzut danych tabeli `publishers`
--

INSERT INTO `publishers` (`id`, `name`) VALUES
(3, 'Burda Publishing Polska'),
(2, 'Helion Wydawnictwo'),
(4, 'Insignis Wydawnictwo'),
(1, 'Wydawnictwo Studio EMKA');

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
