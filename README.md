Projekt AUTOSERWIS, który wykorzystuje Laravel'a.

Posiada 4 klasy bazo-danowe:
1. Klienci - klienci naszego zakładu - zawiera: id, imie, nazwisko, adres_email.
2. Samochody - samochody naszych klientów - zawiera: id, idKlienta, marka, model, rocznik, nrRejestracyjny.
3. Serwisy - liste wykonanych napraw samochodów(lub zaplanowanych) - zawiera: id, idKlienta, idSamochodu, dataSerwisu, cena.
4. Typy serwisów (typy napraw, które mamy w ofercie) - zawiera: id, nazwa, cena.
Dodatkowo każde ma pola (created_at, updated_at) jako timestampsy. 

Jeśli chcesz utworzyć bazę danych u siebie:
1.  W cmd przejdź do folderu głównego projektu.
2.  `php artisan migrate --path=database/migrations/autoserwis`
3.  Zapyta się czy utworzyć bazę danych (autoserwisLaravel) - wpisz "yes" i ENTER.
4.  Powinieneś mieć w ten sposób baze danych u siebie.
5.  Są już dodane seedery. Jak chcesz ich użyć, to użyj komendy
`php artisan db:seed`

PIERDOŁA

