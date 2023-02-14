
tmux \
    new-session  'php artisan serve' \; \
    split-window 'local-ssl-proxy --hostname 127.0.0.1 --source 8010 --target 8000 --cert localhost.pem --key localhost-key.pem' \; \
    detach-client
tmux a
