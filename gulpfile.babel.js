import webpack from 'webpack-stream';
import { src, dest, watch, series, parallel } from 'gulp';
import browserSync from "browser-sync";
import replace from "gulp-replace";
import zip from "gulp-zip";
import info from "./package.json";
import wpPot from "gulp-wp-pot";
import del from 'del';
import imagemin from 'gulp-imagemin';
import yargs from 'yargs';
import cleanCss from 'gulp-clean-css';
import gulpif from 'gulp-if';
import postcss from 'gulp-postcss';
import sourcemaps from 'gulp-sourcemaps';
import autoprefixer from 'autoprefixer';
import concat from 'gulp-concat';

const sass = require('gulp-sass')(require('sass'));
const PRODUCTION = yargs.argv.prod;
const server = browserSync.create();
console.log(PRODUCTION);

export const serve = done => {
  server.init({
    proxy: "http://waltermazzariolcom.local/" // put your local website link here
  });
  done();
};

export const reload = done => {
  server.reload();
  done();
};

export const stylesDev = () => {
  return src('src/scss/bundle.scss')
  .pipe(sourcemaps.init())
  .pipe(sass().on('error', sass.logError))
  .pipe(sourcemaps.write())
  .pipe(dest('dist/css'))
  .pipe(browserSync.stream());
}

export const stylesProd = () => {
  return src('src/scss/bundle.scss')
  .pipe(sass().on('error', sass.logError))
  .pipe(postcss([ autoprefixer ]))
  .pipe(cleanCss({compatibility:'ie8'}))
  .pipe(dest('dist/css'))
  .pipe(browserSync.stream());
}

export const watchForChanges = () => {
  watch('src/scss/**/*.scss', series(stylesDev, reload));
  watch('src/assets/**/*.{jpg,jpeg,png,svg,gif}', series(images, reload));
  watch(['src/**/*','!src/{images,js,scss}','!src/{images,js,scss}/**/*'], series(copy, reload));
  watch('src/js/**/*.js', series(scripts, reload));
  watch("**/*.php", reload);
}

export const images = () => {
  return src('src/assets/**/*.{jpg,jpeg,png,svg,gif}')
    .pipe(imagemin())
    .pipe(dest('dist/images'));
}

export const copy = () => {
  return src(['src/**/*','!src/{images,js,scss}','!src/{images,js,scss}/**/*'])
    .pipe(dest('dist'));
}

export const clean = () => del(['dist']);

export const scripts = () => {
  return src([
      'src/assets/js/*'
    ])
    .pipe(sourcemaps.init())
    .pipe(concat('bundle.js'))
    .pipe(sourcemaps.write('./'))
    .pipe(dest('dist/js'))
    .pipe(browserSync.stream());
}

export const compress = () => {
  return src([
      "**/*",
      "!node_modules{,/**}",
      "!bundled{,/**}",
      "!src{,/**}",
      "!.babelrc",
      "!.gitignore",
      "!gulpfile.babel.js",
      "!package.json",
      "!package-lock.json",
    ])
    .pipe(replace("_themename", info.name))
    .pipe(zip(`${info.name}.zip`))
    .pipe(dest('bundled'));
  };

  export const pot = () => {
    return src("**/*.php")
    .pipe(
        wpPot({
          domain: "_themename",
          package: info.name
        })
      )
    .pipe(dest(`languages/${info.name}.pot`));
  };

export const dev = series(clean, parallel(stylesDev, images, copy, scripts), serve, watchForChanges);
export const build = series(clean, parallel(stylesProd, images, copy, scripts), pot, compress);
export default dev;