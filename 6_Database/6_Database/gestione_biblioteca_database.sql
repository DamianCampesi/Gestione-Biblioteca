DROP DATABASE IF EXISTS gestione_biblioteca;
CREATE DATABASE gestione_biblioteca;
use gestione_biblioteca;
-- MariaDB dump 10.19  Distrib 10.4.21-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: gestione_biblioteca
-- ------------------------------------------------------
-- Server version	10.4.21-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `is_rented` tinyint(4) DEFAULT 0,
  `summary` text DEFAULT NULL,
  `cover_image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES (50,'IT','Stephen King',0,'Un gruppo di adolescenti scopre l\'esistenza di un\'entità malvagia che si nutre delle paure degli esseri umani e che ha le sembianze di un pagliaccio di nome Pennywise. L\'essere, che dimora nelle profondità della rete fognaria, è solo uno dei volti della creatura millenaria nota come It, un mostro senza forma che si risveglia ciclicamente per mietere vittime tra i bambini della città. Per sconfiggerlo, i ragazzi devono restare uniti e mantenere vivo il sentimento di amicizia che li lega.','stephen-king-2.jpg'),(51,'Stupefatto','Enrico comi',0,'uella che viene raccontata in “Stupefatto” è la vicenda di un ragazzo 14enne che compone pezzi di informazioni e di vita, sperimentando sulla propria pelle il fascino suasivo dell\'illusione. Una promessa di felicità che ti leva esattamente ciò che promette di darti e, con esso, tutto il resto.','41vUXdJ1vVL.jpg'),(52,'Mucchio d\'ossa','Stephen King',0,'IN un giorno caldissimo dell’agosto 1994, mia moglie mi disse che scendeva al Rite Aid di Derry a prendere una ricarica per il suo inalatore perché la sua era esaurita; un farmaco prescrittole dal medico, che credo oggigiorno si venda senza ricetta. Io per quella giornata avevo finito di scrivere e mi offrii di assumermi l’incombenza. Lei mi ringraziò, ma voleva comperare del pesce al supermercato lì accanto; due piccioni con una fava e compagnia bella. Mi soffiò un bacio dal palmo della mano e uscì. La rividi in TV. È così che si identificano i morti qui a Derry, non si percorre un corridoio sotterraneo di piastrelle verdi sotto lunghi tubi fluorescenti, non ti tirano fuori un cadavere nudo da una cella frigorifera. Si entra in un ufficio con la scritta PRIVATO, si guarda uno schermo TV e si dice sì o no.\r\nIl Rite Aid e lo Shopwell sono a meno di un miglio da casa nostra, in un piccolo centro commerciale che annovera anche una vendita e noleggio di videocassette, una rivendita di libri usati che si chiama Spread It Around (dove i miei vecchi paperback alimentano un vivace giro d’affari), un Radio Shack e un Fast Foto. È in Up-Mile Hill, all’incrocio di Witcham e Jackson.\r\nAveva parcheggiato davanti al Blockbuster Video, era entrata nel drugstore e aveva presentato la sua prescrizione a Joe Wyzer, il farmacista di allora; ora lavora al Rite Aid di Bangor. All’uscita aveva preso uno di quei cioccolatini ripieni di marshmallow, il suo era a forma di topolino. Io lo trovai più tardi nella sua borsetta. Tolsi la carta e lo mangiai io, seduto al tavolo della cucina con il contenuto della sua borsetta rossa sparso davanti a me, e fu come fare la Comunione. Quando alla fine mi rimase solo il retrogusto di cioccolato sulla lingua e in gola, scoppiai in lacrime. Seduto in mezzo ai suoi Kleenex e cosmetici e chiavi e avanzi di Cert piansi con le mani sopra gli occhi, come piange un bambino.\r\nL’inalatore era in un sacchetto del Rite Aid. Era costato dodici dollari e diciotto centesimi. Nel sacchetto c’era anche qualcos’altro, un articolo costato ventidue e cinquanta. Contemplai a lungo quell’altro oggetto, vedendolo senza capirlo. Ero sorpreso, forse persino sconcertato, ma l’idea che Johanna Arlen Noonan potesse aver avuto una seconda vita, una di cui non sapevo nulla, non mi passò mai per la mente. Non in quel momento.\r\nJo era uscita di nuovo nel sole forte e martellante, scambiando gli occhiali a lenti chiare con quelli da sole, e nel momento in cui emergeva da sotto la tenda davanti al drugstore (qui sto lavorando un po’ di fantasia, suppongo, sto sconfinando un po’ nel territorio del romanziere, ma non molto, solo qualche centimetro, se volete fidarvi di me), c’era stato quello stridio bisbetico di ruote bloccate sull’asfalto che significa che se non ci sarà un incidente, ci sarà mancato poco.\r\nQuella volta c’era stato, il tipo di incidenti che a quanto pare, a quello stupido incrocio a forma di X, si ripetevano almeno una volta alla settimana. Dal parcheggio del centro commerciale stava uscendo una Toyota del 1989 che svoltava a sinistra in Jackson Street. Al volante c’era la signora Esther Easterling di Barrett’s Orchards. Era accompagnata dall’amica, signora Irene Deorsey, anche lei di Barrett’s Orchards, che era stata al negozio di video-cassette dove non aveva trovato niente che avesse voglia di noleggiare. Troppa violenza, aveva protestato Irene. Erano entrambe vedove di fumatori.\r\nCome aveva fatto Esther a non vedere il camion arancione della manutenzione stradale che stava sopraggiungendo in quel momento? Lei negò in effetti di averlo visto alla polizia, ai giornali e anche a me, quando le parlai un paio di mesi più tardi. Credo che si fosse solo dimenticata di guardare. Come diceva mia madre (altra vedova di fumatore): «I due guai più comuni della terza età sono l’artrite e la smemoratezza. Per entrambe i vecchi non hanno colpa».\r\nAlla guida del camion c’era William Fraker, di Old Cape. Il giorno in cui morì mia moglie il signor Fraker aveva trentotto anni e guidava a torso nudo pensando a quanto maledettamente desiderava una doccia fredda e una birra dal frigorifero, non necessariamente in quell’ordine. Con altri tre operai aveva passato otto ore a stendere rappezzi d’asfalto sulla Harris Avenue Extension vicino all’aeroporto, un lavoraccio da finire arrostiti, in una giornata calda come quella, e Bill Fraker avrebbe detto che sì, forse veniva giù un po’ allegro, mettiamo intorno ai settanta all’ora in una zona dove il limite era di cinquanta. Aveva fretta di tornare alla rimessa, mollare il camion e sedersi al volante della sua F-150, munita di condizionatore. E poi i freni del camion, sebbene in condizioni da passare l’ispezione, erano tutt’altro che in buono stato. Fraker li aveva azionati nel momento in cui aveva visto la Toyota sbucargli davanti (aveva anche suonato il clacson), ma era tardi. Aveva sentito stridere i copertoni, quelli del suo camion e anche quelli di Esther che si accorgeva finalmente del pericolo, e per non più di un istante l’aveva vista in faccia.\r\n«Quella è stata la cosa peggiore, in un certo senso», mi confidò. Eravamo a casa sua, seduti in veranda a bere birra, ottobre ormai, e anche se il sole ci intiepidiva la faccia indossavamo entrambi il maglione. «Sa come sono alte le cabine di quei camion, no?»\r\nAnnuii.\r\n«Ebbene lei mi stava guardando, aveva alzato la testa, quasi a storcersi il collo, sembrava, con il sole in pieno sulla faccia. Allora ho visto quant’era vecchia. Mi ricordo di aver pensato: Merda secca, se non riesco a fermarmi questa si sbriciola come un pezzo di vetro. Invece certi vecchi sono indistruttibili, da lasciarti a bocca aperta. Dico, ha visto anche lei com’è andata a finire, con quelle due nonnine ancora vive, mentre sua moglie…»\r\nLì si interruppe e una vampata gli colorò le guance facendolo somigliare a un ragazzo deriso a scuola dalle compagne che si sono accorte che ha la patta aperta. Era comico, ma se io avessi sorriso sarei riuscito solo a confonderlo.\r\n«Signor Noonan, mi scusi. La mia lingua se n’è andata un po’ per i fatti suoi.»\r\n«Non fa niente», risposi. «Il peggio è comunque passato.» Era una bugia, ma ci servì per tornare in carreggiata.\r\n«Fatto sta che ci siamo presi», disse lui. «C’è stato un bel cozzo e poi quel rumore di cartoccio del lato del guidatore in cui ero entrato con il camion. E vetri infranti. Io sono andato a sbattere contro il volante così forte che per una settimana o più non ho potuto respirare senza sentire dolore. E mi è venuto un grosso livido proprio qui.» Si disegnò un arco sul petto appena sotto le clavicole. «Ho picchiato la testa sul parabrezza da farci una crepa, e mi è venuto solo un bernoccolino da niente, una macchiolina scura, niente sangue, nemmeno mal di testa. Mia moglie dice che è perché ho il cranio duro di natura. Ho visto quella donna che guidava la Toyota, la signora Easterling, incastrata fra il cambio e i due sedili davanti. Poi finalmente ci siamo fermati, tutti aggrovigliati insieme in mezzo alla strada, e sono sceso per vedere com’erano ridotte. Guardi, ero sicuro di trovarle morte tutt’e due.»\r\nNon erano morte, né una né l’altra, nemmeno svenute, sebbene la signora Easterling avesse tre costole fratturate e un’anca lussata. La signora Deorsey, che sedeva dall’altra parte, aveva subito un lieve trauma cranico per aver urtato il finestrino con la fronte. Nient’altro. Era stata «medicata e dimessa dall’Home Hospital», secondo la formula di rito del Derry Newsin questi casi.\r\nMia moglie, la fu Johanna Arlen di Malden, Massachusetts, aveva visto tutto dal punto in cui si era fermata, davanti al drugstore, con la borsetta appesa alla spalla e il sacchetto con il suo medicinale in una mano. Come Bill Fraker, doveva aver pensato che le donne della Toyota fossero o morte, o gravemente ferite. Il rumore dell’incidente era stato un terribile schianto che aveva bucato la calda aria pomeridiana come una palla di bowling lanciata sui birilli. L’aveva ornato come un ispido pizzo il crepitare dei vetri che andavano in frantumi. I due veicoli si erano incastrati con violenza l’uno nell’altro nel mezzo di Jackson Street, dove l’arancione incatramato dell’autocarro incombeva sul celeste della vetturina d’importazione come un genitore dispotico su un figlio intimidito.\r\nJohanna era corsa verso la strada attraversando il parcheggio. Altri intorno a lei facevano lo stesso. Tra loro, la signorina Jill Dunbarry stava contemplando gli articoli esposti nella vetrina di Radio Shack al momento dello scontro. Disse che le sembrava di ricordare di essere passata di corsa accanto a Johanna; era più che sicura di ricordare una persona in pantaloni gialli, ma non avrebbe giurato sulle circostanze precise. Frattanto la Easterling aveva cominciato a strillare che si era fatta male, che si erano fatte male tutt’e due, sollecitava aiuto per sé e per l’amica Irene.\r\nNel mezzo del piazzale, vicino a un piccolo grappolo di distributori di giornali, mia moglie era caduta. La cinghia della borsetta non le era scivolata via dalla spalla, ma il sacchetto del farmacista le era sfuggito di mano e l’inalatore ne era rotolato fuori per metà. L’altro oggetto era rimasto al suo posto.\r\nNessuno l’aveva notata, là per terra vicino alle teche; erano tutti concentrati sui veicoli aggrovigliati, le donne che urlavano, la pozza sempre più grande di acqua e antigelo che filtrava dal radiatore sfondato del camion municipale. («È benzina!» gridava a tutti e a nessuno il commesso del Fast Foto. «È benzina, attenti che non salti tutto in aria, ragazzi!») Posso pensare che uno o due dei soccorritori l’avessero addirittura superata con un salto, credendo forse che avesse perso i sensi, un’ipotesi più che giustificabile in un caldo che superava abbondantemente i trenta gradi.\r\nErano accorse sul luogo dell’incidente alcune delle persone che si trovavano al centro commerciale, una ventina circa; altre quaranta o giù di lì erano sopraggiunte dallo Strawford Park, dov’era in corso una partita di baseball. Immagino che si siano dette tutte le cose che ci si può aspettare di udire in situazioni del genere, spesso dette e ripetute. Tutti a guardare senza sapere che cosa fare. Qualcuno che toccava la vecchia mano tremante di Esther attraverso l’apertura deformata del finestrino. Tutti a lasciare immediatamente il passo a Joe Wyzer: in momenti come quelli chiunque indossi un camice bianco diventa automaticamente primattore. In lontananza il guaito della sirena di un’ambulanza ad alzarsi come aria tremula sopra un inceneritore.','51vZy6AOM6L._SL500_.jpg');
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valutazione` float DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `book_id` (`book_id`),
  CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rating`
--

LOCK TABLES `rating` WRITE;
/*!40000 ALTER TABLE `rating` DISABLE KEYS */;
INSERT INTO `rating` VALUES (1,2.8,2,50),(2,3.6,2,52),(3,5.2,2,51);
/*!40000 ALTER TABLE `rating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rent`
--

DROP TABLE IF EXISTS `rent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rent` (
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`book_id`),
  KEY `book_id` (`book_id`),
  CONSTRAINT `rent_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `rent_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rent`
--

LOCK TABLES `rent` WRITE;
/*!40000 ALTER TABLE `rent` DISABLE KEYS */;
/*!40000 ALTER TABLE `rent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_librarian` tinyint(4) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `hash_password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,1,'gestione.progetto2021@gmail.com','$2y$10$tJQ/sz4StTbjwBCty/SweuCJIvS6/0wRuNMqexDTk.vfCFbOU.cu.'),(2,0,'damian.campesi@gmail.com','$2y$10$yFsvuCKp6v/GVBh9hF/mh.T3/hq2KAHMYRxScHOK3uUAWaTe7qRHS');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-27 15:49:34
