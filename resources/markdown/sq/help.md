## Ndihmë

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 1. Koncepti: Modelet dhe marrëdhëniet

### a. Personat

<ul>
    <li>Një person mund të ketë 1 baba biologjik (1 person, bazuar në <b>father_id</b>)</li>
    <li>Një person mund të ketë 1 nënë biologjike (1 person, bazuar në <b>mother_id</b>)</li>
    <li>Një person mund të ketë 1 çift prindërsh, biologjikë ose jo (1 çift prej 2 personash, bazuar në <b>parents_id</b>)</li>
    <li>Një person mund të ketë 0 deri në shumë fëmijë biologjikë (n persona, bazuar në father_id/mother_id)</li>
    <li>Një person mund të ketë 0 deri në shumë partnerë (n persona), duke qenë pjesë e 0 deri në shumë çifteve (gjini e kundërt ose e njëjtë)</li>
    <li>Një person mund të jetë pjesë e një çifti me të njëjtin partner disa herë (rimartesë ose ribashkim)</li>
</ul>

### b. Çiftet

<ul>
    <li>Një çift mund të ketë 0 deri në shumë fëmijë (bazuar në parents_id si çift ose father_id/mother_id individualisht)</li>
    <li>Një çift mund të jetë i martuar ose jo, ende së bashku ose të ndarë ndërkohë</li>
</ul>

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 2. Autentifikimi, shumë-qiramarrja dhe aksesueshmëria e të dhënave

### a. Përdoruesit

<img src="img/help/genealogy-002a.webp" class="rounded" alt="Menu">

Përdoruesit mund të <b>regjistrohen</b> vetë.<br/>
Kërkohet të paktën një <b>mbiemër</b>, një adresë <b>e-mail</b> e vlefshme, një <b>gjuhë</b>, një <b>zonë kohore</b> dhe një <b>fjalëkalim</b>.

<img src="img/help/genealogy-002b.webp" class="rounded" alt="Regjistrim">

Pas regjistrimit dhe verifikimit opsional të e-mailit, përdoruesit mund të <b>hyjnë</b>.<br/>

<img src="img/help/genealogy-002c.webp" class="rounded" alt="Hyrje">

Përdoruesit e autentifikuar, pa ftesë, si parazgjedhje i përkasin (dhe zotërojnë) <b>ekipin e tyre personal</b>.<br/>
Përdoruesit e rinj, pasi pranojnë një ftesë me e-mail nga një përdorues tjetër dhe regjistrohen, si parazgjedhje do të hyjnë në ekipin ku ishin ftuar. Këta përdorues si parazgjedhje kanë gjithashtu ekipin e tyre personal në dispozicion.

<img src="img/help/genealogy-002d.webp" class="rounded" alt="Ekipi">

<b>Autentifikimi me dy faktorë</b> (2FA) dhe <b>Verifikimi i e-mailit</b> mund të aktivizohen dhe konfigurohen në <b>config/fortify.php</b>.

### b. Llogaria e përdoruesit dhe profili

Përdoruesit e autentifikuar mund të menaxhojnë llogarinë dhe profilin e tyre duke përdorur menunë rënëse në këndin e sipërm djathtas të shiritit të menusë.

<img src="img/help/genealogy-003a.webp" class="rounded" alt="Cilësimet e profilit">

<img src="img/help/genealogy-005a.webp" class="rounded" alt="Profili i përdoruesit">

### c. Ekipet

Kjo aplikacion përdor <a href="https://jetstream.laravel.com/" target="_blank">Laravel Jetstream</a> me opsionin <a href="https://jetstream.laravel.com/features/teams.html" target="_blank">Ekipet</a> për të zbatuar dhe detyruar <a href="https://sq.wikipedia.org/wiki/Multitenancy" target="_blank">shumë-qiramarrjen</a>.

Përdoruesit e autentifikuar mund të menaxhojnë ekipet dhe cilësimet e ekipeve të tyre duke përdorur menunë rënëse në këndin e sipërm djathtas të shiritit të menusë.

<img src="img/help/genealogy-004.webp" class="rounded" alt="Cilësimet e ekipit">

