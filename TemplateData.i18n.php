<?php
$messages = array();

/** English
 * @author Timo Tijhof
 */
$messages['en'] = array(

	// Special:Version
	'templatedata-desc' => 'Implement data storage for template parameters (using JSON)',

	// Page output for <templatedata>
	'templatedata-doc-params' => 'Template parameters',
	'templatedata-doc-param-name' => 'Parameter',
	'templatedata-doc-param-desc' => 'Description',
	'templatedata-doc-param-type' => 'Type',
	'templatedata-doc-param-default' => 'Default',
	'templatedata-doc-param-status' => 'Status',

	// Error message for edit page
	'templatedata-invalid-parse' => 'Syntax error in JSON.',
	'templatedata-invalid-type' => 'Property "$1" is expected to be of type "$2".',
	'templatedata-invalid-missing' => 'Required property "$1" not found.',
	'templatedata-invalid-unknown' => 'Unexpected property "$1".',
	'templatedata-invalid-value' => 'Invalid value for property "$1".',
);

/** Message documentation (Message documentation)
 * @author Shirayuki
 * @author Timo Tijhof
 */
$messages['qqq'] = array(
	'templatedata-desc' => '{{desc}}',
	'templatedata-doc-params' => 'Used as caption for the table which has the following headings:
* {{msg-mw|Templatedata-doc-param-name}}
* {{msg-mw|Templatedata-doc-param-desc}}
* {{msg-mw|Templatedata-doc-param-default}}
* {{msg-mw|Templatedata-doc-param-status}}
{{Identical|Template parameter}}',
	'templatedata-doc-param-name' => 'Used as column heading in the table.
{{Related|Templatedata-doc-param}}
{{Identical|Name}}',
	'templatedata-doc-param-desc' => 'Used as column heading in the table.
{{Related|Templatedata-doc-param}}
{{Identical|Description}}',
	'templatedata-doc-param-default' => 'Used as column heading in the table.
{{Related|Templatedata-doc-param}}
{{Identical|Default}}',
	'templatedata-doc-param-status' => 'Used as column heading in the table.
{{Related|Templatedata-doc-param}}
{{Identical|Status}}',
	'templatedata-invalid-parse' => 'Error message when there is a syntax error in JSON.',
	'templatedata-invalid-type' => 'Error message when a property is of the wrong type.
* $1 - name of property
* $2 - expected type of property',
	'templatedata-invalid-missing' => 'Error message when a required property is not found.
* $1 - name of name
* $2 - type of property (Unused)',
	'templatedata-invalid-unknown' => 'Error message when an unknown property is found.
* $1 - name of property',
	'templatedata-invalid-value' => 'Error message when a property that cannot contain free-form text has an invalid value.
* $1 - name of property',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'templatedata-desc' => "Permite l'almacenamientu de datos pa los parámetros de plantíes (usando JSON)",
	'templatedata-doc-params' => 'Parámetros de la plantía',
	'templatedata-doc-param-name' => 'Nome',
	'templatedata-doc-param-desc' => 'Descripción',
	'templatedata-doc-param-default' => 'Predetermináu',
	'templatedata-doc-param-status' => 'Estáu',
	'templatedata-invalid-parse' => 'Error de sintaxis en JSON.',
	'templatedata-invalid-type' => 'Esperabase que la propiedá «$1» fuera de tipu «$2».',
	'templatedata-invalid-missing' => "Nun s'alcontró la propiedá requerida «$1».",
	'templatedata-invalid-unknown' => 'Propiedá inesperada «$1».',
	'templatedata-invalid-value' => 'Valor inválidu pa la propiedá «$1».',
);

/** Bengali (বাংলা)
 * @author Leemon2010
 */
$messages['bn'] = array(
	'templatedata-doc-params' => 'টেমপ্লেট পরামিতি',
	'templatedata-doc-param-name' => 'নাম',
	'templatedata-doc-param-desc' => 'বিবরণ',
	'templatedata-doc-param-default' => 'ডিফল্ট',
	'templatedata-doc-param-status' => 'অবস্থা',
);

