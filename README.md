#book_store

### PL

### Opis: 

Projekt księgarni wykorzystujący technologie HTML5, CSS3, JavaScript, PHP, MySQL i GIT. Główne funkcjonalności obejmują:

- Rejestrację i logowanie użytkowników
- Operacje CRUD na użytkownikach i produktach
- Zarządzanie koszykiem zakupowym
- Tworzenie, edycję i usuwanie produktów
- Pobieranie danych z bazy MySQL
- Podział systemu na panel administratora i użytkownika

# Struktura projektu: 

## Strony dla użytkowników: 

### 1. Strona logowania
- Formularz logowania (login i hasło)
- Przekierowanie do rejestracji
 
### 2. Strona rejestracji
- Formularz rejestracji (imię, email, hasło, potwierdzenie hasła, typ użytkownika)

### 3. Strona główna (home)
- Wyświetlanie ostatnio dodanych produktów
- Linki do innych sekcji

### 4. Strona "O nas" (about)
- Opis księgarni
- Recenzje klientów

### 5. Sklep (shop)
- Lista wszystkich produktów
- Możliwość dodawania do koszyka

### 6. Kontakt (contact)
- Formularz kontaktowy

### 7. Zamówienia (orders)
- Historia zamówień użytkownika

### 8. Koszyk (cart)
- Zarządzanie produktami w koszyku
- Aktualizacja ilości
- Usuwanie produktów

### 9. Finalizacja zamówienia (checkout)
- Formularz danych dostawy
- Podsumowanie zamówienia

### 10. Wyszukiwarka (search)
- Formularz wyszukiwania produktów
- Wyświetlanie wyników

## Panel administratora: 

### 1. Dashboard
- Statystyki zamówień, produktów i użytkowników

### 2. Zarządzanie książkami
- Dodawanie, edycja i usuwanie produktów

### 3. Zarządzanie zamówieniami
- Przeglądanie i aktualizacja statusu zamówień

### 4. Zarządzanie użytkownikami
- Przeglądanie i usuwanie kont użytkowników

### 5. Zarządzanie wiadomościami
- Przeglądanie i usuwanie wiadomości od użytkowników
  
# Przykładowy kod: 

```
<?php
include 'config.php';
global $conn;
session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)) {
    header('location:login.php');
}
?>
```

### Ten fragment kodu:
- Dołącza plik konfiguracyjny
- Deklaruje zmienną połączenia z bazą danych jako globalną
- Rozpoczyna sesję PHP
- Pobiera ID użytkownika z sesji
- Sprawdza, czy użytkownik jest zalogowany

### Sekcja zamówień

```
<section class="placed-orders">
    <h1 class="title" style="margin-top: 3rem;">placed orders</h1>
    <div class="box-container" style="margin-top: 3rem; margin-bottom: 3rem;">
        <?php
        $order_query = mysqli_query($conn, "SELECT * FROM `orders` WHERE user_id = '$user_id'") or die('query failed');
        if(mysqli_num_rows($order_query) > 0){
            while($fetch_orders = mysqli_fetch_assoc($order_query)){
                // Wyświetlanie szczegółów zamówienia
            }
        }else{
            echo '<p class="empty">no orders placed yet!</p>';
        }
        ?>
    </div>
</section>
```
### Ta sekcja:
- Pobiera zamówienia użytkownika z bazy danych
- Wyświetla szczegóły każdego zamówienia lub informuje o braku zamówień

# Jak uruchomić projekt:

### Uruchamianie kodu PHP

Aby uruchomić poniższy kod PHP, upewnij się, że masz zainstalowane PHP na swoim systemie. Jeśli nie masz PHP, możesz pobrać je z oficjalnej strony: [https://www.php.net/downloads.php](https://www.php.net/downloads.php).

1. **Pobierz repozytorium**
   

3. **Uruchom kod lokalnie**:
   - Otwórz terminal/wiersz poleceń.
   - Przejdź do folderu, w którym zapisałeś plik.
   - Uruchom kod za pomocą poniższego polecenia:
     ```bash
     php index.php
     ```

4. **Wynik**:
   Po uruchomieniu powinno pojawić się:
   ```text
   Hello, World!

