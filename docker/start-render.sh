#!/bin/sh

set -eu

if [ -n "${RENDER_EXTERNAL_URL:-}" ]; then
    sed -i "s#^app.baseURL.*#app.baseURL = '${RENDER_EXTERNAL_URL}/'#" /app/.env
fi

service mariadb start

attempt=0
until mariadb-admin ping --silent; do
    attempt=$((attempt + 1))
    if [ "$attempt" -ge 30 ]; then
        echo "MariaDB did not become ready in time." >&2
        exit 1
    fi
    sleep 1
done

mariadb --user=root < /app/database/saripos.sql

exec php spark serve --host 0.0.0.0 --port "${PORT}"
