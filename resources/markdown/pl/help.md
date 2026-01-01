## Pomoc

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 1. Koncepcja: Modele i relacje

### a. Osoby

<ul>
    <li>Osoba może mieć 1 biologicznego ojca (1 osoba, na podstawie <b>father_id</b>)</li>
    <li>Osoba może mieć 1 biologiczną matkę (1 osoba, na podstawie <b>mother_id</b>)</li>
    <li>Osoba może mieć 1 parę rodziców, biologicznych lub nie (1 para z 2 osób, na podstawie <b>parents_id</b>)</li>
    <li>Osoba może mieć od 0 do wielu biologicznych dzieci (n osób, na podstawie father_id/mother_id)</li>
    <li>Osoba może mieć od 0 do wielu partnerów (n osób), będąc częścią od 0 do wielu par (tej samej lub przeciwnej płci)</li>
    <li>Osoba może być częścią pary z tym samym partnerem wielokrotnie (ponowne małżeństwo lub ponowne połączenie)</li>
</ul>

### b. Pary

<ul>
    <li>Para może mieć od 0 do wielu dzieci (na podstawie parents_id jako para lub father_id/mother_id indywidualnie)</li>
    <li>Para może być w związku małżeńskim lub nie, nadal razem lub w międzyczasie w separacji</li>
</ul>

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 2. Uwierzytelnianie, wielodostępność i dostępność danych

### a. Użytkownicy

<img src="img/help/genealogy-002a.webp" class="rounded" alt="Menu">

Użytkownicy mogą się <b>zarejestrować</b> samodzielnie.<br/>
Wymagane jest co najmniej <b>nazwisko</b>, prawidłowy adres <b>e-mail</b>, <b>język</b>, <b>strefa czasowa</b> i <b>hasło</b>.

<img src="img/help/genealogy-002b.webp" class="rounded" alt="Rejestracja">

Po rejestracji i opcjonalnej weryfikacji e-mail użytkownicy mogą się <b>zalogować</b>.<br/>

<img src="img/help/genealogy-002c.webp" class="rounded" alt="Logowanie">

Uwierzytelnieni użytkownicy, bez zaproszenia, domyślnie należą do (i posiadają) swój własny <b>zespół osobisty</b>.<br/>
Nowi użytkownicy, po zaakceptowaniu zaproszenia e-mailowego od innego użytkownika i rejestracji, domyślnie będą zalogowani do zespołu, do którego zostali zaproszeni. Ci użytkownicy domyślnie mają również do dyspozycji swój własny zespół osobisty.

<img src="img/help/genealogy-002d.webp" class="rounded" alt="Zespół">

<b>Uwierzytelnianie dwuskładnikowe</b> (2FA) i <b>Weryfikacja e-mail</b> mogą być włączone i skonfigurowane w <b>config/fortify.php</b>.

### b. Konto użytkownika i profil

Uwierzytelnieni użytkownicy mogą zarządzać swoim kontem i profilem użytkownika za pomocą menu rozwijanego w prawym górnym rogu paska menu.

<img src="img/help/genealogy-003a.webp" class="rounded" alt="Ustawienia profilu">

<img src="img/help/genealogy-005a.webp" class="rounded" alt="Profil użytkownika">

### c. Zespoły

Ta aplikacja używa <a href="https://jetstream.laravel.com/" target="_blank">Laravel Jetstream</a> z opcją <a href="https://jetstream.laravel.com/features/teams.html" target="_blank">Zespoły</a> do implementacji i egzekwowania <a href="https://pl.wikipedia.org/wiki/Architektura_wielodost%C4%99pna" target="_blank">wielodostępności</a>.

Uwierzytelnieni użytkownicy mogą zarządzać swoimi zespołami i ustawieniami zespołów za pomocą menu rozwijanego w prawym górnym rogu paska menu.

<img src="img/help/genealogy-004.webp" class="rounded" alt="Ustawienia zespołu">

Użytkownicy mogą zarządzać swoim zespołem osobistym lub tworzyć nowe zespoły.<br/>
<span style="color:red">
Zespół osobisty i wszystkie zespoły utworzone przez użytkownika są również <b>własnością</b> tego użytkownika.<br/>
Tylko właściciel może zapraszać innych (nowych lub już zarejestrowanych) użytkowników (przez e-mail) do dołączenia do posiadanych zespołów.<br/>
Właściciel może przenieść własność zespołu na innego członka zespołu. E-mail z powiadomieniem zostanie wysłany do nowego właściciela. Poprzedni właściciel stanie się Administratorem.
</span>

