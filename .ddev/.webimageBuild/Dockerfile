
#ddev-generated - Do not modify this file; your modifications will be overwritten.
ARG BASE_IMAGE="scratch"

### DDEV-injected base Dockerfile contents
FROM $BASE_IMAGE
SHELL ["/bin/bash", "-c"]

ARG TARGETPLATFORM
ARG TARGETARCH
ARG TARGETOS
ARG username
ARG uid
ARG gid
ARG DDEV_PHP_VERSION
ARG DDEV_DATABASE
RUN getent group tty || groupadd tty
RUN (groupadd --gid $gid "$username" || groupadd "$username" || true) && (useradd -G tty -l -m -s "/bin/bash" --gid "$username" --comment '' --uid $uid "$username" || useradd -G tty -l -m -s "/bin/bash" --gid "$username" --comment '' "$username" || useradd  -G tty -l -m -s "/bin/bash" --gid "$gid" --comment '' "$username" || useradd -G tty -l -m -s "/bin/bash" --comment '' $username )

### DDEV-injected extra content

RUN mkdir -p /home/$username && chown $username /home/$username && chmod 600 /home/$username/.pgpass
ENV NVM_DIR=/home/$username/.nvm
RUN START_SCRIPT_TIMEOUT=30 mariadb-client-install.sh || true


### DDEV-injected composer update
RUN export XDEBUG_MODE=off; composer self-update --stable || composer self-update --stable || true; composer self-update --2 || log-stderr.sh composer self-update --2 || true

### DDEV-injected folders permission fix
RUN chmod 777 /run/php /var/log
RUN mkdir -p /tmp/xhprof && chmod -R ugo+w /etc/php /var/lib/php /tmp/xhprof
