# course-programming-languages

Lecture notes, assignments, and other materials for a one-semester course on programming language concepts and theory, interpretation and compilation, and programming paradigms.

Git, PHP 5.4 or later, and the [Sheaf](http://sheaf.io) library are required to render the notes as HTML. The latest version of the Sheaf library is retrieved automatically by the `install.sh` script. You can install the notes on a Linux server in a directory such as `example` (e.g., under the web root directory) as follows:

    git clone https://github.com/lapets/course-programming-languages.git example
    cd example
    chmod 0755 install.sh
    ./install.sh

On a running server, `index.php` will render the notes in their HTML form. In a Linux environment, it is also possible to build the HTML version of the notes as follows:

    php index.php > index.html
    chmod 0644 index.html

The `gh-pages` branch of this repository also contains the rendered HTML version of the notes; they can be viewed at http://lapets.github.io/course-programming-languages.