Përdoruesit mund të menaxhojnë ekipin e tyre personal ose të krijojnë ekipe të reja.<br/>
<span style="color:red">
Ekipi personal dhe të gjitha ekipet e krijuara nga një përdorues janë gjithashtu në <b>pronësi</b> të atij përdoruesi.<br/>
Vetëm pronari mund të ftojë përdorues të tjerë (të rinj ose tashmë të regjistruar) (me e-mail) për t'u bashkuar me ekipet e zotëruara.<br/>
Pronari mund të transferojë pronësinë e ekipit tek një anëtar tjetër i ekipit. Një e-mail njoftimi do t'i dërgohet pronarit të ri. Pronari i mëparshëm do të bëhet Administrator.
</span>

<img src="img/help/genealogy-005b.webp" class="rounded" alt="Menaxhimi i ekipit">

<span style="color:red">
    Krijoni një <b>ekip të ri dhe të veçantë</b> për çdo <b>pemë familjare</b> që dëshironi të menaxhoni dhe ftoni përdorues të tjerë në të</b>.<br/><br/>
    <b>Mos përdorni ekipin tuaj personal për të ndërtuar pemë familjare sepse pronësia e ekipeve personale NUK mund të transferohet tek një anëtar tjetër i ekipit.</b><br/><br/>
    Duke caktuar përdoruesve <b>rolin</b> e duhur, mund të përcaktoni të drejtat që kanë në ekipin e zgjedhur.
</span>

Përdoruesit e autentifikuar mund të shohin vetëm <b>personat</b> dhe <b>çiftet</b>:

<ul>
    <li>të krijuar nga ekipet që <b>zotërojnë</b> vetë</li>
    <li>të krijuar nga ekipet ku janë ftuar <b>nga pronari i ekipit</b> si <b>Administrator</b>, <b>Menaxher</b>, <b>Redaktor</b> ose <b>Anëtar</b></li>
</ul>

### d. Rolet dhe lejet

<table>
    <thead>
        <tr>
            <th style="text-align:left">Roli</th>
            <th style="text-align:left">Modeli</th>
            <th style="text-align:left">Lejet</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td rowspan="3"><b>Administrator</b></td>
            <td>Përdorues</td>
            <td>krijim, lexim, përditësim, fshirje</td>
        </tr>
        <tr>
            <td>Person</td>
            <td>krijim, lexim, përditësim, fshirje</td>
        </tr>
        <tr>
            <td>Çift</td>
            <td>krijim, lexim, përditësim, fshirje</td>
        </tr>
        <tr>
            <td rowspan="2"><b>Menaxher</b></td>
            <td>Person</td>
            <td>krijim, lexim, përditësim, fshirje</td>
        </tr>
        <tr>
            <td>Çift</td>
            <td>krijim, lexim, përditësim, fshirje</td>
        </tr>
        <tr>
            <td rowspan="2"><b>Redaktor</b></td>
            <td>Person</td>
            <td>krijim, lexim, përditësim</td>
        </tr>
        <tr>
            <td>Çift</td>
            <td>krijim, lexim, përditësim</td>
        </tr>
        <tr>
            <td rowspan="2"><b>Anëtar</b></td>
            <td>Person</td>
            <td>lexim</td>
        </tr>
        <tr>
            <td>Çift</td>
            <td>lexim</td>
        </tr>
    </tbody>
</table>

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 3. Kërkimi

<img src="img/help/genealogy-001.webp" class="rounded" alt="Menu">

Pas hyrjes dhe <span style="color:red">zgjedhjes së ekipit të duhur</span>, klikoni butonin <b>Kërko</b> në menunë e navigimit në krye.

<img src="img/help/genealogy-010a.webp" class="rounded" alt="Kërkim">

Shkruani vlerat e kërkimit në <b>kutinë e kërkimit</b>.<br/>
Mbi kutinë e kërkimit, tregohet numri i personave të disponueshëm/të gjetur në <b>ekipin aktual</b>.<br/>

<span class="text-red-500">
<u>Këshilla</u>:<br/>
<ol>
<li>Sistemi do të kërkojë <b>çdo fjalë të vetme</b> në vlerën e kërkimit në atributet <b>mbiemër</b>, <b>emër</b>, <b>emër i lindjes</b> dhe <b>nofkë</b>.</li>
<li>
Filloni vargun e kërkimit me <b>%</b> nëse dëshironi të kërkoni pjesë të emrave, për shembull: <b>%Jr</b>.<br/> Kini parasysh që këto lloj kërkimesh janë më të ngadalta.
</li>
<li>
Nëse një mbiemër, emër, emër i lindjes ose nofkë përmban hapësira, mbyllni emrin në thonjëza të dyfishta, për shembull: <b>"John Fitzgerald Jr." Kennedy</b>.<br/>
</li>
</ol>
</span>