/** Breton (brezhoneg)
 * @author Y-M D
 */
$messages['br'] = array(
	'templatedata-doc-param-name' => 'Anv',
	'templatedata-doc-param-desc' => 'Deskrivadur',
	'templatedata-doc-param-default' => 'Dre ziouer',
	'templatedata-doc-param-status' => 'Statud',
	'templatedata-invalid-parse' => 'Fazi ereadurezh e JSON.',
);

/** Catalan (català)
 * @author Luckas
 */
$messages['ca'] = array(
	'templatedata-doc-param-desc' => 'Descripció',
);

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'templatedata-desc' => 'Ermöglicht mithilfe von JSON die Implementierung der Datenspeicherung für Vorlagenparameter',
	'templatedata-doc-params' => 'Vorlagenparameter',
	'templatedata-doc-param-name' => 'Name',
	'templatedata-doc-param-desc' => 'Beschreibung',
	'templatedata-doc-param-default' => 'Standard',
	'templatedata-doc-param-status' => 'Status',
	'templatedata-invalid-parse' => 'Syntaxfehler in JSON.',
	'templatedata-invalid-type' => 'Für den Typ „$2” wird die Eigenschaft „$1” erwartet.',
	'templatedata-invalid-missing' => 'Die erforderliche Eigenschaft „$1” wurde nicht gefunden.',
	'templatedata-invalid-unknown' => 'Unerwartete Eigenschaft „$1”.',
	'templatedata-invalid-value' => 'Ungültiger Wert für die Eigenschaft „$1”.',
);

/** Zazaki (Zazaki)
 * @author Mirzali
 */
$messages['diq'] = array(
	'templatedata-doc-param-status' => 'Weziyet',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'templatedata-desc' => 'Datowe składowanje za pśedłogowe parametry implementěrowaś (z pomocu JSON)',
	'templatedata-doc-params' => 'Pśedłogowe parametry',
	'templatedata-doc-param-name' => 'Mě',
	'templatedata-doc-param-desc' => 'Wopisanje',
	'templatedata-doc-param-default' => 'Standard',
	'templatedata-doc-param-status' => 'Status',
	'templatedata-invalid-parse' => 'Syntaksowa zmólka w JSON.',
	'templatedata-invalid-type' => 'Za kakosć "$1" se typ "$2" wótcakujo.',
	'templatedata-invalid-missing' => 'Trěbna kakosć "$1" njejo se namakała.',
	'templatedata-invalid-unknown' => 'Njewótcakana kakosć "$1".',
	'templatedata-invalid-value' => 'Njepłaśiwa gódnota za kakosć "$1".',
);

/** Esperanto (Esperanto)
 * @author Luckas
 */
$messages['eo'] = array(
	'templatedata-doc-param-desc' => 'Priskribo',
);

/** Estonian (eesti)
 * @author Luckas
 */
$messages['et'] = array(
	'templatedata-doc-param-desc' => 'Kirjeldus',
);

/** Finnish (suomi)
 * @author Silvonen
 */
$messages['fi'] = array(
	'templatedata-doc-param-name' => 'Nimi',
	'templatedata-doc-param-desc' => 'Kuvaus',
);

/** French (français)
 * @author Boniface
 * @author Gomoko
 * @author Peter17
 */
