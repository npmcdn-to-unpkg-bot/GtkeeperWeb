/*---------- gulpfile.js ------------*/
var gulp = require('gulp');
var concatJs = require('gulp-concat');
var  minifyJs = require('gulp-uglify');
var dest = require('gulp-dest');
var uglify=minifyJs ;
var clean = require('gulp-clean');
var browserify = require('browserify');
var transform = require('vinyl-transform');
var buffer = require('vinyl-buffer');
var source     = require('vinyl-source-stream');


 /*

*/


gulp.task('browserify', function () {
	  return browserify({
	    debug: true,
	    entries: ['web-src/teva/main.js']
	  }).bundle()
	    .pipe(source('main.js'))
	    .pipe(buffer())
	    .pipe(minifyJs())
	    .pipe(gulp.dest('web/teva/'))

	});


gulp.task('lib-angular', function() {
	 return gulp.src([
		'node_modules/es6-shim/es6-shim.min.js',
		'node_modules/systemjs/dist/system-polyfills.js',
		'node_modules/angular2/es6/dev/src/testing/shims_for_IE.js',
		'node_modules/angular2/bundles/angular2-polyfills.js',
		'node_modules/systemjs/dist/system.src.js',
		'node_modules/rxjs/bundles/Rx.js',
		'node_modules/angular2/bundles/angular2.dev.js',
		'node_modules/rxjs/bundles/Rx.umd.js',
		'node_modules/angular2/bundles/angular2-all.umd.js'
	 ])
	// .pipe(concatJs('angular.js'))
	// .pipe(minifyJs())
	 .pipe(gulp.dest('web/js/'));
	});





gulp.task('lib-js', function() {
 return gulp.src([
 'bower_components/jquery/dist/jquery.js',
 'bower_components/bootstrap/dist/js/bootstrap.js'
 ])
 .pipe(concatJs('app.js'))
 .pipe(minifyJs())
 .pipe(gulp.dest('web/js/'));
});



gulp.task('pages-js', function() {
 return gulp.src([
 'web-src/js/*.js'
 ])
 .pipe(minifyJs())
 .pipe(gulp.dest('web/js/'));
});



gulp.task('clean', function () {
 return gulp.src(['web/css/*', 'web/js/*', 'web/images/*', 'web/fonts/*'])
 .pipe(clean());
});




gulp.task('default', ['clean'], function () {
 var tasks = ['images', 'fonts', 'less', 'lib-js', 'pages-js'];
tasks.forEach(function (val) {
 gulp.start(val);
 });
});


gulp.task('watch', function () {
 var less = gulp.watch('web-src/less/*.less', ['less']),
 js = gulp.watch('web-src/js/*.js', ['pages-js']);
});