<img src="img/help/genealogy-005b.webp" class="rounded" alt="Zarządzanie zespołem">

<span style="color:red">
    Utwórz <b>nowy i oddzielny zespół</b> dla każdego <b>drzewa genealogicznego</b>, którym chcesz zarządzać, i zaproś do niego innych użytkowników</b>.<br/><br/>
    <b>Nie używaj swojego zespołu osobistego do budowania drzew genealogicznych, ponieważ własność zespołów osobistych NIE może być przeniesiona na innego członka zespołu.</b><br/><br/>
    Przypisując użytkownikom odpowiednią <b>rolę</b>, możesz określić uprawnienia, jakie mają w wybranym zespole.
</span>

Uwierzytelnieni użytkownicy mogą widzieć tylko <b>osoby</b> i <b>pary</b>:

<ul>
    <li>utworzone przez zespoły, które sami <b>posiadają</b></li>
    <li>utworzone przez zespoły, do których zostali zaproszeni <b>przez właściciela zespołu</b> jako <b>Administrator</b>, <b>Menedżer</b>, <b>Edytor</b> lub <b>Członek</b></li>
</ul>

### d. Role i uprawnienia

<table>
    <thead>
        <tr>
            <th style="text-align:left">Rola</th>
            <th style="text-align:left">Model</th>
            <th style="text-align:left">Uprawnienia</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td rowspan="3"><b>Administrator</b></td>
            <td>Użytkownik</td>
            <td>tworzenie, odczyt, aktualizacja, usuwanie</td>
        </tr>
        <tr>
            <td>Osoba</td>
            <td>tworzenie, odczyt, aktualizacja, usuwanie</td>
        </tr>
        <tr>
            <td>Para</td>
            <td>tworzenie, odczyt, aktualizacja, usuwanie</td>
        </tr>
        <tr>
            <td rowspan="2"><b>Menedżer</b></td>
            <td>Osoba</td>
            <td>tworzenie, odczyt, aktualizacja, usuwanie</td>
        </tr>
        <tr>
            <td>Para</td>
            <td>tworzenie, odczyt, aktualizacja, usuwanie</td>
        </tr>
        <tr>
            <td rowspan="2"><b>Edytor</b></td>
            <td>Osoba</td>
            <td>tworzenie, odczyt, aktualizacja</td>
        </tr>
        <tr>
            <td>Para</td>
            <td>tworzenie, odczyt, aktualizacja</td>
        </tr>
        <tr>
            <td rowspan="2"><b>Członek</b></td>
            <td>Osoba</td>
            <td>odczyt</td>
        </tr>
        <tr>
            <td>Para</td>
            <td>odczyt</td>
        </tr>
    </tbody>
</table>

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 3. Wyszukiwanie

<img src="img/help/genealogy-001.webp" class="rounded" alt="Menu">

Po zalogowaniu i <span style="color:red">wybraniu odpowiedniego zespołu</span> kliknij przycisk <b>Szukaj</b> w górnym menu nawigacyjnym.

<img src="img/help/genealogy-010a.webp" class="rounded" alt="Wyszukiwanie">

Wprowadź wartości wyszukiwania w <b>polu wyszukiwania</b>.<br/>
Nad polem wyszukiwania wyświetlana jest liczba osób dostępnych/znalezionych w <b>bieżącym zespole</b>.<br/>

<span class="text-red-500">
<u>Wskazówki</u>:<br/>
<ol>
<li>System wyszuka <b>każde pojedyncze słowo</b> z wartości wyszukiwania w atrybutach <b>nazwisko</b>, <b>imię</b>, <b>nazwisko rodowe</b> i <b>pseudonim</b>.</li>
<li>
Rozpocznij ciąg wyszukiwania od <b>%</b>, jeśli chcesz wyszukiwać części nazw, na przykład: <b>%Jr</b>.<br/> Pamiętaj, że tego typu wyszukiwania są wolniejsze.
</li>
<li>
Jeśli nazwisko, imię, nazwisko rodowe lub pseudonim zawiera spacje, ujmij nazwę w podwójne cudzysłowy, na przykład: <b>"John Fitzgerald Jr." Kennedy</b>.<br/>
</li>
</ol>
</span>

