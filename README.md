# category-hierarchy-in-codeigniter
Category hierarchy in codeigniter, you can also use it for creating hierarchy menu - Ex. Main Menu > Sub menu1>Sub menu 2

For get category/menu in hierarchy , your category/menu table should be store data in below format :

category table :

------------------------------------------------------

id | name         | parent_id
1  | School       | 0
2  | College      | 0
3  | Tutions      | 0
4  | CBSE School  | 1
5  | Engg College | 2
6  | Govt. School | 1
7  | Hindi Tution | 3
8  | MBA College  | 2
9  | Class 10     | 4
10 | HR           | 8

------------------------------------------------------

# Output of the function 
-------------------------
  School
  - CBSC School
  -- Class 10
  - Govt. School
  College
  - Engg College
  - MBA College
  -- HR
  Tutions
  - Hindi Tution
  


