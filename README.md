# OOP 1

Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d’istanza che abbiamo visto stamattina e create un file `index.php` in cui:

- è definita una **classe ‘Movie’**
  => all’interno della classe sono dichiarate delle **variabili d’istanza**
  => all’interno della classe è definito **un costruttore**
  => all’interno della classe è definito almeno **un metodo**
- vengono **istanziati almeno due oggetti ‘Movie’** e stampati a schermo i valori delle relative proprietà

1. Creo la mia classe Movie dove richiederò tramite un construct il titolo, genere,anno,durata,lingua.
2. Creo metodo per return ora film.

# OOP 2

Oggi continuiamo a lavorare nella stessa repo riprendendo i concetti visti insieme stamattina.
Traccia

Realizzare una classe Production che sia estesa dalla classe Movie e dalla classe TvSerie.

Attenzione #1
gli attributi comuni sia a Movie che a TvSerie dovrebbero trovarsi in Production così da essere ereditati correttamente! Qualcosa andrebbe spostato?

Attenzione #2
occhio ai costruttori! spostando un attributo nella classe genitore, dobbiamo passarlo al costruttore del genitore con parent::\_\_construct(...);

Aggiungiamo anche degli attributi unici per le nuove classi. Per esempio:
per la classe Movie:
$published_year anno di pubblicazione
$running_timedurata in minuti

per la classe TvSerie:
$aired_from_year anno di messa in onda del primo episodio
$aired_to_year anno di messa in onda dell’ultimo episodio
$number_of_episodes numero di episodi
$number_of_seasons numero di stagioni
