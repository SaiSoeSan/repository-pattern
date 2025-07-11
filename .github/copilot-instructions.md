# Copilot Instructions for `repository-pattern`

## Project Overview

-   This is a Laravel-based PHP project implementing the Repository Pattern for clean separation of business logic and data access.
-   Major components:
    -   `app/Repositories/`: Concrete repository classes (e.g., `ProductRepository.php`).
    -   `app/Interface/`: Repository interfaces (e.g., `ProductRepositoryInterface.php`).
    -   `app/Services/`: Service classes that use repositories for business logic (e.g., `ProductService.php`).
    -   `app/Providers/RepositoryServiceProvider.php`: Binds interfaces to implementations for dependency injection.
    -   `app/Models/`: Eloquent models (e.g., `Product.php`).
    -   `routes/`: Route definitions for web and API endpoints.

## Key Architectural Patterns

-   **Repository Pattern**: All data access is abstracted behind interfaces. Services depend on interfaces, not concrete classes.
-   **Dependency Injection**: Service providers bind interfaces to implementations, enabling easy swapping/mocking.
-   **Service Layer**: Business logic is placed in service classes, not controllers or repositories.

## Developer Workflows

-   **Install dependencies:**
    ```bash
    composer install
    npm install
    ```
-   **Run migrations and seeders:**
    ```bash
    php artisan migrate --seed
    ```
-   **Run the development server:**
    ```bash
    php artisan serve
    ```
-   **Run tests:**
    ```bash
    php artisan test
    ```

## Project Conventions

-   All repository interfaces must be placed in `app/Interface/` and named `*RepositoryInterface.php`.
-   All repository implementations must be placed in `app/Repositories/` and named `*Repository.php`.
-   Service classes should only depend on interfaces, not concrete repositories.
-   Bindings between interfaces and implementations are managed in `RepositoryServiceProvider.php`.
-   Use Eloquent models for data representation, but never access models directly in controllers or services—always go through repositories.

## Examples

-   To add a new entity:
    1. Create a model in `app/Models/`.
    2. Create a repository interface in `app/Interface/`.
    3. Create a repository implementation in `app/Repositories/`.
    4. Register the binding in `RepositoryServiceProvider.php`.
    5. Create a service class in `app/Services/`.
    6. Inject the interface into the service and use it for data access.

## References

-   See `README.md` for a high-level overview.
-   See `app/Providers/RepositoryServiceProvider.php` for DI bindings.
-   See `app/Services/ProductService.php` for a typical service class using a repository.

---

For any unclear or missing conventions, please ask for clarification or check the latest code in the relevant directories.
