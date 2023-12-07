### Defensive settings for make:
#     https://tech.davis-hansson.com/p/make/
SHELL:=bash
.ONESHELL:
.SHELLFLAGS:=-xeu -o pipefail -O inherit_errexit -c
.SILENT:
.DELETE_ON_ERROR:
MAKEFLAGS+=--warn-undefined-variables
MAKEFLAGS+=--no-builtin-rules

CURRENT_DIR:=$(shell dirname $(realpath $(lastword $(MAKEFILE_LIST))))

# We like colors
# From: https://coderwall.com/p/izxssa/colored-makefile-for-golang-projects
RED=`tput setaf 1`
GREEN=`tput setaf 2`
RESET=`tput sgr0`
YELLOW=`tput setaf 3`

.PHONY: all
all: build

# Add the following 'help' target to your Makefile
# And add help text after each target name starting with '\#\#'
.PHONY: help
help: ## This help message
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

.PHONY: install
install:  ## Local Install farmOS Release
	docker-compose -f ../devops/stacks/farmos-local-release.yml up -d

.PHONY: install-branch
install-branch:  ## Local Install farmOS Branch
	docker-compose -f ../devops/stacks/farmos-local-branch.yml up -d

.PHONY: install-dev
install-dev:  ## Local Install farmOS Development
	docker-compose -f ../devops/stacks/farmos-local-dev.yml up -d

.PHONY: proxy
proxy:  ## Remote Deploy Traefik
	docker stack deploy -c devops/stacks/traefik-swarm.yml {{ cookiecutter.devops_traefik_stack_name }}

.PHONY: deploy
deploy:  ## Remote Deploy farmOS Production
	docker stack deploy -c devops/stacks/{{ cookiecutter.production_hostname }}.yml {{ cookiecutter.devops_farmos_production_stack_name }}

.PHONY: deploy-branch
deploy-branch:  ## Remote Deploy farmOS Branch Testing
	docker stack deploy -c devops/stacks/{{ cookiecutter.testing_hostname }}.yml {{ cookiecutter.devops_farmos_testing_stack_name }}

.PHONY: deploy-dev
deploy-dev:  ## Remote Deploy farmOS Development
	docker stack deploy -c devops/stacks/{{ cookiecutter.development_hostname }}.yml {{ cookiecutter.devops_farmos_development_stack_name }}
