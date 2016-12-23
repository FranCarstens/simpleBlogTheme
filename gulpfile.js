'use strict';
var gulp = require('gulp'),
	sass = require('gulp-sass'),
	sourcemaps = require('gulp-sourcemaps'),
	autoprefixer = require('gulp-autoprefixer'),
	sassGlobbing = require('node-sass-globbing'),
	plumber = require('gulp-plumber'),
	browserSync = require('browser-sync'),
	cssmin = require('gulp-cssmin')

var sass_config = {
	importer: sassGlobbing,
	includePaths: [
	'node_modules/breakpoint-sass/stylesheets/',
	'node_modules/compass-mixins/lib/',
	'node_modules/singularitygs/stylesheets/'
	// 'node_modules/singularity-extras/stylesheets/'
	]
}

gulp.task('browser-sync', function() {
    browserSync.init({
        injectChanges: true,
        // proxy: "http://loktah.dv"
    });
    gulp.watch("./sass/**/*.scss", ['sass']);
    gulp.watch("./css/**/*.css").on('change', browserSync.reload);
    gulp.watch("./js/**/*.js", ['uglify']).on('change', browserSync.reload);
});

gulp.task('sass', function () {
  gulp.src('./sass/**/*.scss')
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass(sass_config).on('error', sass.logError))
    .pipe(autoprefixer(['last 10 versions', '> 1%']))
    .pipe(sourcemaps.write('.'))
    .pipe(cssmin())
    .pipe(gulp.dest('./css'));
});

gulp.task('default', [ 'browser-sync']);

// watch = require('gulp-watch'),
// unCss = require('gulp-uncss'),
// stripCssComments = require('gulp-strip-css-comments),