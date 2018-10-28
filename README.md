<h1 align="center">
    <br>
    <a href="http://www.amitmerchant.com/electron-markdownify"><img src="https://i.imgur.com/nvqZ6lT.png" alt="Fake News" width="200"></a>
    <br>
        A tiny news application.
    <br>
</h1>

## Description
Fake-News is a repository for WU18s first PHP assignment. WU18 is the Webdeveloper class of fall 2018 at [Yrgo](https://yrgo.se/).  
Fake-News is an application that dynamically displays news articles from a database. It also has support for users registering on their own and uploading their own articles.

## Features
### User
- Register
- Login

### Posts
- Create
- Update
- Delete
- Read
- Read posts from specific users

## Installation
1. Install SQLite3  
Debian / Ubuntu:  
    ```
    sudo apt install sqlite3
    ```

    OS X / Homebrew:  
    ```
    brew install sqlite3
    ```  


1. Clone the directory  
    ```
    git clone git@github.com:erhuz/Fake-News.git
    ```

1. Setup a dedicated webserver root in the cloned directory etc: `/home/${USER}/sites/fake-news/`.  
*Note: The application **WILL NOT WORK CORRECTLY** if you not have the webserver root in the cloned directory.*

1. Enjoy your Fake News!

## Credit
- [Bootswatch (Litera)](https://bootswatch.com/litera/)

## License

The MIT License ([MIT](https://raw.githubusercontent.com/erhuz/Fake-News/master/LICENSE))