Rezultatet tregohen në një rrjet poshtë kutisë së kërkimit. Çdo person përfaqësohet në një kartë.<br/>
Mund të përdorni butonat e faqeve për të naviguar. Mund të ndryshoni gjithashtu numrin e personave të shfaqur për faqe.

<img src="img/help/genealogy-012.webp" class="rounded" alt="Menu">

Klikoni butonin <b>Profili</b> ose <b>Pema familjare</b> për të parë detajet rreth atij personi.<br/>
Klikoni emrin e babait ose nënës për të vizituar prindërit.

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 4. Shtimi i personave

### a. Person i ri

Pas hyrjes dhe <span style="color:red">zgjedhjes së ekipit të duhur</span>, klikoni butonin <b>Kërko</b> në menunë e navigimit në krye.

<img src="img/help/genealogy-001.webp" class="rounded" alt="Kërkim">

Mund të shtoni një person të ri duke klikuar butonin <b>Shto person</b> mbi shiritin e kërkimit.

<img src="img/help/genealogy-010.webp" class="rounded" alt="Shto person">
<img src="img/help/genealogy-011.webp" class="rounded" alt="Shto person">

### b. Person i ri si baba ose nënë

Një mënyrë tjetër për të shtuar persona është të klikoni skedën <b>Shto baba</b> ose <b>Shto nënë</b> në menunë kontekstuale <b>Familja</b> të një personi ekzistues.<br/>
Këto opsione janë të disponueshme vetëm nëse personi ekzistues nuk ka ende baba ose nënë.

<img src="img/help/genealogy-033a.webp" class="rounded" alt="Partnerët">
<img src="img/help/genealogy-035a.webp" class="rounded" alt="Shto baba">
<img src="img/help/genealogy-036.webp" class="rounded" alt="Shto nënë">

<div style="color:red">
    Mund të krijoni ose një <b>person krejt TË RI</b> ose të zgjidhni një <b>person EKZISTUES</b> si babain ose nënën e re të personit.
</div>

<img src="img/help/genealogy-035b.webp" class="rounded" alt="Shto person ekzistues si baba">
<img src="img/help/genealogy-036b.webp" class="rounded" alt="Shto person ekzistues si nënë">

### c. Person i ri si partner

Një mënyrë tjetër për të shtuar persona është të klikoni skedën <b>Shto marrëdhënie</b> në menunë kontekstuale <b>Partnerët</b> të një personi ekzistues.

<img src="img/help/genealogy-055.webp" class="rounded" alt="Partnerët">
<img src="img/help/genealogy-056a.webp" class="rounded" alt="Shto partner">

<div style="color:red">
    Mund të krijoni ose një <b>person krejt të ri</b> ose të zgjidhni një <b>person ekzistues</b> si partnerin e ri të personit.
</div>

<img src="img/help/genealogy-056b.webp" class="rounded" alt="Shto person ekzistues si partner">

### d. Person i ri si fëmijë

Mënyra e fundit për të shtuar persona është të klikoni skedën <b>Shto fëmijë</b> në menunë kontekstuale <b>Fëmijët</b> të një personi ekzistues.

<img src="img/help/genealogy-050.webp" class="rounded" alt="Fëmijët">
<img src="img/help/genealogy-051.webp" class="rounded" alt="Shto fëmijë">

<div style="color:red">
    Mund të krijoni ose një <b>person krejt të ri</b> ose të zgjidhni një <b>person ekzistues</b> si fëmijën e ri të personit.
</div>

<img src="img/help/genealogy-051b.webp" class="rounded" alt="Shto person ekzistues si fëmijë">

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 5. Personat dhe marrëdhëniet

### a. Profili

Përmbledhja personale tregon të gjitha informacionet rreth personit të zgjedhur.

<img src="img/help/genealogy-020.webp" class="rounded" alt="Përmbledhja e personit">

Shiriti i navigimit në krye ju lejon të zgjidhni disa artikuj specifikë.

<img src="img/help/genealogy-021a.webp" class="rounded" alt="Menuja e personit">

Karta <b>Profili</b> tregon të gjitha informacionet e përgjithshme rreth personit.

<img src="img/help/genealogy-022a.webp" class="rounded" alt="Profili i të ndjerit">

Vini re që kjo kartë tregon të dhëna të ndryshme për personat <b>gjallë</b> dhe <b>të ndjerë</b>.

