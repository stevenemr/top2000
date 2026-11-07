# Top 2000 project

View statistics and use tools about the NPO Radio 2 Top 2000. This is a Laravel application that uses Livewire for dynamic components.

## What is the NPO Radio 2 Top 2000?

NPO Radio 2 is a radio station from the Netherlands, part of the NPO (Netherlands Public Broadcasting). In December 1999, the first edition of the Top 2000 was broadcast to celebrate the new millennium. Listeners of Radio 2 could vote on their "best songs of all time". It was supposed to be a one-time event, but it was so popular that it is still a Dutch tradition.

## Installation

This project uses Laravel Sail for easy Docker installation.

1. Clone this repository:

    ```bash
    git clone https://github.com/stevenemr/top2000
    cd top2000
    ```

2. Copy the environment file:

    ```bash
    cp .env.example .env
    ```

3. Install the Composer packages.

    ```bash
    composer install
    ```

4. Start the Docker containers (use the flag `-d` for detached mode):

    ```bash
    sail up
    ```

5. Generate an application key:

    ```bash
    sail artisan key:generate
    ```

6. Run the database migrations:

    ```bash
    sail artisan migrate
    ```

7. Install the npm packages and start the Vite+ server:

    ```bash
    sail npm install
    sail npm run dev
    ```

> If you haven't set a alias for sail, use `./vendor/bin/sail` instead of `sail`.

## File Structure

The views are structured as follows:

- `resources/views/components`: reusable components
- `resources/views/layouts`: page layouts
- `resources/views/pages`: pages

Components can be Livewire components or regular Blade components. If the component has dynamic elements, use Livewire to create it:

```bash
sail artisan make:livewire component
```

If the component has no dynamic elements (e.g. a button), create it the default Laravel way:

```bash
sail artisan make:component Component # Use --view for only a Blade component
```

All pages should be generated as Livewire pages and can be added with this command:

```bash
sail artisan make:livewire pages::... # e.g. pages::statistics
```

## Disclaimer

🇬🇧 This is a non-commercial hobby project. It is not affiliated with, endorsed by, or connected to NPO, NPO Radio 2, or the organizers of the Top 2000. I do not claim any rights to the Top 2000 and I do not earn any money with this project.

---

🇳🇱 Dit is een niet-commercieel hobbyproject. Het is niet gelieerd aan, wordt niet gesponsord of goedgekeurd door, en is op geen enkele manier verbonden met de NPO, NPO Radio 2 of de organisatoren van de Top 2000. Ik maak geen aanspraak op rechten op de Top 2000 en verdien niets met dit project.