Wyniki są wyświetlane w siatce pod polem wyszukiwania. Każda osoba jest reprezentowana na jednej karcie.<br/>
Możesz używać przycisków paginacji do nawigacji. Możesz również zmienić liczbę osób wyświetlanych na stronie.

<img src="img/help/genealogy-012.webp" class="rounded" alt="Menu">

Kliknij przycisk <b>Profil</b> lub <b>Drzewo rodzinne</b>, aby zobaczyć szczegóły dotyczące tej osoby.<br/>
Kliknij imię ojca lub matki, aby odwiedzić rodziców.

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 4. Dodawanie osób

### a. Nowa osoba

Po zalogowaniu i <span style="color:red">wybraniu odpowiedniego zespołu</span> kliknij przycisk <b>Szukaj</b> w górnym menu nawigacyjnym.

<img src="img/help/genealogy-001.webp" class="rounded" alt="Wyszukiwanie">

Możesz dodać nową osobę, klikając przycisk <b>Dodaj osobę</b> nad paskiem wyszukiwania.

<img src="img/help/genealogy-010.webp" class="rounded" alt="Dodaj osobę">
<img src="img/help/genealogy-011.webp" class="rounded" alt="Dodaj osobę">

### b. Nowa osoba jako ojciec lub matka

Innym sposobem dodawania osób jest kliknięcie zakładki <b>Dodaj ojca</b> lub <b>Dodaj matkę</b> w menu kontekstowym <b>Rodzina</b> istniejącej osoby.<br/>
Te opcje są dostępne tylko wtedy, gdy istniejąca osoba nie ma jeszcze ojca lub matki.

<img src="img/help/genealogy-033a.webp" class="rounded" alt="Partnerzy">
<img src="img/help/genealogy-035a.webp" class="rounded" alt="Dodaj ojca">
<img src="img/help/genealogy-036.webp" class="rounded" alt="Dodaj matkę">

<div style="color:red">
    Możesz albo utworzyć <b>zupełnie NOWĄ osobę</b>, albo wybrać <b>ISTNIEJĄCĄ osobę</b> jako nowego ojca lub matkę osoby.
</div>

<img src="img/help/genealogy-035b.webp" class="rounded" alt="Dodaj istniejącą osobę jako ojca">
<img src="img/help/genealogy-036b.webp" class="rounded" alt="Dodaj istniejącą osobę jako matkę">

### c. Nowa osoba jako partner

Innym sposobem dodawania osób jest kliknięcie zakładki <b>Dodaj związek</b> w menu kontekstowym <b>Partnerzy</b> istniejącej osoby.

<img src="img/help/genealogy-055.webp" class="rounded" alt="Partnerzy">
<img src="img/help/genealogy-056a.webp" class="rounded" alt="Dodaj partnera">

<div style="color:red">
    Możesz albo utworzyć <b>zupełnie nową osobę</b>, albo wybrać <b>istniejącą osobę</b> jako nowego partnera osoby.
</div>

<img src="img/help/genealogy-056b.webp" class="rounded" alt="Dodaj istniejącą osobę jako partnera">

### d. Nowa osoba jako dziecko

Ostatnim sposobem dodawania osób jest kliknięcie zakładki <b>Dodaj dziecko</b> w menu kontekstowym <b>Dzieci</b> istniejącej osoby.

<img src="img/help/genealogy-050.webp" class="rounded" alt="Dzieci">
<img src="img/help/genealogy-051.webp" class="rounded" alt="Dodaj dziecko">

<div style="color:red">
    Możesz albo utworzyć <b>zupełnie nową osobę</b>, albo wybrać <b>istniejącą osobę</b> jako nowe dziecko osoby.
</div>

<img src="img/help/genealogy-051b.webp" class="rounded" alt="Dodaj istniejącą osobę jako dziecko">

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 5. Osoby i relacje

### a. Profil

Przegląd osoby pokazuje wszystkie informacje o wybranej osobie.

<img src="img/help/genealogy-020.webp" class="rounded" alt="Przegląd osoby">