<img src="img/help/genealogy-022b.webp" class="rounded" alt="Profili i gjallë">

Mund të redaktoni të dhënat e <b>profilit</b>, <b>kontaktit</b> dhe <b>vdekjes</b> duke zgjedhur skedën përkatëse në menunë kontekstuale.

<img src="img/help/genealogy-023.webp" class="rounded" alt="Redakto profilin">
<img src="img/help/genealogy-024.webp" class="rounded" alt="Redakto profilin profil">
<img src="img/help/genealogy-025a.webp" class="rounded" alt="Redakto profilin kontakt">
<img src="img/help/genealogy-026a.webp" class="rounded" alt="Redakto profilin vdekje">

### b. Ngjarjet

Mund të redaktoni <b>ngjarjet</b> e personalizuara duke zgjedhur skedën përkatëse në menunë kontekstuale.

<img src="img/help/genealogy-023.webp" class="rounded" alt="Redakto profilin">
<img src="img/help/genealogy-028.webp" class="rounded" alt="Menaxho ngjarjet">

Mund të shtoni, redaktoni ose fshini ngjarje.

<img src="img/help/genealogy-028b.webp" class="rounded" alt="Redakto ngjarjen">

### c. Fotografitë

<img src="img/help/genealogy-022c.webp" class="rounded" alt="Redaktimi i fotografive">

Mund të shfletoni fotografitë e disponueshme duke përdorur shiritin e navigimit mbi karuselin e fotografive.<br/>
Mund të menaxhoni fotografitë duke zgjedhur skedën përkatëse në menunë kontekstuale.

<img src="img/help/genealogy-023.webp" class="rounded" alt="Redakto profilin">
<img src="img/help/genealogy-027.webp" class="rounded" alt="Shto fotografi">

Mund të <b>ngarkoni</b> (shumë) imazhe të reja.<br/>
Mund të <b>shkarkoni</b> ose <b>fshini</b> imazhet ekzistuese.<br/>
Pas fshirjes së fotografisë kryesore, imazhi i parë në koleksion do të bëhet fotografia e re kryesore.<br/>
Mund të caktoni gjithashtu imazhin kryesor duke klikuar butonin <b>Yll</b>.

### d. Familja

Karta <b>Familja</b> tregon prindërit e personit dhe partnerin aktual.

<img src="img/help/genealogy-033.webp" class="rounded" alt="Familja">

<b>Baba</b> dhe <b>Nëna</b> i referohen gjithmonë babait dhe nënës <b>biologjike</b>.<br/>
Prindërit jo-biologjikë mund të përcaktohen përmes lidhjes <b>Prindërit</b>.

Mund të redaktoni të dhënat familjare duke zgjedhur opsionin <b>Redakto</b> në menunë kontekstuale të familjes.<br/>
Në rast se baba ose nëna e personit nuk janë ende të njohur, mund t'i shtoni ose redaktoni direkt në menunë kontekstuale të familjes.

<img src="img/help/genealogy-033a.webp" class="rounded" alt="Redakto familjen">
<img src="img/help/genealogy-034.webp" class="rounded" alt="Familja">

### e. Partnerët (Çiftet)

<img src="img/help/genealogy-040a.webp" class="rounded" alt="Partnerët">

Mund të <b>shtoni</b>, <b>redaktoni</b> ose <b>fshini</b> një marrëdhënie duke zgjedhur skedën përkatëse në menunë kontekstuale.<br/>
Kur fshini një marrëdhënie, ish-partneri mbetet në koleksion si person i veçantë.<br/>
Në rrethana normale, duhet të fshini marrëdhëniet vetëm kur janë futur gabimisht.<br/>
Mund të përfundoni çdo marrëdhënie ekzistuese duke e caktuar si të përfunduar, me ose pa specifikuar datën e përfundimit.

<img src="img/help/genealogy-042.webp" class="rounded" alt="Shto partner">

<div style="color:red">
Kur shtoni një partner, mund të krijoni ose një person krejt të ri ose të zgjidhni një person ekzistues si partnerin e ri.
</div>

### f. Fëmijët

<img src="img/help/genealogy-050.webp" class="rounded" alt="Fëmijët">

Mund të <b>shtoni</b> një fëmijë ose të <b>shkëputni</b> fëmijët ekzistues duke zgjedhur skedën përkatëse në menunë kontekstuale.<br/>
Fëmija i shkëputur do të mbetet në bazën e të dhënave si person por thjesht nuk do ta ketë më personin e zgjedhur si baba ose nënë.

