# Phlo Poll demo

Standalone demo app for phlo.tech. Mirrors the eight-step learn tutorial.

## Routes
- `GET /` -> the poll (seeds on first load)
- `POST /poll/vote/<id>` (both sync and async) -> registers a vote; async returns an `apply()` that swaps `#results`, sync redirects to `/`

## Files
- `poll.phlo` -> routes, views, seed, share()
- `type.poll.phlo` -> JSONDB model (`data/poll.json`)
- `poll.style.phlo` -> dark card UI (ns=app)

## Notes
- No database server: JSONDB writes `data/poll.json`.
- Realtime is intentionally NOT included here; that is the websocket demo.
