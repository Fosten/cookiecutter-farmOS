[![Built with Cookiecutter](https://img.shields.io/badge/built%20with-Cookiecutter-ff69b4.svg?logo=cookiecutter)](https://github.com/fosten/cookiecutter-farmOS/)
![GitHub](https://img.shields.io/github/license/fosten/cookiecutter-farmOS)

# Cookiecutter farmOS Site Config

Powered by [Cookiecutter](https://github.com/cookiecutter/cookiecutter), [Cookiecutter farmOS Site Config](https://github.com/fosten/cookiecutter-farmOS/farmOS-site-config) is intended to be used by farmOS developers to create new site configuration modules.

## Getting Started 🏁

### Prerequisites

- **pipx**: A handy tool for installing and running Python applications.

### Installation Guide 🛠️

1. **pipx**

```shell
pip install pipx
```
### Generate Your farmOS Site Config Module 🎉

```shell
pipx run cookiecutter gh:fosten/cookiecutter-farmOS
```
Then select the `farmOS Site Config` template.

## Project Generation Options

These are all the template options that will be prompted by the [Cookiecutter CLI](https://github.com/cookiecutter/cookiecutter) before generating your project.

| Option                | Description                                                                                                                                          | Example                       |
| --------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------- |
| `project_title`  | Your modules's human-readable name, capitals and spaces allowed.                                                                                     | **farmOS module**                |
| `description`         | Describes your addon and gets used in places like ``README.md`` and such.                                                                          | **An awesome farmOS module.** |
| `project_slug`        | Your project's slug without spaces. Used to name your repository and Docker images.                                                                  | **farmos-module**                |
| `author`              | This is you! The value goes into places like ``LICENSE``, ``setup.py`` and such.                                                                     | **Our Company**               |
| `email`               | The email address you want to identify yourself in the project.                                                                                      | **email@example.com**         |
| `github_organization` | Used for GitHub and Docker repositories.                                                                                                             | **farmOS**                |

## Code Quality Assurance 🧐

Your package comes equipped with PHP CodeSniffer and PHPUnit tests to ensure code quality. Trigger the GitHub Action workflows automatically format your code.

## License 📜

This project is licensed under the [MIT License](/LICENSE).

## Let's Get Building! 🚀

Happy coding!
