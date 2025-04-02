# Projekt PHP z Dockerem

## Wymagania

- Docker
- Docker Compose

## Instalacja

1. Uruchom skrypt `start.sh`:
    ```sh
    ./start.sh
    ```

2. Z wewnątrz kontenera uruchom skrypt `install.sh`:
    ```sh
    ./install.sh
    ```

3. Z wewnątrz kontenera uruchom skrypt `run.sh`:
    ```sh
    ./run.sh
    ```

## Opis

Ten projekt wykorzystuje Dockera do uruchamiania aplikacji PHP. Skrypt `start.sh` uruchamia kontener Dockera z PHP i Composerem, `install.sh` instaluje zależności, a `run.sh` uruchamia skrypt PHP `src/Test.php`.