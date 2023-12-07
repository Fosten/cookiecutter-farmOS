from textwrap import dedent

SUCCESS = "\x1b[1;32m"
TERMINATOR = "\x1b[0m"
MSG_DELIMITER = "=" * 80
MSG_DELIMITER_2 = "-" * 80

def _success(msg: str) -> str:
    """Format success message."""
    return f"{SUCCESS}{msg}{TERMINATOR}"

def main():
    """Final fixes."""
    print(f"{MSG_DELIMITER}")
    msg = dedent(
        f"""
        {_success('Project "{{ cookiecutter.project_title }}" was generated')}
        {MSG_DELIMITER_2}
        Now, code it, create a git repository, push to your organization.

        Sorry for the convenience,
        The farmOS Community.
    """
    )
    print(msg)
    print(f"{MSG_DELIMITER}")


if __name__ == "__main__":
    main()
