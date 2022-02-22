# Task

A Symfony CLI application that imports the attached XML file, converts it to another file format and saves it again.

- It should be able to output CSV, Excel and Json.
- The only two parameters of the application should be:
- File path
- The output format
- The output file should be saved in the same directory as the source file.

## Installation

Use the [composer](https://getcomposer.org/) to install packages.

```bash
composer install
```

## Steps for execute

```bash
1. Open the terminal and go inside project folder.
2. Run the command `php index.php app:converter path format i.e. path and format is paramters`
```
