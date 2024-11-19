# Project for [library package](https://packagist.org/packages/lukyanchyk/bracketed-problem-library/)

This project tries to describe how to work with your custom library from the Packagist.

# Steps to run the project

1. Install [composer](https://getcomposer.org/).
2. Clone the project to your computer:
    ```
    git clone https://github.com/YahorLukyanchyk/bracketed-problem-project
    ```
3. Init composer in the project:
    ```
    composer init
    ```
4. In the <b>composer.json</b> file add the following code to the <b>require</b> object:
    ```
    ...
        "require": {
        "lukyanchyk/bracketed-problem-library": "dev-main"
        }
    ...
    ```
5. Install composer packages with <b>composer install</b> command.
6. Add a permission for the <b>run.sh</b> file:
    ```
    chmod +x run.sh
    ```
7. Execute the File:
    ```
    ./run.sh
    ```