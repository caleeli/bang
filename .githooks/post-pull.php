<?php
//Run in parallel composer and npm
run('composer update');
run('nvm install 10; npm rebuild node-sass; npm install; npm run prod');
