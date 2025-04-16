# 📚 3. Źródła, które warto mieć pod ręką (zapisz sobie!)
PHP:
https://www.php.net/manual/en/ – oficjalna dokumentacja PHP

PDO examples – bardzo dobre przykłady jak bezpiecznie korzystać z PDO

PHP: Arrays – dokumentacja tablic

PHP: String Functions

PostgreSQL:
https://www.postgresql.org/docs/ – oficjalna dokumentacja

https://www.sqltutorial.org/postgresql-tutorial/ – przyjazne tutoriale

https://www.postgresqltutorial.com/ – dużo przykładów zapytań

https://mode.com/sql-tutorial/ – świetny SQL (SELECT, JOIN, CTE itd.)

Cheat sheety:
PHP cheat sheet: https://devhints.io/php

SQL cheat sheet: https://learnsql.com/blog/sql-cheat-sheet/

PostgreSQL cheat sheet: https://www.postgresqltutorial.com/postgresql-cheat-sheet/


php 

PHP Basic Cheat Sheet
PHP Basic Cheat Sheet
1. Struktura pliku PHP
<?php
// Twój kod tutaj
?>
2. Zmienne i typy danych
$tekst = "Hello";
$liczba = 42;
$float = 3.14;
$bool = true;
$tablica = [1, 2, 3];
3. Instrukcje warunkowe
if ($x > 10) {
 echo "Większe niż 10";
} elseif ($x == 10) {
 echo "Równe 10";
} else {
 echo "Mniejsze niż 10";
}
4. Pętle
for ($i = 0; $i < 5; $i++) {
 echo $i;
}
$i = 0;
while ($i < 5) {
 echo $i;
 $i++;
PHP Basic Cheat Sheet
}
$numbers = [1, 2, 3];
foreach ($numbers as $n) {
 echo $n;
}
5. Funkcje
function powitanie($imie) {
 return "Cześć, " . $imie;
}
echo powitanie("Kasia");
6. Tablice
$owoce = ["jabłko", "banan", "gruszka"];
echo $owoce[0];
$osoba = ["imie" => "Jan", "wiek" => 30];
echo $osoba["imie"];
7. Operatory porównania
== === != > < >= <=
8. Obsługa formularzy
<form method="POST">
 <input type="text" name="imie">
 <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $imie = $_POST["imie"];
 echo "Cześć, " . htmlspecialchars($imie);
}
PHP Basic Cheat Sheet
9. PDO – Połączenie z PostgreSQL
try {
 $pdo = new PDO("pgsql:host=localhost;dbname=testdb", "user", "pass");
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
 echo "Błąd połączenia: " . $e->getMessage();
}
10. SELECT przez PDO
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
$stmt->execute(['id' => 1]);
$row = $stmt->fetch();
echo $row['name'];
11. INSERT przez PDO
$stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
$stmt->execute([
 'name' => 'Anna',
 'email' => 'anna@example.com'
]);
12. Obsługa błędów
try {
 // kod
} catch (Exception $e) {
 echo "Błąd: " . $e->getMessage();
}
13. Funkcje pomocnicze – stringi
strlen(), trim(), strtolower(), strtoupper(), ucfirst()
PHP Basic Cheat Sheet
str_replace(), strpos(), substr(), explode(), implode()
htmlspecialchars()
Funkcje pomocnicze – tablice
count(), in_array(), array_key_exists(), array_push()
array_pop(), array_shift(), array_unshift(), array_merge()
array_slice(), array_keys(), array_values()
Iteracje i przetwarzanie danych
foreach, array_map(), array_filter()
Zmienne i typy
isset(), empty(), gettype(), is_array(), is_string(), is_numeric()
Data i czas
date(), time(), strtotime()
Pliki i system
file_get_contents(), file_put_contents(), unlink()
Bezpieczeństwo i walidacja
htmlspecialchars(), filter_var(), filter_input()
?>


sql 

PHP + PostgreSQL Interview Guide
PostgreSQL Cheat Sheet
PostgreSQL Basic Cheat Sheet
1. Podstawowe SELECTy
SELECT * FROM users;
SELECT name, email FROM users;
SELECT * FROM users WHERE age > 18;
SELECT * FROM users WHERE name LIKE 'A%';
2. INSERT
INSERT INTO users (name, email) VALUES ('Anna', 'anna@example.com');
3. UPDATE
UPDATE users SET email = 'new@example.com' WHERE id = 1;
4. DELETE
DELETE FROM users WHERE id = 1;
5. Sortowanie i limitowanie
SELECT * FROM users ORDER BY created_at DESC LIMIT 10;
6. Agregacje
SELECT COUNT(*) FROM users;
SELECT AVG(age), MAX(age), MIN(age) FROM users;
7. GROUP BY i HAVING
SELECT city, COUNT(*) FROM users GROUP BY city HAVING COUNT(*) > 10;
8. JOINy
SELECT u.name, o.total
FROM users u
PHP + PostgreSQL Interview Guide
JOIN orders o ON u.id = o.user_id;
9. Tworzenie tabel
CREATE TABLE users (
 id SERIAL PRIMARY KEY,
 name TEXT NOT NULL,
 email TEXT UNIQUE,
 created_at TIMESTAMP DEFAULT NOW()
);
10. Indeksy
CREATE INDEX idx_users_email ON users(email);
11. Funkcje tekstowe i daty
LOWER(name), UPPER(name), LENGTH(name)
NOW(), CURRENT_DATE, AGE(birthdate)
Przykładowe Zadania PHP + PostgreSQL
Przykładowe Zadania PHP + PostgreSQL
1. Formularz kontaktowy
- Zbuduj formularz HTML (imie, email, wiadomosc)
- Po wysłaniu zapisz dane do bazy danych PostgreSQL
2. Lista użytkowników z bazy
- Połącz się z PostgreSQL przez PDO
- Pobierz dane z tabeli users i wyświetl w HTML-u jako tabela
3. Obsługa błędów logowania
- Odbierz login i hasło
- Sprawdź dane w bazie
- Zwróć komunikat: zalogowano lub błąd danych
PHP + PostgreSQL Interview Guide
4. Filtrowanie i paginacja
- Dodaj pole wyszukiwania po nazwie użytkownika
- Dodaj LIMIT + OFFSET do paginacji
Typowe Pytania Rekrutacyjne
Typowe Pytania Rekrutacyjne (Junior PHP + PostgreSQL)
PHP:
- Czym różni się == od ===?
- Jak działa isset(), a jak empty()?
- Co to jest XSS i jak się przed nim chronić?
- Jak działa prepared statement i dlaczego jest bezpieczny?
- Jak działa include vs require?
- Co to są sesje i jak je używać?
PostgreSQL:
- Czym się różni LEFT JOIN od INNER JOIN?
- Jak działa GROUP BY i HAVING?
- Co to jest indeks i kiedy warto go używać?
- Jakie typy danych znasz w PostgreSQL?
- Co to jest transakcja i jak działa COMMIT/ROLLBACK?
Ogólne:
- Jak debugujesz swój kod?
- Co robisz, gdy nie działa zapytanie SQL?
- Co ostatnio się nauczyłeś związanego z PHP?
