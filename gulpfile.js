var gulp        	= require('gulp');
var browserSync     = require('browser-sync');
var reload          = browserSync.reload;
var sass            = require('gulp-sass');
var autoprefixer    = require('gulp-autoprefixer');
var concat          = require('gulp-concat');
var uglify          = require('gulp-uglify');
//var imagemin		= require('gulp-imagemin');
//var pngquant		= require('imagemin-pngquant');
 
 
// Inicia o servidor
gulp.task('browser-sync', function() {
    // Watch nos arquivos
    var files = [
    './src/sass/**/*.sass',
    './src/js/**/*.js',
    './**/*.php'
    ];
 
    //Inicia o browserSync
    browserSync.init(files, {
    // O proxy eh usado pq a gente ja tem um servidor
    proxy: "localhost:8888/kirke_adventure/",
    notify: false,
    });
});
 
// Task pro SASS, vai rodar qualquer alteracao no SASS e sincronizar com o browserSync
// atualizando automaticamente os browsers

gulp.task('sass', function () {
    return gulp.src('./src/sass/**/*.sass')
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(autoprefixer(['last 2 versions', '> 5%', 'Firefox ESR']))
        .pipe(gulp.dest('./dist/css/'))
        .pipe(browserSync.stream());
});

//Task JS

gulp.task('concat', function() {
  return gulp.src(
        [
            './src/vendor/dist/jquery.js',
            './src/vendor/jquery-ui/jquery-ui.js',
            './src/js/*.js'
        ]
    )
    .pipe(concat('main.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./dist/js'));
});

 
// Task padrao pra rodar o `gulp`
gulp.task('default', ['sass', 'browser-sync'], function () {
    gulp.watch("./src/sass/**/*.sass", ['sass']);
    gulp.watch("./src/js/**/*.js", ['concat']);
});
