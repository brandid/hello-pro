# Hello Pro Theme for developer
## Prerequisites
Node and Npm is required.

Here are some helpful info on doing that.
[How to Install Node.js and NPM on a Mac](http://blog.teamtreehouse.com/install-node-js-npm-mac)

[How to Install Node.js® and NPM on Windows - Treehouse Blog](http://blog.teamtreehouse.com/install-node-js-npm-windows)

Check your version of node and npm by  typing them  in terminal

```
node -v
npm -v
```

If you a returned a version number for each - you are ready to go to the next step.

If you are creating a new child theme from this theme, delete the ``.git folder``` and run ```git init``` to start a new one. If you are working on this theme and want to push commits back to this theme's remote repo - skip this step.

Next you’ll need to install Gulp globally (if you do not have it installed already). To check, just type `gulp -v` in your terminal window. If you see a version number, then you have gulp installed. If not, follow this step:

from terminal type: `npm install -g gulp`

## Clone the Hello Pro theme repo.
[Bitbucket](https://bitbucket.org/brandid/hellopro3)

Once installed, from the child theme folder in Terminal type:

`npm install`

At the terminal type `gulp watch`

This will fire up the Gulp watch task - and if you make any changes to the source src/.css files and then save, the task will run and process your CSS files and place them in the child theme folder.

When you are ready to build a version for deployment, use the command `gulp build`

This will recompile all your files; gulp will recreate the style.css file in the root folder, and also generate a new .zip file of all the theme files in the 'distribution' folder.
