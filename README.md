eathereproject.com (สามารถกดลิงค์ได้)
 eathereproject.com เป็น Web Application เกี่ยวกับ การสั่งซื้ออาหารด้วยตนเองแบบตัดเงินในระบบ (Top up)
 
 ใช้ PHP v.7.3 HTML5 CSS3 เป็นหลัก และใช้ SB Admin Dashboard Template ในการประยุกต์บริหารจัดการในส่วนของหลังบ้าน
 Bootstap 4.2 Framework
 API ที่เกี่ยวข้อง
  - Line Notify (ใช้แจ้งเตือน Line สำหรับ ฝั่งของผู้ดูแลระบบ)
  - jquery.Thailand.js (Autocomplete ตัวเลือกอัตโนมัติสำหรับ ที่อยู่ ตำบล/อำเภอ/เขต/จังหวัด/ไปรษณีย์ ที่อยู่ในประเทศไทย)
  - PromptPay-QR-generator-master (ตัวแปลงQR Code QR code สำหรับ แสกน Prompt Pay QR Code)
------------------------------------------------------------------------------------------------------------------------
อธิบายไฟล์สำคัญที่เกี่ยวข้องในโปรเจคนี้
 - PromptPay-QR-generator-master -> QR code สำหรับ Generate QR code ใช้กับ Prompt pay
 - banner -> ที่เก็บไฟล์รูปภาพเป็นส่วนของ Banner
 - bn_admin,bn_partner,bn_shipper -> เป็นไฟล์จัดการหลังบ้านโดยใช้ Template Dashboard ของ SB Admin ฝั่ง ผู้ดูแลระบบ,ร้านค้า,ผู้จัดส่ง ตามลำดับ
- html -> ที่เก็บไฟล์โดยเฉพาะ .php ที่ไว้จัดการระบบสั่งอาหารในหน้าแรกไฟล์ชื่อว่า index.php
 - jquery.Thailand.js -> Auto Complete ที่อยู่ ใช่้สำหรับในประเทศไทย
 - node_modules -> Bootstap 4.2
 - php_cruid,php_front -> ไฟล์จัดการต่างๆในฝั่ง Backend โดยใช้ภาษา PHP เป็นหลัก
 - pic -> ไฟล์สำหรับจัดเก็บภาพ upload โดย user 
 - section -> ส่วนต่างๆ เช่น header footer body ของไฟล์ index.php
 - partner,shipper ->เก็บ index.php -> /partner or /shipper
 - important Readme !.txt -> วิธีการติดตั้ง 

 - eat1-3.sql -> Database MySQL สำหรับการ IMPORT โดยใช้ชื่อ database ว่า eat_1
 - index.php -> เว็บหน้าแรก
 - IT55_2562_Manual_แก้ไข.docx -> User manual พื้นฐานวิธีการใช้เว็บไซต์และติดตั้ง
 ------------------------------------------------------------------------------------------------------------------------

 เว็บไซต์ที่ได้ขึ้น Host -> https://eathereproject.com
 
 Reference
- https://earthchie.github.io/jquery.Thailand.js/
- https://github.com/maxpromer/PromptPay-QR-generator
