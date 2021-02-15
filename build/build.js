const gulp = require('gulp')
const message = require('./lib/message')

const browsersync = require('browser-sync').create()
const reload = browsersync.reload

// Tasks are using `NODE_ENV` variable to adjust its settings
// to working enviourment. It is required to propertly
// run tasks so we cant process without it.
if (!process.env.NODE_ENV) {
  throw new Error('Please setup environment variable [NODE_ENV] before building.')
}

/*
|--------------------------------------------------------------------------
| SASS Tasks
|--------------------------------------------------------------------------
*/
gulp.task('sass:clean', (cb) => {require('./tasks/sass/clean') ( cb() )} )
gulp.task('sass:lint', (cb) => {require('./tasks/sass/lint') ( cb() )} )
gulp.task('sass:build', (cb) => {require('./tasks/sass/build') ( cb() )} )

/*
|--------------------------------------------------------------------------
| Fonts Tasks
|--------------------------------------------------------------------------
*/
ulp.task('font:clean', (cb) => {require('./tasks/font/clean') ( cb() )} )
gulp.task('font:build', (cb) => {require('./tasks/font/build') ( cb() )} )

/*
|--------------------------------------------------------------------------
| Images Tasks
|--------------------------------------------------------------------------
*/
gulp.task('image:clean', (cb) => { require('./tasks/image/clean') ( cb() )} )
gulp.task('image:build', (cb) => { require('./tasks/image/build') ( cb() )} )

/*
|--------------------------------------------------------------------------
| JavaScript Tasks
|--------------------------------------------------------------------------
*/
gulp.task('javascript:clean', (cb) => {require('./tasks/javascript/clean')(cb())});
gulp.task('javascript:lint', (cb) => {require('./tasks/javascript/lint')(cb())});
gulp.task('javascript:build', gulp.series(['javascript:clean']), (cb) => {require('./tasks/javascript/build')(cb())});

/*
|--------------------------------------------------------------------------
| Domain Tasks
|--------------------------------------------------------------------------
|
| A domain specific tasks for each part of the building process.
| They compose a complete building pipline for each domain.
|
*/
gulp.task('font', gulp.series(['font:clean', 'font:build']))
gulp.task('image', gulp.series(['image:clean', 'image:build']))
gulp.task('sass', gulp.series(['sass:clean', 'sass:lint', 'sass:build']))
gulp.task('javascript', gulp.series(['javascript:clean', 'javascript:lint', 'javascript:build']))

/*
|--------------------------------------------------------------------------
| Synchornize Browser Tasks
|--------------------------------------------------------------------------
|
| Bootstraps a BrowserSync and starts a localhost development. Compiled
| files are outputted into `public` directory, so we are
| telling BrowserSync to to use it as a base.
|
*/
gulp.task('sync', () => {
  browsersync.init({
    open: false,
    server: { baseDir: '../public' }
  })
})

/*
|--------------------------------------------------------------------------
| Watching Tasks
|--------------------------------------------------------------------------
|
| Here is a collection of watching tasks. They look for the files
| changes and runs building tasks. We're watching each domain
| and recompiling separetly for better performance.
|
*/
gulp.task('watch', ['sync'], (cb) => {
  gulp.watch('../resources/assets/sass/**/*.scss', ['sass', reload])
    .on('error', message.error('WATCH: Sass'))

  gulp.watch('../resources/assets/js/**/*.js', ['javascript', reload])
    .on('error', message.error('WATCH: Javascript'))

  gulp.watch('../resources/assets/fonts/**/*.{eot,woff,woff2,ttf,svg}', ['font', reload])
    .on('error', message.error('WATCH: Fonts'))

  gulp.watch('../resources/assets/images/**/*.{jpg,jpeg,png,gif,svg}', ['image', reload])
    .on('error', message.error('WATCH: Images'))

  cb()
})

/*
|--------------------------------------------------------------------------
| Default Task
|--------------------------------------------------------------------------
|
| A default task is being called when you run `gulp` without any task
| specified. As you can see, we are running here all domains
| tasks and completely building the whole project.
|
*/
gulp.task('default', gulp.series(['sass', 'javascript', 'font', 'image']))
