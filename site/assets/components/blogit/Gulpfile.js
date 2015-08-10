// npm install gulp gulp-util gulp-sass gulp-uglify gulp-rename gulp-minify-css gulp-notify gulp-concat node-bourbon node-neat gulp-plumber browser-sync --save-dev

var gulp = require('gulp');  
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var notify = require('gulp-notify');
var minifycss = require('gulp-minify-css');
var concat = require('gulp-concat');
var bourbon = require('node-bourbon');
var neat = require('node-neat').includePaths;
var plumber = require('gulp-plumber');

var paths = {
    scss: './sass/*.scss'
};

gulp.task('scripts', function() {
  return gulp.src([
    'js/vendor/jquery-1.11.1.js',
    'js/vendor/jquery.fitvids.js',
    'js/main.js'
    ])
    .pipe(concat('main.js'))
    .pipe(gulp.dest('production'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('production'));
});

gulp.task('sass', function () {  
    gulp.src('scss/style.scss')
    .pipe(plumber())
    .pipe(sass({
    	includePaths: ['scss'].concat(neat)
    }))
    .pipe(gulp.dest('production'))
    .pipe(rename({suffix: '.min'}))
    .pipe(minifycss())
    .pipe(gulp.dest('production'));
});

gulp.task('default', ['sass'], function () {
    gulp.watch(['scss/*.scss', 'scss/**/*.scss'], ['sass'])
    gulp.watch(['js/main.js'], ['scripts']);
});