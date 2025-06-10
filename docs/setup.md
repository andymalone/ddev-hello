# 🛠️ DDEV Hello – Setup Notes

## Requirements

- macOS with [Homebrew](https://brew.sh/)
- [Docker Desktop](https://www.docker.com/products/docker-desktop/)
- [DDEV](https://ddev.readthedocs.io/)

---

## Install DDEV

```bash
brew install drud/ddev/ddev
```

---

## Start the Project

In the project root:

```bash
ddev start
```

Visit `https://ddev-hello.ddev.site` in your browser.

---

## Notes

- `.ddev/config.yaml` defines the PHP version, routing, and services.
- You can stop the container with `ddev stop`
- To stop all DDEV projects at once: `ddev poweroff`
