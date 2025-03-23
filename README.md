Si tratta di un'applicazione, sviluppata in Laravel, che permette a un utente di un'azienda fittizia specializzata nel settore informatico di gestire ticket di supporto. L'utente amministratore può creare un ticket, stabilire la categoria del problema riscontrato e assegnare gli operatori in quel momento disponibili. L'applicazione è formata da diverse parti:
- sistema di autenticazione che richiede nome, email e password e un sistema di verifica della password tramite indirizzo email;
- form di login per l'utente già registrato che richiede email e password;
- pagina dedicata alla dashboard generale che riassume il numero di ticket creati, il numero di operatori e il numero di categorie disponibili;
- pagina che elenca la lista completa di tutti i ticket, nella quale l'utente amministratore ha la possibilità di cancellare l'oggetto, di vederne i dettagli e di modificarne lo stato; sono presenti filtri che consentono di visualizzare ticket per categoria e per stato;
- pagina che permette di creare un nuovo ticket, stabilendo l'oggetto del problema, la categoria a cui potrebbe appartenere (tra quelle disponibili), l'operatore (compaiono solo quelli disponibili al momento) e lo stato del ticket (assegnato, in lavorazione e chiuso);
- pagina che presenta la lista di tutti gli operatori disponibili e non; quando viene assegnato un nuovo ticket, l'operatore da disponibile diventa occupato e non sarà presente nella lista del form di creazione;

Per realizzare questa applicazione ho svolto i seguenti step:
1) creazione del database e delle rispettive tabelle contenente i campi appositi, nonché delle relazioni
2) avviamento delle migration attraverso Laravel
3) creazione del layout di base della dashboard
4) creazione dei model e del Controller necessari per la CRUD
5) costruzione della validazione del form di compilazione
6) logica di assegnazione delle categorie e degli operatori
7) aggiunta della paginazione e di un sistema di ricerca in base a un filtro

Il progetto è stato pensato come esercizio nella logica e nelle procedure che caratterizzano l'uso di Laravel e per rafforzare le conoscenze già acquisite e quadagnarne di nuove.
