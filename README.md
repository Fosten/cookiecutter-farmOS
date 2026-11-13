![GitHub](https://img.shields.io/github/license/fosten/cookiecutter-farmOS)

# Cookiecutter farmOS

Welcome to Cookiecutter farmOS! Your one-stop solution to kickstart farmOS projects with ease and efficiency. Powered by [Cookiecutter](https://github.com/cookiecutter/cookiecutter), these templates are designed to save you time and ensure that you get started on the right foot. 🚀

## Features ✨
- Compatible with all farmOS 4.x images!
- Works with Traefik and Docker Swarm Mode!
- Includes GitHub Actions workflows to automate your deployments!

## Getting Started 🏁

### Prerequisites

* [uv](https://docs.astral.sh/uv/): A fast Python package and project manager.

## Installation Guide 🛠️

### Installing uv

If you don't already have uv installed, follow the
[official installation instructions](https://docs.astral.sh/uv/getting-started/installation/).

**macOS / Linux:**

```bash
curl -LsSf https://astral.sh/uv/install.sh | sh
```

### Run Cookiecutter farmOS 🎉

Start the program:

```bash
uvx cookiecutter gh:fosten/cookiecutter-farmOS
```

Cookiecutter will prompt you to select a template:

```
  [1/1] Select a template
    1 - farmOS Site Config
    2 - farmOS Contrib Module
    3 - farmOS Docker Site
```

**Note:** Although optional, it is recommended to generate the following templates before creating your `farmOS Docker Site` so they can be included in your Docker image:
- `farmOS Site Config`
- `farmOS Contrib Module`

## farmOS Cookiecutter Template Options 🛠️

| Template | Description | Documentation |
| --------- | --------- | --------- |
| `farmOS Site Config`  | Creates a new site config to be used with farmOS | [View README](./farmOS-site-config/README.md) |
| `farmOS Contrib Module`  | Creates a new contrib module to be used with farmOS | [View README](./farmOS-contrib-module/README.md) |
| `farmOS Docker Site`  | Creates a farmOS Docker site with Traefik | [View README](./farmOS-docker-site/README.md) |


## Push to Repository
After generating a project from one of the templates, initialize a Git repository and push your project to GitHub:

```bash
git init
git add .
git commit -m "Initial commit"
git branch -M main
git remote add origin git@github.com:your-username/your-project.git
git push -u origin main
```

## License 📜

This project is licensed under the [MIT License](./LICENSE).

## Credits and Acknowledgements 🙏

This project was inspired by:
- [https://github.com/paul121/farm_site_config](https://github.com/paul121/farm_site_config)
- [https://github.com/paul121/farm_contrib_template](https://github.com/paul121/farm_contrib_template)
- [https://github.com/paul121/farmos-docker-site](https://github.com/paul121/farmos-docker-site)
- [https://github.com/plone/cookiecutter-plone](https://github.com/plone/cookiecutter-plone)
- [https://github.com/collective/cookiecutter-plone-starter](https://github.com/collective/cookiecutter-plone-starter)

## Let's Get Building! 🚀

Happy coding!
