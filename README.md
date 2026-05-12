# AgilePy

**Official website:** [https://agilepy.com/](https://agilepy.com/)

AgilePy is a minimalist Python micro-framework for building clean, server-rendered frontend views with Flask and Jinja2. This repository hosts the source of the project's public website at [agilepy.com](https://agilepy.com/).

---

## Pages

| Page | URL |
|------|-----|
| Home | [https://agilepy.com/](https://agilepy.com/) |
| Documentation | [https://agilepy.com/docs/](https://agilepy.com/docs/) |
| Contribute | [https://agilepy.com/contribute/](https://agilepy.com/contribute/) |
| Donate | [https://agilepy.com/donate/](https://agilepy.com/donate/) |
| Live Demo | [https://agilepy.com/dev/](https://agilepy.com/dev/) |

## About the framework

AgilePy is designed for developers who want:

- A small, fast runtime built on [Flask](https://flask.palletsprojects.com/)
- [Jinja2](https://jinja.palletsprojects.com/) templating out of the box
- Plain functions and modules instead of class-based controllers
- A production-ready deploy story behind Nginx + Gunicorn

Read the full documentation at [https://agilepy.com/docs/](https://agilepy.com/docs/).

## Quick start

```bash
pip install agilepy
```

```python
from agilepy import AgilePy

app = AgilePy(__name__)

@app.route("/")
def home():
    return app.render("home.html", title="AgilePy")

if __name__ == "__main__":
    app.run(debug=True)
```

See the [getting started guide](https://agilepy.com/docs/#installation) for more.

## Project structure

```
/var/www/agilepy.com/
├── index.php              # Home page
├── contribute/            # Contribute page
├── docs/                  # Documentation page
├── donate/                # Donate page
├── dev/                   # Live Flask demo (gunicorn @ :5000)
├── assets/                # Logo, favicons, theme CSS
├── includes/              # Shared head / nav / footer partials
├── sitemap.xml
└── robots.txt
```

## Contribute

We welcome contributions — code, docs, bug reports, or ideas. Start at [https://agilepy.com/contribute/](https://agilepy.com/contribute/) or open a pull request against the [GitHub repository](https://github.com/josuamarcelc/AgilePy).

## Support the project

If AgilePy is useful to you, consider supporting development at [https://agilepy.com/donate/](https://agilepy.com/donate/).

## Links

- Website: [https://agilepy.com/](https://agilepy.com/)
- Documentation: [https://agilepy.com/docs/](https://agilepy.com/docs/)
- GitHub: [https://github.com/josuamarcelc/AgilePy](https://github.com/josuamarcelc/AgilePy)
- Contact: support@agilepy.com

## License

Released under the MIT License. © 2024 – 2026 AgilePy.
