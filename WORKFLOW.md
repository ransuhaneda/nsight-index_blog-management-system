# 🚀 Laravel 12 Development Workflow

A comprehensive and efficient development workflow for Laravel 12 projects using
PHP 8.2, Vite 7.1, and pnpm.

## 📋 Prerequisites

Ensure you have the following installed on your system:

- **PHP 8.2+**
- **Composer**
- **Node.js** (v18 or higher)
- **pnpm**
- **Laravel 12**

---

## 🛠️ Installation & Setup

1.  **Install PHP Dependencies:**

    ```bash
    composer install
    ```

2.  **Install JavaScript Dependencies:**
    ```bash
    pnpm install
    ```

---

## 🚀 Development Commands

### Start Development Environment

**Full Development Suite:**

```bash
composer dev
```

Starts all development services:

- server: Laravel development server
- queue: Queue listener with single retry
- logs: Real-time log tailing with pail
- vite: Vite frontend asset compilation (HMR)

### Quick Start (Essentials only):

```bash
composer dev:quick
```

A lightweight alternative that starts only the essential services for faster
initialization.

## 🔍 Code Quality & Testing

### Run Complete Test Suite

```bash
composer test
```

Runs the full battery of quality checks:

- `test:typos`: Spelling and typo detection
- `test:unit`: Unit tests with Pest PHP
- `test:lint`: Code style linting (PHP CS Fixer)
- `test:types`: Static analysis with PHPStan
- `test:refactor`: Refactoring checks with Rector (dry-run)

### Quick Test Cycle

```bash
composer test:quick
```

For a fast feedback loop during active development (excludes slower checks).

### Individual Test Commands

| Command                       | Description                         |
| :---------------------------- | :---------------------------------- |
| `composer test:unit`          | Run only unit tests                 |
| `composer test:lint`          | Check code style (PHP CS Fixer)     |
| `composer test:types`         | Run static analysis (PHPStan)       |
| `composer test:typos`         | Spell checking                      |
| `composer test:refactor`      | Refactoring checks (Rector dry-run) |
| `composer test:unit:coverage` | Run tests with coverage reporting   |

## 🎨 Code Formatting & Fixing

### Automatic Code Fixing

```bash
composer fix
```

Applies all automated fixes:

- PHP type declarations
- Rector refactoring suggestions (dry-run)
- JavaScript formatting
- PHP code style fixes (PHP CS Fixer)

### Apply Refactoring Changes

```bash
composer fix:apply
```

Applies Rector refactoring changes (not a dry-run). **Use with caution**.

### Quick Lint Check

```bash
composer lint:quick
```

Quick code style validation without applying fixes.

## 📊 Analysis & Baseline

### Generate PHPStan Baseline

```bash
composer phpstan-baseline
```

Generates a PHPStan baseline file to ignore existing errors and focus on new
ones.

## Deployment Preparation

```bash
composer deploy:prep
```

Runs the complete test suite, builds production assets, and clears cache for
deployment.
