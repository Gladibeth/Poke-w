// Gulp *
let gulp = require("gulp");
// Uso de sass *
let sass = require("gulp-sass");
// minificar js
const minify = require("gulp-minify");
//minificar css
let cssnano = require("gulp-cssnano");
//autoprefixer
const autoprefixer = require("gulp-autoprefixer");
//unir media screen
let gcmq = require("gulp-group-css-media-queries");
//minificar html
const htmlmin = require("gulp-htmlmin");
//unir archivos en uno solo
let concat = require("gulp-concat");

// Tarea para procesar videos y otros archivos de medios
gulp.task("scss", function () {
  gulp
    .src("development/assets/scss/**/*.scss")
    .pipe(sass())
    .pipe(
      autoprefixer({
        browsers: ["last 5 versions"],
        cascade: true
      })
    )
    .pipe(gcmq())
    //.pipe(concat('all.css'))
    .pipe(cssnano())
    .pipe(gulp.dest("theme/assets/css/"));
});

// Tarea para procesar fuentes
gulp.task("fonts", function () {
  return gulp
    .src("development/assets/fonts/**/*")
    .pipe(gulp.dest("theme/assets/fonts"));
});

// Tarea para procesar imagenes
gulp.task("img", function () {
  return gulp
    .src("development/assets/img/**/*")
    .pipe(gulp.dest("theme/assets/img"));
});

// Tarea para procesar recursos
gulp.task("recursos", function () {
  return gulp
    .src("development/assets/recursos/**/*")
    .pipe(gulp.dest("theme/assets/recursos"));
});

gulp.task("js", function () {
  gulp
    .src("development/assets/js/**/*.js")
    //.pipe(concat('all.js'))
    //.pipe(minify())
    .pipe(gulp.dest("theme/assets/js/"));
});

gulp.task("php", () => {
  return (
    gulp
      .src("development/**/*.php")
      // .pipe(htmlmin({ collapseWhitespace: true }))
      .pipe(gulp.dest("theme/"))
  );
});
gulp.task("html", () => {
  return (
    gulp
      .src("development/**/*.html")
      // .pipe(htmlmin({ collapseWhitespace: true }))
      .pipe(gulp.dest("theme/"))
  );
});

gulp.task("watch", () => {
  gulp.watch("development/assets/scss/**/*.scss", gulp.series("scss"));
  gulp.watch("development/assets/js/**/*.js", gulp.series("js"));
  gulp.watch("development/*.php", gulp.series("php"));
  gulp.watch("development/*.html", gulp.series("html"));
  gulp.watch("development/assets/img/**", gulp.series("img"));
  gulp.watch("development/assets/fonts/**", gulp.series("fonts"));
  gulp.watch("development/assets/recursos/**/*", gulp.series("recursos"));
});

gulp.task(
  "default",
  gulp.parallel(
    "scss",
    "js",
    "html",
    "php",
    "img",
    "recursos",
    "fonts",
    "watch"
  )
);
