# Game Store (E-commerce)

## Features
- Game Store [₹, Ratings, Reviews, Tags]
- Games [Categories, Tags, Price (free?)] 
- Friends (w/ Chat)
- Profile
- Library (Show games list)
- Inventory (?)
- Market (Rent games, sold by users)
---

## Technologies
1. Front End
- HTML, CSS, Bootstrap, JQuery
2. Back End
- AJAX, PHP, MySQL
---
## DATABASE

- game(game_id, game_name, game_price, game_cat, description)
- category(cat_id, cat_name)
- developer(dev_id, dev_name) ??
- reviews(review_id, game_id, user_id, rating, review)
##### get average rating of a game
```SQL
SELECT AVG(rating) FROM reviews WHERE game_id=game_id
```
- images(image_id, game_id, image)
- user(id, username, email, password, image)
- friends(friend_id, user_1, user_2, status)
##### fetch friends list
```SQL
SELECT * FROM friends AS f ,user AS u WHERE 
CASE 
WHEN f.user_1 = 23 THEN f.user_2 = u.user_id 
WHEN f.user_2 = 23 THEN f.user_1 = u.user_id 
END 
AND f.status = 1 AND GROUP BY u.user_id;
```
