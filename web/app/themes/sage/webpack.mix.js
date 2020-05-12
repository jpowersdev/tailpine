const mix = require("laravel-mix");
require("@tinypixelco/laravel-mix-wp-blocks");
require("laravel-mix-purgecss");
require("laravel-mix-copy-watched");
require("mix-tailwindcss");

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
  .postCss("resources/assets/styles/app.css", "styles")
  .postCss("resources/assets/styles/editor.css", "styles")
  .tailwind()
  .purgeCss({
    extend: {
      whitelist: require("purgecss-with-wordpress").whitelist,
      whitelistPatterns: require("purgecss-with-wordpress").whitelistPatterns
      // content: ["*.php", "!(node_modules)/**/*.php"]
    }
  });

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

// Source maps when not in production.
mix.sourceMaps(false, "source-map");

// Hash and version files in production.
if (mix.inProduction()) {
  mix.version();
}
