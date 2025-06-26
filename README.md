# Repository Pattern in PHP

The Repository Pattern is a software design pattern that separates the application logic from the underlying data storage layer. It provides an abstraction layer between the application code and the database, making it easier to maintain and test the application.

---

## Core Components

### 1. Repository Interface

-   Defines method signatures for interacting with the database, primarily CRUD operations.
-   Serves as the abstraction layer between the application logic and data storage.
-   Example operations include:
    -   `all`
    -   `find()`
    -   `create()`
    -   `update()`
    -   `delete()`

### 2. Repository Class

-   Implements the Repository Interface.
-   Contains concrete implementations of all the abstract methods.
-   Handles data-specific operations like querying, saving, or deleting records.

### 3. Service Class

-   Uses the Repository Interface to perform business logic operations.
-   Incorporates **Dependency Injection** to inject the Repository Interface, ensuring loose coupling.
-   Focuses on orchestrating business rules while delegating data-related tasks to the Repository.

---

## Benefits of the Repository Pattern

-   **Separation of Concerns:** Keeps business logic and data access logic independent of each other.
-   **Easier Maintenance:** Database or data storage changes require updates only in the Repository Class.
-   **Improved Testability:** Business logic can be tested in isolation by mocking the Repository Interface.

---

## Getting Started

1. **Clone the Repository**
    ```bash
    git clone https://github.com/SaiSoeSan/repository-pattern.git
    cd repository-pattern
    ```
