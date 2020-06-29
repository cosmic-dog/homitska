let gulp = require('gulp'),
    sass = require('gulp-sass'),
    cleanCSS = require('gulp-clean-css'),
    smap = require('gulp-sourcemaps');
const { logError } = require('gulp-sass');


gulp.task('sass', function(cb) {
    gulp
        .src('scss/*.scss')
        .pipe(smap.init())
        .pipe(sass())
        .pipe(cleanCSS())
        .pipe(smap.write())
        .pipe(
            gulp.dest(function(f) {
                //return f.base;
                return 'assets/css/'
            })
        );
    cb();
});

gulp.task('default',
    gulp.series('sass', function(cb) {
        gulp.watch('scss/**/*.scss', gulp.series('sass'));
        cb();
    })   
);