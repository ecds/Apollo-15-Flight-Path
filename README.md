# Apollo 15 Flight Path

Home page for the [Apollo 15 Learning Hub](https://apollo15hub.org/).

## Build

Current build assume Node 20. Use [NVM](https://github.com/nvm-sh/nvm) to manage local node versions.

From the project root, run:

~~~bash
nvm use 20
npm install
npm run build
~~~

Copy the contents of the resulting `/dist` folder to the webserver. For the Omeka site, copy the index.html from the build to index.php and wrap it in PHP tags. Prepend all the links in all the JavaScript, HTML, and CSS files in the build

~~~bash
/themes/bigpicture/assets
/themes/bigpicture/images
~~~

## Development

~~~bash
nvm use 20
npm install
npm run dev
~~~

View the site at [http://localhost:5173](http://localhost:5173)
