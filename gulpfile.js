'use strict';

var gulp = require('gulp'),
	browserSync = require('browser-sync'),
	sass = require('gulp-sass'),
	autoprefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglifyjs'),
    del = require('del'),
	rename  = require('gulp-rename'),
	concat = require('gulp-concat'),
	plumber = require('gulp-plumber'),
	notify = require("gulp-notify"),
	imagemin = require('gulp-imagemin'),
	useref = require('gulp-useref'),
	htmlmin = require('gulp-htmlmin'),
	csso = require('gulp-csso'),
	runSequence = require('run-sequence'),
	cache = require('gulp-cache'),
	sitemap = require('gulp-sitemap'),
	robots = require('gulp-robots');



gulp.task('browser-sync', function(){
	browserSync({
		proxy: { target: "goose", },
		notify: false
	});
})


/////////////// DEVELOPED ///////////////
/////////////// LIBS ///////////////
// css libs
gulp.task('style-libs', function(){
	return gulp.src(['src/resources/css/*.css', '!src/resources/css/style.css', '!src/resources/css/fonts.css'])
	.pipe(concat('common-libs.css'))
	.pipe(gulp.dest('src/resources/css'))
})

// js libs
gulp.task('scripts-libs', function(){
	return gulp.src(['src/resources/libs/**/*.js'])
	.pipe(concat('common-libs.js'))
	.pipe(gulp.dest('src/resources/libs'))
})

// del libs
gulp.task('del-libs', function(){
	del.sync(['src/resources/libs/common-libs.js', 'src/resources/css/common-libs.css']);
})

// create libs
gulp.task('libs', ['style-libs', 'scripts-libs']);

// Sass
gulp.task('sass', function(){
	return gulp.src(['src/resources/sass/styles.sass'])
	.pipe(plumber({errorHandler: notify.onError("ERROR: <%= error.message %>")}))
	.pipe(sass())
	.pipe(rename({dirname: ''}))
	.pipe(concat('style.css'))
	.pipe(autoprefixer({
            browsers: ['last 10 versions'],
            cascade: false
        }))
	.pipe(gulp.dest('src/resources/css'))
	.pipe(browserSync.reload({stream:true}))
})


// js
gulp.task('js', function(){
	return gulp.src(['src/resources/js/**/*.js'])
	.pipe(concat('common.js'))
	.pipe(gulp.dest('src/resources/js'))
})


// run project
gulp.task('default', ['browser-sync', 'sass', 'js'], function(){
	gulp.watch(['src/resources/sass/**/**/*.sass'],['sass'])
	gulp.watch('src/**/**/*.+(php|html)',browserSync.reload)
});




/////////////// BUILD ///////////////
// удаление директории
gulp.task('del:build', function() {
	del.sync('dist');
});

gulp.task('useref:build', function () {
	return gulp.src(['src/**/**/**/*.+(php|html)'])
	.pipe(useref())
	.pipe(gulp.dest('dist/'));
});


gulp.task('html:build', function() {
	return gulp.src(['dist/**/**/**/*.+(php|html)'])
	.pipe(htmlmin({collapseWhitespace: true}))
	.pipe(gulp.dest('dist'))
});

gulp.task('style:build', function() {
	return gulp.src(['dist/**/**/**/*.css'])
	.pipe(csso())
	.pipe(gulp.dest('dist'))
});

gulp.task('js:build', function() {
	return gulp.src(['dist/js/*.js'])
	.pipe(uglify())
	.pipe(gulp.dest('dist/js'))
});


gulp.task('imagemin:build', function() {
	return gulp.src(['src/img/**/**/**/*.*', '!src/img/**/**/**/**/*.psd'])
	.pipe(cache(imagemin()))
	.pipe(gulp.dest('dist/img'))
});

gulp.task('robots', function () {
    gulp.src('dist/index.+(php|html)')
        .pipe(robots({
            useragent: '*',
            disallow: ['/admin', '/db'],
            sitemap: ['домен'] // указать домен
        }))
        .pipe(gulp.dest('dist/'));
});

gulp.task('sitemap', function () {
	gulp.src('dist/*.+(php|html)',{
		read: false
	})
	.pipe(sitemap({
		siteUrl: 'домен' // указать домен
	}))
	.pipe(gulp.dest('dist/'));
});



// build task
gulp.task('build', ['del:build', 'useref:build'], function(callback) {

	runSequence(['style:build', 'js:build', 'imagemin:build'],['html:build'], ['robots'], ['sitemap'], callback)

	var buildFiles = gulp.src([
			'src/**/**/**/*.*',
			'!src/css/**/**/**/*',
			'!src/js/**/**/**/*',
			'!src/sass/**/**/**/*',
			'!src/libs/**/**/**/*',
			'!src/img/**/**/**/*',
			'!src/**/**/**/**/*.+(php|html)',
		]).pipe(gulp.dest('dist/'));
});