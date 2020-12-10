# Web_App_Develop_Project
A Business E-Commerce Website Using HTML5, CSS3, JavaScript, PHP, And MySQL Database

Gadgets4U
  
  In this e-commerce project it is created a responsive website of a Gadjet shop using HTML5, CSS3 (Bootstrp 4 Framework), JavaScript, PHP, and MySQL database.
  The website is dynamic in nature (utilizes features of PHP and JavaScript); the .php pages details-modal.php, and product.php are some examples; the images displayed 
  in the banner as well.
  
  The file main.php is the file responsible for calling the php files(helper classes for connecting to the database, retrieving data, inserting data, etc) in the folder core. 
  The images folder contains two subfolders with images used in this project.
  The includers folder contains .php partial pages for the website.
  JavaScript files are in the folder JS; where the banner.js file is for displaying the banner images dynamically and randomnly;
  util.js is for modal functions; main.js is for owl-carousel functions.
  sass folder contains all the scss files.
  ecom.sql is the database backup.
  
  It is designed in such a way that if a user logged in then their login details are retrieved from the database and this user's user_id is used as the user_id for the current 
  session. Otherwise, a randomnly generated user_id is used. A user is not allowed to add more than 3 of the same item. The cart is displayed to the user even if it is empty,     but users can not proceed further. A randomnly generated order_id is used for each session.

  Main Features

    1. A responsive website, that should display on standard devices from large screen monitors, to tablets and phones using the Bootstrap framework (via CDN);
    2. It is dynamic; the dropdown menu list in the navbar, images in the banner, the product info etc are dynamically added.
    3. Can acces data from the database, and insert data into tables.
    4. Login/Sign Up functionality with validation; ensure form fields are not empty, username must be unique, password must be matched, used password hashing
    5. Users can add products to the cart, change quantity, and place order; every time the user updates the quantity, the total is also updated
    6. Can view their order-summary; a brief summary of order with final amount to pay is displayed
    7. Slide show of products via owl-carousel 
    8. Displays different images each time the page is loaded
    9. Pages are concise since the products are displayed as a slide show; users can navigate to different sessions within a page 
    10.Product details are displayed using modal; users are initially presented a brief info of the product with an image, if they want to know more they will get details-modal        by clicking a button
    
    
  Limitations and Future Scopes

    1. All the features asked were implemented, but there is no search functionality or saving a product to whishlist in this version (out of scope).
       It is possible to add these functions in future updates.
    2. The checkout page is not created, since it is also not in the scope for the current version.
    3. Links for the footer menu lists are not given as they do not exist; and also not in the scope of this version.
    4. Users will not get quantity alert in this version, but it can be added easily in a future version.
    5. No password retrieval function, again not in the scope of this vesion.
    6. Entering the coupon code is disabled for this version, but can be implemented in future.
    
    

