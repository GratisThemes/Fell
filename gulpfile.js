const gulp       = require( 'gulp' )
const plumber    = require( 'gulp-plumber' )
const sass       = require( 'gulp-sass' )
const prefix     = require( 'gulp-autoprefixer' )
const wpPot      = require( 'gulp-wp-pot' )
const sort       = require( 'gulp-sort' )
const iconfont   = require( 'gulp-iconfont' )
const zip        = require( 'gulp-zip' )

const info = {
  name:      'Fell',
  slug:      'fell',
  version:   '1.1.5',
  author:    'GratisThemes',
  email:     'gratisthemes@gmail.com',
  bugReport: 'https://github.com/GratisThemes/Fell/issues'
}

// SCSS
gulp.task('scss', () => {
  gulp.src('./scss/*.scss')
    .pipe(plumber())
    .pipe(sass({ outputStyle: 'expanded', includePaths: ['scss'] }))
    .pipe(prefix(['last 30 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true }))
    .pipe(gulp.dest('./'))
})

// Pot
gulp.task('pot', () => {
  gulp.src('./**/*.php')
    .pipe(plumber())
    .pipe(sort())
    .pipe(wpPot({
        domain: info.slug,
        package: info.slug,
        bugReport: info.bugReport,
        lastTranslator: `${info.author} <${info.email}>`,
        team: `${info.author} <${info.email}>`
    }))
    .pipe(gulp.dest(`./languages/${info.slug}.pot`))
})

// Icon font
gulp.task('icon-font', () => {
  gulp.src('./assets/fonts/fell-icon-font/src/icons/*.svg')
    .pipe(plumber())
    .pipe(iconfont({
      fontName: `${info.slug}-icon-font`,
      prependUnicode: true, 
      formats: ['ttf', 'eot', 'woff', 'woff2', 'svg'],
      timestamp: Math.round(Date.now() / 1000),
      normalize: true,
      fontWeight: 'normal',
      fontHeight: 1000,
      fontWidth: 1000
    }))
    .pipe(gulp.dest('./assets/fonts/fell-icon-font'))

  gulp.src('./assets/fonts/fell-icon-font/src/scss/*.scss')
    .pipe(plumber())
    .pipe(sass({ outputStyle: 'expanded', includePaths: ['scss'] }))
    .pipe(prefix(['last 30 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true }))
    .pipe(gulp.dest('./assets/fonts/fell-icon-font'))
})

// Package
gulp.task( 'package', () => {
  gulp.src( [
    './**/*.*',
    '!./.git',
    '!./node_modules/**/*.*',
    '!./releases/**/*.*',
    '!./scss/**/*.*',
    '!./.gitignore',
    '!./gulpfile.js',
    '!./package.json',
    '!./package-lock.json',
    '!./assets/fonts/fell-icon-font/src/**/*.*'
  ], {
    base: '..'
  } ).pipe( zip( `${info.slug}_${info.version}.zip` ) )
     .pipe( gulp.dest( './releases' ) )
} )

// Watch
gulp.task('watch', () => {
  gulp.watch('scss/*.scss', { cwd: './' }, [ 'scss' ])
  gulp.watch('**/*.php',    { cwd: './' }, [ 'pot' ])
})

gulp.task('default', [ 'watch', 'scss', 'pot' ]);