$messages['fr'] = array(
	'templatedata-desc' => 'Mettre en œuvre un stockage de données pour les paramètres du modèle (en utilisant JSON)',
	'templatedata-doc-params' => 'Paramètres du modèle',
	'templatedata-doc-param-name' => 'Nom',
	'templatedata-doc-param-desc' => 'Description',
	'templatedata-doc-param-default' => 'Par défaut',
	'templatedata-doc-param-status' => 'Statut',
	'templatedata-invalid-parse' => 'Erreur de syntaxe dans JSON.',
	'templatedata-invalid-type' => 'La propriété « $1 » doit être de type « $2 ».',
	'templatedata-invalid-missing' => 'Propriété « $1 » obligatoire non trouvée.',
	'templatedata-invalid-unknown' => 'Propriété « $1 » non attendue.',
	'templatedata-invalid-value' => 'Valeur non valide pour la propriété « $1 ».',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'templatedata-desc' => 'Inclúe un almacenamento de datos para os parámetros do modelo (mediante JSON)',
	'templatedata-doc-params' => 'Parámetros do modelo',
	'templatedata-doc-param-name' => 'Nome',
	'templatedata-doc-param-desc' => 'Descrición',
	'templatedata-doc-param-default' => 'Predeterminado',
	'templatedata-doc-param-status' => 'Estado',
	'templatedata-invalid-parse' => 'Erro de sintaxe en JSON.',
	'templatedata-invalid-type' => 'A propiedade "$1" agárdase que sexa de tipo "$2".',
	'templatedata-invalid-missing' => 'Non se atopou a propiedade obrigatoria "$1".',
	'templatedata-invalid-unknown' => 'Propiedade "$1" inesperada.',
	'templatedata-invalid-value' => 'Valor non válido para a propiedade "$1".',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'templatedata-desc' => 'Datowe składowanje za předłohowe parametry implementować (z pomocu JSON)',
	'templatedata-doc-params' => 'Předłohowe parametry',
	'templatedata-doc-param-name' => 'Mjeno',
	'templatedata-doc-param-desc' => 'Wopisanje',
	'templatedata-doc-param-default' => 'Standard',
	'templatedata-doc-param-status' => 'Status',
	'templatedata-invalid-parse' => 'Syntaksowy zmylk w JSON.',
	'templatedata-invalid-type' => 'Za kajkosć "$1" so typ "$2" wočakuje.',
	'templatedata-invalid-missing' => 'Trěbna kajkosć "$1" njeje so namakała.',
	'templatedata-invalid-unknown' => 'Njewočakowana kajkosć "$1".',
	'templatedata-invalid-value' => 'Njepłaćiwa hódnota za kajkosć "$1".',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'templatedata-desc' => 'Implementa la memorizzazione dei dati per i parametri dei template (utilizzando JSON)',
	'templatedata-doc-params' => 'Parametri template',
	'templatedata-doc-param-name' => 'Nome', # Fuzzy
	'templatedata-doc-param-desc' => 'Descrizione',
	'templatedata-doc-param-default' => 'Predefinito',
	'templatedata-doc-param-status' => 'Stato',
	'templatedata-invalid-parse' => 'Errore di sintassi in JSON.',
	'templatedata-invalid-type' => 'La proprietà "$1" dovrebbe essere di tipo "$2".',
	'templatedata-invalid-missing' => 'Proprietà obbligatoria "$1" non trovata.',
	'templatedata-invalid-unknown' => 'Proprietà "$1" non prevista.',
	'templatedata-invalid-value' => 'Valore non valido per la proprietà "$1".',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'templatedata-desc' => 'テンプレート引数のデータストレージを実装する (JSON を使用)',
	'templatedata-doc-params' => 'テンプレート引数',
	'templatedata-doc-param-name' => '名前',
	'templatedata-doc-param-desc' => '説明',
	'templatedata-doc-param-default' => '既定',
	'templatedata-doc-param-status' => '状態',
	'templatedata-invalid-parse' => 'JSON の構文エラーです。',
	'templatedata-invalid-type' => 'プロパティ「$1」の値が予期しない型「$2」です。',
	'templatedata-invalid-missing' => '必須のプロパティ「$1」がありません。',
	'templatedata-invalid-unknown' => '予期しないプロパティ「$1」です。',
	'templatedata-invalid-value' => 'プロパティ「$1」の値が無効です。',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'templatedata-doc-params' => 'Parameter vun der Schabloun',
	'templatedata-doc-param-name' => 'Numm',
	'templatedata-doc-param-desc' => 'Beschreiwung',
	'templatedata-doc-param-default' => 'Standard',
	'templatedata-doc-param-status' => 'Status',
	'templatedata-invalid-parse' => 'Syntaxfeeler am JSON.',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'templatedata-desc' => 'Овозможува складирање на податоци за шаблонски параметри (користејќи JSON)',
	'templatedata-doc-params' => 'Шаблонски параметри',
	'templatedata-doc-param-name' => 'Име',
	'templatedata-doc-param-desc' => 'Опис',
	'templatedata-doc-param-default' => 'По основно',
	'templatedata-doc-param-status' => 'Статус',
	'templatedata-invalid-parse' => 'Синтаксна грешка во JSON.',
	'templatedata-invalid-type' => 'Се очекува својството „$1“ да биде од типот „$2“.',
	'templatedata-invalid-missing' => 'Бараното својство „$1“ не е пронајдено.',
	'templatedata-invalid-unknown' => 'Неочекувано својство „$1“.',
	'templatedata-invalid-value' => 'Неисправна вредност за својството „$1“.',
);

