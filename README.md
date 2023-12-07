![GitHub](https://img.shields.io/github/license/fosten/cookiecutter-farmOS)

# Cookiecutter farmOS

Welcome to Cookiecutter farmOS! Your one-stop solution to kickstart farmOS projects with ease and efficiency. Powered by [Cookiecutter](https://github.com/cookiecutter/cookiecutter), these templates are designed to save you time and ensure that you get started on the right foot. 🚀

## Features ✨
- Compatible with all farmOS 3.x images!
- Works with Traefik and Docker Swarm Mode!
- Includes GHA Workflows to automate your deployments!

## Getting Started 🏁

### Prerequisites

- **pipx**: A handy tool for installing and running Python applications.

### Installation Guide 🛠️

**pipx**

```shell
pip install pipx
```

### Run cookiecutter farmOS 🎉

Start the program:

```shell
pipx run cookiecutter gh:fosten/cookiecutter-farmOS
```

And choose a template:
```
  [1/1] Select a template
    1 - farmOS Site Config
    2 - farmOS Contrib Module
    3 - farmOS Docker Site
```

Note: While not required, you will likely want to run these cookiecutter templates first:
- `farmOS Site Config`
- `farmOS Contrib Module`

so they can be included in your `farmOS Docker Site` image.


## farmOS Cookiecutter Template Options 🛠️

| Template | Description |  |
| --------- | --------- | --------- |
| `farmOS Site Config`  | Creates a new site config to be used with farmOS | [Read More](./farmOS-site-config/README.md) |
| `farmOS Contrib Module`  | Creates a new contrib module to be used with farmOS | [Read More](./farmOS-contrib-module/README.md) |
| `farmOS Docker Site`  | Creates a farmOS docker site with Traefik | [Read More](./farmOS-docker-site/README.md) |


## Push to repository
After generating a new project from one of the templates, you can commit this project to a repository.
```shell
git init
git add .
git commit -m "Initial commit"
git branch -M main
git remote add origin git@github.com:your-username/your-project.git
git push -u origin main
```

## License 📜

This project is licensed under the [MIT License](/LICENSE).

## Credits and Acknowledgements 🙏

This project was inspired by:
- [https://github.com/paul121/farm_site_config](https://github.com/paul121/farm_site_config)
- [https://github.com/paul121/farm_contrib_template](https://github.com/paul121/farm_contrib_template)
- [https://github.com/paul121/farmos-docker-site](https://github.com/paul121/farmos-docker-site)
- [https://github.com/plone/cookiecutter-plone](https://github.com/plone/cookiecutter-plone)
- [https://github.com/collective/cookiecutter-plone-starter](https://github.com/collective/cookiecutter-plone-starter)

## Let's Get Building! 🚀

Happy coding!
