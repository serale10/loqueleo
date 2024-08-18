var gulp = require('gulp');
var cleanCSS = require('gulp-clean-css');
var autoprefixer  = require('gulp-autoprefixer');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', function(){
	return gulp.src('scss/**/*.scss')
		.pipe(sourcemaps.init())
		.pipe(sass({ includePaths: ['../'] }).on('error', sass.logError))
		.pipe(autoprefixer())
		.pipe(sourcemaps.write())
		.pipe(gulp.dest('../'))
});

gulp.task('sass-prod', function(){
	return gulp.src('scss/**/*.scss')
		.pipe(sass({ includePaths: ['../']}).on('error', sass.logError))
		.pipe(autoprefixer())
		.pipe(cleanCSS())
		.pipe(gulp.dest('../'))
});

gulp.task('watch', gulp.series(['sass'], function(){
  
  gulp.watch('scss/**/*.scss', gulp.parallel(['sass']));
}));

gulp.task('prod', gulp.series(['sass-prod'], function(){
  
  gulp.watch('scss/**/*.scss', gulp.parallel(['sass-prod']));
}));