const fs = require('fs');

// Copys the example.env
  fs.copyFile('.env.example', '.env', (err) => {
    if (err) throw err;
    console.log('.env created!');
  });