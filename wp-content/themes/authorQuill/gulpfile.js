var gulp = require('gulp'),
    concat = require('gulp-concat'),
    sass = require('gulp-sass'),
    prefix = require('gulp-autoprefixer');
    cleanCSS = require('gulp-clean-css'),
    watch = require('gulp-watch');

function onError(err) {
    console.log(err);
}    

// SASS functions
gulp.task('sass', function () {
    return (
        gulp.src('ux/sass/styles.scss')
 
        // Use sass with the files found, and log any errors
        .pipe(sass())
        .on("error", sass.logError)

        .pipe(gulp.dest("ux/css"))
    );
});

// Clean the CSS
gulp.task('cleanCSS', function () {
    return gulp.src('ux/css/*.css')
    .pipe(prefix())
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('css'));    
});

// Watch the files
gulp.task('watch', function() {    
    watch('ux/sass/**/*.scss', 
        gulp.series(['build:ux']));
});
    

/*
==============
 BUILD UX
==============
*/

gulp.task('build:ux', gulp.series('sass', 'cleanCSS'));