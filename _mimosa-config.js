exports.config = {
  "modules": [
    "copy",
    "server",
    "jshint",
    "csslint",
    "require",
    "minify-js",
    "minify-css",
    "live-reload",
    "bower",
    "coffeescript",
    "stylus",
    "jade",
    "server-template-compile"
  ],
  "bower": {
    "watch": true,
    "copy": {
      "unknownMainFullCopy": true
    }
  },
  "server": {
    "path": "server.js",
    "views": {
      "compileWith": "html",
      "extension": "html"
    }
  }
};