Pasek nawigacyjny na górze pozwala wybrać określone elementy.

<img src="img/help/genealogy-021a.webp" class="rounded" alt="Menu osoby">

Karta <b>Profil</b> pokazuje wszystkie ogólne informacje o osobie.

<img src="img/help/genealogy-022a.webp" class="rounded" alt="Profil zmarłego">

Zauważ, że ta karta pokazuje różne dane dla osób <b>żyjących</b> i <b>zmarłych</b>.

<img src="img/help/genealogy-022b.webp" class="rounded" alt="Profil żyjącego">

Możesz edytować dane <b>profilu</b>, <b>kontaktu</b> i <b>śmierci</b>, wybierając odpowiednią zakładkę w menu kontekstowym.

<img src="img/help/genealogy-023.webp" class="rounded" alt="Edycja profilu">
<img src="img/help/genealogy-024.webp" class="rounded" alt="Edycja profilu profil">
<img src="img/help/genealogy-025a.webp" class="rounded" alt="Edycja profilu kontakt">
<img src="img/help/genealogy-026a.webp" class="rounded" alt="Edycja profilu śmierć">

### b. Wydarzenia

Możesz edytować niestandardowe <b>wydarzenia</b>, wybierając odpowiednią zakładkę w menu kontekstowym.

<img src="img/help/genealogy-023.webp" class="rounded" alt="Edycja profilu">
<img src="img/help/genealogy-028.webp" class="rounded" alt="Zarządzanie wydarzeniami">

Możesz dodawać, edytować lub usuwać wydarzenia.

<img src="img/help/genealogy-028b.webp" class="rounded" alt="Edycja wydarzenia">

### c. Zdjęcia

<img src="img/help/genealogy-022c.webp" class="rounded" alt="Edycja zdjęć">

Możesz przeglądać dostępne zdjęcia za pomocą paska nawigacyjnego nad karuzelą zdjęć.<br/>
Możesz zarządzać zdjęciami, wybierając odpowiednią zakładkę w menu kontekstowym.

<img src="img/help/genealogy-023.webp" class="rounded" alt="Edycja profilu">
<img src="img/help/genealogy-027.webp" class="rounded" alt="Dodaj zdjęcie">

Możesz <b>przesłać</b> (wiele) nowych obrazów.<br/>
Możesz <b>pobrać</b> lub <b>usunąć</b> istniejące obrazy.<br/>
Po usunięciu głównego zdjęcia, pierwszy obraz w kolekcji stanie się nowym głównym zdjęciem.<br/>
Możesz również ustawić główny obraz, klikając przycisk <b>Gwiazdka</b>.

### d. Rodzina

Karta <b>Rodzina</b> pokazuje rodziców osoby i obecnego partnera.

<img src="img/help/genealogy-033.webp" class="rounded" alt="Rodzina">

<b>Ojciec</b> i <b>Matka</b> zawsze odnoszą się do <b>biologicznego</b> ojca i matki.<br/>
Niebiologiczni rodzice mogą być zdefiniowani przez link <b>Rodzice</b>.

Możesz edytować dane rodziny, wybierając opcję <b>Edytuj</b> w menu kontekstowym rodziny.<br/>
W przypadku, gdy ojciec lub matka osoby nie są jeszcze znani, możesz dodać lub edytować ich bezpośrednio w menu kontekstowym rodziny.

<img src="img/help/genealogy-033a.webp" class="rounded" alt="Edycja rodziny">
<img src="img/help/genealogy-034.webp" class="rounded" alt="Rodzina">

### e. Partnerzy (Pary)

<img src="img/help/genealogy-040a.webp" class="rounded" alt="Partnerzy">

Możesz <b>dodać</b>, <b>edytować</b> lub <b>usunąć</b> związek, wybierając odpowiednią zakładkę w menu kontekstowym.<br/>
Podczas usuwania związku, były partner pozostaje w kolekcji jako oddzielna osoba.<br/>
W normalnych okolicznościach powinieneś usuwać związki tylko wtedy, gdy zostały wprowadzone przez pomyłkę.<br/>
Możesz zakończyć każdy istniejący związek, ustawiając go jako zakończony, z określeniem lub bez daty zakończenia.

