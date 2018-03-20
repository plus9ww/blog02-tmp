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

// ディレクトリ設定
var dir = {
    src: 'src', // _srcフォルダ置き換え
    dist: 'dist' // destフォルダ置き換え
}

// シンボルフォント名
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
 
/* 画像を圧縮
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


// 画像を圧縮
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

// mainディレクトリ内jsを結合圧縮
gulp.task('concat', function() {
	gulp.src(dir.src + '/js/main/**/*.js')
		.pipe(plumber({errorHandler: notify.onError('<%= error.message %>')}))
		.pipe(concat('main.js'))
		.pipe(uglify())
		.pipe(gulp.dest(dir.src + '/js/'))
		.pipe(browser.reload({stream:true}))
});

// jsを圧縮
gulp.task("js", function() {
	gulp.src([dir.src + '/js/**/*.js','!' + dir.src + '/js/main/**/*.js'])
		.pipe(plumber({errorHandler: notify.onError('<%= error.message %>')}))
        	.pipe(uglify())
        	.pipe(gulp.dest(dir.dist + '/js/'))
		.pipe(browser.reload({stream:true}))
});

// ファイルのコピー
gulp.task('copy', function () {
	gulp.src( dir.src + '/{,**/}*.{html,php,css,eot,svg,ttf,woff,pot,pdf}' ) // 対象ファイル
		.pipe(plumber({errorHandler: notify.onError('<%= error.message %>')}))
		.pipe(gulp.dest( dir.dist ))
});

// ブラウザ更新
gulp.task("server", function() {
	browser({
		server: {
		baseDir: dir.src
		}
	});
});

// リリース用ビルド
gulp.task('dist', function(callback) {
	return runSequence( // タスクを直列処理する
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
 * watchでcompassを自動で書きだす
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
					fontPath: '../fonts/icon/', // フォントパスをCSSからの相対パスで指定
					className: 'icon' // CSSのフォントのクラス名を指定
				}))
				.pipe(gulp.dest('src/sass/')); // CSSの吐き出し先を指定
	})
	.pipe(gulp.dest(dir.src + '/fonts/icon/'));
});