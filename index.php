<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>

    <!-- BARRA DI NAVIGAZIONE,CATEGORIE ED USER LOGO -->
    <nav class="navigation bar">
        <div class="glogo-user">
            <img class="googlelogo" src="./img/Google-Logo.png" alt="">
            <span class="privacy">Privacy e termini</span>
            <i class="fas fa-user-circle"></i>
            <i class="fas fa-th"></i>
        </div>
        <div class="categories-container">
            <ul class="categories">
                <li>Introduzione</li>
                <li>Norme sulla privacy</li>
                <li>Termini di servizio</li>
                <li>Tecnologie</li>
                <li class="frequenti">Domande frequenti</li>
            </ul>
        </div>
    </nav> 
    <hr>
    <main>
        <div class="Q&A">
            <?php
    
                $faqs = [
                    [
                        'question' => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
                        'answer' => "<p>La recente <a href=\"https://curia.europa.eu/juris/document/document.jsf?text=&docid=152065&amppageIndex=0&doclang=it&mode=lst&dir=&occ=first&part=1&cid=276332\">decisione della Corte di giustizia dell'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non pi?? rilevanti, o eccessivi.</p> 
                            <p>Da quando questa decisione ?? stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perch?? dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.</p> 
                            <p>Per presentare una richiesta di rimozione, compila questo <a href=\"https://www.google.com/webmasters/tools/legal-removal-request?complaint_type=rtbf&visit_id=637656610968436830-4191653866&hl=it&rd=1\">modulo web</a>. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodich?? valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perch?? abbiamo gi?? ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi ?? un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorit?? garante per la protezione dei dati personali nel tuo paese.</p> 
                            <p>Nei prossimi mesi lavoreremo a stretto contatto con le autorit?? per la protezione dei dati e con altre autorit?? per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.</p> 
                            <p>Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione."
                    ],
    
                    [
                        'question' => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
                        'answer' => "<p>Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi ?? imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.</p> 
                            <p>Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora pi?? efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Cos??, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.</p> 
                            <p>Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a href=\"https://safety.google/\">Centro Google per la sicurezza online</a>.</p> 
                            <p><a href=\"https://safety.google/\">Scopri</a> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.</p>"
                    ],
                    
                    [
                        'question' => "Perch?? il mio account ?? associato a un paese?",
                        'answer' => "
                            <p>Il tuo account ?? associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:</p>
                            <ol>
                                <li>La societ?? consociata Google che offre i servizi, tratta le tue informazioni ed ?? responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due societ?? seguenti:</li>
                                    <ol class=\"ordered-alphabet\">
                                        <li>Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.</li>
                                    
                                        <li>Google LLC, con sede negli Stati Uniti, per il resto del mondo.</li>
                                    </ol>    
                                <li>La versione dei termini che regola il nostro rapporto, che pu?? variare in base alle leggi locali.</li>
                            </ol>
                            <p>Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla societ?? consociata che li offre o dal paese a cui ?? associato il tuo account.</p>
                            <h3>Stabilire il paese associato al tuo account</h3>
                            <p>Quando crei un nuovo Account Google, lo associamo a un paese in base a dove ?? stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso pi?? tempo nell'ultimo anno.</p> 
                            <p>I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un anno per aggiornare l'associazione del paese.</p> 
                            <p>Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il paese in cui lavori e il paese in cui risiedi, l'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un confine territoriale. <a href=\"https://support.google.com/accounts/troubleshooter/10082950?p=country_association&al=Italia&visit_id=637656615229670452-3397600817&rd=2\">Contattaci <i class=\"fas fa-external-link-alt\"></i></a> se ritieni che il paese associato al tuo account sia sbagliato.</p>"
                    ],
    
                    [
                        'question' => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
                        'answer' => "<p>I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi <a href=\"https://support.google.com/websearch/answer/9109?hl=it\">contattare il webmaster</a> del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, <a href=\"https://www.google.com/webmasters/tools/legal-removal-request?complaint_type=rtbf&visit_id=637656615229670452-3397600817&hl=it&rd=1\">fai clic qui</a>. Una volta che i contenuti saranno stati rimossi e che Google avr?? rilevato l'aggiornamento, le informazioni non verranno pi?? visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, ?? inoltre possibile <a href=\"https://support.google.com/websearch/troubleshooter/3111061?hl=it\">visitare la nostra pagina di assistenza per avere ulteriori informazioni</a>.</p>"
                    ],
    
                    [
                        'question' => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?",
                        'answer' => "<p>In alcuni casi s??. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di <a href=\"https://policies.google.com/privacy/key-terms#toc-terms-http\">URL referrer</a>. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento pu?? fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili <a href=\"https://support.google.com/websearch/answer/173733\">qui</a>. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio.</p>"
                    ],
                ];
            ?>
    
            <?php foreach($faqs as $faq) { ?>
    
            <h2 class="Q">
                <?php echo "{$faq['question']}"; ?>
            </h2>
    
            <div class="A">
                <div>
                    <?php 
                    $answersArray = explode("</p>", $faq['answer']);
                    foreach($answersArray as $answer) {
                        echo $answer;
                    };
                    ?>
                </div>
            </div>
            
            <?php
            } ?>
    
        </div>  
    </main>
    <footer>
    <div class="footer">
            <div class="info">
                <div>Google</div>
                <i class="fas fa-circle"></i>
                <div>Tutto su Google</div>
                <i class="fas fa-circle"></i>
                <div>Privacy</div>
                <i class="fas fa-circle"></i>
                <div>Termini</div>
            </div>

            <div class="languages">
                <div>
                    <i class="fas fa-globe"></i>
                    <!-- https://www.html-code-generator.com/html/drop-down/languages-name -->
                    <select id="languages" name="languages">
                        <option value="af">Afrikaans</option>
                        <option value="sq">Albanian - shqip</option>
                        <option value="am">Amharic - ????????????</option>
                        <option value="ar">Arabic - ??????????????</option>
                        <option value="an">Aragonese - aragon??s</option>
                        <option value="hy">Armenian - ??????????????</option>
                        <option value="ast">Asturian - asturianu</option>
                        <option value="az">Azerbaijani - az??rbaycan dili</option>
                        <option value="eu">Basque - euskara</option>
                        <option value="be">Belarusian - ????????????????????</option>
                        <option value="bn">Bengali - ???????????????</option>
                        <option value="bs">Bosnian - bosanski</option>
                        <option value="br">Breton - brezhoneg</option>
                        <option value="bg">Bulgarian - ??????????????????</option>
                        <option value="ca">Catalan - catal??</option>
                        <option value="ckb">Central Kurdish - ?????????? (???????????????? ????????????)</option>
                        <option value="zh">Chinese - ??????</option>
                        <option value="zh-HK">Chinese (Hong Kong) - ??????????????????</option>
                        <option value="zh-CN">Chinese (Simplified) - ??????????????????</option>
                        <option value="zh-TW">Chinese (Traditional) - ??????????????????</option>
                        <option value="co">Corsican</option>
                        <option value="hr">Croatian - hrvatski</option>
                        <option value="cs">Czech - ??e??tina</option>
                        <option value="da">Danish - dansk</option>
                        <option value="nl">Dutch - Nederlands</option>
                        <option value="en">English</option>
                        <option value="en-AU">English (Australia)</option>
                        <option value="en-CA">English (Canada)</option>
                        <option value="en-IN">English (India)</option>
                        <option value="en-NZ">English (New Zealand)</option>
                        <option value="en-ZA">English (South Africa)</option>
                        <option value="en-GB">English (United Kingdom)</option>
                        <option value="en-US">English (United States)</option>
                        <option value="eo">Esperanto - esperanto</option>
                        <option value="et">Estonian - eesti</option>
                        <option value="fo">Faroese - f??royskt</option>
                        <option value="fil">Filipino</option>
                        <option value="fi">Finnish - suomi</option>
                        <option value="fr">French - fran??ais</option>
                        <option value="fr-CA">French (Canada) - fran??ais (Canada)</option>
                        <option value="fr-FR">French (France) - fran??ais (France)</option>
                        <option value="fr-CH">French (Switzerland) - fran??ais (Suisse)</option>
                        <option value="gl">Galician - galego</option>
                        <option value="ka">Georgian - ?????????????????????</option>
                        <option value="de">German - Deutsch</option>
                        <option value="de-AT">German (Austria) - Deutsch (??sterreich)</option>
                        <option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
                        <option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
                        <option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
                        <option value="el">Greek - ????????????????</option>
                        <option value="gn">Guarani</option>
                        <option value="gu">Gujarati - ?????????????????????</option>
                        <option value="ha">Hausa</option>
                        <option value="haw">Hawaiian - ????lelo Hawai??i</option>
                        <option value="he">Hebrew - ??????????</option>
                        <option value="hi">Hindi - ??????????????????</option>
                        <option value="hu">Hungarian - magyar</option>
                        <option value="is">Icelandic - ??slenska</option>
                        <option value="id">Indonesian - Indonesia</option>
                        <option value="ia">Interlingua</option>
                        <option value="ga">Irish - Gaeilge</option>
                        <option value="it">Italian - italiano</option>
                        <option value="it-IT">Italian (Italy) - italiano (Italia)</option>
                        <option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
                        <option value="ja">Japanese - ?????????</option>
                        <option value="kn">Kannada - ???????????????</option>
                        <option value="kk">Kazakh - ?????????? ????????</option>
                        <option value="km">Khmer - ???????????????</option>
                        <option value="ko">Korean - ?????????</option>
                        <option value="ku">Kurdish - Kurd??</option>
                        <option value="ky">Kyrgyz - ????????????????</option>
                        <option value="lo">Lao - ?????????</option>
                        <option value="la">Latin</option>
                        <option value="lv">Latvian - latvie??u</option>
                        <option value="ln">Lingala - ling??la</option>
                        <option value="lt">Lithuanian - lietuvi??</option>
                        <option value="mk">Macedonian - ????????????????????</option>
                        <option value="ms">Malay - Bahasa Melayu</option>
                        <option value="ml">Malayalam - ??????????????????</option>
                        <option value="mt">Maltese - Malti</option>
                        <option value="mr">Marathi - ???????????????</option>
                        <option value="mn">Mongolian - ????????????</option>
                        <option value="ne">Nepali - ??????????????????</option>
                        <option value="no">Norwegian - norsk</option>
                        <option value="nb">Norwegian Bokm??l - norsk bokm??l</option>
                        <option value="nn">Norwegian Nynorsk - nynorsk</option>
                        <option value="oc">Occitan</option>
                        <option value="or">Oriya - ???????????????</option>
                        <option value="om">Oromo - Oromoo</option>
                        <option value="ps">Pashto - ????????</option>
                        <option value="fa">Persian - ??????????</option>
                        <option value="pl">Polish - polski</option>
                        <option value="pt">Portuguese - portugu??s</option>
                        <option value="pt-BR">Portuguese (Brazil) - portugu??s (Brasil)</option>
                        <option value="pt-PT">Portuguese (Portugal) - portugu??s (Portugal)</option>
                        <option value="pa">Punjabi - ??????????????????</option>
                        <option value="qu">Quechua</option>
                        <option value="ro">Romanian - rom??n??</option>
                        <option value="mo">Romanian (Moldova) - rom??n?? (Moldova)</option>
                        <option value="rm">Romansh - rumantsch</option>
                        <option value="ru">Russian - ??????????????</option>
                        <option value="gd">Scottish Gaelic</option>
                        <option value="sr">Serbian - ????????????</option>
                        <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
                        <option value="sn">Shona - chiShona</option>
                        <option value="sd">Sindhi</option>
                        <option value="si">Sinhala - ???????????????</option>
                        <option value="sk">Slovak - sloven??ina</option>
                        <option value="sl">Slovenian - sloven????ina</option>
                        <option value="so">Somali - Soomaali</option>
                        <option value="st">Southern Sotho</option>
                        <option value="es">Spanish - espa??ol</option>
                        <option value="es-AR">Spanish (Argentina) - espa??ol (Argentina)</option>
                        <option value="es-419">Spanish (Latin America) - espa??ol (Latinoam??rica)</option>
                        <option value="es-MX">Spanish (Mexico) - espa??ol (M??xico)</option>
                        <option value="es-ES">Spanish (Spain) - espa??ol (Espa??a)</option>
                        <option value="es-US">Spanish (United States) - espa??ol (Estados Unidos)</option>
                        <option value="su">Sundanese</option>
                        <option value="sw">Swahili - Kiswahili</option>
                        <option value="sv">Swedish - svenska</option>
                        <option value="tg">Tajik - ????????????</option>
                        <option value="ta">Tamil - ???????????????</option>
                        <option value="tt">Tatar</option>
                        <option value="te">Telugu - ??????????????????</option>
                        <option value="th">Thai - ?????????</option>
                        <option value="ti">Tigrinya - ????????????</option>
                        <option value="to">Tongan - lea fakatonga</option>
                        <option value="tr">Turkish - T??rk??e</option>
                        <option value="tk">Turkmen</option>
                        <option value="tw">Twi</option>
                        <option value="uk">Ukrainian - ????????????????????</option>
                        <option value="ur">Urdu - ????????</option>
                        <option value="ug">Uyghur</option>
                        <option value="uz">Uzbek - o???zbek</option>
                        <option value="vi">Vietnamese - Ti???ng Vi???t</option>
                        <option value="wa">Walloon - wa</option>
                        <option value="cy">Welsh - Cymraeg</option>
                        <option value="fy">Western Frisian</option>
                        <option value="xh">Xhosa</option>
                        <option value="yi">Yiddish</option>
                        <option value="yo">Yoruba - ??d?? Yor??b??</option>
                        <option value="zu">Zulu - isiZulu</option>
                    </select>
                </div>
            </div>
        </div>
    </footer>

    <hr>
</body>
</html>