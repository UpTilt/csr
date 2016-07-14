/* File: gulpfile.js */

var gulp  = require('gulp'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    merge = require('merge-stream'),
    sass = require('gulp-sass'),
    postcss = require('gulp-postcss'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('autoprefixer'),
    lost = require('lost');

gulp.task('js', function(){
    return gulp.src([ 'resources/assets/_vendor/uptilt/js/uptilt-awesome-form.js',
        'resources/assets/_vendor/uptilt/js/uptilt-modal.js',
        'resources/assets/_vendor/uptilt/js/fitvids.js',
        'resources/assets/js/app.js'])
        .pipe(concat('compiled.js'))
        .pipe(uglify())
        .pipe(gulp.dest('public/assets/js'));
});

gulp.task('styles', function() {
    // Compile SASS files
    sassStream = gulp.src(['resources/assets/sass/app.sass'])
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss([
            lost(),
            autoprefixer()
        ]));
    // Plain CSS files
    cssStream = gulp.src(['resources/assets/_vendor/uptilt/css/animate.css']);
    // Merge all of the CSS files together
    return merge(sassStream, cssStream)
        .pipe(concat('compiled.css'))
        .pipe(gulp.dest('public/assets/css'));
});

gulp.task('watch', function() {
    // Root SASS file
    gulp.watch('resources/assets/sass/app.sass', ['styles']);
    // Partial SASS files
    gulp.watch('resources/assets/sass/*/*.sass', ['styles']);
    // Root JS file
    gulp.watch('resources/assets/js/*.js', ['js']);
});