<img src="img/help/genealogy-042.webp" class="rounded" alt="Dodaj partnera">

<div style="color:red">
Dodając partnera, możesz albo utworzyć zupełnie nową osobę, albo wybrać istniejącą osobę jako nowego partnera.
</div>

### f. Dzieci

<img src="img/help/genealogy-050.webp" class="rounded" alt="Dzieci">

Możesz <b>dodać</b> dziecko lub <b>odłączyć</b> istniejące dzieci, wybierając odpowiednią zakładkę w menu kontekstowym.<br/>
Odłączone dziecko pozostanie w bazie danych jako osoba, ale nie będzie już miało wybranej osoby jako ojca lub matki.

<img src="img/help/genealogy-051.webp" class="rounded" alt="Dodaj dziecko">

<div style="color:red">
Dodając dziecko, możesz albo utworzyć <b>zupełnie nową osobę</b>, albo wybrać <b>istniejącą osobę</b>.
</div>

<img src="img/help/genealogy-051b.webp" class="rounded" alt="Istniejąca osoba jako dziecko">

### g. Rodzeństwo

Rodzeństwo jest wyświetlane na karcie rodzeństwa.<br/>

<img src="img/help/genealogy-060a.webp" class="rounded" alt="Rodzeństwo">

Rodzeństwo może być <b>pełne</b>: oboje biologiczni rodzice są tacy sami jak u wybranej osoby.<br/>
Rodzeństwo może być <b>przyrodnie</b>: tylko biologiczna matka lub biologiczny ojciec są wspólni. <span class="text-yellow-500">[1/2]</span><br/>
Rodzeństwo może być <b>przyrodnie+</b>: ani biologiczny ojciec, ani biologiczna matka nie są wspólni, ale dziecko jest częścią obecnego związku wybranej osoby <span class="text-yellow-500">[+]</span>

### h. Pliki

Karta <b>Pliki</b> pokazuje pliki dołączone do osoby.<br/>
Możesz użyć tej funkcji do dołączania dokumentacji.

<img src="img/help/genealogy-074.webp" class="rounded" alt="Pliki">

Możesz przesłać (wiele) nowych dokumentów.<br/>
Możesz określić źródło dokumentów, które chcesz przesłać.<br/>
Możesz zmienić kolejność dokumentów, klikając przyciski <b>W górę</b> lub <b>W dół</b>.<br/>
Możesz pobrać dokumenty, klikając przycisk <b>Pobierz</b> lub otworzyć je w oddzielnym oknie, klikając ikonę dokumentu.<br/>
Możesz usunąć dokument, klikając przycisk <b>Usuń</b>.

### i. Przodkowie

To pokazuje przodków wybranej osoby.<br/>
Możesz zmienić głębokość drzewa za pomocą kontrolki w nagłówku karty przodków.

<img src="img/help/genealogy-070.webp" class="rounded" alt="Przodkowie">

### j. Potomkowie

To pokazuje potomków wybranej osoby.<br/>
Możesz zmienić głębokość drzewa za pomocą kontrolki w nagłówku karty potomków.

<img src="img/help/genealogy-071.webp" class="rounded" alt="Potomkowie">

### k. Drzewo rodzinne

To pokazuje pełne drzewo rodzinne, 3 pokolenia wstecz.<br/>
Kliknij imię członka rodziny, aby zobaczyć jego drzewo rodzinne.

<img src="img/help/genealogy-072.webp" class="rounded" alt="Drzewo rodzinne">

### l. Oś czasu

To pokazuje oś czasu osoby, w tym stałe wydarzenia, takie jak narodziny, śmierć (własna i dzieci) oraz związki, w połączeniu ze wszystkimi niestandardowymi wydarzeniami, takimi jak chrzest, służba wojskowa itp.

<img src="img/help/genealogy-076.webp" class="rounded" alt="Oś czasu">

### m. Arkusz danych

To pokazuje arkusz danych wybranej osoby.<br/>
Możesz użyć tego do <b>wydrukowania</b> przeglądu.

<img src="img/help/genealogy-075.webp" class="rounded" alt="Arkusz danych">

### n. Historia

To pokazuje historię wybranej osoby.<br/>

<img src="img/help/genealogy-073a.webp" class="rounded" alt="Historia">

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 6. Urodziny

