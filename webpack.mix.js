let mix = require("laravel-mix");
mix
  .options({
    processCssUrls: false,
  })
  .js("assets/scripts/common.js", "dist/scripts/common.min.js")
  .sass("assets/styles/common.scss", "dist/styles/common.min.css")
  .setPublicPath("./")
  .browserSync("http://tvers/")
  .disableNotifications();

if (mix.inProduction()) {
  mix.version();
}
