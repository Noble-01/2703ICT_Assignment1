# 2703ICT_Assignment1
Individual Assignment
---
**Introduction
For this assignment you are required to build the foundation for a social media application. You will
be required to implement the ability for posts to be added to a timeline, posts to be edited and
deleted, and for comments to be added to posts.
There is no requirement in Assignment 1 to support multiple users (we will do this for assignment 2).
Details
The name and design of the website can be to your choosing however it must satisfy the following
requirements:
1. All pages must have a navigation menu, either across the top of the page or down the left or
right column.
2. The home page must display all posts. Only posts should be displayed, not comments.
3. Next to each post there should a number indicating how many comments are there for this
post.
4. From the home page, click on a post will bring up the comments page. The comments page for a
post should contain that post and all comments for that post.
5. The home page must display a form for the user to create a new post. Each post should contain
a title, a message, a date, an icon, and a user’s name (the user is not required to login, they can
simply enter their name in the post form). All posts can have the same icon. When creating a
new post, user must enter the title, message, and user’s name. Date can either be entered or
generated by the system. After a new post is successfully created, it should redirect back to the
home page.
6. Users can edit posts. After a post is edited, the comments page for that post is displayed.
7. Users can delete posts. When user deletes a post, the comments for that post should also be
deleted.
8. Users can add comments to a post. A comment must have a message and a user, but no title.
9. Users can delete comments.
10. There is a page that lists all unique users that have made a post (i.e. a user is only displayed
once no matter how many posts this user has made). Clicking on the user should display all
posts made by that user.
11. There is a most recent page, which shows only the posts that have been made in the last 7
days.
---
**Technical requirements
1. This assignment must be implemented using Laravel. Database access should be implemented via raw
SQL and executed through Laravel’s DB class. You are not to use Laravel's ORM (ORM will be used for
assignment 2).
2. An SQL file should be used to create tables and insert initial data. There should be enough
initial data to thoroughly test the retrieval, update, and deletion functionalities you have
implemented.
3. All input must be validated; validation errors message must be displayed within the view.
4. Proper security measures must be implemented, e.g. perform HTML and SQL sanitisation etc.
You should be able to explain the security measures you have implemented.
5. Template inheritance must be properly used.
6. Good coding practice is expected. This includes:
- Naming: using consistent, readable, and descriptive names for files, functions, variables etc.
- Readability: correct indenting/spacing of code.
- Commenting: there should at least be a short description for each function.
