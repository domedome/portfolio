# project-y
Hello, I'm project-y, a super cool, lightweight & simple WordPress starter theme for developpers

## Requirements
- A working WordPress installation
- Npm (packaged in node)


# Read this:

## How to use me ?
Go to your wordpress theme folder with your terminal, and type the following commands :
Yo, be sure you are using the version 6 on node as there's a bunch of stuff not working with the latest.
than type this:

	$ npm install
	$ gulp

You are now ready for happy coding !

## Gulp tasks
I have some embeded gulp tasks that can be use for you workflow :

- `gulp` : Watch the `scss` directory and compile files to the style.css file
- `gulp styles` : Just compile the scss (no watching)
- `gulp minify` : Minify the style.css file, do this before production
- `gulp images` : Compress images located in the images folder
- `gulp compress` : Minify the javascript
