[![Built with Cookiecutter](https://img.shields.io/badge/built%20with-Cookiecutter-ff69b4.svg?logo=cookiecutter)](https://github.com/fosten/cookiecutter-farmOS/)
![GitHub](https://img.shields.io/github/license/fosten/cookiecutter-farmOS)

# Cookiecutter farmOS Module

Powered by [Cookiecutter](https://github.com/cookiecutter/cookiecutter), [Cookiecutter farmOS Docker Site](https://github.com/fosten/cookiecutter-farmOS/farmOS-docker-site) is intended to be used by farmOS developers to create farmOS docker sites based on custom images.

## Getting Started 🏁

### Prerequisites

- **pipx**: A handy tool for installing and running Python applications.
- **Docker**: For containerization and easy deployment.

### Installation Guide 🛠️

1. **pipx**

```shell
pip install pipx
```

2. **Docker**

Visit the [official documentation](https://docs.docker.com/get-docker/) for installation guides.

### Generate Your farmOS Project 🎉

```shell
pipx run cookiecutter gh:collective/cookiecutter-farmos
```
Then select the `farmOS Docker Site` template.

Note: While not required, you will likely want to run these cookiecutter templates first:
- `farmOS Site Config`
- `farmOS Contrib Module`
so they can be included in your `farmOS Docker Site` image.

## Project Generation Options 🛠️

Every project is unique, and we provide a variety of options to ensure that your farmOS project aligns with your specific needs. Here are the options you can customize during the generation process:

| Option                | Description                                                                                                                                          | Example                       |
| --------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------- |
| `project_title`       | Your project's human-readable name, capitals and spaces allowed.                                                                                     | **farmOS Site**                |
| `description`         | Describes your project and gets used in places like ``README.md`` and such.                                                                          | **New site for our company.** |
| `project_slug`        | Your project's slug without spaces. Used to name your repository and Docker images.                                                                  | **farmos-site**                |
| `production_hostname`            | Hostname where the project will be deployed.                                                                                                         | **farmos.example.com**            |
| `testing_hostname`            | Hostname where the project will be deployed.                                                                                                         | **farmtest.example.com**            |
| `development_hostname`            | Hostname where the project will be deployed.                                                                                                         | **farmdev.example.com**            |
| `author`              | This is you! The value goes into places like ``LICENSE``, ``setup.py`` and such.                                                                     | **Our Company**               |
| `email`               | The email address you want to identify yourself in the project.                                                                                      | **email@example.com**         |
| `farmos_release_version`      | farmOS version to be used. This queries for the latest available farmOS version and presents it to you as the default value.                         | **3.0.0-beta2**                     |
| `farmos_branch_version`      | farmOS version to be used. This queries for the latest available farmOS version and presents it to you as the default value.                         | **3.x**                     |
| `farm_site_config_name`               | The email address you want to identify yourself in the project.                                                                                      | **farm_site_config**         |
| `farm_contrib_module_name`               | The email address you want to identify yourself in the project.                                                                                      | **farm_contrib_module**         |
| `github_organization` | Used for GitHub and Docker repositories.                                                                                                             | **farmOS**                |
| `container_registry`  | Container registry to be used.                                                                                                                       | **GitHub**                    |
| `devops_traefik_node_label`   | The label of the Docker Swarm node running Traefik                                                                                             | **traefikapp**                       |
| `devops_farmos_node_label`   | The label of the Docker Swarm node running farmOS                                                                                             | **farmosapp**                       |
| `devops_traefik_stack_name`   | The Docker Swarm stack name running Traefik                                                                                             | **traefik**                       |
| `devops_farmos_production_stack_name`   | The Docker Swarm stack name running farmOS Production                                                                                            | **{{ cookiecutter.hostname|slugify }}**                       |
| `devops_farmos_testing_stack_name`   | The Docker Swarm stack name running farmOS Testing                                                                                             | **{{ cookiecutter.testing_hostname|slugify }}**                       |
| `devops_farmos_development_stack_name`   | The Docker Swarm stack name node running farmOS Development                                                                                             | **{{ cookiecutter.development_hostname|slugify }}**                       |
| `devops_traefik_public_network`   | The Docker network running Traefik                                                                                             | **traefik-public**                       |
| `devops_farmos_private_network`   | The Docker Swarm network running farmOS                                                                                             | **farmos-private**                       |


## License 📜

This project is licensed under the [MIT License](/LICENSE).

## Let's Get Building! 🚀

Happy coding!
