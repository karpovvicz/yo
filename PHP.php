PHP Basic Cheat Sheet PHP Basic Cheat Sheet

Struktura pliku PHP
Zmienne i typy danych $tekst = "Hello"; $liczba = 42; $float = 3.14; $bool = true; $tablica = [1, 2, 3];
Instrukcje warunkowe if ($x > 10) { echo "Większe niż 10"; } elseif ($x == 10) { echo "Równe 10"; } else { echo "Mniejsze niż 10"; }
Pętle for ($i = 0; $i < 5; $i++) { echo $i; } $i = 0; while ($i < 5) { echo $i; $i++; PHP Basic Cheat Sheet } $numbers = [1, 2, 3]; foreach ($numbers as $n) { echo $n; }
Funkcje function powitanie($imie) { return "Cześć, " . $imie; } echo powitanie("Kasia");
Tablice $owoce = ["jabłko", "banan", "gruszka"]; echo $owoce[0]; $osoba = ["imie" => "Jan", "wiek" => 30]; echo $osoba["imie"];
Operatory porównania == === != > < >= <=
Obsługa formularzy
setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); } catch (PDOException $e) { echo "Błąd połączenia: " . $e->getMessage(); } 
  10. SELECT przez PDO $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id"); $stmt->execute(['id' => 1]); $row = $stmt->fetch(); echo $row['name']; 
  11. INSERT przez PDO $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)"); $stmt->execute([ 'name' => 'Anna', 'email' => 'anna@example.com' ]);
  12. Obsługa błędów try { // kod } catch (Exception $e) { echo "Błąd: " . $e->getMessage(); }
  13. Funkcje pomocnicze – stringi strlen(), trim(), strtolower(), strtoupper(), ucfirst() PHP Basic Cheat Sheet str_replace(), strpos(), substr(), explode(), implode() htmlspecialchars() Funkcje pomocnicze – tablice count(), in_array(), array_key_exists(), array_push() array_pop(), array_shift(), array_unshift(), array_merge() array_slice(), array_keys(), array_values() Iteracje i przetwarzanie danych foreach, array_map(), array_filter() Zmienne i typy isset(), empty(), gettype(), is_array(), is_string(), is_numeric() Data i czas date(), time(), strtotime() Pliki i system file_get_contents(), file_put_contents(), unlink() Bezpieczeństwo i walidacja htmlspecialchars(), 
  filter_var(), filter_input() 
  ?>
