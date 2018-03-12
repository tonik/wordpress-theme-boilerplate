# Tonik Wordpress Boilerplate

[![](https://tonik.pl/assets/logo.svg)](https://tonik.pl/)

We made this boilerplate to make our internal Wordpress sites development easier and our repositories unified. This one is hybrid of our very own Html-boilerplate with Wordpress theme features. What's inside?

### FRONT:

  - .eslint / .stylelint -> to make our repos unified
  - Husky -> to keep an eye if you stick to the guidlines
  - ES6 ready rollup bundler with babel
 
### WORDPRESS:

- basic WP structure that include footer.php, header.php, index.php, search.php, sidebar.php
- basic generic function that let you forgot about doing the same at the beginning of each project:
-   - already registered navigations (top and bottom)
-   - sample custom post type created
-   - scripts and styles registered
-   - set thumbnails and added theme support for them
-  folder structure for your project, which may help you organize everything better
-  every partials file include short comment at the top of them, to let you understand what's going on inside. 
-  if you will want to expand this components - we included helpful link to make it easier to catch up.

### Installation

Install the dependencies and devDependencies and start the server.

```sh
$ npm install
$ npm run dev
$ npm run watch
```

For production environments...

```sh
$ npm prod
```
