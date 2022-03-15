## Project Overview

This solution is build using laravel 9. The application allows AUthors to create, update, read, delete and upvote post. It also provide users with CRUD functionality for post comment.

## Implementation

A model for Post and Comment was created to help establish relationship between this entities. The Post has a `One-To-Many` relationship with the Comment because a post can have many comments made to it.

## Documentation link
Postman documentation link `https://documenter.getpostman.com/view/7305732/UVsJx7Xi`

## Live URL
Heroku link `https://blog-app-test-doc.herokuapp.com`

## Project setup


- Clone the project from repository using the `https://github.com/sprintcorp/blog-app-test.git` into a directory on your pc
- Move to project directory `blog-app-test` 
- Run `composer install` to install all packages.
- When the above step has been done you the proceed to create database, the database use during development is mysql database and Eloquent ORM is used to interact with the database,
- Create a .env file the copy .env.example to create enviroment variable for this application which houses simple configuration text file that is used to define some variables passed into the application's environment,
- Generate app key which is needed for the application to function properly used for all encrypted data, like sessions,Password, remember token using `php artisan key:generate`.
- Run `php artisan migrate` which creates table in the database specified application .env file.
- Run `php artisan db:seed` to seed data into the database
- Run using `php artisan serve` which starts the application using laravel default port 8000 to run it on the system locally.
- To run on docker use `docker-compose up`
- Run `php artisan test` to run unit test of the application
## Usage

- Get all post `localhost:8000/api/post` method `GET` 
#### Response

    {
    "current_page": 1,
    "data": [
        {
            "post_title": "Post one update",
            "post_link": "https://develops.notion.site/PHP-test-assessment-by-DevelopsToday-113d24c027aa459196647f654d0e00c2",
            "post_total_upvote": 0,
            "post_author": "Frederick",
            "total_comments": 0
        },
        {
            "post_title": "Post two",
            "post_link": "http://127.0.0.1:8000/api/post",
            "post_total_upvote": 0,
            "post_author": "Fred",
            "total_comments": 1
        }
    ],
    "first_page_url": "http://127.0.0.1:8000/api/post?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http://127.0.0.1:8000/api/post?page=1",
    "links": [
        {
            "url": null,
            "label": "&laquo; Previous",
            "active": false
        },
        {
            "url": "http://127.0.0.1:8000/api/post?page=1",
            "label": "1",
            "active": true
        },
        {
            "url": null,
            "label": "Next &raquo;",
            "active": false
        }
    ],
    "next_page_url": null,
    "path": "http://127.0.0.1:8000/api/post",
    "per_page": 30,
    "prev_page_url": null,
    "to": 2,
    "total": 2
}


- Create post `localhost:8000/api/post` method `POST`
##### Data
    {
        "title":"Post title one",
        "link":"https://develops.notion.site",
        "author_name":"Fred"
    }
#### Response

    {
        "post_title": "Post title one",
        "post_link": "https://develops.notion.site",
        "post_total_upvote": null,
        "post_author": "Fred",
        "total_comments": 0
    }
    
    
- Update post `localhost:8000/api/post/{id}` method `PUT` where id is post id

##### Data
    {
        "title":"Post title one update",
        "link":"https://develops.notion.site",
        "author_name":"Fred"
    }

#### Response

    {
    "post_title": "Post title one update",
    "post_link": "https://develops.notion.site",
    "post_total_upvote": 0,
    "post_author": "Fred",
    "total_comments": 0
}
    
    
 - Delete post `localhost:8000/api/post/{id}` method `DELETE` where `id` is post id 

#### Data
    {
        "data": "Post deleted successfully"
    }

- Upvote post `locathost:8000/api/post-upvote/{id}` method `PUT` where `id` is post id
#### Response

    {
        "data": "Post upvoted successfully"
    }
    
- Create post comment `localhost:8000/api/comment` method `POST`
        
 #### Data
    {
        "post_id":2,
        "content":"Hello, great article",
        "author_name":"Fred"
    }
 #### Response

    {
        "post_title": "Post two",
        "comment_author": "Fred",
        "comment": "Hello, great article"
    }
    
    
- Update post comment `localhost:8000/api/comment/{id}` method `PUT` where id is comment id
        
 #### Data
    {
        "post_id":2,
        "content":"Hello, great article, love it",
        "author_name":"Fred"
    }
 #### Response

    {
        "post_title": "Post two",
        "comment_author": "Fred",
        "comment": "Hello, great article, love it"
    }
    
 - Get post comment `localhost:8000/api/comment?post_id=2` method `GET` where post_id is post id
        

 #### Response

    {
        "current_page": 1,
        "data": [
            {
                "post_title": "Post two",
                "comment_author": "Yemi",
                "comment": "Hi"
            }
        ],
        "first_page_url": "http://127.0.0.1:8000/api/comment?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://127.0.0.1:8000/api/comment?page=1",
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/comment?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "next_page_url": null,
        "path": "http://127.0.0.1:8000/api/comment",
        "per_page": 30,
        "prev_page_url": null,
        "to": 1,
        "total": 1
    }


- Delete comment `localhost:8000/api/comment/{id}` method `DELETE` where `id` is comment id 

#### Data
    {
        "data": "Comment deleted successfully"
    }
