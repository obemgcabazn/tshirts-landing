var gulp          = require('gulp'),
    sass          = require('gulp-sass'),
    concat        = require('gulp-concat'),
    livereload    = require('gulp-livereload');


gulp.task('watch', function(){
  livereload.listen();
  gulp.watch( '*.php').on('change', livereload.changed);
  gulp.watch( 'css/*.css').on('change', livereload.changed);
  gulp.watch( 'sass/*.sass', gulp.series('sass'));
});


gulp.task('sass', function () {
  return gulp.src( 'sass/*.sass' )
    .pipe(sass())
    .pipe(concat('main.css'))
    .pipe(gulp.dest( './css/' ));
});

gulp.task( 'default', gulp.series('watch') );