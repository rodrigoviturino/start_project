// Adiciona os modulos instalados
const gulp = require('gulp');
const sass = require('gulp-sass');
const rename = require('gulp-rename');
const imagemin = require('gulp-imagemin');
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync').create();
const concat = require('gulp-concat');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');

sass.compiler = require("node-sass");

// Funçao para compilar o SASS e adicionar os prefixos
function compilaSass() {
  return gulp
  .src(['src/scss/**/*.scss', 'src/scss/*.scss'])
  .pipe(sass({
    outputStyle: 'compressed',
    includePaths: [
      './node_modules/bootstrap/scss/',
      './node_modules/@fortawesome/fontawesome-free/scss/'
    ]
  }).on("error", sass.logError))
  // .pipe(rename({ suffix: 'style.min' }))
  .pipe(autoprefixer({
    browsers: ['last 2 versions'],
    cascade: false
  }))
  .pipe(gulp.dest('./'))
  .pipe(browserSync.stream());
}

// Tarefa de gulp para a função de SASS
gulp.task('sass', function(done){
  compilaSass();
  done();
});

// gulp.task('sass', compilaSass)

// Styles
function styles() {
  return gulp.src(['src/scss/*.scss'])
      .pipe(sourcemaps.init({ loadMaps: true }))
      .pipe(sass({
          includePaths: [
              './node_modules/bootstrap/scss/',
              './node_modules/@fortawesome/fontawesome-free/scss/'
          ]
      }).on('error', sass.logError))
      .pipe(rename({ suffix: '.min' }))
      .pipe(cleanCSS())
      .pipe(sourcemaps.write('./'))
      .pipe(gulp.dest('./public'))
      .pipe(browserSync.stream({ match: 'src/scss/**/*.scss' }))
      // .pipe(browserSync.stream());
}

// Função para juntar o JS
function gulpJS() {
  return gulp
  .src('/src/assets/js/*.js')
  .pipe(babel({
    presets: ['@babel/env']
  }))
  .pipe(concat('all.js'))
  .pipe(uglify())
  .pipe(gulp.dest('public'))
  .pipe(browserSync.stream())
}

gulp.task('mainjs', gulpJS);

// JS Plugins
function pluginJS() {
  return gulp
  .src([
    '/src/assets/js/plugins/*.js'
  ])
  .pipe(concat('plugins.js'))
  .pipe(gulp.dest('/public/js'))
  .pipe(browserSync.stream())
}

gulp.task('pluginjs', pluginJS);

// Fonts
function fonts() {
  return gulp.src(['node_modules/@fortawesome/fontawesome-free/webfonts/*', 'src/fonts/*.css'])
      // .pipe(sourcemaps.write('./'))
      .pipe(gulp.dest('./public/fonts'))
      .pipe(browserSync.stream())
}
gulp.task('fontsCss', fonts);

// Images
function images() {
  return gulp
    .src('src/images/*')
    .pipe(imagemin())
    // .pipe(sourcemaps.write('./'))
    .pipe(browserSync.stream({ match: 'src/images/*' }))
    .pipe(gulp.dest('./public/assets/images'));
}
gulp.task('imagesmin', images);


// Função para iniciar o browser
function browser() {
  browserSync.init({
    proxy: "wpbase.test" 
  })
};

// Tarefa para iniciar o browser-sync
gulp.task('browser-sync', browser);

// Função de watch do Gulp
function watch() {
  gulp.watch(['src/scss/style.scss', 'src/scss/**/*.scss'], compilaSass).on('change', browserSync.reload);
  // gulp.watch('public/main.js', gulpJS).on('change', browserSync.reload);
  // gulp.watch(['/src/assets/js/libs/index.js'], pluginJS).on('change', browserSync.reload);
  // gulp.watch(['*.php', './**/*.php']).on('change', browserSync.reload);
  // gulp.watch(['*.html', 'html/**/*.html']).on('change', browserSync.reload);
  gulp.watch(['*.php']).on('change', browserSync.reload);
}

// Inicia a tarefa de watch
 gulp.task('watch', watch);

// Tarefa padrão do Gulp, que inicia o watch e o browser-sync
gulp.task('default', gulp.parallel('watch', 'browser-sync', compilaSass, gulpJS, pluginJS, fonts, 'imagesmin'));