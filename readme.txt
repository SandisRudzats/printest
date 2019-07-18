
Sveiki

Taka ši ir pirma reize kad sutu kadam datubazes dump failu un servera specifikacijas,
atvainojos jau priekšlaicigi,ja kautko bušu sajaucis.

Server: 127.0.0.1 via TCP/IP
Server type: MariaDB
Server connection: SSL is not being used Documentation
Server version: 10.3.15-MariaDB - mariadb.org binary distribution
Protocol version: 10
User: sandisr@localhost
Server charset: cp1252 West European (latin1)



Apache/2.4.39 (Win64) OpenSSL/1.1.1c PHP/7.3.6
Database client version: libmysql - mysqlnd 5.0.12-dev - 20150407 - $Id: 7cc7cc96e675f6d72e5cf0f267f48e167c2abb23 $
PHP extension: mysqliDocumentation curlDocumentation mbstringDocumentation
PHP version: 7.3.6

Velejos tikai piebilst paris vardus. Lidz galam uzdevumu paveikt nespeju, jo programmešanas pasaule esmu ienacis 
salidzinoši nesen, un tas laikam ir grutakais,uzsakt un meklet pašam informacijas avotus,jo virzienu ir tik daudz.
Ja man pastāvētu kaut mazākā iespēja iekļūt jūsu vasaras skolā,es to ļoti novērtētu un iespēju izmantotu uz visiem 100%.

1.jāinstalē repositorijs lokāli,lai ir piekļuve caur localhost/printest/index.php
2.jaizveido datubāze izmantojot mysql dump failā atrodamo informāciju.
  - CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
 -ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);
  -ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;
3.izmantot šos datus lai palaistu datubāzi 
  username: sandisr
  password: pussboi


ar cienu

Sandis


