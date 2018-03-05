var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var prefix = require('gulp-autoprefixer');
var minify = require('gulp-clean-css');
var rename = require('gulp-rename');
var bulkSass = require('gulp-sass-glob-import');

var styleConfig = {
  sassMain: 'sass/style.scss',
  sassFiles: 'sass/**/*.scss',
  cssfiles: ['../css/style.css'],
  dest: '../css',
  autoprefixerOptions: {
    browsers: ['last 2 versions', '> 5%']
  }
};
var bootstrapConfig = {
  sassMain: 'sass/bootstrap.scss',
  sassFiles: 'sass/**/*.scss',
  cssfiles: ['../css/bootstrap.css'],
  dest: '../css',
  autoprefixerOptions: {
    browsers: ['last 2 versions', '> 5%']
  }
};

gulp.task('style', function () {
  return gulp.src(styleConfig.sassMain)
    .pipe(sourcemaps.init())
    .pipe(bulkSass())
    .pipe(sass().on('error', sass.logError))
    .pipe(prefix(styleConfig.autoprefixerOptions.browsers))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(styleConfig.dest))
    //.pipe(rename({ extname: '.min.css' }))
    //.pipe(minify())
    //.pipe(sourcemaps.write())
    //.pipe(gulp.dest(styleConfig.dest))
});
gulp.task('bootstrap', function () {
  return gulp.src(bootstrapConfig.sassMain)
    //.pipe(sourcemaps.init())
    .pipe(bulkSass())
    .pipe(sass().on('error', sass.logError))
    .pipe(prefix(bootstrapConfig.autoprefixerOptions.browsers))
    //.pipe(sourcemaps.write())
    .pipe(gulp.dest(bootstrapConfig.dest))
    .pipe(rename({ extname: '.min.css' }))
    .pipe(minify())
    //.pipe(sourcemaps.write())
    .pipe(gulp.dest(bootstrapConfig.dest))
});

gulp.task('default', function () {
  gulp.watch(styleConfig.sassFiles, ['style']);
  gulp.watch(bootstrapConfig.sassFiles, ['bootstrap']);
});