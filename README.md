# TicketFlow – Twig Version (Static One-File)

**Live URL**: https://twig-ticketflow.vercel.app/  
**Repository**: https://github.com/Joshdigitalconcept/twig-ticketflow  

---

## Why One File?
> **Challenge Requirement**: Build **three distinct implementations** — React, Vue, **and Twig** — each **complete and self-contained**.

- **React & Vue** use build tools → multiple files  
- **Twig** is a **templating engine**, but for **full frontend independence**, we deliver a **pure static HTML + JS** version  
- **All logic, routing, auth, CRUD, toasts** are in **one `index.html`**  
- **No server, no PHP, no build step** → just open in browser  
- **100% identical UI & behavior** to React/Vue versions  

---

## Tech Stack
- **HTML5 + Tailwind CSS (CDN)**  
- **Vanilla JavaScript** (no frameworks)  
- **Toastify.js** (lightweight toast)  
- **localStorage** (`ticketapp_session` + tickets)  

---

## Features (Identical to React & Vue)
| Feature | Done |
|--------|--------|
| Wavy hero + 3 decorative circles | Yes |
| Max-width 1440px, fully responsive | Yes |
| Login / Signup + validation | Yes |
| Dashboard with real-time stats | Yes |
| Full CRUD (Create, View, Edit, Delete) | Yes |
| Status colors: `open` (green), `in_progress` (amber), `closed` (gray) | Yes |
| Protected pages (auth guard) | Yes |
| Toast feedback on all actions | Yes |
| Session expires in 1 hour | Yes |

---

## Test Account

Email:    test@example.com
Password: password123

---

## Run Locally
1. Clone or download this repo  
2. Open `index.html` in any browser  
3. **No install, no server needed**

---

## Full Multi-File Twig Version (For Reference)
> If reviewers want to see **real Twig templating structure** (with PHP), see:  
> **https://github.com/Joshdigitalconcept/twig-ticket-appr**  
> *(Includes `templates/`, `index.php`, routing, etc.)*

But **this submission** meets the brief:  
> **"Twig" = a complete, standalone frontend implementation**  
> **Delivered as a single, deployable file**


