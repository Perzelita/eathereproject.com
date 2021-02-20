Version นี้จะเป็น V คนละ V ที่จะนำเสนอในวันที่ 18 ใน V นั้นจะมีความคืบหน้ามากกว่านี้

\... ให้ยึด partfile ตาม windows  expolrer 

Partfile CSS :/  \node_modules\bootstrap\dist\css

Partfile รูปภาพที่อยู่ใน Header : C:\xampp\htdocs\eathere_proto\Picture

รูป icon map : eathere_proto\1077966-ecommerce\png

กรณีหา partfile ของ css 
ไฟล์ของ css   bootstrap.css  
eathere_proto\node_modules\bootstrap\dist\css\

ของเดิม 
<link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.css" >
ให้แก้เป็น  
<link rel="stylesheet" href="\...\eathere_proto\node_modules\bootstrap\dist\css\bootstrap.css  " >


ไฟล์รูปภาพ header ให้แก้ที่ bootstrap.css  
.section1
.section2
.section3

ตัวอย่าง ใน section1
  background-image: url("../css/immage/foodiesfeed1.png")

ให้แก้เป็น 
  background-image: url("...\eathere_proto\Picturefoodiesfeed1.png")
