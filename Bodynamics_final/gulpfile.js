//Always install gulp v.3 
//npm install gulp@3.9.0
'use strict';

var gulp = require('gulp'),
		minifyCSS = require('gulp-minify-css'),
		concat = require('gulp-concat'),
		uglify = require('gulp-uglify'),
		prefix = require('gulp-autoprefixer'),
		sass = require('gulp-sass')


var jsAssets = [
//'bootstrap/js/bootstrap.min.js',
'scripts/*.js'
];

var cssAssets = [
'bootstrap/css/bootstrap.min.css',
'styles/*.scss'
];

//minify JS
gulp.task('js', function() {
  gulp.src(jsAssets)
    .pipe(concat('main.js'))
    .pipe(uglify({ mangle: false }))

    .pipe(gulp.dest('./dist/js'))
});

// minify and concat style files
gulp.task('css', function(){
	return gulp.src(cssAssets)
	.pipe(sass())
	.pipe(prefix('last 2 versions'))
	.pipe(concat('main.css'))
	.pipe(minifyCSS({processImport: false}))
	.pipe(gulp.dest('dist/css'))
});

gulp.task('build', function(){
	gulp.run('css')
	gulp.watch('scss/*.scss', ['styles']);
	gulp.run('js')
	gulp.watch('js/*.js', ['js']);

});

//gulp.task( 'default', [ 'styles' ] )

gulp.task( 'default', [ 'build' ] )