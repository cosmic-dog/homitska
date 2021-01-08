let gulp = require('gulp'),
    order = require('gulp-order'),
    sass = require('gulp-sass'),
    cleanCSS = require('gulp-clean-css'),
    smap = require('gulp-sourcemaps'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify-es').default;

    
const { logError } = require('gulp-sass');

gulp.task('sass', function(cb) {
    gulp
        .src('scss/*.scss')
        .pipe(order())
        .pipe(smap.init())
        .pipe(sass())
        .pipe(cleanCSS())
        .pipe(smap.write('.'))
        .pipe(
            gulp.dest(function(f) {
                //return f.base;
                return 'assets/css/'
            })
        );
    cb();
});

gulp.task('js', function(cb) {
    gulp
        .src('js/*.js')
        .pipe(order())
        .pipe(concat('main.js'))
        .pipe(uglify())
        .pipe(
            gulp.dest(function(f) {
                return 'assets/js/'
            })
        );
    cb();
});

gulp.task('default',
    gulp.series(['sass', 'js'], function(cb) {
        gulp.watch('scss/**/*.scss', gulp.series('sass'));
        gulp.watch('js/**/*.js', gulp.series('js'));
        cb();
    })   
);