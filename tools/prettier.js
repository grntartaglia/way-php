const prettier = require('./prettier/standalone');
const phpPlugin = require('./prettier/plugin-php');

const stdin = process.openStdin();
let data = "";

stdin.on('data', function(chunk) {
  data += chunk;
});

stdin.on('end', function() {
  console.log(prettier.format(data, {
      plugins: [phpPlugin],
      parser: 'php'
  }));
});
