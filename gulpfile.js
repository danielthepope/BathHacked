var gulp = require('gulp');
var gulpLoadPlugins = require('gulp-load-plugins')
plugins = gulpLoadPlugins();
plugins.sass = require("gulp-sass");
plugins.sourcemaps = require("gulp-sourcemaps");
plugins.uglify = require('gulp-uglify');
plugins.concat = require('gulp-concat');
plugins.prefix = require('gulp-autoprefixer');

var scriptQueue = ['js/src/chart.js', 'js/src/elections.js'];

gulp.task('sass', function() {
	gulp.src('sass/*.scss')
	.pipe(plugins.sourcemaps.init())
	.pipe(plugins.sass({
		errLogToConsole: true
	}))
	.pipe(plugins.sourcemaps.write())
	.pipe(gulp.dest('css'));
});

// Auto prefix any css output
gulp.task('autoprefixer', function () {
 	return gulp.src('css/*.css')
    .pipe(plugins.prefix())
    .pipe(gulp.dest('css'));
});

gulp.task('compress', function() {
  gulp.src(scriptQueue)
	.pipe(plugins.uglify())
	.pipe(gulp.dest('js/dist/'));
});

gulp.task('concat', function() {
  gulp.src('js/dist/*.js')
	.pipe(plugins.concat('app.js'))
	.pipe(gulp.dest('./js/'))
});

gulp.task('watch', function() {
  gulp.watch('sass/*.scss', ['sass']);
  gulp.watch('css/*.css', ['autoprefixer']);
  gulp.watch('js/src/*.js', ['compress']);
  gulp.watch('js/dist/*.js', ['concat']);
});

gulp.task('default', ['watch']);
