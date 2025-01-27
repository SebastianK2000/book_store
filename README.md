#book_store


### Photos
<details>

![Zrzut ekranu 2025-01-27 193430](https://github.com/user-attachments/assets/e1065344-a362-4a98-a999-9b686c88e90f)

![Zrzut ekranu 2025-01-27 193424](https://github.com/user-attachments/assets/cc988bfd-44fd-457d-b8a9-9150499ee1b9)

![Zrzut ekranu 2025-01-27 193416](https://github.com/user-attachments/assets/6eb59750-b6b3-4d5f-a0a0-e2f2db29eb16)

![Zrzut ekranu 2025-01-27 193406](https://github.com/user-attachments/assets/5a78a736-e37e-41ae-9760-d190079976f7)

![Zrzut ekranu 2025-01-27 193349](https://github.com/user-attachments/assets/b24973b5-380a-47ba-b850-76e97ce114b6)

![Zrzut ekranu 2025-01-27 193327](https://github.com/user-attachments/assets/0f4ff56a-4473-454f-8988-51f3f16b2e0d)

![Zrzut ekranu 2025-01-27 193319](https://github.com/user-attachments/assets/25ab31aa-b497-46ad-84c0-737bf14519fa)


https://github.com/user-attachments/assets/8eb4ae82-734b-430b-b413-db49ec27fc05



</details>



### EN

### Description: 

Bookstore project using HTML5, CSS3, JavaScript, PHP, MySQL and GIT technologies. Main functionalities include:

- User registration and login
- CRUD operations on users and products
- Shopping cart management
- Creating, editing and deleting products
- Downloading data from MySQL database
- Dividing the system into administrator and user panel

# Project structure: 

## Pages for users: 

### 1. Login page.
- Login form (login and password)
- Redirect to registration
 
### 2. Registration page
- Registration form (name, email, password, password confirmation, user type)

### 3. Home page (home)
- Display of recently added products
- Links to other sections

### 4. “About” page (about).
- Description of the bookstore
- Customer reviews

### 5. Store (shop)
- List of all products
- Ability to add to cart

### 6. contact (contact)
- Contact form

### 7. orders (orders)
- History of user orders.

### 8. shopping cart (cart)
- Management of products in the cart
- Updating quantities
- Deleting products

Order finalization (checkout) ### 9.
- Delivery data form
- Order summary

### 10. search form (search)
- Product search form
- Display of results

## Admin panel: 

### 1. Dashboard
- Order, product and user statistics

### 2. Book management.
- Adding, editing and deleting products

### 3. Order management.
- Viewing and updating order status

### 4. User management
- Viewing and deleting user accounts

### 5. message management
- Viewing and deleting messages from users
  
### Example code: 

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

### This code snippet:
- Appends a configuration file
- Declares the database connection variable as global
- Starts a PHP session
- Retrieves the user ID from the session
- Checks if the user is logged in

### Order section

```
<section class=“placed-orders”>.
    <h1 class=“title” style=“margin-top: 3rem;”>placed orders</h1>.
    <div class=“box-container” style=“margin-top: 3rem; margin-bottom: 3rem;”>.
        <?php
        $order_query = mysqli_query($conn, “SELECT * FROM `orders` WHERE user_id = ‘$user_id’”) or die('query failed');
        if(mysqli_num_rows($order_query) > 0){
            while($fetch_orders = mysqli_fetch_assoc($order_query)){
                // Display order details
            }
        }else{
            echo '<p class=“empty”>no orders placed yet!</p>';
        }
        ?>
    </div>
</section>
```

### This section:
- Retrieves user orders from the database
- Displays the details of each order or tells you if there are no orders

### How to run the project:

### Running the PHP code.

To run the PHP code below, make sure you have PHP installed on your system. If you don't have PHP, you can download it from the official site: [https://www.php.net/downloads.php](https://www.php.net/downloads.php).

1 **Download the repository**.

   Copy the address:

   https://github.com/SebastianK2000/book_store.git

   
   type in terminal:

   ```
   git clone https://github.com/SebastianK2000/book_store.git
   ```

2 **Start Apache**.
   
   In panel XAMPP uruchom server Apache oraz MySQL

3. **Open PHPmyAdmin**:

   In your browser, type
   ```
   http://localhost/phpmyadmin
   ```

   and recreate a database like mine or import it from a file.

4 **Add the project folder to HTDOCS**.

   In your C hard drive, look for the Xampp folder and in it the htdocs folder and put the project file there.

5. **localhost**.
  
      In your browser, type ``localhost `` and enable the project folder.

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

   Skopiuj adres:

   https://github.com/SebastianK2000/book_store.git

   wpisz w terminalu:

   ```
   git clone https://github.com/SebastianK2000/book_store.git
   ```

2. **Uruchomienie Apache**
   
   W panelu XAMPP uruchom server Apache oraz MySQL

   
3. **Włącz PHPmyAdmin**:

   W przeglądarce wpisz
   ```
   http://localhost/phpmyadmin
   ```

   i odtwórz bazę danych taką jak moja bądź ją importuj z pliku.

4. **Dodaj folder projektu do HTDOCS**

   W dysku twardym C poszukaj folder Xampp a w nim folder htdocs i umieść tam plik projektu.

5. **localhost**
  
      W przeglądarce wpisz  ``` localhost ``` i włącz folder projektu.
