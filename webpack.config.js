const path = require("path");

module.exports = {
  mode: "development",
  entry: path.join(__dirname, "/src/index.ts"),
  output: {
    path: path.join(__dirname, "./build"),
    filename: "bundle.js",
    publicPath: "/",
  },
  node: false,
  module: {
    rules: [
      {
        test: /\.(ts|js)x?$/,
        exclude: /(node_modules)/,
        use: {
          loader: "babel-loader",
        },
      },
    ],
  },
  resolve: {
    extensions: [".ts", ".tsx", ".js", ".json"],
  },
};
