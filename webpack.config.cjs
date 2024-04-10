const path = require('path');

module.exports = {
    mode: 'development', // or 'production', 'none'
    entry: './resources/js/app.js', // Replace with your entry JS file
    output: {
        filename: 'bundle.js',
        path: path.resolve(__dirname, './resources/js/'), // Output directory
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env'],
                    },
                },
            },
        ],
    },
};
