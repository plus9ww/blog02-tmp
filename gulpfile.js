var gulp = require('gulp');

var compass = require('gulp-compass');
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');
var mozjpeg = require('imagemin-mozjpeg');
var uglify = require("gulp-uglify");
var browser = require("browser-sync");
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');
var concat = require("gulp-concat");
var runSequence = require('run-sequence');
var iconfont    = require('gulp-iconfont');
var consolidate = require('gulp-consolidate');

// �f�B���N�g���ݒ�
var dir = {
    src: 'src', // _src�t�H���_�u������
    dist: 'dist' // dest�t�H���_�u������
}

// �V���{���t�H���g��
var fontName = 'icon';

// compass
gulp.task('compass', function(){
	gulp.src(dir.src + '/sass/**/*.scss')
		.pipe(plumber({errorHandler: notify.onError('<%= error.message %>')}))
		.pipe(compass({
			config_file: 'config.rb',
			comments: false,
			css: dir.src + '/css/',
			sass: dir.src + '/sass/'
		}))
		.pipe(cssmin())
		.pipe(gulp.dest(dir.src + '/css/'))
		.pipe(browser.reload({stream:true}))
});
 
/* �摜�����k
gulp.task('imagemin', function () {
	gulp.src( dir.src + '/' ) 
		.pipe(plumber({errorHandler: notify.onError('<%= error.message %>')}))
		.pipe(imagemin({
	        	progressive: true,
			interlaced: true,
	        	use: [pngquant({quality: '65-80', speed: 4})]
	    	}))
		.pipe(gulp.dest( dir.dist ))
});
*/


// �摜�����k
gulp.task('imagemin', function(){
	return gulp.src( dir.src + '/{,**/}*.{png,jpg,gif,svg}' )
		.pipe(plumber({errorHandler: notify.onError('<%= error.message %>')}))
		.pipe(imagemin([
			pngquant({
				quality: '65-80',
				speed: 1,
				floyd:0
			}),
			mozjpeg({
				quality:85,
				progressive: true
			})
		]))
		.pipe(gulp.dest( dir.dist ));
});

// main�f�B���N�g����js���������k
gulp.task('concat', function() {
	gulp.src(dir.src + '/js/main/**/*.js')
		.pipe(plumber({errorHandler: notify.onError('<%= error.message %>')}))
		.pipe(concat('main.js'))
		.pipe(uglify())
		.pipe(gulp.dest(dir.src + '/js/'))
		.pipe(browser.reload({stream:true}))
});

// js�����k
gulp.task("js", function() {
	gulp.src([dir.src + '/js/**/*.js','!' + dir.src + '/js/main/**/*.js'])
		.pipe(plumber({errorHandler: notify.onError('<%= error.message %>')}))
        	.pipe(uglify())
        	.pipe(gulp.dest(dir.dist + '/js/'))
		.pipe(browser.reload({stream:true}))
});

// �t�@�C���̃R�s�[
gulp.task('copy', function () {
	gulp.src( dir.src + '/{,**/}*.{html,php,css,eot,svg,ttf,woff,pot,pdf}' ) // �Ώۃt�@�C��
		.pipe(plumber({errorHandler: notify.onError('<%= error.message %>')}))
		.pipe(gulp.dest( dir.dist ))
});

// �u���E�U�X�V
gulp.task("server", function() {
	browser({
		server: {
		baseDir: dir.src
		}
	});
});

// �����[�X�p�r���h
gulp.task('dist', function(callback) {
	return runSequence( // �^�X�N�𒼗񏈗�����
		'compass',
		'concat',
		'js',
		'copy',
		'imagemin',
		callback
	);
});

gulp.task('bs-reload', function () {
    browser.reload();
});

/**
 * watch
 * watch��compass�������ŏ�������
 */
gulp.task('watch', function(){
        gulp.watch(dir.src + '/sass/**/*.scss', ['compass']);
	gulp.watch(dir.src + '/js/main/**/*.js',["concat"]);
	gulp.watch(dir.src + '/fonts/icon/src/svg/*.svg', ['Iconfont']);
	gulp.watch(dir.src + '/html/*.html', ['bs-reload']);
});
  
gulp.task('default',['server'], function(){
	gulp.run('watch');
});

//--------------------------
// add task - gulp-iconfont
gulp.task('Iconfont', function(){
	gulp.src(dir.src + '/fonts/icon/src/svg/*.svg')
		.pipe(iconfont({ fontName: fontName,formats: ['ttf', 'eot', 'woff', 'svg'] }))
		.on('glyphs', function(glyphs, options) {
		        gulp.src('src/fonts/icon/src/css/_icon.scss')
				.pipe(consolidate('lodash', {
					glyphs: glyphs,
					fontName: 'icon',
					fontPath: '../fonts/icon/', // �t�H���g�p�X��CSS����̑��΃p�X�Ŏw��
					className: 'icon' // CSS�̃t�H���g�̃N���X�����w��
				}))
				.pipe(gulp.dest('src/sass/')); // CSS�̓f���o������w��
	})
	.pipe(gulp.dest(dir.src + '/fonts/icon/'));
});