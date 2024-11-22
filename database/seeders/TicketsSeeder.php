<?php

namespace Database\Seeders;

use App\Functions\Helper;
use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 25; $i++){
            $new_ticket = new Ticket();
            $new_ticket->title = $faker->randomElement(
                [
                    "Impossibile accedere all'account utente",
                    "Recupero della password dimenticata",
                    "Errore di autenticazione a due fattori",
                    "Problemi con aggiornamenti software",
                    "Crash o blocco frequente del sistema operativo",
                    "Connessione instabile o assente al server",
                    "Errore di sincronizzazione dei dati nel cloud",
                    "Risoluzione di bug nell'applicazione aziendale",
                    "Configurazione di dispositivi hardware nuovi",
                    "Installazione e attivazione di licenze software",
                    "Problemi di compatibilità tra software e hardware",
                    "Rallentamenti nelle prestazioni del sistema",
                    "Gestione dei permessi e delle autorizzazioni utente",
                    "Ripristino di file eliminati accidentalmente",
                    "Protezione da malware e phishing",
                    "Configurazione di rete Wi-Fi aziendale",
                    "Problemi con la stampa da dispositivi aziendali",
                    "Errore di connessione alle VPN aziendali",
                    "Backup e ripristino dei dati aziendali",
                    "Configurazione di account e-mail aziendali",
                    "Risoluzione di errori di codifica nei sistemi interni",
                    "Gestione e monitoraggio dei log di sistema",
                    "Configurazione di software di gestione progetti",
                    "Risoluzione di conflitti tra dispositivi Bluetooth",
                    "Assistenza per dispositivi IoT aziendali",
                    "Accesso negato a risorse condivise in rete",
                    "Formattazione e reinstallazione di sistemi operativi",
                    "Diagnosi di problemi hardware (es. hard disk danneggiato)",
                    "Installazione e configurazione di certificati SSL",
                    "Ottimizzazione della sicurezza di rete aziendale"
                ]
            );
            $new_ticket->author = $faker->name();
            $new_ticket->message = $faker->sentence(8);
            $new_ticket->date = $faker->dateTimeBetween('-2 months', 'now');
            $new_ticket->slug = Helper::generateSlug($new_ticket->title, Ticket::class);
            $new_ticket->save();
        }
    }
}
