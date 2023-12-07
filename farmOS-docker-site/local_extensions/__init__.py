import re

import requests
from cookiecutter.utils import simple_filter

REGISTRIES = {
    "Docker Hub": "",
    "GitHub": "ghcr.io/",
}

@simple_filter
def docker_image_prefix(registry: str) -> str:
    """Return the a prefix to be used with all Docker images."""
    return REGISTRIES.get(registry, "")
