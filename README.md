# Tonik — Wordpress Theme Boilerplate

> The `develop` branch tracks boilerplate development and it's not a stable code. If you want a stable version, use the [`master`](//github.com/tonik/wordpress-theme-boilerplate/tree/master) branch or one of the latest [releases](//github.com/tonik/wordpress-theme-boilerplate/releases).

### Boilerplate aims to be compatible with a large range of PHP versions, however, still have modern tooling for developing a theme.

 What's inside?

- [Gulp](//gulpjs.com/) - Task runner
- [SASS](//sass-lang.com/) - a CSS preprocessor
- [Babel](//babeljs.io/) - JavaScript ES6 to ES5 compiler
- [Rollup](//rollupjs.org/) - a JavaScript Modules Bundler
- [Stylelint](//stylelint.io/) - a SCSS linter
- [ESLint](//eslint.org/) - a JavaScript linter
- [PHP_CodeSniffer](//github.com/squizlabs/PHP_CodeSniffer) - a PHP sniffer

The front-end builder was borrowed from our [html-frontend-boilerplate](https://github.com/tonik/html-frontend-boilerplate) project.

### Requirements

Boilerplate follows a [WordPress minimal requirements](https://wordpress.org/about/requirements/). Make sure you have these dependences installed before moving on:
- PHP >= 5.2.4

Theme uses [NPM](//www.npmjs.com/) as a front-end dependency manager. Make sure your development machine has installed following dependencies:
- [Node.js](//nodejs.org/)
- [NPM](//www.npmjs.com/)

## Installation

WordPress themes lives in the `wp-content/themes` folder. This is where we have to fetch our fresh starter files.

```bash
# Go to the `themes` directory of your WordPress installation.
$ cd wp-content/themes
```

Create project via `composer create-project` composer command.

```bash
$ composer create-project tonik/wordpress-theme-boilerplate <theme-name>
```

You can also directly download or clone the repository to the `wp-content/themes` directory.

```bash
# Clone repository to the <theme-name> folder.
$ git clone -b master git@github.com:tonik/wordpress-theme-boilerplate.git <theme-name>
```

## Development

A [Gulp](https://gulpjs.com/) task runner is used to compile and optimize theme's scripts, stylesheets, and images.

#### Resolving front-end dependencies

Before being able to build theme you have to resolve required dependencies.

```bash
# @ wp-content/themes/<theme-name>

# Install node dependencies.
$ npm install
```

Now you have all the packages necessary to run the build process and start developing your theme.

#### Building a Theme

There are a few available commands which help you to build the theme for different environments:

```bash
# @ wp-content/themes/<theme-name>

# Compiles unminified and unoptimized theme assets with source maps.
$ npm run development

# Alias for `development` command.
$ npm run dev

# Compiles minified and optimized theme assets without source maps.
$ npm run production

# Alias for `production` command.
$ npm run prod

# Builds assets for development, runs watcher (recompiles on change)
# and BroswerSync (refreshes browser).
$ npm run watch
```

## Contributing

Great that you are considering supporting the project. You have a lot of ways to help us grow. We appreciate all contributions, even the smallest.

- Report an issue
- Propose a feature
- Send a pull request
- Star project on the [GitHub](https://github.com/tonik/wordpress-theme-boilerplate)
- Tell about project around your community

## License

The Tonik WordPress Theme Boilerplate is licensed under the [MIT license](http://opensource.org/licenses/MIT).
