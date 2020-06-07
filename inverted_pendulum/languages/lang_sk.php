<?php
/*
-----------------
Language: Slovak
-----------------
*/

define('MAIN','Finalne zadanie');

define('DESCRIPTION','Ak chcete zobraziť alebo skryť graf alebo simuláciu,začiarknite alebo zrušte začiarknutie políčka ckeckbox');
define('GRAPH', 'Graf');
define('SIMULATION','Simulacia');
define('POSITION','Pozícia loptičky');
define('SEND', 'Odoslať');
define('ALERT', 'Zadaný vstup nie je platný, vstup musi byť 0-0.95');
define('TITLE1','Inverzne kyvadlo');
define('TITLE2','Gulicka na tyci');
define('TITLE3','Tlmic kolesa');


//index.php
define('HOME', 'Domov');
define('CONTACT', 'Kontakt');
define('WELCOME','Vitajte v našom konečnom projekte! Naše hlavné zameranie bolo vytvoriť tri simulácie: Inverzne kyvadlo, Gulicka na tyci a Tlmic kolesa. Tu je ich jednoduchý opis ...');
define('DESCRIPTION_INVERTED','Obrátené kyvadlo je kyvadlo, ktoré má svoje ťažisko nad svojim otočným bodom. Je nestabilný a bez ďalšej pomoci sa prepadne. V tejto obrátenej polohe sa dá stabilne zavesiť pomocou ovládacieho systému na sledovanie uhla stĺpa a posúvanie bodu otáčania vodorovne späť pod ťažisko, keď sa začne prepadávať, pričom sa udržuje vyvážený.');
define('DESCRIPTION_BALL','Systém gule a lúča pozostáva z dlhého lúča, ktorý môže byť naklonený servomotorom alebo elektromotorom, spolu s guličkou, ktorá sa valí dozadu a dopredu na vrchu lúča. Význam systému gule a lúča je, že je to jednoduchý systém, ktorý je nestabilný s otvorenou slučkou. Aj keď je lúč obmedzený na takmer vodorovnú polohu bez aktívnej spätnej väzby, bude sa hýbať na jednu alebo druhú stranu a guľa odvalí koniec lúča. Na stabilizáciu lopty sa musí použiť ovládací systém, ktorý meria polohu lopty a podľa toho upravuje lúč.');
define('DESCRIPTION_SUSPENSION','Úlohou zavesenia automobilu je maximalizovať trenie medzi pneumatikami a povrchom vozovky, zaistiť stabilitu riadenia pri dobrej ovládateľnosti a zabezpečiť pohodlie cestujúcich. Systémy odpruženia musia podporovať ako pridržiavanie / ovládanie, tak kvalitu jazdy, [2] ], ktoré sú v rozpore. Vyladenie pozastavení spočíva v nájdení správneho kompromisu. Je dôležité, aby odpruženie udržiavalo cestné koleso v maximálnej možnej miere v styku s povrchom vozovky, pretože všetky cestné alebo pozemné sily pôsobiace na vozidlo tak robia prostredníctvom kontaktných plôch pneumatík. Odpruženie tiež chráni samotné vozidlo a akýkoľvek náklad alebo batožinu pred poškodením a opotrebením.');

//vypocet.php
define('COUNT','Vypocet');
define('FORMULAR', 'Formular na vypocet');
define('INPUT', 'Vstup');
define('OUTPUT','Vystup');


//welcome.php

define('INFO_API','Ak chcete získať prístup na našu stránku, zadajte do adresy URL platny API kľúč..');
define('HOWTO1', "Do adresy URL https://wt29.fei.stuba.sk:4429/finalne_zadanie/welcome.php zadajte kľúč API podľa tohto vzoru.");
define('HOWTO2', 'Vzor: https://wt29.fei.stuba.sk:4429/finalne_zadanie/welcome.php?API_KEY= ZADAŤ_TU_API_KLUC');
define('HOWTO3',"Kľúč má svoje vlastné skryté miesto. Mali by ste vedieť, kde to je.");
define('HOWTO4', 'Po zadaní kľúča stránku dvakrát obnovte.');
define('ERROR','Chybný API kluc, zadajte platny.');
define('ERROR2','Nezadali ste API kluc. Prosim Vas zadajte API kluc');

//work.php

define('TITLE5','Popis API');
define('TITLE4','Praca');
define('BILING','Dvojjazycnost');
define('API','API ku naistalovanemu CAS');
define('API_KEY','API kluc');
define('INDIVIDUAL','Individualna praca');
define('LOGGING','Logovanie');
define('DESC_API','Popis Api');
define('STATISTICS','Štatistika');
define('MATHEMATICS','Matematika');

define('DRAGANA','V týchto grafoch môžete sledovať zmenu polohy obráteného kyvadla. Modrá čiara označuje zmenu polohy v priebehu času a oranžová čiara zmenu uhla.Údaje som spracovala pomocou Octave. Hodnoty v grafe, ako aj polohu a uhol je možné meniť výberom čísla v rozsahu 0 - 1, počas ktorého bude graf nakreslený s novými hodnotami a animácia sa nastartuje týmito hodnotami.');
define('ZELKO','Môj projekt bol Ball Beam. Prvý graf ukazuje v čase meniacu sa pozíciu guličky a druhy graf ukazuje uhol naklonenia tyče v závislosti od času. Animacia ako sama, zavisi ako od parametrov ziskanich z Octave, tak aj zadanych parametrov od uzivatela. Ked uzivatel zada parameter v rozsahu 0-1, tak sa animacia rozbehne, a hodnoty na grafe sa tiez zmenia na zaklade novych udajov.');
//stats.php

define('EMAIL', 'Ak chcete získať štatistiku, zadajte svoj e-mail.');
define('PROJECT', 'Úloha');
define('COUNTER','Počet užívaní');
define('TABLE','Táto tabuľka zobrazuje počet návštev / použití uvedených stránok / úloh.');
?>