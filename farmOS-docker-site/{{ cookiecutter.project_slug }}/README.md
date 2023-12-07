[![Built with Cookiecutter](https://img.shields.io/badge/built%20with-Cookiecutter-ff69b4.svg?logo=cookiecutter)](https://github.com/fosten/cookiecutter-farmOS/)

# {{ cookiecutter.project_title }}
{{ cookiecutter.description }}

## Quick Start 🏁

### Prerequisites ✅

Ensure you have the following installed:

- git
- Docker 🐳

### Clone The Repository

```shell
git clone git@github.com:{{ cookiecutter.github_organization }}/{{ cookiecutter.project_slug }}.git

```

### Local Installation Options 🔧

Choose any of the following installation methods: release, branch, or dev.

Note: You will have to run the relevant build workflows at GHA before you can pull the image.

This allows you to install the image locally without Docker Swarm.

```shell
cd {{ cookiecutter.project_slug }}/farmOS
make install
make install-branch
make install-dev
```

## Automated Deployments

### Deployment via command line 🔥

This assumes you have Docker running in Swarm Mode and have added appropriate node labels.

```shell
make proxy
make deploy
make deploy-branch
make deploy-dev
```

### Deployment via CI/CD 🔧

This allows you to deploy directly to a Docker Swarm from Github Actions.

#### Configure Github Settings
- Manage permissions for GITHUB_TOKEN (For Github Container Registry)
  - Go to https://github.com/{{ cookiecutter.github_organization }}/{{ cookiecutter.project_slug }}/settings/actions
  - Change Workflow permissions to "Read and write permissions"
  - Click save.

- Setup Github Secrets & Variables
  - DOCKERHUB_USERNAME (for Docker Hub Container Registry)
  - DOCKERHUB_TOKEN (for Docker Hub Container Registry)
  - DEPLOY_SSH
  - ENV_FILE
    - PROD_DB_NAME
    - PROD_DB_USER
    - TEST_DB_NAME
    - TEST_DB_USER
    - DEV_DB_NAME
    - DEV_DB_USER
    - DB_HOST
    - DB_PASSWORD
    - DB_PORT
    - ACME_EMAIL (if you're using LetsEncrypt SSL Certs)
    - LINODE_TOKEN (if you're using Linode DNS Challenges)

- Setup Github Variables
  - DEPLOY_HOST
  - DEPLOY_USER
  - DEPLOY_PORT

#### Build and Deploy via Github Actions Workflows
Included are various GHA workflows using different triggers for various purposes (You can always add more!):

##### Build farmOS images for Local Development
- workflow_dispatch = Manually Trigger Workflows from GHA
  - build-farmos-dev = Builds a custom {{ cookiecutter.farmos_branch_version }}-dev image for local development
  - build-farmos-branch = Builds a custom {{ cookiecutter.farmos_branch_version }} image for testing of the default_branch
  - build-farmos-release = Builds a custom {{ cookiecutter.farmos_release_version }} image for production

##### Deploy Traefik Reverse Proxy to Remote Server
- workflow_dispatch = Manually Trigger Workflows from GHA
  - deploy-traefik = Deploys Traefik to Docker Swarm

##### Deploy farmOS to Remote Server
- push = Push a commit with changes to any file in the farmOS directory
  - deploy-farmos-dev = Builds & deploys a custom {{ cookiecutter.farmos_branch_version }} image for local development

- nightly = Builds and deploys against the latest {{ cookiecutter.farmos_branch_version }} release
  - deploy-farmos-branch-testing = Builds & deploys a custom {{ cookiecutter.farmos_branch_version }} image for testing of the default_branch

- tags = Tag a release of {{ cookiecutter.project_slug }}
  - deploy-farmos-release-live = Builds & deploys a custom {{ cookiecutter.farmos_release_version }} image for production

##### Re-deploy farmOS to Remote Server

- workflow_dispatch = Manually Trigger Workflows from GHA
  - redeploy-farmos-dev = Redeploys a custom {{ cookiecutter.farmos_branch_version }} image (without rebuild) for development
  - redeploy-farmos-branch-testing = Redeploys a custom {{ cookiecutter.farmos_branch_version }} image (without rebuild) for testing
  - redeploy-farmos-release-live = Redeploys a custom {{ cookiecutter.farmos_release_version }} image (without rebuild) for production

Voila! Your farmOS site(s) should be live and kicking! 🎉

## Post-deployment Tasks
After the images are deployed and containers are running, you can proceed with the following tasks.

### Install New farmOS & Modules
Complete the web UI installation or install via command line
```shell
 drush site-install --db-url=YOURINFO farm farm.modules=‘default’
```

### Install Against Pre-existing farmOS & Modules
If you are deploying these images against a previous farmOS database:
- Copy your previous web/sites/default folder into the container directory /opt/drupal.
- If you have any modules to migrate, commit them into your project repository at web/sites/all.
- Update your database
```shell
docker exec -it <YOUR IMAGE NAME> bash
drush updb
drush cr
exit
```

### Enable New Modules for Either Installation
Modules installed via composer can be enabled via the UI or command line.
```shell
docker exec -it <YOUR IMAGE NAME> bash
drush en {{ cookiecutter.farm_site_config_name }}
drush en {{ cookiecutter.farm_contrib_module_name }}
exit
```

### Postgres Database Configuration
If you are creating a new postgres database, grant the proper permissions for each database:
```shell
CREATE DATABASE dev_farm;
GRANT CONNECT ON DATABASE dev_farm TO devfarm;
GRANT CREATE ON DATABASE dev_farm TO devfarm;
ALTER DATABASE "dev_farm" SET bytea_output = 'escape';
\quit
```

## Project Structure 🏗️

This monorepo consists of two distinct sections: `farmos`, and `devops`.

- **farmos**: Houses the API and farmOS installation.
- **devops**: Encompasses Docker Stack.

### Why This Structure? 🤔

- All necessary codebases to run the site are contained within the repo (excluding contrib modules for farmOS).
- Specific GitHub Workflows are triggered based on changes in each codebase (refer to .github/workflows).
- Simplifies the creation of Docker images for each codebase.

## What Modules Does This Project Include?
- {{ cookiecutter.github_organization }}/farm_contrib_module - Boilerplate farmOS module ready for you to start coding!
- {{ cookiecutter.github_organization }}/farm_site_config - A collection of .yml files for repeatable site settings!

## Credits and Acknowledgements 🙏

**{{ cookiecutter.__generator_signature }}**. A special thanks to all contributors and supporters!
