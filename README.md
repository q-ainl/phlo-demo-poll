# phlo-demo-poll

A tiny realtime-ready poll, built with [Phlo](https://phlo.tech). This is the
finished app from the [eight-step Phlo Poll tutorial](https://phlo.tech/learn):
one route serves both a plain browser (POST, redirect, GET) and the Phlo
frontend (async `apply()` DOM updates), so voting updates the bars without a
reload and without a line of hand-written JavaScript.

It uses the JSON file driver (`%JSONDB`), so there is no database to set up.

## Run

```bash
git clone https://github.com/q-ainl/phlo-demo-poll.git
docker run -p 80:80 -v $(pwd)/phlo-demo-poll:/app ghcr.io/q-ainl/phlo
# open http://localhost
```

Or point any FrankenPHP / PHP host at `www/app.php` (it sets `host:` to
the host set in `www/app.php`; change it to your own).

The poll seeds itself on first load and stores votes in `data/poll.json`.

## Stepped on purpose

This is the poll **without** the realtime step: it works fully as an async
poll, no WebSocket configuration required. To make votes push live to every
open tab, see **[phlo-demo-websocket](https://github.com/q-ainl/phlo-demo-websocket)**
and the [Phlo Realtime guide](https://phlo.tech/websocket), which pick up exactly this
app and add the realtime layer.

## License

MIT.
