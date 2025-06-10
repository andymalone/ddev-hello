# 🚀 Deployment Overview

This project is for local development only, but here’s how you *could* extend 
it for deployment.

---

## Manual Deploy (for simple remote server)

```bash
scp index.php user@your-server:/var/www/html/
```

---

## CI/CD Example (GitHub Actions)

You could use GitHub Actions to:

- Lint the PHP
- Run any tests
- Deploy via rsync/SFTP/SSH

Sample `.github/workflows/deploy.yml`:

```yaml
name: Deploy

on:
  push:
    branches:
      - main

jobs:
  deploy:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v4
      - name: Deploy over SSH
        uses: appleboy/scp-action@v0.1.3
        with:
          host: ${{ secrets.HOST }}
          username: ${{ secrets.USER }}
          key: ${{ secrets.SSH_KEY }}
          source: "index.php"
          target: "/var/www/html/"
```

---

## Deployment Notes

- Add SSH key to your server beforehand
- Use `.env` or GitHub Secrets for credentials