/** Malayalam (മലയാളം)
 * @author Santhosh.thottingal
 */
$messages['ml'] = array(
	'templatedata-doc-params' => 'ഫലകത്തിനുള്ള ചരങ്ങൾ',
	'templatedata-doc-param-name' => 'പേര്‌',
	'templatedata-doc-param-status' => 'സ്ഥിതി',
);

/** Low German (Plattdüütsch)
 * @author Joachim Mos
 */
$messages['nds'] = array(
	'templatedata-doc-param-desc' => 'Beschrieven',
);

/** Dutch (Nederlands)
 * @author Konovalov
 * @author Siebrand
 */
$messages['nl'] = array(
	'templatedata-desc' => 'Implementeert gegevensopslag voor sjabloonparameters (met behulp van JSON)',
	'templatedata-doc-params' => 'Sjabloonparameters',
	'templatedata-doc-param-name' => 'Naam',
	'templatedata-doc-param-desc' => 'Beschrijving',
	'templatedata-doc-param-default' => 'Standaard',
	'templatedata-doc-param-status' => 'Status',
	'templatedata-invalid-parse' => 'Syntaxisfout in JSON.',
	'templatedata-invalid-type' => 'De verwachting is dat eigenschap "$1" van het type "$2" is.',
	'templatedata-invalid-missing' => 'Vereiste eigenschap "$1" niet gevonden.',
	'templatedata-invalid-unknown' => 'Onverwachte eigenschap "$1".',
	'templatedata-invalid-value' => 'Ongeldige waarde voor de eigenschap "$1".',
);

/** Polish (polski)
 * @author Chrumps
 */
