const currentTask = process.env.npm_lifecycle_event;
const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
const TerserPlugin = require("terser-webpack-plugin");

const config = {
    mode: "development",
    entry: {
        main: path.resolve( __dirname, 'assets/src/js/main.js' )
    },
    output: {
        filename: "js/main.js",
        path: path.resolve(__dirname, "assets/dist/")
    },

    devtool: 'source-map',

    plugins: [
        new MiniCssExtractPlugin({filename: 'css/[name].css'}),
    ],

    module: {
        rules: [
            {
                test: /\.scss$/i,
                use: [
                    // 'style-loader', 
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                     {
                        loader: 'postcss-loader',
                        options: {
                            postcssOptions: {
                                plugins: [
                                    [
                                        "autoprefixer"
                                    ]
                                ]
                            }
                        }
                    }, 'sass-loader',
                ]
            }
        ]
    }
}

if(currentTask == 'build') {

    config.mode = "production",
    config.optimization = {
        minimizer: [
            new CssMinimizerPlugin(),
            new TerserPlugin()
        ]
    },
     config.module.rules.push({
        test: /\.js$/,
        exclude: /(node_modules)/,
        use: {
            loader: 'babel-loader',
            options: {
                presets: ['@babel/preset-env']
            }
        }
    })
}

module.exports = config;
