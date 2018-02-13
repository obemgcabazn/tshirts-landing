var gulp          = require('gulp'),
    sass          = require('gulp-sass'),
    concat        = require('gulp-concat'),
    livereload    = require('gulp-livereload');


gulp.task('watch', function(){
  livereload.listen();
  gulp.watch( '**/*.php').on('change', livereload.changed);
  // gulp.watch( '**/*.js').on('change', livereload.changed);
  gulp.watch( '**/*.css').on('change', livereload.changed);
  gulp.watch( '**/*.sass', gulp.series('sass'));
});


gulp.task('sass', function () {
  return gulp.src( '**/*.sass' )
    .pipe(sass().on('error', sass.logError))
    .pipe(concat('main.css'))
    .pipe(gulp.dest( './' ));
});

gulp.task( 'default', gulp.series('sass', 'watch') );