$messages['pl'] = array(
	'templatedata-doc-params' => 'Parametry szablonu',
	'templatedata-doc-param-desc' => 'Opis',
	'templatedata-invalid-parse' => 'Błąd składni w JSON.',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Luckas
 */
$messages['pt-br'] = array(
	'templatedata-doc-param-desc' => 'Descrição',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'templatedata-desc' => "'Mblemende 'nu majazzine de date pe le parametre d'u template (ausanne JSON)",
	'templatedata-doc-params' => "Parametre d'u template",
	'templatedata-doc-param-name' => 'Nome',
	'templatedata-doc-param-desc' => 'Descrizione',
	'templatedata-doc-param-default' => 'De base',
	'templatedata-doc-param-status' => 'State',
	'templatedata-invalid-parse' => "Errore de sindasse jndr'à JSON.",
	'templatedata-invalid-type' => 'S\'aspettave ca \'a probbietà "$1" ere de tipe "$2".',
	'templatedata-invalid-missing' => 'Probbietà richieste "$1" non acchiate.',
	'templatedata-invalid-unknown' => 'Probbietà inaspettate "$1".',
	'templatedata-invalid-value' => 'Valore invalide pa probbietà "$1".',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Милан Јелисавчић
 */
$messages['sr-ec'] = array(
	'templatedata-doc-params' => 'Параметри шаблона',
	'templatedata-doc-param-name' => 'Име',
	'templatedata-doc-param-desc' => 'Опис',
	'templatedata-doc-param-default' => 'Подразумевано',
	'templatedata-doc-param-status' => 'Статус',
	'templatedata-invalid-parse' => 'Синтаксна грешка у JSON-у.',
	'templatedata-invalid-type' => 'Својство „$1“ би требало да је од „$2“ врсте.',
	'templatedata-invalid-missing' => 'Обавезно својство „$1“ није пронађено.',
	'templatedata-invalid-unknown' => 'Неочекивано својство „$1“.',
	'templatedata-invalid-value' => 'Неисправна вредност за својство „$1“.',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'templatedata-doc-params' => 'మూస పరామితులు',
	'templatedata-doc-param-name' => 'పేరు',
	'templatedata-doc-param-desc' => 'వివరణ',
	'templatedata-doc-param-default' => 'అప్రమేయం',
	'templatedata-doc-param-status' => 'స్థితి',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'templatedata-desc' => 'Isakatuparan ang pag-iimbak ng dato para sa mga parametro ng padron (na ginagamit ang JSON)',
	'templatedata-doc-params' => 'Mga parametro ng padron',
	'templatedata-doc-param-name' => 'Pangalan',
	'templatedata-doc-param-desc' => 'Paglalarawan',
	'templatedata-doc-param-default' => 'Likas na katakdaan',
	'templatedata-doc-param-status' => 'Katayuan',
	'templatedata-invalid-parse' => 'Kamalian ng palaugnayan sa JSON.',
	'templatedata-invalid-type' => 'Ang pag-aaring "$1" ay inaasahan na maging ng uring "$2".',
	'templatedata-invalid-missing' => 'Hindi natagpuan ang kailangang pag-aari na "$1".',
	'templatedata-invalid-unknown' => 'Hindi inaasahang pag-aari na "$1".',
	'templatedata-invalid-value' => 'Hindi katanggap-tanggap na halaga para sa pag-aaring "$1".',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'templatedata-desc' => 'Lưu trữ dữ liệu cho tham số bản mẫu (qua JSON)',
	'templatedata-doc-params' => 'Tham số bản mẫu',
	'templatedata-doc-param-name' => 'Tên',
	'templatedata-doc-param-desc' => 'Miêu tả',
	'templatedata-doc-param-default' => 'Mặc định',
	'templatedata-doc-param-status' => 'Trạng thái',
	'templatedata-invalid-parse' => 'Lỗi cú pháp JSON.',
	'templatedata-invalid-type' => 'Mong đợi kiểu “$2” cho giá trị thuộc tính “$1”.',
	'templatedata-invalid-missing' => 'Không tìm thấy thuộc tính bắt buộc “$1”.',
	'templatedata-invalid-unknown' => 'Thuộc tính bất ngờ “$1”.',
	'templatedata-invalid-value' => 'Giá trị thuộc tính “$1” là không hợp lệ.',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'templatedata-desc' => '为模板参数实现数据存储（使用JSON）',
	'templatedata-doc-params' => '模板参数',
	'templatedata-doc-param-name' => '名称',
	'templatedata-doc-param-desc' => '描述',
	'templatedata-doc-param-default' => '默认',
	'templatedata-doc-param-status' => '状态',
	'templatedata-invalid-parse' => 'JSON中语法错误。',
	'templatedata-invalid-type' => '属性“$1”预期为“$2”类型。',
	'templatedata-invalid-missing' => '请求的属性“$1”未找到。',
	'templatedata-invalid-unknown' => '意外的属性“$1”。',
	'templatedata-invalid-value' => '属性“$1”的值无效。',
);
