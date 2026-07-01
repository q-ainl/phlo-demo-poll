# Phlo Poll demo

Standalone demo app for phlo.tech. The finished app from the eight-step learn
tutorial: a realtime poll where every vote pushes live to all connected tabs via
Phlo Realtime.

## Routes
- `GET /` -> the poll (seeds on first load)
- `POST /poll/vote/<id>` (sync and async) -> registers a vote, then casts the new
  results to every open tab
- `GET /monitor` -> a live socket monitor (presence count + connect/disconnect feed)

## Files
- `poll.phlo` -> routes, views, seed, `share()`, the realtime `cast()`
- `app.ws.phlo` -> the WebSocket hooks (connect/receive/close), presence and event feed
- `monitor.phlo` -> the live socket monitor page
- `type.poll.phlo` / `type.presence.phlo` / `type.wslog.phlo` -> JSONDB models
- `poll.style.phlo` -> dark card UI (ns=app)

## Notes
- No database server: the JSONDB driver writes to `data/`.
- Realtime runs in the optional Phlo daemon (Phlo Realtime). `cast()` is guarded, so
  voting keeps working (async, own-tab) even when no daemon is running.