Po zalogowaniu i wybraniu odpowiedniego zespołu kliknij przycisk <b>Urodziny</b> w górnym menu nawigacyjnym.

<img src="img/help/genealogy-001.webp" class="rounded" alt="Menu">

To pokazuje nadchodzące urodziny.

<img src="img/help/genealogy-080.webp" class="rounded" alt="Urodziny">

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 7. Menu boczne

Użytkownicy mogą kliknąć przycisk w prawym górnym menu, aby otworzyć <b>menu boczne</b>.<br/>
Na górze wyświetlana jest rola i uprawnienia użytkownika w bieżącym zespole.<br/>
Jeśli użytkownik ma odpowiednie uprawnienia, prezentowane są dodatkowe funkcje.

<img src="img/help/genealogy-006.webp" class="rounded" alt="Menu boczne">

### a. Zespół

Menu boczne pozwala <b>wszystkim użytkownikom</b> przeglądać <b>aktywny zespół</b> i odpowiednie dzienniki dla Zespołu/Użytkowników i Osób/Par.

<img src="img/help/genealogy-100a.webp" class="rounded" alt="Zespół">

### b. Zespoły i osoby

Menu boczne pozwala <b>programistom</b> przeglądać wszystkie <b>zespoły</b> i <b>osoby</b>.

<img src="img/help/genealogy-090a.webp" class="rounded" alt="Zespoły">
<img src="img/help/genealogy-090b.webp" class="rounded" alt="Osoby">

### c. Użytkownicy i logowanie

Menu boczne pozwala <b>programistom</b> przeglądać użytkowników i ich informacje logowania.

<img src="img/help/genealogy-091.webp" class="rounded" alt="Użytkownicy">
<img src="img/help/genealogy-093.webp" class="rounded" alt="Logowanie użytkownika 1">
<img src="img/help/genealogy-094.webp" class="rounded" alt="Logowanie użytkownika 2">
<img src="img/help/genealogy-094b.webp" class="rounded" alt="Logowanie użytkownika 3">

### d. Ustawienia

Element menu <b>Ustawienia</b> pozwala <b>programistom</b> zarządzać ustawieniami logowania.

<img src="img/help/genealogy-099.webp" class="rounded" alt="Ustawienia">

### e. Kopie zapasowe

Element menu <b>Kopie zapasowe</b> pozwala <b>programistom</b> zarządzać kopiami zapasowymi bazy danych.

<img src="img/help/genealogy-095.webp" class="rounded" alt="Kopie zapasowe">

### f. Przeglądarka logów

Element menu <b>Przeglądarka logów</b> pozwala <b>programistom</b> przeglądać pliki logów aplikacji.

<img src="img/help/genealogy-096a.webp" class="rounded" alt="Przeglądarka logów">

### g. Zależności

Element menu <b>Zależności</b> pozwala <b>programistom</b> przeglądać zależności aplikacji.

<img src="img/help/genealogy-097.webp" class="rounded" alt="Zależności">

### h. Sesja

Element menu <b>Sesja</b> pozwala <b>programistom</b> przeglądać sesję aplikacji.

<img src="img/help/genealogy-098.webp" class="rounded" alt="Sesja">

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 8. Język i strefa czasowa

### a. Odwiedzający

Odwiedzający mogą zmienić język w prawym górnym menu za pomocą <b>selektora języka</b>.<br/>
<b>Domyślnym</b> językiem aplikacji jest <b>angielski</b>.

<img src="img/help/genealogy-002a.webp" class="rounded" alt="Menu języka">

### b. Uwierzytelnieni użytkownicy

Uwierzytelnieni użytkownicy mogą zmienić język i strefę czasową w prawym górnym menu za pomocą <b>edytora profilu</b>.<br/>
Wybrany język i strefa czasowa są zapisywane w bazie danych.

<img src="img/help/genealogy-002d.webp" class="rounded" alt="Edytor profilu">

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 9. Motyw kolorystyczny

Użytkownicy mogą zmienić motyw kolorystyczny w prawym górnym menu za pomocą <b>ikony motywu</b>.<br/>
<b>Domyślnym</b> motywem aplikacji jest <b>tryb ciemny</b>.

<img src="img/help/genealogy-002a.webp" class="rounded" alt="Selektor motywu">
