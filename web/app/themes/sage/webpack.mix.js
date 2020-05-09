const mix = require("laravel-mix");
require("@tinypixelco/laravel-mix-wp-blocks");
require("laravel-mix-purgecss");
require("laravel-mix-copy-watched");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Sage application. By default, we are compiling the Sass file
 | for your application, as well as bundling up your JS files.
 |
 */

mix.setPublicPath("./dist").browserSync("tailpine.lndo.site");

mix
  .sass("resources/assets/styles/app.scss", "styles")
  .sass("resources/assets/styles/editor.scss", "styles");

mix
  .js("resources/assets/scripts/app.js", "scripts")
  .js("resources/assets/scripts/customizer.js", "scripts")
  .blocks("resources/assets/scripts/editor.js", "scripts")
  .extract();

mix
  .copyWatched("resources/assets/images/**", "dist/images")
  .copyWatched("resources/assets/fonts/**", "dist/fonts");

mix.autoload({
  jquery: ["$", "window.jQuery"]
});

// Options
mix.options({
  processCssUrls: false,
  postCss: [require("tailwindcss")("./tailwind.config.js")]
});

mix.purgeCss({
  whitelist: require("purgecss-with-wordpress").whitelist,
  whitelistPatterns: require("purgecss-with-wordpress").whitelistPatterns
});

// Source maps when not in production.
mix.sourceMaps(false, "source-map");

// Hash and version files in production.
if (mix.inProduction()) {
  mix.version();
}
