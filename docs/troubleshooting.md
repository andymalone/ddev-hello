# 🧯 DDEV Hello – Troubleshooting

## DDEV Not Found

Make sure DDEV is installed:

```bash
brew install drud/ddev/ddev
```

Check version:

```bash
ddev --version
```

---

## Project Not Starting

- Run `ddev restart`
- Check for typos in `.ddev/config.yaml`
- Ensure Docker Desktop is running

---

## Port Conflict

If `ddev start` fails:

```bash
ddev list        # See if another project is using ports
ddev poweroff    # Stop all containers
```

Then restart Docker.

---

## HTTPS Not Working

Sometimes the HTTPS cert takes a few seconds.

- Refresh the browser
- Or try `http://ddev-hello.ddev.site`
- On first launch you may need to accept the self-signed cert
