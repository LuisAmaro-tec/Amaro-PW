const path = requiere ('path');

console .log(module);

module.exports={
    entry: './src/index.js',
    output: {
        filename: 'bundle.js',
        path: path.resolve(__dirname,'dist')
    }
}

