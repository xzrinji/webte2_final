<?php
/*
-----------------
Language: Slovak
-----------------
*/

define('MAIN','Finálne zadanie');

define('DESCRIPTION','Ak chcete zobraziť alebo skryť graf alebo simuláciu,začiarknite alebo zrušte začiarknutie políčka ckeckbox');
define('GRAPH', 'Graf');
define('SIMULATION','Simulácia');
define('POSITION','Pozícia loptičky');
define('SEND', 'Odoslať');
define('ALERT', 'Zadaný vstup nie je platný, vstup musi byť 0-0.95');
define('TITLE1','Inverzné kyvadlo');
define('TITLE2','Gulicka na týči');
define('TITLE3','Tlmič kolesa');
define('SUSP1','Graf označuje v čase meniacu sa pozíciu kolesa pri nabiehaní na rôzne prekážky.');
define('CHOOSE','Vybrať');
define('CLOSE','Zavrieť');
define('DOCUMENTATION','Dokumentácia API');
define('CAS_DOC','CAS API Dokumentácia');
define('DESC_API','Popis API');
define('PREKAZKA',' Výška prekážky');


//index.php
define('HOME', 'Domov');
define('CONTACT', 'Kontakt');
define('WELCOME','Vitajte v našom konečnom projekte! Naše hlavné zameranie bolo vytvoriť tri simulácie: Inverzne kyvadlo, Gulicka na tyci a Tlmic kolesa. Tu je ich jednoduchý opis ...');
define('DESCRIPTION_INVERTED','Obrátené kyvadlo je kyvadlo, ktoré má svoje ťažisko nad svojim otočným bodom. Je nestabilný a bez ďalšej pomoci sa prepadne. V tejto obrátenej polohe sa dá stabilne zavesiť pomocou ovládacieho systému na sledovanie uhla stĺpa a posúvanie bodu otáčania vodorovne späť pod ťažisko, keď sa začne prepadávať, pričom sa udržuje vyvážený.');
define('DESCRIPTION_BALL','Systém gule a lúča pozostáva z dlhého lúča, ktorý môže byť naklonený servomotorom alebo elektromotorom, spolu s guličkou, ktorá sa valí dozadu a dopredu na vrchu lúča. Význam systému gule a lúča je, že je to jednoduchý systém, ktorý je nestabilný s otvorenou slučkou. Aj keď je lúč obmedzený na takmer vodorovnú polohu bez aktívnej spätnej väzby, bude sa hýbať na jednu alebo druhú stranu a guľa odvalí koniec lúča. Na stabilizáciu lopty sa musí použiť ovládací systém, ktorý meria polohu lopty a podľa toho upravuje lúč.');
define('DESCRIPTION_SUSPENSION','Úlohou zavesenia automobilu je maximalizovať trenie medzi pneumatikami a povrchom vozovky, zaistiť stabilitu riadenia pri dobrej ovládateľnosti a zabezpečiť pohodlie cestujúcich. Systémy odpruženia musia podporovať ako pridržiavanie / ovládanie, tak kvalitu jazdy, [2] ], ktoré sú v rozpore. Vyladenie pozastavení spočíva v nájdení správneho kompromisu. Je dôležité, aby odpruženie udržiavalo cestné koleso v maximálnej možnej miere v styku s povrchom vozovky, pretože všetky cestné alebo pozemné sily pôsobiace na vozidlo tak robia prostredníctvom kontaktných plôch pneumatík.');
define('SHOW', 'Zobraziť Viac');

//vypocet.php
define('COUNT','Výpočet');
define('FORMULAR', 'Formulár na výpočet');
define('INPUT', 'Vstup');
define('OUTPUT','Výstup');


//welcome.php

define('INFO_API','Ak chcete získať prístup na našu stránku, zadajte do adresy URL platny API kľúč..');
define('HOWTO1', "Do adresy URL https://wt29.fei.stuba.sk:4429/finalne_zadanie/welcome.php zadajte kľúč API podľa tohto vzoru.");
define('HOWTO2', 'Vzor: https://wt29.fei.stuba.sk:4429/finalne_zadanie/welcome.php?API_KEY= ZADAŤ_TU_API_KLUC');
define('HOWTO3',"Kľúč má svoje vlastné skryté miesto. Mali by ste vedieť, kde to je.");
define('HOWTO4', 'Po zadaní kľúča stránku dvakrát obnovte.');
define('ERROR','Chybný API kluc, zadajte platny.');
define('ERROR2','Nezadali ste API kluc. Prosim Vas zadajte API kluc');

define('TITLE5','Popis API');
//work.php

define('WORK','Práca');
define('TITLE4','Práca');
define('BILING','Dvojjazyčnosť');
define('API','API ku naistalovanemu CAS');
define('API_KEY','API kľúč');
define('INDIVIDUAL','Individuálna práca');
define('LOGGING','Logovanie');
define('DESC_API','Popis Api');
define('STATISTICS','Štatistika');
define('MATHEMATICS','Matematika');

define('DRAGANA','V týchto grafoch môžete sledovať zmenu polohy obráteného kyvadla. Modrá čiara označuje zmenu polohy v priebehu času a oranžová čiara zmenu uhla.Údaje som spracovala pomocou Octave. Hodnoty v grafe, ako aj polohu a uhol je možné meniť výberom čísla v rozsahu 0 - 1, počas ktorého bude graf nakreslený s novými hodnotami a animácia sa nastartuje týmito hodnotami.');
define('ZELKO','Môj projekt bol Ball Beam. Prvý graf ukazuje v čase meniacu sa pozíciu guličky a druhy graf ukazuje uhol naklonenia tyče v závislosti od času. Animacia ako sama, zavisi ako od parametrov ziskanich z Octave, tak aj zadanych parametrov od uzivatela. Ked uzivatel zada parameter v rozsahu 0-1, tak sa animacia rozbehne, a hodnoty na grafe sa tiez zmenia na zaklade novych udajov.');
define('VLADO','V tomto prípade nám animácia tlmiča kolies ukazuje polohu kolies pri stretnutí s prekážkou. Ak zadáte parametre od 0 do 1, graf aj simulácia zobrazujú hodnoty zmeny polohy kolesa.');
//stats.php

define('EMAIL', 'Ak chcete získať štatistiku, zadajte svoj e-mail.');
define('PROJECT', 'Úloha');
define('COUNTER','Počet užívaní');
define('TABLE','Táto tabuľka zobrazuje počet návštev / použití uvedených stránok / úloh.');

//api-docs.php

define('VYPOCET','Vracia výpočet');
define('POZIADVYP','Vracia výsledok požiadaného výpočtu');
define('RET_ARR','Vracia polia s polohámi častí pre animácii simulácii');


?>