<img src="img/help/genealogy-051.webp" class="rounded" alt="Shto fëmijë">

<div style="color:red">
Kur shtoni një fëmijë, mund të krijoni ose një <b>person krejt të ri</b> ose të zgjidhni një <b>person ekzistues</b>.
</div>

<img src="img/help/genealogy-051b.webp" class="rounded" alt="Person ekzistues si fëmijë">

### g. Vëllezërit dhe motrat

Vëllezërit dhe motrat tregohen në kartën e vëllezërve dhe motrave.<br/>

<img src="img/help/genealogy-060a.webp" class="rounded" alt="Vëllezërit dhe motrat">

Një vëlla/motër mund të jetë <b>i/e plotë</b>: të dy prindërit biologjikë janë të njëjtë me personin e zgjedhur.<br/>
Një vëlla/motër mund të jetë <b>gjysmë</b>: vetëm nëna biologjike ose baba biologjik janë të përbashkët. <span class="text-yellow-500">[1/2]</span><br/>
Një vëlla/motër mund të jetë <b>plus</b>: as baba biologjik as nëna biologjike nuk janë të përbashkët, por fëmija është pjesë e marrëdhënies aktuale të personit të zgjedhur <span class="text-yellow-500">[+]</span>

### h. Skedarët

Karta <b>Skedarët</b> tregon skedarët e bashkangjitur personit.<br/>
Mund ta përdorni këtë funksion për të bashkangjitur dokumentacion.

<img src="img/help/genealogy-074.webp" class="rounded" alt="Skedarët">

Mund të ngarkoni (shumë) dokumente të reja.<br/>
Mund të specifikoni burimin e dokumenteve që dëshironi të ngarkoni.<br/>
Mund të riorganizoni rendin e dokumenteve duke klikuar butonat <b>Lart</b> ose <b>Poshtë</b>.<br/>
Mund të shkarkoni dokumente duke klikuar butonin <b>Shkarko</b> ose t'i hapni në një dritare të veçantë duke klikuar ikonën e dokumentit.<br/>
Mund të fshini një dokument duke klikuar butonin <b>Fshi</b>.

### i. Paraardhësit

Kjo tregon paraardhësit e personit të zgjedhur.<br/>
Mund të ndryshoni thellësinë e pemës duke përdorur kontrollin në kokën e kartës së paraardhësve.

<img src="img/help/genealogy-070.webp" class="rounded" alt="Paraardhësit">

### j. Pasardhësit

Kjo tregon pasardhësit e personit të zgjedhur.<br/>
Mund të ndryshoni thellësinë e pemës duke përdorur kontrollin në kokën e kartës së pasardhësve.

<img src="img/help/genealogy-071.webp" class="rounded" alt="Pasardhësit">

### k. Pema familjare

Kjo tregon pemën e plotë familjare, 3 breza thellë.<br/>
Klikoni emrin e një anëtari të familjes për të parë pemën familjare të atij personi.

<img src="img/help/genealogy-072.webp" class="rounded" alt="Pema familjare">

### l. Kronologjia

Kjo tregon kronologjinë e personit duke përfshirë ngjarjet fikse si lindja, vdekja (vetjake dhe e fëmijëve) dhe marrëdhëniet e kombinuara me të gjitha ngjarjet e personalizuara si pagëzimi, shërbimi ushtarak, etj.

<img src="img/help/genealogy-076.webp" class="rounded" alt="Kronologjia">

### m. Fleta e të dhënave

Kjo tregon fletën e të dhënave të personit të zgjedhur.<br/>
Mund ta përdorni këtë për të <b>printuar</b> një përmbledhje.

<img src="img/help/genealogy-075.webp" class="rounded" alt="Fleta e të dhënave">

### n. Historia

Kjo tregon historinë e personit të zgjedhur.<br/>

<img src="img/help/genealogy-073a.webp" class="rounded" alt="Historia">

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 6. Ditëlindjet

Pas hyrjes dhe zgjedhjes së ekipit të duhur, klikoni butonin <b>Ditëlindjet</b> në menunë e navigimit në krye.

<img src="img/help/genealogy-001.webp" class="rounded" alt="Menu">

Kjo tregon ditëlindjet e ardhshme.

<img src="img/help/genealogy-080.webp" class="rounded" alt="Ditëlindjet">

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 7. Menuja anësore

Përdoruesit mund të klikojnë një buton në menunë e sipërme djathtas për të hapur <b>menunë anësore</b>.<br/>
Në krye tregohet roli dhe lejet e përdoruesit në ekipin aktual.<br/>
Nëse një përdorues ka të drejtat e duhura, prezantohen funksione shtesë.

<img src="img/help/genealogy-006.webp" class="rounded" alt="Menuja anësore">

### a. Ekipi

Menuja anësore u lejon <b>të gjithë përdoruesve</b> të konsultojnë <b>ekipin aktiv</b> dhe ditarët përkatës për Ekipin/Përdoruesit dhe Personat/Çiftet.

<img src="img/help/genealogy-100a.webp" class="rounded" alt="Ekipi">

### b. Ekipet dhe personat

Menuja anësore u lejon <b>zhvilluesve</b> të konsultojnë të gjitha <b>ekipet</b> dhe <b>personat</b>.

<img src="img/help/genealogy-090a.webp" class="rounded" alt="Ekipet">
<img src="img/help/genealogy-090b.webp" class="rounded" alt="Personat">

### c. Përdoruesit dhe regjistrimi

Menuja anësore u lejon <b>zhvilluesve</b> të konsultojnë përdoruesit dhe informacionet e tyre të regjistrimit.

<img src="img/help/genealogy-091.webp" class="rounded" alt="Përdoruesit">
<img src="img/help/genealogy-093.webp" class="rounded" alt="Regjistrimi i përdoruesit 1">
<img src="img/help/genealogy-094.webp" class="rounded" alt="Regjistrimi i përdoruesit 2">
<img src="img/help/genealogy-094b.webp" class="rounded" alt="Regjistrimi i përdoruesit 3">

### d. Cilësimet

Artikulli i menusë <b>Cilësimet</b> u lejon <b>zhvilluesve</b> të menaxhojnë cilësimet e regjistrimit.

<img src="img/help/genealogy-099.webp" class="rounded" alt="Cilësimet">

### e. Kopjet rezervë

Artikulli i menusë <b>Kopjet rezervë</b> u lejon <b>zhvilluesve</b> të menaxhojnë kopjet rezervë të bazës së të dhënave.

<img src="img/help/genealogy-095.webp" class="rounded" alt="Kopjet rezervë">

### f. Shikuesi i regjistrave

Artikulli i menusë <b>Shikuesi i regjistrave</b> u lejon <b>zhvilluesve</b> të konsultojnë skedarët e regjistrave të aplikacionit.

<img src="img/help/genealogy-096a.webp" class="rounded" alt="Shikuesi i regjistrave">

### g. Varësitë

Artikulli i menusë <b>Varësitë</b> u lejon <b>zhvilluesve</b> të konsultojnë varësitë e aplikacionit.

<img src="img/help/genealogy-097.webp" class="rounded" alt="Varësitë">

### h. Sesioni

Artikulli i menusë <b>Sesioni</b> u lejon <b>zhvilluesve</b> të konsultojnë sesionin e aplikacionit.

<img src="img/help/genealogy-098.webp" class="rounded" alt="Sesioni">

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 8. Gjuha dhe zona kohore

### a. Vizitorët

Vizitorët mund të ndryshojnë gjuhën në menunë e sipërme djathtas duke përdorur <b>zgjedhësin e gjuhës</b>.<br/>
Gjuha <b>e parazgjedhur</b> e aplikacionit është <b>anglishtja</b>.

<img src="img/help/genealogy-002a.webp" class="rounded" alt="Menuja e gjuhës">

### b. Përdoruesit e autentifikuar

Përdoruesit e autentifikuar mund të ndryshojnë gjuhën dhe zonën kohore në menunë e sipërme djathtas duke përdorur <b>redaktorin e profilit</b>.<br/>
Gjuha dhe zona kohore e zgjedhur ruhen në bazën e të dhënave.

<img src="img/help/genealogy-002d.webp" class="rounded" alt="Redaktori i profilit">

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 9. Tema e ngjyrave

Përdoruesit mund të ndryshojnë temën e ngjyrave në menunë e sipërme djathtas duke përdorur <b>ikonën e temës</b>.<br/>
Tema <b>e parazgjedhur</b> e aplikacionit është <b>modaliteti i errët</b>.

<img src="img/help/genealogy-002a.webp" class="rounded" alt="Zgjedhësi i temës">
